@extends('layouts.front')


@section('content')


    <!--Star Main variables *content*   row-flex-->
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <a href="#">
                    <div class="bloc-stat bloc-white clearfix">
                        <span class="bloc-icon text-gray"><i class="fa fa-2x fa-chart-bar"></i></span>
                        <div class="bloc-info text-right">
                            طلبات مكتملة<span class="counter">2552392</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <div class="bloc-stat bloc-white clearfix">
                    <span class="bloc-icon text-blue"><i class="fa fa-2x fa-credit-card"></i></span>
                    <div class="bloc-info text-right">
                        أنفقت معنا<span >0.0000000</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="/addfunds">
                    <div class="bloc-stat bloc-white clearfix">
                        <span class="bloc-icon text-green"><i class="fa fa-2x fa-shopping-cart"></i></span>
                        <div class="bloc-info text-right">
                            رصيدك الحالي<span>$0.00</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <div class="bloc-stat bloc-white clearfix">
                    <span class="bloc-icon text-orange"><i class="fa fa-2x fa-user"></i></span>
                    <div class="bloc-info text-right">
                        <a class="info-icon" data-toggle="modal" data-target="#userInfoModal"><i class="fa fa-info-circle"></i></a>مستوى الحساب<span>جديد </span>
                    </div>
                </div>
            </div>
        </div>
        <!--End  Main variables *content*  row-flex-->
        <div class="row ">
            <x-alert name="success"></x-alert>
            <x-alert name="error"></x-alert>
            <x-success-order></x-success-order>
            <div class="col-md-12">
                <div class="well">
                    <form  class="rtl-form"id="order-form" method="post" action="{{route('orders.store')}}">
                        @csrf
                        <x-general-input :categories="$categories" old="{{old('order.category',1)}}"></x-general-input>
                        <div id="dynamic">
                           <x-dynamic-component id="dynamic-comp" component="{{old('type','Empty')}}" min="{{old('min',0)}}" max="{{old('max',0)}}" old="{{old('order.service')}}" />

                       </div>
                        <input type="hidden" name="type" id="service_type">
                        <input type="hidden" name="min" id="service_min">
                        <input type="hidden" name="max" id="service_max">
                        <div class="form-group" id="div-charge">
                            <label for="charge" class="control-label">السعر النهائي</label>
                            <input type="string" name="order[price]" class="form-control" id="charge" value="0" readonly >
                        </div>
                        <input type="hidden" name="serivce-type">
                        <button type="submit" class="btn btn-success btn-login " id="form-submit">إرسال</button>
{{--                        <div class="form-group" style="margin-top:20px">--}}
{{--                            <label for="service_description" class="control-label">معلومات عن الخدمة</label>--}}
{{--                            <div class="panel-body border-solid border-rounded description">--}}
{{--                                <span>اطلب الآن اي تصميم تريده</span>--}}
{{--                                <br>--}}
{{--                                <span>مميزات الخدمة :</span>--}}
{{--                                <br>--}}
{{--                                <span>1- يمكنني التعديل على التصميم حتى يلقى اعجابك ورضاك</span>--}}
{{--                                <br>--}}
{{--                                <span>2- أحصل على التصميم بدقة عالية جداً Jpg أو Png</span>--}}
{{--                                <br>--}}
{{--                                <span>3- سرعة التنفيذ خلال ساعات التواجد يتم تسليمك التصميم بشكل فوري</span>--}}
{{--                                <br>--}}
{{--                                <span>4- يمكنك الحصول على ملف مفتوح Psd ( راجع التطويرات )</span>--}}
{{--                                <br>--}}
{{--                                <span>لتصميم أكثر من صورة يرجى تحديد عدد مرات طلب هذه الخدمة بعدد الصور المراد تنفيذها قبل الشراء أو راجع التطويرات</span>--}}
{{--                                <br>--}}
{{--                                <span>قم بمراسلتي قبل طلب الخدمة</span>--}}
{{--                                <br>--}}
{{--                                <span>يرجى ارفاق المعلومات الكافية ومعها شعار لوضعه على الصورة بعد طلبك للخدمة</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="well  rtl-content ">
                    <h3><b>برنامج التسويق مقابل العمولة</b></h3>
                    <div class="featureTitle">
                        <ul>
                            <li >فقط كل ما عليك&nbsp;فعله هو نسخ رابط الإحالة الخاص بك والبدء بنشر مواضيع تتكلم عن خدماتنا.</li>
                            <li >مثلاً فيديو على يوتيوب يوضح طريقة إستخدام الموقع أو مقال على موقعك أو حسابك الشخصي على مواقع التواصل الإجتماعي مع وضع رابط الاحالة الخاص بك.</li>
                            <li>أي شخص يقوم بتسجيل عضوية ويشحن حسابه في الموقع عبر رابط الإحالة الخاص بك ستحصل على عمولة ويمكنك &gt; إنفاقه داخل الموقع او حتى تسحبه الى بطاقة الفيزا او باي بال او حسابك البنكي.</li>
                            <li >الرابط الخاص بك <a ><a href="#">اضغط هنا</a></a></li>
                        </ul>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe frameborder="0" src="//www.youtube.com/embed/5SM_VX2bPKw" width="640" height="360" class="note-video-clip embed-responsive-item"></iframe>
                    </div>
                    <p>
                        <img src="https://cdn.mypanel.link/9e34a3/wjpqc6ii5f3fskre.gif" style="display: inline-block; width: 696px; max-width: 100%;" class="img-responsive">
                    </p>
                    <p>
                        <b style="-webkit-tap-highlight-color: transparent; text-size-adjust: 100%;">- هام قبل عمل أي طلب جديد</b>
                        <br>
                    </p>
                    <ul>
                        <li>إقرأ معلومات الخدمة قبل الطلب.</li>
                        <li>جميع الحسابات يجب أن تكون عامة وليست خاصة.</li>
                        <li>لا يمكن إلغاء أي طلب بعد إرساله، إنتبه جيداً قبل عمل طلب جديد.</li>
                        <li>يجب عليك قراءة صفحة قائمة الخدمات وشرح كل خدمة قبل عمل&nbsp; طلب جديد.</li>
                        <li>لا تقم بإرسال طلبين لنفس الحساب من نفس نوع الخدمة، إنتظر حتى ينتهي الطلب الأول.</li>
                        <li>عمل طلب جديد يعني أنك قرأت جيداً ووافقت على جميع شروط الموقع وسياسة الإسترجاع.</li>
                    </ul>
                    <hr>
                    <p ><strong><span class="" lang="ar"><span class="">- لم تجد الخدمة المطلوبة؟</span>
            </span>
                        </strong></p>
                    <ul >
                        <li>إذا لم تجد الخدمة التي تريدها برجاء فتح تذكره وسنقوم بتوفيرها فوراً.</li>
                        <li>يمكنك فتح تذكره جديدة من <a href="#">هنا</a>.<br></li>
                    </ul>
                    <hr>
                    <p>
                        <strong><span class="" lang="ar"><span class="">- نظام التسويق بالعمولة</span></span></strong>
                        <strong><span class="" lang="ar"></span></strong>
                    </p>
                    <ul>
                        <li>تم إطلاق برنامج التسويق بالعمولة.</li>
                        <li>يمكنك جني الأرباح عبر نظام التسويق بالعمولة، <a href="#">إضغط هنا</a>.</li>
                    </ul>
                </div>
            </div>
        </div>

        <section>
            <div class="row  row-flex">
                <div class="col-md-12">
                    <div class="well rtl-content rtl-table">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>الوصف</th>
                                    <th class="text-center">جديد</th>
                                    <th class="text-center">برونز</th>
                                    <th class="text-center">سيلفر</th>
                                    <th class="text-center">ذهبي</th>
                                    <th class="text-center">سوبر</th>
                                    <th class="text-center">ماستر</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>دعم التذاكر 24/7</td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                <tr>
                                    <td>رصيد إضافي 5% </td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                <tr>
                                    <td>500 يانصيب شهري لـ 5 مستخدمين عشوائيين</td>
                                    <td></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                <tr>
                                    <td>وسائل دفع متعددة،آبل باي،قوقل باي،سامسونج باي</td>
                                    <td></td>
                                    <td></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                <tr>
                                    <td>لوحة المسوقين مجانا طول العمر</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                <tr>
                                    <td>5-40٪ خصم متاح</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                <tr>
                                    <td>دعم التذاكر ذات الأولوية من قبل الفريق</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                <tr>
                                    <td>تخفيضات خاصة وحصرية على بعض الخدمات المطلوبة بشكل مستمر</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                <tr>
                                    <td>الخدمات الخاصه المخفية</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><i class="fa fa-check" style="color:#4fcca6"></i></td>
                                </tr>
                                </tbody>
                            </table>

                            <p>- <strong>جديد</strong> | لقد أنفقت أقل من 100$</p>
                            <p>- <strong>برونز</strong> | لقد أنفقت أكثر من 100$</p>
                            <p>- <strong>سيلفر</strong> | لقد أنفقت أكثر من 1000$</p>
                            <p>- <strong>ذهبي</strong> | لقد أنفقت أكثر من 2000$</p>
                            <p>- <strong>سوبر</strong> | لقد أنفقت أكثر من 10000$</p>
                            <p>- <strong>ماستر</strong> | لقد أنفقت أكثر من 20000$</p>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        let category=document.getElementById('orderForm-category');
        let services=document.getElementById('orderForm-service');
        let dataQun=[];
          category.addEventListener('change',function (e){
              document.getElementById('div-charge').setAttribute('class','form-group');

              let text=this.value;
                  $.ajax({
                      type: 'get',
                      url: "{{route('service.category')}}",
                      data:{
                          '_token':"{{csrf_token()}}",
                          'category':text,
                      },


                      success: function(data) {
                          if (data.status == 200) {


                              let htmlTags = '<option value=""></option>';
                              for (const [key, $service] of Object.entries(data.services)) {
                                  htmlTags += `<option  value="${$service.id}"  onclick="changeForm('aa')">${$service.name} --${$service.rate}$ - </option>`;

                              }

                              document.getElementById('orderForm-service').innerHTML = htmlTags;
                              document.getElementById('dynamic').innerText='';
                              let charge=document.getElementById('charge');

                              charge.value=''

                          }
                      }
                  });


          });

          document.getElementById('orderForm-service').addEventListener('change',function (){
               let id=this.value;
            async function d(){
           await     $.ajax({
                    type: 'get',
                    url: "{{route('service.get')}}",
                    data:{
                        '_token':"{{csrf_token()}}",
                        'id':id
                    },


                    success: function(data) {
                        if (data.status == 200) {

                            let charge=document.getElementById('charge');

                            $comp=document.getElementsByTagName('x-dynamic-component')[0];
                            // $comp.setAttribute('component','default')
                            node=document.createElement('x-dynamic-component');

                            node.setAttribute('component','default');

                            const $type=data.type;
                            let $arr= {
                                'min': data.service.min,
                                'max':data.service.max,
                                'type':data.service.type
                            };
                            dataQun=$arr;
                            document.getElementById('service_min').setAttribute('value',$arr.min);
                            document.getElementById('service_max').setAttribute('value',$arr.max);


                            if ($type=='Default') {
                                document.getElementById('service_type').setAttribute('value','default');
                                if ($arr['min']==$arr['max'])
                                    document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="default2" min="${$arr.min}" max="${$arr.max}" />`
                                else
                                    document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="default" min="${$arr.min}" max="${$arr.max}" />`
                                document.getElementById('div-charge').setAttribute('class','form-group');

                            }else if ($type=='Package'){

                                charge.value=data.service.rate;
                            }
                            else if ($type=='Custom Comments'||$type=='Custom Comments Package') {
                                document.getElementById('service_type').setAttribute('value','custome');

                                if ($type=='Custom Comments' ){

                                    document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="custome"  min="${$arr.min}" max="${$arr.max}" />`;
                                    document.getElementById('div-charge').setAttribute('class','form-group');

                                    let comments=document.getElementById('comments');
                                    comments.style.whiteSpace = "pre-wrap";

                                    let qun=document.getElementById('quantity')
                                    comments.addEventListener('keyup',function (e){
                                        console.log((countLine(comments.value)))
                                        if (e.which==46){
                                            alert('sss');
                                        }
                                        // if(e.which === 13 && !e.shiftKey) {
                                        if(chuckLastElementInTextNotEmpty(comments.value)) {
                                            if ((countLine(comments.value) <= 100))
                                                charge.value = countLine(comments.value) * (data.service.rate / (data.service.max * 10));
                                            else
                                                charge.value = data.service.rate;
                                            qun.value = countLine(comments.value);
                                            // }
                                        }

                                    });

                                }else{

                                    document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="custome-package"   />`;
                                    document.getElementById('div-charge').setAttribute('class','form-group');

                                    let charge=document.getElementById('charge');

                                    charge.value=data.service.rate

                                }
                            } else if ($type=='Mentions Custom List') {
                                document.getElementById('service_type').setAttribute('value','mentions');

                                document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="mentions" min="${$arr.min}" max="${$arr.max}"  />`;
                                document.getElementById('div-charge').setAttribute('class','form-group');

                                let comments=document.getElementById('comments');
                                // comments.style.whiteSpace = "pre-wrap";

                                let qun=document.getElementById('quantity')
                                comments.addEventListener('keyup',function (e){
                                    console.log((countLine(comments.value)))

                                    // if(e.which === 13 && !e.shiftKey) {
                                    if(chuckLastElementInTextNotEmpty(comments.value)) {
                                        if ((countLine(comments.value) <= 100))
                                            charge.value = countLine(comments.value) * (data.service.rate / (1000));
                                        else
                                            charge.value = data.service.rate;
                                        qun.value = countLine(comments.value);
                                        // }
                                    }

                                });


                            }else if ($type=='Mentions User Followers'||$type=='Mentions User Followers') {
                                document.getElementById('service_type').setAttribute('value','mentions2');
                                document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="mentions2"  min="${$arr.min}" max="${$arr.max}"  />`;
                                document.getElementById('div-charge').setAttribute('class','form-group');
                                let charge=document.getElementById('charge');
                                charge.value=data.service.rate;
                            }else if ($type=='Comment Likes') {
                                document.getElementById('service_type').setAttribute('value','comment-likes');
                                document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="comment-likes" min="${$arr.min}" max="${$arr.max}" />`;
                                document.getElementById('div-charge').setAttribute('class','form-group');

                                let charge=document.getElementById('charge');

                                charge.value=data.service.rate
                            }else if ($type=='Poll') {
                                document.getElementById('service_type').setAttribute('value','poll');
                                document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="poll" min="${$arr.min}" max="${$arr.max}" />`;
                                document.getElementById('div-charge').setAttribute('class','form-group');

                                let qun = document.getElementById('quantity')

                                qun.addEventListener('keyup', function (e) {
                                    console.log(this.value);
                                    charge.value = (this.value / 1000) * data.service.rate;
                                });
                            }else if ($type=='Comment Replies') {
                                document.getElementById('service_type').setAttribute('value','comment-replies');

                                document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="comment-replies" min="${$arr.min}" max="${$arr.max}" />`;
                                document.getElementById('div-charge').setAttribute('class','form-group');

                                let comments=document.getElementById('comments');
                                comments.style.whiteSpace = "pre-wrap";

                                let qun=document.getElementById('quantity')
                                comments.addEventListener('keyup',function (e){
                                    console.log((countLine(comments.value)))
                                    // if(e.which === 13 && !e.shiftKey) {
                                    if(chuckLastElementInTextNotEmpty(comments.value)) {
                                        if ((countLine(comments.value) <= 100))
                                            charge.value = countLine(comments.value) * (data.service.rate / (data.service.max * 10));
                                        else
                                            charge.value = data.service.rate;
                                        qun.value = countLine(comments.value);
                                        // }
                                    }

                                });


                            }else if ($type=='Subscriptions') {
                                document.getElementById('service_type').setAttribute('value','subscriptions');
                                document.getElementById('dynamic').innerHTML = `<x-dynamic-component id="dynamic-comp" component="subscriptions" min="${$arr.min}" max="${$arr.max}" />`;
                                document.getElementById('div-charge').setAttribute('class','form-group hidden');
                                document.getElementById('group-link').remove()
                            }
                            let checkbox=document.getElementById("checkbox-interval-order");
                            if (checkbox) {
                                let charge = document.getElementById('charge');
                                let runs=document.getElementById('field-orderform-fields-run');
                                let   totalQun=document.getElementById('field-orderform-totalQun')
                                checkbox.addEventListener('click', function (e) {
                                    let qun = document.getElementById('quantity')
                                    const div_interval_order = document.getElementById('div-interval-order')
                                    this.value= this.value==1?0:1;
                                    if (this.value == 1) {
                                        div_interval_order.classList.remove('hidden')
                                        document.getElementById('field-orderform-fields-run').addEventListener('keyup', function () {
                                            console.log(this.value);
                                            let totalQun = document.getElementById('field-orderform-totalQun');
                                            totalQun.value = (this.value * qun.value);
                                            charge.value = (totalQun.value / 1000) * data.service.rate;

                                        });
                                    } else {
                                        div_interval_order.classList.add('hidden');
                                        runs.value=null;
                                        totalQun.value=null;
                                        charge.value=(qun.value/1000)*data.service.rate;
                                    }
                                });
                            }
                            let qun = document.getElementById('quantity')

                            if (qun) {

                            qun.addEventListener('keyup', function (e) {
                                console.log(this.value);
                                charge.value = (this.value / 1000) * data.service.rate;
                                let totalQun = document.getElementById('field-orderform-totalQun');
                                let runs = document.getElementById('field-orderform-fields-run');
                                  if (runs)
                                if (runs.value > 0) {
                                    totalQun.value = runs.value * qun.value;
                                    charge.value = (totalQun.value / 1000) * data.service.rate;

                                }
                            });
                        }


                        }

                        //
                        // let checkbox=document.getElementById("checkbox-interval-order");
                        // checkbox.addEventListener('click',function (e){
                        //     const div_interval_order=document.getElementById('div-interval-order')
                        //     if (this.value==1) {
                        //         div_interval_order.classList.remove('hidden')
                        //     }else {
                        //
                        //         div_interval_order.classList.add('hidden');
                        //     }
                        // });

                    }
                });
            }
 d();
          });

        function countLine(test){
            lines = test.split('\n');
            lines=lines.filter(e=>e);
            return lines.length;
        }
        function chuckLastElementInTextNotEmpty(test){
            lines = test.split('\n');
            return lines[lines.length-1]!='';
        }

        let submit=document.getElementById('form-submit');
        submit.addEventListener('click',function (e){
            // e.preventDefault()
            let category=document.getElementById('orderForm-category');
            let service=document.getElementById('orderForm-service');
            let link=document.getElementById('orderform-link');
            let qun=document.getElementById('quantity');
            let username=document.getElementById('field-orderform-username');
            let comment=document.getElementById('comments');
            let run=document.getElementById('field-orderform-fields-run');
            let interval=document.getElementById('field-orderform-fields-interval');
            let total=document.getElementById('field-orderform-totalQun');
            let numVote=document.getElementById('field-orderform-number-vote');
            let posts=document.getElementById('field-orderform-posts');
            let min=document.getElementById('field-orderform-min');
            let max=document.getElementById('field-orderform-max');
            let dealy=document.getElementById('field-orderform-fields-delay');
            let expiry=document.getElementById('expiry');
            document.getElementById('alert-category').innerText='';
            document.getElementById('alert-serivce').innerText='';
            if (document.getElementById('alert-link'))
            document.getElementById('alert-link').innerText='';
            // document.getElementById('alert-comment').innerText='';
            // document.getElementById('alert-interval').innerText='';
            // document.getElementById('alert-run').innerText='';
            // document.getElementById('alert-numVote').innerText='';
            // document.getElementById('alert-posts').innerText='';
            // document.getElementById('alert-min').innerText='';
            // document.getElementById('alert-run').innerText='';
            // document.getElementById('alert-max').innerText='';
            // document.getElementById('alert-dealy').innerText='';
            // document.getElementById('alert-expiry').innerText='';


            if (category.value == ''){
                e.preventDefault();

                document.getElementById('alert-category').innerText='يجب اختيار قسم';
            }
            if (service.value == ''){
                e.preventDefault();

                document.getElementById('alert-serivce').innerText='يجب اختيار الخدمة';
            }
              if (document.getElementById('alert-link')) {
                  if (link.value == '') {
                      e.preventDefault();

                      document.getElementById('alert-link').innerText = 'يجب ادخال الرابط';
                  } else {
                      var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
                          '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
                          '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
                          '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
                          '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
                          '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator

                      if (!pattern.test(link.value)) {
                          e.preventDefault();
                          document.getElementById('alert-link').innerText = 'يجب ان يكون رابط'
                      }

                  }
              }
             if (service.value !='') {
                 let id=service.value
                 async function asyncCall() {
                     console.log('calling');

                      await resolveAfter2Seconds(id);

                     console.log('result');

                     // expected output: "resolved"
                 }

               asyncCall();
                 if (qun) {
                     document.getElementById('alert-qun').innerText = ''
                     alert(qun.value);
                     if (qun.value == '') {

                         e.preventDefault();
                         document.getElementById('alert-qun').innerText = 'الكمية مطلوبة'
                     } else {
                         alert('ee');

                         if (qun) {
                             if (qun.value < dataQun['min']) {

                                 e.preventDefault();
                                 document.getElementById('alert-qun').innerText = 'يجب ان تكون الكمية اكبر من ' + dataQun['min']
                             }
                             if (qun.value > dataQun['max']) {
                                 e.preventDefault();
                                 document.getElementById('alert-qun').innerText = 'يجب ان تكون الكمية اقل من ' + dataQun['max']
                             }
                         }
                     }}
                         // alert('sssssssssss');
                         alert(dataQun['type'])

                         setTimeout(function () {
                             if (dataQun['type'] == 'Default') {

                                 let checkbox = document.getElementById('checkbox-interval-order');


                             } else if (dataQun['type'] == 'Mentions User Followers') {
                                 document.getElementById('alert-username').innerText = '';
                                 username=document.getElementById('field-orderform-fields-username')
                                 if (username.value == '' || username.value == null) {
                                     document.getElementById('alert-username').innerText = 'اسم المستخد مطلوب'

                                 }
                             } else if (dataQun['type'] == 'Custom Comments Package') {
                                 let comments = document.getElementById('comments').value;
                                 alert(comments.split(' ').join('') == '')
                                 if (comments.split(' ').join('') == '') {
                                     alert('aaaaaaaaa');
                                     document.getElementById('alert-comments').innerText = 'يجب ادخال تعليقات'

                                 }
                             }else if (dataQun['type']=='Poll'){
                                 alert_num_vote=document.getElementById('alert-num_vote')
                                 alert_num_vote.innerText='';
                                 let num=document.getElementById('field-orderform-number-vote');
                                 if (num.value==0||num.value==null)
                                     alert_num_vote.innerText='يجب ادخال رقم تصويت';
                             }else if (dataQun['type']=='Subscriptions'){
                                 document.getElementById('alert-username').innerText = ''
                                 document.getElementById('alert-qun').innerText = ''

                                 username=document.getElementById('field-orderform-fields-username')

                                 if (username.value == '' || username.value == null) {
                                     document.getElementById('alert-username').innerText = 'اسم المستخدم مطلوب'

                                 }
                                 let max=document.getElementById('field-orderform-max').value;
                                 let min=document.getElementById('field-orderform-min').value;
                            // if (min !=null ||min!='')
                            //      if (min < dataQun['min']) {
                            //          e.preventDefault();
                            //          document.getElementById('alert-qun').innerText = 'يجب ان تكون اقل الكمية اكبر من ' + dataQun['min']
                            //      }
                            //      if (max !=null ||max!='')
                            //      if (max > dataQun['max']) {
                            //          e.preventDefault();
                            //          document.getElementById('alert-qun').innerText = 'يجب ان تكون اقصى الكمية اقل من ' + dataQun['max']
                            //      }
                            //      if (min > max ) {
                            //          e.preventDefault()
                            //          document.getElementById('alert-qun').innerText = 'يجب ان لايكون اقل كمية اكبر من اقصى كمية'
                            //      }

                             }

                         }, 500);




             }



        });


{{--        @if(old('order.category'))--}}
{{--            document.getElementById('div-charge').setAttribute('class','form-group');--}}

{{--            let text=category.value;--}}
{{--            $.ajax({--}}
{{--                type: 'get',--}}
{{--                url: "{{route('service.category')}}",--}}
{{--                data:{--}}
{{--                    '_token':"{{csrf_token()}}",--}}
{{--                    'category':text,--}}
{{--                },--}}


{{--                success: function(data) {--}}
{{--                    if (data.status == 200) {--}}

{{--                        let service_id={{old('order.service')}};--}}
{{--                        let htmlTags = '<option value=""></option>';--}}
{{--                        for (const [key, $service] of Object.entries(data.services)) {--}}
{{--                            htmlTags += `<option  value="${$service.id}" ${$service.id==service_id?'selected':''} >${$service.name} --${$service.rate}$ - </option>`;--}}

{{--                        }--}}

{{--                        document.getElementById('orderForm-service').innerHTML = htmlTags;--}}


{{--                    }--}}
{{--                }--}}
{{--            });--}}


{{--        @endif--}}
async function postData(url = '', data = {},method,id) {
    // Default options are marked with *
    const response = await fetch(url, {
        method: method, // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
            'Content-Type': 'application/json',
            // 'Content-Type': 'application/x-www-form-urlencoded',
            'id':id,
            'Accept':'application/json'
        },
        // redirect: 'follow', // manual, *follow, error
        // referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    });
    return response.json(); // parses JSON response into native JavaScript objects
}
      async  function resolveAfter2Seconds(id) {
       return     await
                postData(`{{route('service.get')}}`, { },'GET',id)
                    .then(data => {
                        console.log(data.type)
                        dataQun['type']=data.type
                        dataQun['min']=data.service.min;
                        dataQun['max']=data.service.max;
                        dataQun['a']='a';
                        // alert(data.service.type +'1');// JSON data parsed by `data.json()` call
                    }).catch(err=> console.log(err));

// setTimeout(function (){
//     console.log('fd');
// },2000);

        }



    </script>
@endsection
