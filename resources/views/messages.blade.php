{{-- Yaseen. --}}
@extends('layouts.front')
@section('content')
                     <div class="row">
                        <div class="wrapper">
                            <div class="content  rtl-content ">
                                <!-- Main variables *content* -->
                                <div class="container-fluid">
                                    <div class="row  row-flex ">
                                      
                                        <div class="col-md-12">
                                            <div class="pull-right search  rtl-form ">
                                                جميع الرسائل
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="well well-float">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered  rtl-table ">
                                                        <thead>
                                                        <tr>
                                                            <th>الإسم</th>
                                                            <th>الإيميل</th>
                                                            <th>الموضوع</th>
                                                            <th>الرسالة</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (isset($messages) && $messages->count() > 0)
                                                                @foreach ($messages as $message)
                                                                    <tr>
                                                                        <td> {{$message->name}} </td>
                                                                        <td> {{$message->email}} </td>
                                                                        <td> {{$message->subject}} </td>
                                                                        <td> {{$message->message}} </td>
                                                                    </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="9" style="padding: 40px; font-size: 22px"> لا يوجد رسائل </td>
                                                                </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

@endsection

@section('scripts')
{{-- Yaseen. --}}
<script src="{{asset('js/app.js')}}"></script>
<script>

let row = document.querySelector('table tbody');
window.Echo.channel('chat').listen('ChatEvent', (e) => {
    row.innerHTML += ` <tr> 
                        <td> ${e.message['name']}    </td>
                        <td> ${e.message['email']}   </td>
                        <td> ${e.message['subject']} </td>
                        <td> ${e.message['message']} </td> 
                    <tr> `;
});
</script>
@endsection
