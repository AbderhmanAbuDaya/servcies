@extends('layouts.front')


@section('content')


    <div class="container">
        <div class="row row-flex">

            <div class="col-md-6">
                <x-alert name="success"></x-alert>
                <x-alert name="error"></x-alert>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="well">
                    <div class="form-group">
                        <label for="username" class="control-label">إسم المستخدم</label>
                        <input type="text" class="form-control" id="username" value="{{auth()->user()->name}}" readonly="">
                    </div>
                </div>

                <div class="well">

                    <form class="rtl-form" method="post" action="{{route('settings.password')}}">
                        @csrf
                        <div class="form-group">
                            <label for="current" class="control-label">كلمة المرور الحالية</label>
                            <input type="password" class="form-control" id="current" name="old_password">
                        </div>
                        <div class="form-group">
                            <label for="new" class="control-label">كلمة المرور الجديدة</label>
                            <input type="password" class="form-control" id="new" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm" class="control-label">تأكيد كلمة المرور الجديدة</label>
                            <input type="password" class="form-control" id="confirm" name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-primary btn-login">تغيير كلمة المرور</button>
                    </form>
                </div>
                @admin
                <div class="well">
                    <div class="form-group">
                        <form action="{{route('settings.percentage')}}" method="post">
                            @csrf
                            <label for="username" class="control-label">نسبة الربح</label>
                            <input type="text" class="form-control" name="percentage" id="username" value="{{$setting->value}}">
                            <button type="submit" class="btn btn-primary btn-login">تغيير</button>
                        </form>
                    </div>
                </div>
                @endadmin

            </div>

            </div>
        </div>
    </div>

@endsection
