@extends('website.layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center"">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>أول موقع عربي للحصول على متابعين لجميع مواقع التواصل الاجتماعي</h1>
        <h2>يعد موقعنا من أفضل المواقع المتاحة حاليًا ، وهو عبارة عن حزمة لـ الطلب المحتمل لجميع العملاء.</h2>
        <a href="#about" class="btn-get-started scrollto">تعرف علينا اكثر</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="{{asset('website/assets/img/hero-img.png')}}" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('website/assets/img/clients/client-1.png')}}" class="img-fluid" alt="" data-aos="flip-right">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('website/assets/img/clients/client-2.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('website/assets/img/clients/client-3.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('website/assets/img/clients/client-4.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('website/assets/img/clients/client-5.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('website/assets/img/clients/client-6.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-in" data-aos-delay="100"> خدمة شراء المتابعين من الموقع </h3>
              <p data-aos="fade-in">
                إذا كنت ترغب في شراء متابعین  حقيقي ، 
                فيجب عليك ملء نموذج يتكون من معلومات مثل المعرف او رابط القناة على حسب الخدمة 
                التي تريدها الخاص بك والبريد الإلكتروني المتاح لك دون تقديم كلمة مرور الحساب الخاصة بك</p>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4><a href="#">تلجرام</a></h4>
                  <p>.لدينا العديد من الخدمات الخاصة بالتلجرام من تزويد متابعين حقيقي ومزيف</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4><a href="#">فيسبوك</a></h4>
                  <p>.لدينا العديد من الخدمات الخاصة بالفيسبوك من تزويد متابعين حقيقي ومزيف</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4><a href="#">انستاجرام</a></h4>
                  <p>.لدينا العديد من الخدمات الخاصة بالانستاجرام من تزويد متابعين حقيقي ومزيف</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4><a href="#">تويتر</a></h4>
                  <p>.لدينا العديد من الخدمات الخاصة بالتويترم من تزويد متابعين حقيقي ومزيف</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">خدماتنا</h2>
          <p data-aos="fade-in">أيضًا شراء الإعجابات والزيارات لمشاركاتهم لأن المتابع المزيف لا يمكنه الإعجاب بصفحتك على انستقرام على الإطلاق، بل إنه تلقى زيارة من هؤلاء المتابعين لن تفعل ذلك.</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('website/assets/img/services-1.jpg')}}" alt="...">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title"><a href="">خدمة الفيسبوك</a></h5>
                <p class="card-text">إذا كنت ترغب في شراء متابعین  حقيقي ، فيجب عليك ملء نموذج يتكون من معلومات مثل المعرف او رابط القناة على حسب الخدمة التي تريدها الخاص بك والبريد الإلكتروني المتاح لك دون تقديم كلمة مرور الحساب الخاصة بك </p>
                <!-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('website/assets/img/services-2.jpg')}}" alt="...">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title"><a href="">خدمة الانستاجرام</a></h5>
                <p class="card-text">إذا كنت ترغب في شراء متابعین  حقيقي ، فيجب عليك ملء نموذج يتكون من معلومات مثل المعرف او رابط القناة على حسب الخدمة التي تريدها الخاص بك والبريد الإلكتروني المتاح لك دون تقديم كلمة مرور الحساب الخاصة بك .</p>
                <!-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> اقرأ المزيد</a></div> -->
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('website/assets/img/services-3.jpg')}}" alt="...">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title"><a href="">خدمة التلجرام</a></h5>
                <p class="card-text">إذا كنت ترغب في شراء متابعین  حقيقي ، فيجب عليك ملء نموذج يتكون من معلومات مثل المعرف او رابط القناة على حسب الخدمة التي تريدها الخاص بك والبريد الإلكتروني المتاح لك دون تقديم كلمة مرور الحساب الخاصة بك .</p>
                <!-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> افرأ المزيد</a></div> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('website/assets/img/services-4.jpg')}}" alt="...">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title"><a href="">خدمة التويتر</a></h5>
                <p class="card-text">إذا كنت ترغب في شراء متابعین  حقيقي ، فيجب عليك ملء نموذج يتكون من معلومات مثل المعرف او رابط القناة على حسب الخدمة التي تريدها الخاص بك والبريد الإلكتروني المتاح لك دون تقديم كلمة مرور الحساب الخاصة بك .</p>
                <!-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> اقرأ المزيد</a></div> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">الميزات</h2>
          <p data-aos="fade-in">إن موقعنا كأول موقع عربي يقدم خدمة الحصول على متابعين ومشاهدات لجميع مواقع التواصل الاجتماعي ، بإمكانه بكل فخر أن يقدم لك باقات متنوعة لزيادة المتابعين والمشاهدات والمشتركين والمشاركات عن طريق خدمة شراء المتابعينن على موقعنا</p>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{asset('website/assets/img/features-1.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3>نقدم لكم دعم فني على مدار الساعة 24/7</h3>
            <p>
             يوجد لدينا فريق متخصص للدعم الفني على مدار الساعة 24/7 للرد على جميع استفساراتكم وحل المشاكل في نفس الوقت
            </p>
            <ul>
              <li><i class="bi bi-check"></i> نمتاز بسرعة الرد عليكم في اي وقت ممكن</li>
              <li><i class="bi bi-check"></i> نهتم بكم وبخدماتكم , لذلك خصصنا فريق للدعم الفني</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('website/assets/img/features-2.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>سرعة تسليم الخدمة</h3>
            <p>
               نمتاز بالسرعة الفائقة لتسليم الخدمة المطلوبة لكم 
            </p>
            <p>
                يعد موقعنا من اكبر واشهر السيرفرات في الوطن العربي لتقديم خدمات السوشيال ميديا من مشاهدات ولايكات ومتابعة لصفحتك التجارية او الشخصية , ولاننا نهتم بك وبمنتجاتك , خصصنا سيرفرات ذات كفائة عالية وسرعة فائقة في تقديم الخدمات لك
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{asset('website/assets/img/lastImg.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>خدماتنا حول منصات التواصل الاجتماعي</h3>
            <p>
              نحن هنا لمساعدتك في إنشاء ملفات تعريف جذابة لوسائل التواصل الاجتماعي تجذب العديد من العملاء المحتملين الآخرين نحو عملك. ليست هناك حاجة لإنفاق آلاف الدولارات في إدارة حملة تسويقية تقليدية. خذ دعمنا لتعزيز متابعيك وإعجاباتك وآرائك على منصة التواصل الاجتماعي وستجرب الفوائد التالية.
            </p>
            <ul>
              <li><i class="bi bi-check"></i>دعم مشاهدات لمنصات التواصل الاجتماعي</li>
              <li><i class="bi bi-check"></i>دعم لايكات لمنصات التواصل الاجتماعي</li>
              <li><i class="bi bi-check"></i>دعم متابعين لمنصات التواصل الاجتماعي</li>
              <li><i class="bi bi-check"></i>دعم تعليقات لمنصات التواصل الاجتماعي</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('website/assets/img/features-4.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>العلاقة بيننا وبين السوشيال ميديا</h3>
            <p>
               في البداية يجب اتباع الخطوات الهامة للنجاح والشهرة في استخدام منصات التواصل الاجتماعي
                , لما لها من تأثير كبير على حيات الناس جميعاً
            </p>
            <p>
              عندما تقوم العلامة التجارية بتنفيذ إحدى استراتيجيات التسويق التي تشتمل على المؤثرين،
               يجب أن تكون الحملة على منصة ذات صلة بالعلامة التجارية والسوق المستهدفة، 
               وبما أن معظم الحملات الاعلانية عبر المؤثرين رقمية،
                فإنه يتم انشاءها أو مشاركتها عبر أحد منصات التواصل الاجتماعي، 
                .لذلك يجب أن تكون المنصة ملائمة لسوقك المستهدف وأيضًا أنت تمتلك عبرها حضورا نشط -على تلك المنصة , لذلك يجب عليك شراء خدماتنا للحصول على النجاح
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">الاسعار</h2>
          <p data-aos="fade-in">نقدم لكم افضل وارخص الاسعار لجميع خدماتنا التي تبدا من 0.01$ لنمتاز عن غيرنا </p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="zoom-in">
            <h3>TWITTER</h3>
            <h4>$0.01<span>100 لايك</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> دعم فني قوي</li>
              <li><i class="bx bx-check"></i> الحصول على الخدمة خلال دقيقة</li>
              <li><i class="bx bx-check"></i> السهولة في الطلب</li>
              <li class="na"><i class="bx bx-check"></i> يوجد خصم لحزم 5$ واعلى</li>
              <li class="na"><i class="bx bx-check"></i> يوجد عروض على باقات 10$ واعلى</li>
            </ul>
            <a href="{{url('orders/create')}}" class="get-started-btn">شراء الباقة</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="zoom-in">
            <span class="featured-badge">Featured</span>
            <h3>FACEBOOK</h3>
            <h4>$1.00<span>1000متابع</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> دعم فني قوي</li>
              <li><i class="bx bx-check"></i> الحصول على الخدمة خلال دقيقة</li>
              <li><i class="bx bx-check"></i> السهولة في الطلب</li>
              <li><i class="bx bx-check"></i> يوجد خصم لحزم 5$ واعلى</li>
              <li><i class="bx bx-check"></i> يوجد عروض على باقات 10$ واعلى</li>
            </ul>
            <a href="{{url('orders/create')}}" class="get-started-btn">شراء الباقة</a>
          </div>

          <div class="col-lg-4 box" data-aos="zoom-in">
            <h3>INSTAGRAM</h3>
            <h4>$1.00<span>1000متابع</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> دعم فني قوي</li>
              <li><i class="bx bx-check"></i> الحصول على الخدمة خلال دقيقة</li>
              <li><i class="bx bx-check"></i> السهولة في الطلب</li>
              <li><i class="bx bx-check"></i> يوجد خصم لحزم 5$ واعلى</li>
              <li><i class="bx bx-check"></i> يوجد عروض على باقات 10$ واعلى</li>
            </ul>
            <a href="{{url('orders/create')}}" class="get-started-btn">شراء الباقة</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">الأسئلة الشائعة </h2>
          <p data-aos="fade-in">.قدمنا لكم بعض الاسئلة الرائجة لديكم والاجوبة لها , وذلك لراحتكم وتوفير الوقت لديكم</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-5">
            
            <h4> PERFECT_media من هو سيرفر </h4>
            <i class="bx bx-help-circle"></i>
          </div>
          <div class="col-lg-7">
            <p>
              انه اول سيرفر عربي لتزويد المتابعين والاعجابات والمشاهدات لعلامتكم التجارية على جميع منصات التواصل الاجتماعي
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            
            <h4>ما هي الخدمات التي يقدمها موقعك</h4>
            <i class="bx bx-help-circle"></i>
          </div>
          <div class="col-lg-7">
            <p>
              نقدم خدمات المتابعة والاعجابات والمشاهدات لدى جميع منصات التواصل الاجتماعي
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <h4>هل حسابي لديكم آمن </h4>
            <i class="bx bx-help-circle"></i>
          </div>
          <div class="col-lg-7">
            <p>
              نعم , حسابك لدينا مشفر ولن يتم حذفه ابداً
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <h4>كيف يعمل النظام الشامل</h4>
            <i class="bx bx-help-circle"></i>
          </div>
          <div class="col-lg-7">
            <p>
              من الممكن تقديم طلبات متعددة بروابط مختلفة في وقت واحد بمساعدة ميزة الطلب الجماعي
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <h4>ماذا تعني التغذية بالتنقيط</h4>
            <i class="bx bx-help-circle"></i>
          </div>
          <div class="col-lg-7">
            <p>
              قم بتنمية حساباتك بالسرعة التي تريدها بمساعدة التغذية بالتنقيط. كيف يعمل: لنفترض أنك تريد 2000 إعجاب على منشورك. بدلاً من الحصول على 2000 دفعة واحدة ، يمكنك الحصول على 200 يوميًا لمدة 10 أيام.            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>تواصل معنا</h2>
          <p>.يوجد فريق للرد على أسالتكم , يرجى ارسال رسالتك وسوف نقوم بالرد عليك باقرب وقت</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>العنوان</h3>
                  <p>شارع 22 الرشيد,فلسطين, غزة</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>الايميل</h3>
                  <p>info@PERFECTMEDIA.com<br>PERFECTMEDIA@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+972 59-282-2302<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>


        
          <div class="col-lg-6 mt-4 mt-lg-0">
            <form method="post" action="{{route('sendMessage')}}" role="form" class="php-email-form w-100" data-aos="fade-up">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="الايميل" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="الرسالة" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">جاري التحميل</div>
                <div class="error-message"></div>
                <div class="sent-message">!تم ارسال رسالتك. شكرا لك</div>
              </div>
              <div class="text-center"><button type="submit">إرسال</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

{{-- 
@if ($errors->any())
 @foreach ($errors->all() as $error)
     <div>{{$error}}</div>
 @endforeach
@endif --}}

<script src="{{asset('js/app.js')}}"></script>
<script>

// Yaseen.
// window.Echo.channel('chat').listen('ChatEvent', (e) => {
//     alert("Done!");
// });
</script>
