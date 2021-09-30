@extends('website.layouts.app')

@section('content')

<x-guest-layout >
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" style="direction: rtl"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" style="direction: rtl">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('البريد الإلكتروني')" class="mb-2"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('كلمة المرور')" class="mb-2"/>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember" style="margin-left: 10px;">
                    <span class="ml-2 text-sm text-gray-600">تذكرني</span>
                </label>
            </div>

            <div class="flex items-center justify-start mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        هل نسيت كلمة المرور ؟
                    </a>
                @endif --}}

                <x-button class="ml-3">
                   تسجيل الدخول
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection