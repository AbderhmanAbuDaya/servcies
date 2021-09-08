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
            <div class="col-md-12">
                <div class="well">
                    <form  class="rtl-form"id="order-form">
                        <div class="form-group">
                            <label for="orderform-category" class="control-label">القسم</label>
                            <select class="form-control" id="orderform-category" name="OrderForm[category]">
                                <option value="119"  selected > التسويق الاكتروني</option>
                                <option value="29" > الأرخص مبيعا </option>
                                <option value="54" > متابعين تيك توك</option>
                                <option value="76" > لايكات تيك توك</option>
                                <option value="165" >   تيك توك بكج من الاعلانات</option>
                                <option value="77" > مشاهدات تيك توك</option>
                                <option value="130" > مشاهدات تيك توك بث مباشر</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="service" class="control-label">الخدمة</label>
                            <select id="orderform-service" class="form-control" id="service" name="OrderForm[service]">
                                <option value="119"  selected > التسويق الاكتروني</option>
                                <option value="29" > الأرخص مبيعا </option>
                                <option value="54" > متابعين تيك توك</option>
                                <option value="76" > لايكات تيك توك</option>
                                <option value="165" >   تيك توك بكج من الاعلانات</option>
                                <option value="77" > مشاهدات تيك توك</option>
                                <option value="130" > مشاهدات تيك توك بث مباشر</option>
                            </select>
                        </div>
                        <div id="fields">
                            <label for="formGroupExampleInput" class="form-label">الرابط</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="https://www.com">
                        </div>

                        <div class="form-group">
                            <label for="charge" class="control-label">الكمية</label>
                            <input type="text" class="form-control" id="charge" value="0" readonly>
                        </div>

                        <div class="form-floating">
                            <label for="floatingTextarea2">أسماء المستخدمين (1 لكل سطر)</label>
                            <textarea class="form-control" placeholder="0" id="floatingTextarea2" style="height: 200px"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="charge" class="control-label">السعر النهائي</label>
                            <input type="text" class="form-control" id="charge" value="$0.00" readonly>
                        </div>


                        <input type="hidden" name="_csrf" value="R1905K0Al1PvcP1qBHBrJ1qqkS2DDRkAAmnqqv_MKi8lKyeP_3XzMrYmkzp3FxxAYub2aq5lbXk6XYvnj5pgZA==">
                        <button type="submit" class="btn btn-success btn-login ">إرسال</button>
                        <div class="form-group" style="margin-top:20px">
                            <label for="service_description" class="control-label">معلومات عن الخدمة</label>
                            <div class="panel-body border-solid border-rounded description">
                                <span>اطلب الآن اي تصميم تريده</span>
                                <br>
                                <span>مميزات الخدمة :</span>
                                <br>
                                <span>1- يمكنني التعديل على التصميم حتى يلقى اعجابك ورضاك</span>
                                <br>
                                <span>2- أحصل على التصميم بدقة عالية جداً Jpg أو Png</span>
                                <br>
                                <span>3- سرعة التنفيذ خلال ساعات التواجد يتم تسليمك التصميم بشكل فوري</span>
                                <br>
                                <span>4- يمكنك الحصول على ملف مفتوح Psd ( راجع التطويرات )</span>
                                <br>
                                <span>لتصميم أكثر من صورة يرجى تحديد عدد مرات طلب هذه الخدمة بعدد الصور المراد تنفيذها قبل الشراء أو راجع التطويرات</span>
                                <br>
                                <span>قم بمراسلتي قبل طلب الخدمة</span>
                                <br>
                                <span>يرجى ارفاق المعلومات الكافية ومعها شعار لوضعه على الصورة بعد طلبك للخدمة</span>
                            </div>
                        </div>
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
