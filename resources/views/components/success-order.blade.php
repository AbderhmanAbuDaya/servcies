@if (session('successOrder'))
    <div class="alert alert-success">
        تم ارسال طلبك بنجاح
        رقم الطلب: {{session('successOrder')['order']}} <br>
        الخدمة: {{session('successOrder')['service']}} <br>
        الرابط: {{session('successOrder')['link']}}  <br>
        الكمية: {{session('successOrder')['qun']}} <br>
        السعر النهائي: ${{session('successOrder')['price']}} <br>
        الرصيد: ${{auth()->user()->wallet}}
    </div>
@endif
