{{-- @extends('root')
@section('app') --}}
    <!-- Loader Start -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader End -->
    <!-- TAGLINE START-->
    <div>

    <div class="tagline bg-slate-900">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h6 class="text-white font-medium">Refer a friend & get $50 in credits each 🎉</h6>
                </div>
            </div>
        </div><!--end container-->
    </div><!--end tagline-->
    <!-- TAGLINE END-->


    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky tagline-height">

        @include('layouts.client.app.header')

    </nav>
    <!-- End Navbar -->

    @yield('client')

    <!-- Footer Start -->

    <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">

        @include('layouts.client.app.footer')

    </footer>

    <!-- Footer End -->
    <!-- Switcher -->
    {{-- <div class="fixed top-1/4 -left-2 z-50">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i data-feather="moon" class="w-[18px] h-[18px] text-yellow-500"></i>
                <i data-feather="sun" class="w-[18px] h-[18px] text-yellow-500"></i>
                <span
                    class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
            </label>
        </span>
    </div> --}}

    <!-- LTR & RTL Mode Code -->
    {{-- <div class="fixed top-[40%] -left-3 z-50">
        <a href="" id="switchRtl">
            <span
                class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden">LTR</span>
            <span
                class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
        </a>
    </div> --}}
    <!-- LTR & RTL Mode Code -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-orange-500 text-white justify-center items-center"><i
            class="mdi mdi-arrow-up"></i></a>
                    
    </div>
    <!-- Back to top -->
{{-- @endsection --}}
