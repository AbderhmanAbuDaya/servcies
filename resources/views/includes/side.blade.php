<section>
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                <div class=" rtl-side-bar  side-bar hidden-xs">
                    <ul>
                        <li class="menu-head"><a href="/"> Perfect Media </a><a href="#" class="push_menu"><span class="fa fa-fw fas fa-bars pull-right"></span></a>
                        </li>
                        <div class="menu">
                            <li><a  class="active"  href="{{route('orders.create')}}">طلب جديد<span class="fa fa-fw fas fa-plus pull-right"></span></a></li>
                            <li><a  href="{{route('services.index')}}"> قائمة الخدمات<span class="fa fa-fw fas fa-star pull-right"></span></a></li>
                            <li><a  href="{{route('order.status')}}">سجل الطلبات<span class="fa fa-fw fas fa-file-alt pull-right"></span></a></li>
                            <li><a  href="#">شحن الرصيد<span class="fa fa-fw fas fa-credit-card pull-right"></span></a></li>
                            <li><a  href="https://youtu.be/eWa5PukKbIs/">شرح الموقع بالفيديو<span class="fa fa-fw fa fa-play pull-right"></span></a></li>
                            <li><a  href="{{route('questions')}}">الأسئلة الشائعة<span class="fa fa-fw fas fa-question-circle pull-right"></span></a></li>
                            <li><a  href="{{route('message.index')}}">الرسائل الواردة<span class="num-msg pull-right ">{{App\Models\Chat::count()}}</span></a></li>
                            <li><a  href="{{route('settings')}}"> الاعدادات<span class="fa fa-fw fas fa-question-circle pull-right"></span></a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/app.js')}}"></script>
<script>
numOfMessage =  document.querySelector('.num-msg');
window.Echo.channel('chat').listen('ChatEvent', (e) => {
    numOfMessage.innerHTML = Number(numOfMessage.innerHTML) + 1;
    numOfMessage.style.backgroundColor =  'red';
    numOfMessage.style.padding = '1px 3px';
});
</script>
