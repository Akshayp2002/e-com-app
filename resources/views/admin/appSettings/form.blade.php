<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('App Settings') }}
        </h2>
    </x-slot>

    <div v-SpladePreserveScroll:sidebar class="py-12 w-full overflow-auto" style="height: 80vh">
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
                        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">
                            Section 1</h2>
                        <!--Card-->
                        <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
                            <x-splade-form :default="$appSetting" :action="isset($appSetting->id)
                                ? route('app-settings.update', $appSetting->id)
                                : route('app-settings.store')" :method="isset($appSetting->id) ? 'PUT' : 'POST'">
                                <x-splade-input name="title" label="Category name" autocomplete="off"
                                    class="mb-4" />
                                <x-splade-file name="logo_light" label="App Logo" class="mb-4" />
                                <x-splade-file name="fav_icon" label="Favicon" class="mb-4" />
                                <div class="md:flex md:items-center">
                                    <div class="md:w-2/3">
                                        <x-splade-submit
                                            class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            label="Submit" />
                                    </div>
                                </div>
                            </x-splade-form>
                        </div>

                        <!--/Card-->

                        <!--divider-->
                        <hr class="bg-gray-300 my-12">

                        <!--Title-->
                        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 2</h2>

                        <!--Card-->
                        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                            <x-splade-form :default="$appSetting" :action="isset($appSetting->id)
                                ? route('app-settings.update', $appSetting->id)
                                : route('app-settings.store')" :method="isset($appSetting->id) ? 'PUT' : 'POST'">
                                <x-splade-group label="Enable Cookie" name="enable_cookie" inline class="mb-4">
                                    <x-splade-radio name="enable_cookie" value="1" label="Enable" />
                                    <x-splade-radio name="enable_cookie" value="0" label="Disable" />
                                </x-splade-group>
                                <x-splade-textarea name="cookie_text" label="Cookie Text" autosize class="mb-4" />
                                <div class="mb-4 md:w-1/2">
                                    <x-splade-input name="copyright" label="Copyright" />
                                </div>
                                <div class="md:flex md:items-center">
                                    <div class="md:w-2/3">
                                        <x-splade-submit
                                            class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            label="Submit" />
                                    </div>
                                </div>
                            </x-splade-form>
                        </div>

                        <!--/Card-->

                        <!--divider-->
                        <hr class="bg-gray-300 my-12">

                        <!--Title-->
                        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 3</h2>

                        <!--Card-->
                        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                            <x-splade-form :default="$appSetting" :action="isset($appSetting->id)
                                ? route('app-settings.update', $appSetting->id)
                                : route('app-settings.store')" :method="isset($appSetting->id) ? 'PUT' : 'POST'">
                                <div class="md:flex md:items-center mb-4 gap-4">
                                    <div class="md:w-1/2">
                                        <x-splade-input name="email" label="Email" />
                                    </div>
                                    <div class="md:w-1/2">
                                        <x-splade-input name="phone" label="Phone" />
                                    </div>
                                </div>
                                <div class="md:flex md:items-center">
                                    <div class="md:w-2/3">
                                        <x-splade-submit
                                            class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            label="Submit" />
                                    </div>
                                </div>
                            </x-splade-form>
                        </div>

                        <!--/Card-->

                        <!--divider-->
                        <hr class="bg-gray-300 my-12">

                        <!--Title-->
                        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 4</h2>

                        <!--Card-->
                        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                            <x-splade-form :default="$appSetting" :action="isset($appSetting->id)
                                ? route('app-settings.update', $appSetting->id)
                                : route('app-settings.store')" :method="isset($appSetting->id) ? 'PUT' : 'POST'">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <x-splade-input name="twitter_url" label="Twitter" class="mb-4" />
                                    <x-splade-input name="facebook_url" label="Facebook" class="mb-4" />
                                    <x-splade-input name="instagram_url" label="Instagram" class="mb-4" />
                                    <x-splade-input name="other_url" label="Other" class="mb-4" />
                                </div>
                                <div class="md:flex md:items-center">
                                    <div class="md:w-2/3">
                                        <x-splade-submit
                                            class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            label="Submit" />
                                    </div>
                                </div>
                            </x-splade-form>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
