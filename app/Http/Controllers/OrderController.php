<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\Setting;
use App\Services\Drd3mService;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * @var Drd3mService App\Serviecs\Drd3mService
     */

    protected $drd3mService;
    public function __construct(Drd3mService $drd3mService){
        $this->drd3mService=$drd3mService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Yaseen.
    public function index(Request $request)
    {
        $filter =  $request->status;
        $orderStatus = $this->getOrderStatus(1);
        $orders = User::findOrFail(1)->orders;

        foreach ($orders as $key => $value){
            $order1 = $orders[$key]['order_id'];
            $index = $key;
            foreach ($orderStatus as $key2 => $value2) {
                 if($order1 == $key2){
                    $orders[$index]->status = $orderStatus[$key2]['status'];
                 }
            }
        }

        if ($filter == "completed"){
            $orders = $orders->where('status','Completed');
        }else if($filter == "pending"){
            $orders = $orders->where('status','Pending');
        }else if($filter == "canceled"){
            $orders = $orders->where('status','Canceled');
        }else if($filter == "partial"){
            $orders = $orders->where('status','Partial');
        }else if($filter == "processing"){
            $orders = $orders->where('status','Processing');
        }else if($filter == "inprogress"){
            $orders = $orders->where('status','In progress');
        }

        return view('orders')->with([
            'orders'=>$orders
        ]);
    }

    // Yaseen.
    public function getOrderStatus($userId){

        $userOrders = User::findOrFail($userId)->orders;

        $OrdersIds  = $userOrders->pluck('order_id');
        $ids = '';
        foreach($OrdersIds as $item => $value){
            if($item == ($userOrders->count() - 1)){
                $ids .= $value;
            }else{
                $ids .= $value . ', ';
            }
        }

         if($ids != ''){
            $orderStatus = $this->drd3mService->service(['key'=>'6fa5f190e70a20c81d5e8b175f2e6304',
            'action'=>'status','orders'=>$ids]);
         }else{
            $orderStatus = null;
         }

         return $orderStatus;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Service::distinct('category')->pluck('category');
        return view('home',[
            'categories'=>$categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules=[
            'order.service'=>'required|numeric|exists:services,id',
        ];
        $service=Service::find($request->input('order.service'));
        $user=Auth::user();
        $percentage=Setting::where('key','percentage')->first()->value;
        if ($service->type != 'Subscriptions')
            $rules=[
                'order.link'=>'required|url',

            ];
        $dataRequest=[];
        $dataRequest=  $request->order;

        if ($service->type == 'Default') {
            $rules['order.quantity'] = ['required', 'numeric','min:' . $service->min, 'max:' . $service->max, ''];
            $rules['order.quantity2']=['required_with:order.runs,order.interval'];

            if (!empty($request->input('order.runs'))){
                $dataRequest['price']=$dataRequest['quantity2']*($service->rate/1000);
                $dataRequest['myPrice']=$dataRequest['price']+$dataRequest['price']*$percentage;
//                $request->merge(['order.ss'=>9]);
            }else{
                $dataRequest['price']=$dataRequest['quantity']*($service->rate/1000);
                $dataRequest['myPrice']=$dataRequest['price']+($dataRequest['price']*$percentage);
            }

        } else if ($service->type == 'Package' || $service->type == 'Custom Comments Package'){
            $dataRequest['price']=$service->rate;
            $dataRequest['myPrice']=$service->rate + ($service->rate *$percentage);


        } else if($service->type == 'Custom Comments'){
            $rules['order.quantity'] = ['required', 'numeric','min:' . $service->min, 'max:' . $service->max, ''];
            $dataRequest['price']=$dataRequest['quantity']*($service->rate/1000);
            $dataRequest['myPrice']=$dataRequest['price']+($dataRequest['price']*$percentage);
        }else if($service->type == 'Poll'){
            $rules['order.quantity'] = ['required', 'numeric','min:' . $service->min, 'max:' . $service->max, ''];
            $dataRequest['price']=$dataRequest['quantity']*($service->rate/1000);
            $dataRequest['myPrice']=$dataRequest['price']+($dataRequest['price']*$percentage);
            $rules['order.answer_number']=['required','numeric'];
        }
        else if($service->type == 'Comment Replies'){
            $rules['order.quantity'] = ['required', 'numeric','min:' . $service->min, 'max:' . $service->max, ''];
            $dataRequest['price']=$dataRequest['quantity']*($service->rate/1000);
            $dataRequest['myPrice']=$dataRequest['price']+($dataRequest['price']*$percentage);
        }else if($service->type == 'Subscriptions'){
            $rules['order.min'] = ['required', 'numeric','min:' . $service->min, 'max:' . $service->max,'greater_than_field:'.$request->min.','.$request->max];
            $rules['order.max'] = ['required', 'numeric','min:' . $service->min, 'max:' . $service->max];
            return 'a';
//        $dataRequest['price']=$dataRequest['quantity']*($service->rate/1000);
        }else if($service->type == 'Mentions' || $service->type == 'Mentions Custom List' ||$service->type == 'Mentions User Followers'||$service->type == 'Comment Likes'){
            $dataRequest['price']=$dataRequest['quantity']*($service->rate/1000);
            $dataRequest['myPrice']=$dataRequest['price']+($dataRequest['price']*$percentage);
        }

//        return $dataRequest;
        $validator=Validator::make($request->all(),$rules);

        if ($validator->fails()){
//            return  $validator->errors();
//            $service=Service::where('category',$service->category)->get();
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($user->wallet < $dataRequest['myPrice'])
            return redirect()->back()->with(['error'=>'رصيدك غير كافي']);
        $pass=[
            'key'=>'6fa5f190e70a20c81d5e8b175f2e6304',
            'action'=>'add',
        ];

//return $dataRequest;
        foreach ($dataRequest as $key=>$value){
            if ( !is_null($dataRequest[$key]))
                $pass[$key]=$value;
        }


//        return $pass;

        $order_id= $this->drd3mService->service($pass);
        if (array_key_exists('error',$order_id)){
            if ($order_id['error']=='Not enough funds on balance')
                return redirect()->back()->with(['error'=>'راجع المدير الفني وقدم طلبك ']);
            else if ($order_id['error']=='You have active order with this link. Please wait until order being completed.')
                return redirect()->back()->with(['error'=>'لديك طلب نشط مع هذا الرابط. يرجى الانتظار حتى يتم الانتهاء من الطلب. ']);

            return redirect()->back()->with(['error'=>$order_id['error']]);

        }
        try {
            DB::beginTransaction();
            $user->wallet = $user->wallet - $pass['myPrice'];
            $user->save();
            $order = Order::create([
                'user_id' => 1,
                'order_id' => $order_id['order'],
                'service_id' => $pass['service'],
                'link' => $pass['link'],
                'quantity' => $pass['quantity'],
                'runs' => $pass['runs'] ?? 0,
                'interval' => $pass['interval'] ?? 0,
                'charge' => $pass['price'],
                'currency' => 'USD',
                'my_charge' => $pass['myPrice']
            ]);
            DB::commit();

            $responce = [
                'message' => 'تم ارسال طلبك بنجاح',
                'order' => $order_id['order'],
                'service' => $service->name,
                'price'=>$pass['myPrice'],
                'link'=>$pass['link']??'#',
                'qun'=>$pass['quantity']??'~'
            ];
            return redirect()->back()->with(['type_component' => 'Default','successOrder'=>$responce]);
        }catch (\Exception$ex){
            DB::rollBack();
            return redirect()->back()->with(['error'=>'حدث خطا ما حاول مرة اخرى']);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function orderStatus(Request $request){
        // User ID
        $user_id = Auth()->user()->id;


        // $userOrders = Auth()->user()->order;
        $userOrders = User::findOrFail(1)->orders->pluck('order_id');


        $ids = '';
        foreach($userOrders as $item => $value){
            if($item == ($userOrders->count() - 1)){
                $ids .= $value;
            }else{
                $ids .= $value . ', ';
            }
        }
        // foreach( $userOrders as $order ){

        // }

        // $order = Order::findOrFail(2);
        // $owner = $order->user->name;
        // dd($owner);

        //pluck('user_id');

    //     $string = implode(',', $request->email);
    // echo $string;



        // dd(Auth()->user()->id);
        $orderStatus= $this->drd3mService->service(['key'=>'6fa5f190e70a20c81d5e8b175f2e6304',
        'action'=>'status','orders'=>$ids]);

        dd($orderStatus);


        // foreach($orderStatus as $item){
        //     dd($item['status']);
        // }
    }
}
