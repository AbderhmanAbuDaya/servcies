<nav class="navbar navbar-default navbar-static-top  rtl-navbar ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="visible-xs">  عبود  دكتور  </span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
                <li class="visible-xs">
                    {{-- <form id="my_form" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="getstarted scrollto">
                            خروج
                        </button> --}}
                    {{-- <a href="#">تسجيل خروج <span class="fa fa-fw fas fa-sign-out pull-right"></span></a> --}}
                </li>
                <li class="hidden-xs balance"><a href="#"><span class="badge">${{\Illuminate\Support\Facades\Auth::user()->wallet}}</span></a></li>
                <li class="hidden-xs username "><a href="#">{{Auth()->user()->name}} <span class="visible-xs fa fa-fw fas fa-user pull-right"></span></a></li>
                <li class="hidden-xs">
                    <form id="my_form" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="javascript:{}" onclick="document.getElementById('my_form').submit();" class="getstarted scrollto">
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </form>
                        {{-- <a href="#"><i class="fa fa-sign-out"></i></a></li> --}}
                </li>
            </ul>
        </div>
    </div>
</nav>
