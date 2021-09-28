@extends('layouts.front')


@section('content')
                     <div class="row">
                        <div class="wrapper">
                            <div class="content  rtl-content ">
                                <!-- Main variables *content* -->
                                <div class="container-fluid">
                                    <div class="row  row-flex ">
                                        <div class="col-md-12">
                                            <ul class="nav nav-pills nav-justified  rtl-nav ">
                                                <li class="all "><a href="{{route('order.status')}}">الجميع</a></li>
                                                <li class="pending "><a href="{{route('order.status',['status' => 'pending'])}}">في الإنتظار</a></li>
                                                <li class="inprogress"><a href="{{route('order.status',['status' => 'inprogress'])}}">في التنفيذ</a></li>
                                                <li class="completed ""><a href="{{route('order.status',['status' => 'completed'])}}">مكتمل</a></li>
                                                <li class="partial "><a href="{{route('order.status',['status' => 'partial'])}}">مكتمل جزئي</a></li>
                                                <li class="processing "><a href="{{route('order.status',['status' => 'processing'])}}">في المعالجة</a></li>
                                                <li class="canceled "><a href="{{route('order.status',['status' => 'canceled'])}}">ملغي</a></li>
                                            </ul>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <div class="pull-right search  rtl-form ">
                                                <form method="" id="history-search">
                                                    <div class="input-group">
                                                        <input type="text" name="search" class="form-control" value="" placeholder="Search">
                                                        <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="well well-float">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered  rtl-table ">
                                                        <thead>
                                                        <tr>
                                                            <th>رقم الطلب</th>
                                                            <th>التاريخ</th>
                                                            <th class="width-40">الرابط</th>
                                                            <th>السعر</th>
                                                            <th class="nowrap">عداد البدأ</th>
                                                            <th>الكمية</th>
                                                            <th>إسم الخدمة</th>
                                                            <th>الحالة</th>
                                                            <th>العدد المتبقي</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (isset($orders) && $orders->count() > 0)
                                                                @foreach ($orders as $order)
                                                                    <tr>
                                                                        <td> {{$order->order_id}} </td>
                                                                        <td> {{$order->created_at}} </td>
                                                                        <td> {{$order->link}} </td>
                                                                        <td> {{$order->charge}} </td>
                                                                        <td> ## </td>
                                                                        <td> {{$order->quantity}} </td>
                                                                        <td> {{$order->service->name}} </td>
                                                                        <td> {{$order->status}} </td>
                                                                        <td> ## </td>
                                                                    </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>

                                                                       <td colspan="9" style="padding: 40px; font-size: 22px"> لا يوجد طلبات </td>
                                                                    
                                                                </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                {{-- <footer>
                                    <div class=" rtl-content ">
                                        <div class="" style="font-size: 12px;">
                                            موقع <a href="/" class="text-primary">دكتور عبود</a> © 2012–2020. جميع الحقوق محفوظة. <span><a href="/terms" class="text-primary">شروط الإستخدام</a> | <a href="#" class="text-primary">الأسئلة الشائعة</a> | <a href="#" class="text-primary">التعليمات</a> | <a href="#" class="text-primary">إتصل بنا</a> | <a href="#" class="text-primary">سياسة الإسترجاع</a></span></div>

                                    </div>
                                </footer> --}}
                            </div>

@endsection

@section('scripts')

     <script>

        let search=document.getElementById('search');
           search.addEventListener('keyup',function (e){
               document.getElementById('table-body').innerHTML='';
               let text=this.value;
               $.ajax({
                   type: 'post',
                   url: "{{route('service.search')}}",
                   data:{
                       '_token':"{{csrf_token()}}",
                       'se':text,
                   },

                   success: function(data) {
                       if (data.status==200){
                           let htmlTags='';
                           if (text==''){
                               console.log(data.results);
                               for (const [key, result] of Object.entries(data.results)) {


                                   htmlTags+=`<tr id="cat119">
                                   <td class="category" colspan="7"><strong>${key}</strong></td>
                               </tr>`;
                                   for (const [key, $service] of Object.entries(result)) {

                                           htmlTags+=`<tr>
                                   <td>${$service.id}</td>
                                   <td>${$service.name}</td>
                                   <td><b>${$service.rate}</b></td>
                                   <td>${$service.min}</td>
                                   <td>${$service.max}</td>
                                   <td class="service-description">#</td>
                               </tr>`
                                       }

                                   }
                           }else {
                               if (data.results == null)
                                   htmlTags = `<p>
لايوجد نتائج
                                        </p>`;
                               else
                                   for (const [key, serivce] of Object.entries(data.results)) {

                                       htmlTags += `<tr>
                                   <td>${serivce.id}</td>
                                   <td>${serivce.name}</td>
                                   <td><b>${serivce.rate}</b></td>
                                   <td>${serivce.min}</td>
                                   <td>${serivce.max}</td>
                                   <td class="service-description">#</td>
                               </tr>`;

                                   }
                           }
                           document.getElementById('table-body').innerHTML=htmlTags;

                       }
                   }

               });
           });


     </script>


@endsection
