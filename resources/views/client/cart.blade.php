@extends('layouts.client.app.layout')
@section('client')
    <section class="relative table w-full py-20 lg:py-24 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 mt-14">
                <h3 class="text-3xl leading-normal font-semibold">Checkout</h3>
            </div><!--end grid-->

            <div class="relative mt-3">
                <ul class="tracking-[0.5px] mb-0 inline-block">
                    <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500">
                        <a href="index.html">Cartzio</a>
                    </li>
                    <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i
                            class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">Checkout
                    </li>
                </ul>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-6">
                <div class="lg:col-span-8">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800">
                        <h3 class="text-xl leading-normal font-semibold">Billing address</h3>

                        <form>
                            <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                                <div class="lg:col-span-6">
                                    <label class="form-label font-semibold">First Name : <span
                                            class="text-red-600">*</span></label>
                                    <input type="text"
                                        class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                        placeholder="First Name:" id="firstname" name="name" required="">
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-semibold">Last Name : <span
                                            class="text-red-600">*</span></label>
                                    <input type="text"
                                        class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                        placeholder="Last Name:" id="lastname" name="name" required="">
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-semibold">Username</label>
                                    <div class="relative mt-2">
                                        <span
                                            class="absolute top-0.5 start-0.5 w-9 h-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-dark dark:text-white rounded"
                                            id="basic-addon1"><i class="mdi mdi-at"></i></span>
                                        <input type="text"
                                            class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                            placeholder="Username" required>
                                    </div>
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-semibold">Your Email : <span
                                            class="text-red-600">*</span></label>
                                    <input type="email"
                                        class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                        placeholder="Email" name="email" required="">
                                </div>

                                <div class="lg:col-span-12">
                                    <label class="form-label font-semibold">Address : <span
                                            class="text-red-600">*</span></label>
                                    <input type="text"
                                        class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                        placeholder="Address:" id="address" name="name" required="">
                                </div>

                                <div class="lg:col-span-12">
                                    <label class="form-label font-semibold">Address 2 : </label>
                                    <input type="text"
                                        class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                        placeholder="Address:" id="address" name="name" required="">
                                </div>

                                <div class="lg:col-span-4">
                                    <label class="font-semibold">Country:</label>
                                    <select
                                        class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0">
                                        <option value="USA">USA</option>
                                        <option value="CAD">Canada</option>
                                        <option value="CHINA">China</option>
                                    </select>
                                </div>

                                <div class="lg:col-span-4">
                                    <label class="font-semibold">State:</label>
                                    <select
                                        class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0">
                                        <option value="CAL">California</option>
                                        <option value="TEX">Texas</option>
                                        <option value="FLOR">Florida</option>
                                    </select>
                                </div>

                                <div class="lg:col-span-4">
                                    <label class="form-label font-semibold">Zip Code : <span
                                            class="text-red-600">*</span></label>
                                    <input type="number"
                                        class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                        placeholder="Zip:" id="zipcode" name="number" required="">
                                </div>

                                <div class="lg:col-span-12">
                                    <div class="flex items-center w-full mb-0">
                                        <input
                                            class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50 me-2"
                                            type="checkbox" value="" id="sameaddress">
                                        <label class="form-check-label text-slate-400" for="sameaddress">Shipping address is
                                            the same as my billing address</label>
                                    </div>

                                    <div class="flex items-center w-full mb-0">
                                        <input
                                            class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50 me-2"
                                            type="checkbox" value="" id="savenexttime">
                                        <label class="form-check-label text-slate-400" for="savenexttime">Save this
                                            information for next time</label>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <h3 class="text-xl leading-normal font-semibold mt-6">Payment</h3>

                        <form action="">
                            <form>
                                <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                                    <div class="lg:col-span-12">
                                        <div class="block">
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio"
                                                        class="form-radio border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50 me-2"
                                                        name="radio-colors" value="1" checked>
                                                    <span class="text-slate-400">Credit card</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="block mt-2">
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio"
                                                        class="form-radio border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50 me-2"
                                                        name="radio-colors" value="1">
                                                    <span class="text-slate-400">Debit Card</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="block mt-2">
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio"
                                                        class="form-radio border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50 me-2"
                                                        name="radio-colors" value="1">
                                                    <span class="text-slate-400">PayPal</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lg:col-span-6">
                                        <label class="form-label font-semibold">Account Holder Name : <span
                                                class="text-red-600">*</span></label>
                                        <input type="text"
                                            class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                            placeholder="Name:" id="accountname" name="name" required="">
                                    </div>

                                    <div class="lg:col-span-6">
                                        <label class="form-label font-semibold">Credit card number : <span
                                                class="text-red-600">*</span></label>
                                        <input type="number"
                                            class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                            placeholder="**** **** **** ****" id="cardnumber" name="number"
                                            required="">
                                    </div>

                                    <div class="lg:col-span-3">
                                        <label class="form-label font-semibold">Expiration : <span
                                                class="text-red-600">*</span></label>
                                        <input type="number"
                                            class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                            placeholder="" id="expiration" name="number" required="">
                                    </div>

                                    <div class="lg:col-span-3">
                                        <label class="form-label font-semibold">CVV : <span
                                                class="text-red-600">*</span></label>
                                        <input type="number"
                                            class="w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 mt-2"
                                            placeholder="" id="cvv" name="number" required="">
                                    </div>
                                </div>
                            </form>
                        </form>
                        <div class="mt-4">
                            <input type="submit"
                                class="py-2 px-5 inline-block tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md w-full"
                                value="Continue to checkout">
                        </div>
                    </div>

                </div><!--end col-->

                <div class="lg:col-span-4">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800">
                        <div class="flex justify-between items-center">
                            <h5 class="text-lg font-semibold">Your Cart</h5>

                            <a href="javascript:void(0)"
                                class="bg-orange-500 flex justify-center items-center text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full h-5">3</a>
                        </div>

                        <div class="mt-4 rounded-md shadow dark:shadow-gray-800">
                            <div class="p-3 flex justify-between items-center">
                                <div>
                                    <h5 class="font-semibold">Product Name</h5>
                                    <p class="text-sm text-slate-400">Brief description</p>
                                </div>

                                <p class="text-slate-400 font-semibold">$ 12</p>
                            </div>
                            <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                                <div>
                                    <h5 class="font-semibold">Second product</h5>
                                    <p class="text-sm text-slate-400">Brief description</p>
                                </div>

                                <p class="text-slate-400 font-semibold">$ 18</p>
                            </div>
                            <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                                <div>
                                    <h5 class="font-semibold">Third item</h5>
                                    <p class="text-sm text-slate-400">Brief description</p>
                                </div>

                                <p class="text-slate-400 font-semibold">$ 20</p>
                            </div>
                            <div
                                class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-slate-800 text-green-600">
                                <div>
                                    <h5 class="font-semibold">Promo code</h5>
                                    <p class="text-sm text-green-600">EXAMPLECODE</p>
                                </div>

                                <p class="text-red-600 font-semibold">-$ 10</p>
                            </div>
                            <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                                <div>
                                    <h5 class="font-semibold">Total (USD)</h5>
                                </div>

                                <p class="font-semibold">$ 30</p>
                            </div>
                        </div>

                        <div class="subcribe-form mt-6">
                            <form class="relative max-w-xl">
                                <input type="email" id="subcribe" name="email"
                                    class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800"
                                    placeholder="Promo code">
                                <button type="submit"
                                    class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-orange-500 text-white rounded-full">Redeem</button>
                            </form><!--end form-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                <div class="lg:col-span-5 md:col-span-6">
                    <img src="assets/images/envelope.svg" class="mx-auto d-block" alt="">
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <span class="bg-orange-500/5 text-orange-500 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile
                        Apps</span>
                    <h4 class="font-semibold text-3xl leading-normal my-4">Available for your <br> Smartphones</h4>
                    <p class="text-slate-400 max-w-xl mb-0">Upgrade your style with our curated sets. Choose confidence,
                        embrace your unique look.</p>
                    <div class="my-5">
                        <a href=""><img src="assets/images/app.png" class="m-1 inline-block" alt=""></a>

                        <a href=""><img src="assets/images/playstore.png" class="m-1 inline-block"
                                alt=""></a>
                    </div>

                    <div class="inline-block">
                        <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
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
    </section>
@endsection