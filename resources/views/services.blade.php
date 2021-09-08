@extends('layouts.front')


@section('content')
    <div class="container">
        <div class="row">
            <div class="wrapper">
                <div class=" rtl-side-bar  side-bar hidden-xs">
                    <ul>
                        <li class="menu-head"><a href="/"> دكتور دعم </a><a href="#" class="push_menu"><span class="fa fa-fw fas fa-bars pull-right"></span></a>
                        </li>
                        <div class="menu">
                            <li><a  class="active"  href="#">طلب جديد<span class="fa fa-fw fas fa-plus pull-right"></span></a></li>
                            <li><a  href="#"> قائمة الخدمات<span class="fa fa-fw fas fa-star pull-right"></span></a></li>
                            <li><a  href="#">سجل الطلبات<span class="fa fa-fw fas fa-file-alt pull-right"></span></a></li>
                            <li><a  href="#">شحن الرصيد<span class="fa fa-fw fas fa-credit-card pull-right"></span></a></li>
                            <li><a  href="https://youtu.be/EWa5PukKbIs">شرح الموقع بالفيديو<span class="fa fa-fw fa fa-play pull-right"></span></a></li>
                            <li><a  href="#"> الدعم الفني<span class="fa fa-fw fas fa-plug pull-right"></span></a></li>
                            <li><a  href="#">الأسئلة الشائعة<span class="fa fa-fw fas fa-question-circle pull-right"></span></a></li>
                        </div>
                    </ul>
                </div>



                <div class="content  rtl-content ">
                    <!-- Main variables *content* -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well  rtl-content ">
      <span style="font-size: 16px; text-transform: uppercase;">
        <span style="font-weight: 700;">خدماتنا عالمية: زيادة&nbsp;</span>
      </span>
                                    <span>تيك توك، في كيه، لينكيد إن، فكونتاكتي تمبلر بنترست فيميو فاين قوقل بلس ديليموشن,&nbsp;</span>
                                    <span style="text-align: right;">ميكس كلاود,</span>
                                    <span>&nbsp;</span>
                                    <span style="text-align: right;">فليبجرام,</span>
                                    <span>&nbsp;</span>
                                    <span>كورا,</span>
                                    <span>&nbsp;كيوي، ديزر, تويتش, تويتر, انستقرام, فيسبوك , يوتيوب تايدل, شازم, سبريكر, لايف مي, أنغامي, بيريسكوب, تيليجرام, زوار، والمزيد!</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Start copy from here and replace -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well  rtl-content ">
                                    <div>
                                        <div style="position: relative;overflow: hidden;">
                                            <span class="search-icon  rtl-search-icon "><i class="fas fa-search"></i></span>
                                            <input type="text" class="form-control" style="padding-right:40px;padding-left:40px;" id="search" placeholder=" ابحث عن الخدمة هنا ...">
                                            <a href="#" class="input-icon  rtl-input-icon "><i class="fas fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="dropdown" style="margin-top:15px;">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="FilterServices" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            الذهاب إلى القسم<span class="caret" style="margin-right:5px;margin-left:5px;"></span>
                                        </button>
                                        <ul class="dropdown-menu  rtl-dropdown-menu " aria-labelledby="FilterServices">
                                             @foreach($categories as $category)
                                            <li><a href="" >{{$category}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="well well-float">
                                    <div class="table-responsive">
                                        <table id="serviceDetails" class="table table-bordered  rtl-table ">
                                            <thead>
                                            <tr>
                                                <th>رقم الخدمه</th>
                                                <th class="width-service-name">اسم الخدمة</th>
                                                <th class="nowrap">السعر لكل 1000</th>
                                                <th class="nowrap">أدنى كمية</th>
                                                <th class="nowrap">أقصى كمية</th>

                                                <th class="width-40">معلومات عن الخدمة</th>
                                            </tr>
                                            </thead>
                                            <tbody id="table-body">
                                            @foreach($results as $key=>$result)
                                            <tr id="cat119">
                                                <td class="category" colspan="7"><strong>{{$key}}</strong></td>
                                            </tr>
                                               @foreach($result as $serivce)
                                            <tr>
                                                <td>{{$serivce->id}}</td>
                                                <td>{{$serivce->name}}</td>
                                                <td><b>{{$serivce->rate}}</b></td>
                                                <td>{{$serivce->min}}</td>
                                                <td>{{$serivce->max}}</td>
                                                <td class="service-description">#</td>
                                            </tr>
                                               @endforeach
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer>
                            <div class=" rtl-content ">
                                <div class="" style="font-size: 12px;">
                                    موقع <a href="/" class="text-primary">دكتور عبود</a> © 2012–2020. جميع الحقوق محفوظة. <span><a href="#" class="text-primary">شروط الإستخدام</a> | <a href="#" class="text-primary">الأسئلة الشائعة</a> | <a href="#" class="text-primary">التعليمات</a> | <a href="#" class="text-primary">إتصل بنا</a> | <a href="#" class="text-primary">سياسة الإسترجاع</a></span></div>

                            </div>
                        </footer>
                    </div>
                </div>
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
           })

     </script>

@endsection
