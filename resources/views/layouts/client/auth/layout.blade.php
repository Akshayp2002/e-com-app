@extends('layouts.client.root')
@section('app')
    <!-- End Navbar -->
    <section
        class="md:h-screen py-36 flex items-center bg-orange-500/10 dark:bg-orange-500/20 bg-[url('../../assets/images/hero/bg-shape.png')] bg-center bg-no-repeat bg-cover">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                       
                            @yield('auth')
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed bottom-3 end-3">
        <a href=""
            class="back-button size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-full"><i
                data-feather="arrow-left" class="h-4 w-4"></i></a>
    </div>
@endsection
