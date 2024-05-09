@extends('layouts.client.app.layout')
@section('client')
    <!-- Start Hero -->
    <section class="relative table w-full py-20 lg:py-24 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 mt-14">
                <h3 class="text-3xl leading-normal font-semibold">Shopcart</h3>
            </div><!--end grid-->

            <div class="relative mt-3">
                <ul class="tracking-[0.5px] mb-0 inline-block">
                    <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500">
                        <a href="index.html">Cartzio</a>
                    </li>
                    <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180">
                        <i class="mdi mdi-chevron-right"></i>
                    </li>
                    <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">
                        Shopcart</li>
                </ul>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid lg:grid-cols-1">
                <div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md">
                    <table class="w-full text-start">
                        <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th scope="col" class="p-4 w-4"></th>
                                <th scope="col" class="text-start p-4 min-w-[220px]">Product</th>
                                <th scope="col" class="p-4 w-24 min-w-[100px]">Price</th>
                                <th scope="col" class="p-4 w-56 min-w-[220px]">Qty</th>
                                <th scope="col" class="p-4 w-24 min-w-[100px]">Total($)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-slate-900">
                                <td class="p-4"><a href=""><i class="mdi mdi-window-close text-red-600"></i></a>
                                </td>
                                <td class="p-4">
                                    <span class="flex items-center">
                                        <img src="{{ asset('../resources/assets/images/shop/500x650.png') }}"
                                            class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                        <span class="ms-3">
                                            <span class="block font-semibold">T-shirt (M)</span>
                                        </span>
                                    </span>
                                </td>
                                <td class="p-4 text-center">$ 280</td>
                                <td class="p-4 text-center">
                                    <div class="qty-icons">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white minus">-</button>
                                        <input min="0" name="quantity" value="3" type="number"
                                            class="h-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white plus">+</button>
                                    </div>
                                </td>
                                <td class="p-4  text-end">$ 840</td>
                            </tr>

                            <tr class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800">
                                <td class="p-4"><a href=""><i class="mdi mdi-window-close text-red-600"></i></a>
                                </td>
                                <td class="p-4">
                                    <span class="flex items-center">
                                        <img src="{{ asset('../resources/assets/images/shop/500x650.png') }}"
                                            class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                        <span class="ms-3">
                                            <span class="block font-semibold">Sneaker Shoes</span>
                                        </span>
                                    </span>
                                </td>
                                <td class="p-4 text-center">$ 160</td>
                                <td class="p-4 text-center">
                                    <div class="qty-icons">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white minus">-</button>
                                        <input min="0" name="quantity" value="1" type="number"
                                            class="h-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white plus">+</button>
                                    </div>
                                </td>
                                <td class="p-4  text-end">$ 160</td>
                            </tr>

                            <tr class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800">
                                <td class="p-4"><a href=""><i class="mdi mdi-window-close text-red-600"></i></a>
                                </td>
                                <td class="p-4">
                                    <span class="flex items-center">
                                        <img src="{{ asset('../resources/assets/images/shop/500x650.png') }}"
                                            class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                        <span class="ms-3">
                                            <span class="block font-semibold">Ladies Skirt</span>
                                        </span>
                                    </span>
                                </td>
                                <td class="p-4 text-center">$ 500</td>
                                <td class="p-4 text-center">
                                    <div class="qty-icons">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white minus">-</button>
                                        <input min="0" name="quantity" value="1" type="number"
                                            class="h-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white plus">+</button>
                                    </div>
                                </td>
                                <td class="p-4  text-end">$ 500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    <div class="lg:col-span-9 md:order-1 order-3">
                        <div class="space-x-1">
                            <a href=""
                                class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center bg-orange-500 text-white rounded-md mt-2">Shop
                                Now</a>
                            <a href=""
                                class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white mt-2">Add
                                to Cart</a>
                        </div>
                    </div>

                    <div class="lg:col-span-3 md:order-2 order-1">
                        <ul class="list-none shadow dark:shadow-gray-800 rounded-md">
                            <li class="flex justify-between p-4">
                                <span class="font-semibold text-lg">Subtotal :</span>
                                <span class="text-slate-400">$ 1500</span>
                            </li>
                            <li class="flex justify-between p-4 border-t border-gray-100 dark:border-gray-800">
                                <span class="font-semibold text-lg">Taxes :</span>
                                <span class="text-slate-400">$ 150</span>
                            </li>
                            <li
                                class="flex justify-between font-semibold p-4 border-t border-gray-200 dark:border-gray-600">
                                <span class="font-semibold text-lg">Total :</span>
                                <span class="font-semibold">$ 1650</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                <div class="lg:col-span-5 md:col-span-6">
                    <img src="{{asset('../resources/assets/images/467x467.png')}}" class="mx-auto d-block" alt="">
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <span class="bg-orange-500/5 text-orange-500 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile
                        Apps</span>
                    <h4 class="font-semibold text-3xl leading-normal my-4">Available for your <br> Smartphones</h4>
                    <p class="text-slate-400 max-w-xl mb-0">Upgrade your style with our curated sets. Choose
                        confidence, embrace your unique look.</p>
                    <div class="my-5">
                        <a href=""><img src="{{asset('../resources/assets/images/app.png')}}" class="m-1 inline-block" alt=""></a>

                        <a href=""><img src="{{asset('../resources/assets/images/playstore.png')}}" class="m-1 inline-block"
                                alt=""></a>
                    </div>

                    <div class="inline-block">
                        <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-800">
                            <i data-feather="smartphone" class="me-2 text-orange-500 h-10 w-10"></i>
                            <div class="content">
                                <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                                <a href="" class="text-orange-500">Learn More <i
                                        class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end gird-->
        </div><!--end container-->
    </section><!--end section-->
@endsection
