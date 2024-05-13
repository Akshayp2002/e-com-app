<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('App Settings') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full overflow-auto" style="height: 80vh">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="container w-full flex flex-wrap mx-auto px-2 ">
                    <!--Section container-->
                    <section class="w-full lg:w-5/5">
                        <!--Title-->
                        <h1
                            class="flex items-center font-sans font-bold break-normal text-gray-700 px-2 text-xl mt-12 lg:mt-0 md:text-2xl">
                            Basic App settings
                        </h1>
                        <!--divider-->
                        <hr class="bg-gray-300 my-12">
                        <!--Title-->
                        <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">
                            Section
                            1
                        </h2>
                        <!--Card-->
                        <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">

                            <form>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-textfield">
                                            App Title
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">
                                        <p class="py-2 text-sm text-gray-600">App title</p>
                                    </div>
                                </div>

                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            App Logo
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="file" value="">

                                        <p class="py-2 text-sm text-gray-600">Select app logo max:2Mb</p>
                                    </div>
                                </div>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Fav Icon
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="file" value="">

                                        <p class="py-2 text-sm text-gray-600">Select the fav icon</p>
                                    </div>
                                </div>

                                <div class="md:flex md:items-center">
                                    <div class="md:w-1/3"></div>
                                    <div class="md:w-2/3">
                                        <button
                                            class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            type="button">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/Card-->

                        <!--divider-->
                        <hr class="bg-gray-300 my-12">

                        <!--Title-->
                        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 2</h2>

                        <!--Card-->
                        <div id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                            <form>

                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-radio">
                                            Enable cookie
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <div class="mt-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio text-indigo-600"
                                                    name="radioOption" value="A">
                                                <span class="ml-2">Radio A</span>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="radioOption"
                                                    value="B">
                                                <span class="ml-2">Radio B</span>
                                            </label>
                                        </div>
                                        <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                                    </div>
                                </div>

                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-textarea">
                                            Cookie text
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <textarea class="form-textarea block w-full focus:bg-white" id="my-textarea" value="" rows="8"></textarea>
                                        <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                                    </div>
                                </div>

                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-textfield">
                                            Copyright
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">
                                        <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                                    </div>
                                </div>
                                <div class="md:flex md:items-center">
                                    <div class="md:w-1/3"></div>
                                    <div class="md:w-2/3">
                                        <button
                                            class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            type="button">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--/Card-->

                        <!--divider-->
                        <hr class="bg-gray-300 my-12">

                        <!--Title-->
                        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 3</h2>

                        <!--Card-->
                        <div id='section3' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                            <form>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Email
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">

                                        <p class="py-2 text-sm text-gray-600">Enter email id</p>
                                    </div>
                                </div>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Phone
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">

                                        <p class="py-2 text-sm text-gray-600">Enter phone number</p>
                                    </div>
                                </div>
                                <div class="md:flex md:items-center">
                                    <div class="md:w-1/3"></div>
                                    <div class="md:w-2/3">
                                        <button
                                            class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            type="button">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--/Card-->

                        <!--divider-->
                        <hr class="bg-gray-300 my-12">

                        <!--Title-->
                        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 4</h2>

                        <!--Card-->
                        <div id='section4' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                            <form>

                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Twitter
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">

                                        <p class="py-2 text-sm text-gray-600">Enter Twitter url</p>
                                    </div>
                                </div>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Facebook
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">

                                        <p class="py-2 text-sm text-gray-600">Enter Facebook url</p>
                                    </div>
                                </div>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Instagram
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">

                                        <p class="py-2 text-sm text-gray-600">Enter Instagram url</p>
                                    </div>
                                </div>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Other
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">

                                        <p class="py-2 text-sm text-gray-600">Enter Other url</p>
                                    </div>
                                </div>

                                <div class="md:flex md:items-center">
                                    <div class="md:w-1/3"></div>
                                    <div class="md:w-2/3">
                                        <button
                                            class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            type="button">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--/Card-->

                        <!--divider-->
                        <hr class="bg-gray-300 my-12">

                        <!--Title-->
                        {{-- <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 5</h2> --}}

                        <!--Card-->
                        {{-- <div id='section5' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                            <blockquote class="border-l-4 border-yellow-600 italic my-4 pl-8 md:pl-12">Final
                                confirmation
                                disclaimer message etc</blockquote>

                            <div class="pt-8">

                                <button
                                    class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mr-4"
                                    type="button">
                                    Save
                                </button>

                                <button
                                    class="shadow bg-yellow-100 hover:bg-yellow-200 focus:shadow-outline focus:outline-none text-gray-700 font-bold py-2 px-4 rounded mr-4"
                                    type="button">
                                    Additional Action
                                </button>

                                <button
                                    class="shadow bg-yellow-100 hover:bg-yellow-200 focus:shadow-outline focus:outline-none text-gray-700 font-bold py-2 px-4 rounded"
                                    type="button">
                                    Additional Action
                                </button>

                            </div>

                        </div> --}}
                        <!--/Card-->

                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
