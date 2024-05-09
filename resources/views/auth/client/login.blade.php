@extends('layouts.client.auth.layout')
@section('auth')
    <div class="relative md:shrink-0">
        <img class="lg:h-full h-full w-full object-cover md:h-[34rem]"
            src="{{ asset('../resources/assets/images/600x700.png') }}" alt="">
    </div>

    <div class="p-8 lg:px-20">
        <div class="text-center">
            <a href="">
                <img src="{{ asset('../resources/assets/images/logo-dark.png') }}" class="mx-auto block dark:hidden"
                    alt="">
                <img src="{{ asset('../resources/assets/images/logo-light.png') }}" class="mx-auto hidden dark:block"
                    alt="">
            </a>
        </div>

        <form class="text-start lg:py-20 py-8">
            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                    <input id="LoginEmail" type="email"
                        class="mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                        placeholder="name@example.com">
                </div>

                <div class="mb-4">
                    <label class="font-semibold" for="LoginPassword">Password:</label>
                    <input id="LoginPassword" type="password"
                        class="mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                        placeholder="Password:">
                </div>

                <div class="flex justify-between mb-4">
                    <div class="flex items-center mb-0">
                        <input
                            class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50 me-2"
                            type="checkbox" value="" id="RememberMe">
                        <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember
                            me</label>
                    </div>
                    <p class="text-slate-400 mb-0"><a href="forgot-password.html" class="text-slate-400">Forgot password
                            ?</a>
                    </p>
                </div>

                <div class="mb-4">
                    <input type="submit"
                        class="py-2 px-5 inline-block tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md w-full"
                        value="Login / Sign in">
                </div>

                <div class="text-center">
                    <span class="text-slate-400 me-2">Don't have an account ?</span> <a href="signup.html"
                        class="text-black dark:text-white font-bold inline-block">Sign Up</a>
                </div>
            </div>
        </form>

        <div class="text-center">
            <p class="mb-0 text-slate-400">©2024
                Bla Bla. Design with <i class="mdi mdi-heart text-red-600"></i>
                by <a href="" target="_blank" class="text-reset">000000000</a>.
            </p>
        </div>
    </div>
@endsection
