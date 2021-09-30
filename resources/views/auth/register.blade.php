@extends('website.layouts.app')
<style>
    #header{
        position: relative;
    }
</style>
@section('content')

<x-guest-layout>
    {{-- <div class="parent" style="margin-top: 25px;"> --}}
    <x-auth-card style="margin-top: 50px">
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>
        
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" style="direction: rtl">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('الإسم')" class="mb-2"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('البريد الإلكتروني')" class="mb-2"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('كلمة المرور')" class="mb-2"/>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" class="mb-2" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-start mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    هل انت مشترك ؟
                </a> --}}

                <x-button class="w-100 justify-center">
                   إشتراك
                </x-button>
            </div>
        </form>

        {{-- </div> --}}
    </x-auth-card>
</x-guest-layout>

@endsection
