@extends('layouts.front')



@section('content')
    <!-- Main variables *content* -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well  rtl-content ">
                    <h3>الأسئلة الشائعة</h3>
                    <p>دعنا نجيبك عن الأسئلة الأكثر تكراراً قبل فتح تذكره جديدة.</p><p>
                    </p><div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title faq-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">- كيف أقوم بعمل طلب جديد بشكل صحيح؟</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body"><p>في خانة القسم، حدد نوع الفئة من القائمة.</p><p>في خانة الخدمة ، حدد نوع الخدمة المطلوبة من القائمة.</p><p>في خانة الرابط، أدخل الرابط الذي تريد طلب الخدمة له.</p><p>في خانة الكمية، أدخل الكمية المطلوب ارسالها إلى الرابط.</p></div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title faq-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">- حالة الطلب مكتمل جزئي! ماذا تعني هذه الحالة؟</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFive" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">هذا يعني أن الحساب قد وصل إلى الحد الأقصى من المتابعين من الخدمة المختارة، باقي عدد المتابعين يتم إرجاع فرق السعر إلى رصيد حسابك بشكل أوتوماتيكي.الحالة الجزئية هي عندما نقوم برد جزئي لبقايا الطلب. في بعض الأحيان ، يتعذر علينا تقديم طلب كامل لبعض الأسباب ، لذلك نعيد إليك المبلغ المتبقي غير المسلّم.مثال: لقد قمت بشراء طلب بكمية 10 آلاف وتكلفة 10 دولارات ، دعنا نقول أننا قمنا بتسليم 9000 والباقي 1000 لم نتمكن من تسليمها ، ثم سنقوم "جزئيًا" بالطلب وسنقوم برد القيمة المتبقية البالغة 1000 (بالدولار الأمريكي) هذا المثال).للاهمية:الجزئي يعني توقف ولا يعمل ولن يعمل وعليك وعمل طلب جديد وتغيير نوع الخدمة اواصلاح الخطأ اذا وجد.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title faq-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">- ما هي الطلبات الجماعية؟</a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseSix" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>يتم استخدام هذا الخيار عندما تريد إدخال عدة طلبات لروابط مختلفة في نفس الوقت، للقيام بذلك، يجب عليك إتباع ما يلي:</p><p>
                                        رقم الخدمة | الرابط | الكمية</p>
                                    <p>
                                        على سبيل المثال، تريد طلب خدمة متابعين أنستقرام ورقم الخدمة 30, تدخل بهذه الطريقة</p>
                                    <p>
                                        1000 | الرابط | 30
                                    </p>
                                    <p>
                                        5000 | الرابط | 30
                                    </p>
                                    <p>3000 | الرابط | 30</p>
                                    <p>يمكن العثور على أرقام الخدمات من هنا - https:/services</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title faq-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">- ما هو تظام التعويض؟</a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseSeven" aria-expanded="false">
                                <div class="panel-body">
                                    يتم تعويض النقص إن حصل في بعض الخدمات لمدة 30 يوم بشرط أن يكون جميع متابعين الحساب حقيقي أو جميع المتابعين تم طلبهم من موقعنا.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title faq-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEigh" aria-expanded="false" aria-controls="collapseEigh">- قمت بعمل طلب جديد ولكن الرابط غير صحيح وأريد الغاء الطلب؟</a>
                                </h4>
                            </div>
                            <div id="collapseEigh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseEigh" aria-expanded="false">
                                <div class="panel-body">إذا كان اسم المستخدم / الرابط صحيح فلا يمكن إيقاف أو إلغاء الطلب،ومع ذلك، إذا كان الرابط غير صحيح (على سبيل المثال ، رابط يوتيوب  والخدمة المطلوبة إنستقرام) ، فيمكننا إلغاء الطلب واسترداد المبلغ إلى رصيد حسابك.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title faq-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">- كم هي المدة اللازمة لتنفيذ طلبي؟</a>
                                </h4>
                            </div>
                            <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapsenine" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">حسب الكمية المطلوبة والتحديثات الموجوده، عند إختيار الخدمة ستجد شرح كامل عنها.</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title faq-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="false" aria-controls="collapseten">- سؤالي ليس هنا وأحتاج مساعدة؟</a>
                                </h4>
                            </div>
                            <div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseten" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">يرجى فتح تذكره من حسابك وسيقوم فريق الدعم الفني بالرد عليك خلال 24 ساعة.</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title faq-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsewaw1" aria-expanded="false" aria-controls="collapsewaw1">- أريد موقع تشبه لك / أريد إعادة بيع خدماتك كيف؟</a>
                                </h4>
                            </div>
                            <div id="collapsewaw1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapsenwaw1" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">يرجى مرسالتنا عبر الواتساب وسوف يتم توفير لك الموقع 00966561129993</div>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title faq-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapsewaw2">- سؤال؟&nbsp;&nbsp;هل يمكنني الحصول على خصم؟</a></h4>
                        </div>
                        <div id="collapsewaw2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapsenwaw2" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">جواب.<span >نحن لا نقدم أي خصم ، والأسعار التي تراها هي الأسعار التي تحصل عليها!</span></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title faq-title">
                                كيف&nbsp; يمكنني الحصول على رابط تعليق يوتيوب<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapsewaw3">- ؟</a></h4>
                        </div>
                        <div id="collapsewaw3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapsenwaw3" aria-expanded="false" style="height: 0px;"><div class="panel-body"><span>ابحث عن الوقت الزمني الموجود بجوار اسم المستخدم الخاص بك أعلى تعليقك (على سبيل المثال: "قبل 3 أيام") وضع المؤشر فوقه ثم انقر بزر الماوس الأيمن واضغط "نسخ عنوان الرابط". سيكون الرابط مثل هذا: https://www.youtube.com/watch؟v=12345&amp;lc=a1b21 الخ - بدلاً من https://www.youtube.com/watch؟v=12345 فقط للتأكد من حصولك على الرابط الصحيح ، الصقه في شريط عنوان المتصفح الخاص بك وسترى أن التعليق هو الآن أول تعليق أسفل الفيديو وهو يقول "تعليق مميز" Highlighted comment".</span><br></div></div></div>


                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title faq-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsewaw5" aria-expanded="false" aria-controls="collapsewaw5">- هل المتابعين حقيقيون او وهمييون؟</a>
                            </h4>
                        </div>
                        <div id="collapsewaw5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapsenwaw5" aria-expanded="false" style="height: 0px;">
                            <div class="panel panel-default ">
                                <div id="faq12" class="collapse in" aria-expanded="true">
                                    <div class="panel-body"  >
                                        <p>يوجد نوعين من الخدمات، حقيقي ووهمي، ستجد في عنوان الخدمة نوع المتابعين.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default ">
                                <a href="#" data-toggle="collapse" data-parent="#help-accordion-1" class="collapsed" aria-expanded="false">
                                    <div class="panel-heading">
                                        <h2><span class="fa fa-question-circle-o"></span>
                                        </h2>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsewaw6" aria-expanded="false" aria-controls="collapsewaw6">- سؤال؟</a><br></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title faq-title">
                                <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsewaw7" aria-expanded="true" aria-controls="collapsewaw7">- ماهو المنشن وكيف يعمل؟</a>
                            </h4>
                        </div>
                        <div id="collapsewaw7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="collapsenwaw7" aria-expanded="true" >
                            <div class="panel-body"><span>يقدم لكم موقع دكتور دعم خدمة منشن انستقرام التلقائيه والتي تعطيك ميزة عمل تاق على أي فيديو أو صورة معينه من حسابك لحد مليون مستخدم انستقرام. يمكنك اختيار الشخص المشهور او أي حساب تريد استهداف متابعينهم من خلال خدمة منشن انستقرام والتي ستعطيك دفعه قوية للأمام وعدد كبير من المتابعين الجدد حسب جودة حسابك والمحتوى الذي تقدمه. يتم الانتهاء من عمل المنشنات ما بين يوم لثلاث أيام حسب الكمية وضغط الطلبات. تعرضت الخدمة في بعض الأوقات للعديد من الانتقادات وذلك بسبب سوء استخدامها من قبل بعض المشترين، فليس من الضروري استخدامها لاجبار المتابعين على الانتباه اليك ومتابعتك، يجب عليك ان تقدم شيء مميز في الصورة أو الفيديو لكي لا يشعر الشخص الممنشن بأنه لا علاقة له بالمحتوى والذي ينتهي به المطاف إلى وضع تعليق سلبي وفي بعض الاحيان تقديم شكوى عليك في انستقرام، ننصحك باستهداف حساب له نفس اهتمام الحساب الذي ستلفت الانتباه عليه لتحصل على نتائج مبهرة طريقة الطلب : اليوزر : ضع يوزر الحساب الذي تريد عمل منشن لمتابعينه الرابط : لينك المنشور الخاص بك اما في حالة عمل منشن ليوزرات معينة : ضع اليوزرات كل واحد على سطر بدون علامة "@"</span></div><div class="panel-body"><br></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
