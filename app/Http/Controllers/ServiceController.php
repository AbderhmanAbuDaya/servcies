<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\Drd3mService;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    protected $drd3mService;
    public function __construct(Drd3mService $drd3mService){
        $this->drd3mService=$drd3mService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Service::distinct('category')->pluck('category');
       $GLOBALS['result']=[];
       $categories->map(function ($category){
            $GLOBALS['result'][$category]=Service::where('category',$category)->get();

       });


       return view('services',[
           'categories'=>$categories,
           'results'=>$GLOBALS['result'],

       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    public function getServices(){

            $services= $this->drd3mService->service(['key'=>'6fa5f190e70a20c81d5e8b175f2e6304',
                'action'=>'services']);
        dd($services);
//        $ids=collect($services)->pluck('service');
//        $ids_in_servies=Service::select('id')->whereIn('id',$ids)->get()->pluck('id');
//        $ids=$ids->diff($ids_in_servies);
//        $services = collect($services)->filter(function ($item, $key) use ($ids) {
//            foreach ($ids as $id)
//                if ($item['service']==$id){
//                    return true;
//                }
//
//        });
//        Service::destroy(Service::all());

        $items=[];
        foreach ($services as $item):
            $items[]=[
                'id'=>$item['service'],
                'name'=>$item['name'],
                'category'=>$item['category'],
                'type'=>$item['type'],
                'rate'=>$item['rate'],
                'min'=>$item['min'],
                'max'=>$item['max'],
                'dripfeed'=>$item['dripfeed'],
                'refill'=>$item['refill'],
                'description'=>$item['description']??null
            ];
        endforeach;
//          $ids=collect($items)->pluck('category');
//         return  DB::table('services')->whereIn('id',$ids)->get();
        DB::table('services')->insert($items);
        return 'success';
    }

    public function addOrder(Request $request){

    }
    public function search(Request $request){
         $se=$request->se;
         if ($se!='') {
             $services = Service::where('name', 'LIKE', '%' . $se . '%')->get();
         }else{
             $categories=Service::distinct('category')->pluck('category');
             $GLOBALS['result']=[];
             $categories->map(function ($category){
                 $GLOBALS['result'][$category]=Service::where('category',$category)->get();

             });
             return response()->json([
                 'status'=>200,
                 'results'=>$GLOBALS['result']
             ]);
         }

        return response()->json([
            'status'=>200,
            'results'=>$services->count()!=0?$services:null
        ]);
    }

    public function servicesToCategory(Request $request){
         $services=Service::where('category',$request->category)->get();
         if (!$services)
             return response()->json([
                 'status'=>404,
                 'message'=>'no services'
             ]);
        return response()->json([
            'status'=>200,
            'services'=>$services
        ]);
    }

    public function getService(Request $request){
        $service=collect();
        if ($request->header('id'))
        $service=Service::find($request->header('id'));
        else
        $service=Service::find($request->id);

          return response()->json([
             'status'=>200,
             'type' =>$service->type,
              'service'=>$service

          ]);


    }
    public function getComponent($type){
        $result='';
        if ($type=='Default'||$type=='Package')
            $result='default';
        elseif ($type=='Custom Comments'||$type=='Custom Comments Package')
            $result='custome';
        elseif ($type=='Custom Comments'||$type=='Custom Comments Package')
            $result='custome';
        elseif ($type='Mentions Custom List')
            $result='mentions';
        elseif ($type='Mentions User Followers'||$type=='Mentions User Followers')
            $result='mentions2';
        elseif ($type='Comment Likes')
            $result='comment-likes';
        elseif ($type='Poll')
            $result='poll';
        elseif ($type='Comment Replies')
            $result='comment-replies';
        elseif ($type='Subscriptions')
            $result='subscriptions';

        return $result;


    }


}
