<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BG Content') }}
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
                            Background images
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
                                            Slider Title
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
                                            for="my-textfield">
                                            Slider Sub-Title
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">
                                        <p class="py-2 text-sm text-gray-600">Slider sub-title</p>
                                    </div>
                                </div>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-textfield">
                                            Redirect URL
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="text" value="">
                                        <p class="py-2 text-sm text-gray-600">Redirect url</p>
                                    </div>
                                </div>

                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Background Image
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="file" value="">

                                        <p class="py-2 text-sm text-gray-600">Select background - max:2Mb</p>
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
                                            Enable Timer
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <div class="mt-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio text-indigo-600"
                                                    name="radioOption" value="A">
                                                <span class="ml-2">Enable</span>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="radioOption"
                                                    value="B">
                                                <span class="ml-2">Disable</span>
                                            </label>
                                        </div>
                                        <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                                    </div>
                                </div>

                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-textarea">
                                            Timer text
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <textarea class="form-textarea block w-full focus:bg-white" id="my-textarea" value="" rows="8"></textarea>
                                        <p class="py-2 text-sm text-gray-600">add notes about timer field</p>
                                    </div>
                                </div>

                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-textfield">
                                            Time left
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="time" value="">
                                        <p class="py-2 text-sm text-gray-600">add time left to end the sale</p>
                                    </div>
                                </div>
                                <div class="md:flex mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                            for="my-select">
                                            Background Image
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input class="form-input block w-full focus:bg-white" id="my-textfield"
                                            type="file" value="">

                                        <p class="py-2 text-sm text-gray-600">Select background - max:2Mb</p>
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
                    </section>
                    <!--/Section container-->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
