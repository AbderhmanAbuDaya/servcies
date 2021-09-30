
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{route('landing-page')}}">Perfect_Media<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="#services">خدماتنا</a></li>
          {{-- <li><a class="nav-link scrollto" href="#portfolio">اعمالنا</a></li> --}}
          <li><a class="nav-link scrollto" href="#contact">تواصل معنا</a></li>
          @auth
          <li><a class="getstarted scrollto" href="{{route('home')}}">طلب خدمة</a></li>
         <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="getstarted scrollto">
                خروج
            </button>
        </form>
         </li>

          {{-- <li><a class="getstarted scrollto" href="{{route('logout')}}">تسجيل الخروج</a></li> --}}
          @else
          <li><a class="getstarted scrollto" href="{{route('login')}}">سجل الدخول</a></li>
          <li><a class="getstarted scrollto" href="{{route('register')}}">إشتراك</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->