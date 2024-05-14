<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BG Content') }}
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
                            Background Content
                        </h1>
                        <!--divider-->
                        <hr class="bg-gray-300 my-12">
                        <!--Title-->
                        <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">
                            Slider
                            1
                        </h2>
                        <!--Card-->
                        <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
                            <x-splade-form :default="$bgContent" :action="isset($bgContent->id)
                                ? route('bg-content.update', $bgContent->id)
                                : route('bg-content.store')" :method="isset($bgContent->id) ? 'PUT' : 'POST'">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <x-splade-input name="title" label="Slider Title" class="mb-4" />
                                    <x-splade-input name="sub_title" label="Slider Sub-Title" class="mb-4" />
                                    <x-splade-input name="url" label="Redirect URL" class="mb-4" />
                                    <x-splade-file name="slider_url" label="Background Image" class="mb-4" />
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
                        <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Timer Slide</h2>

                        <!--Card-->
                        <div id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                            <x-splade-form :default="$bgContent" :action="isset($bgContent->id)
                                ? route('bg-content.update', $bgContent->id)
                                : route('bg-content.store')" :method="isset($bgContent->id) ? 'PUT' : 'POST'">
                                <x-splade-group label="Enable Timer" name="enable_timer" inline class="mb-4">
                                    <x-splade-radio name="enable_timer" value="1" label="Enable" />
                                    <x-splade-radio name="enable_timer" value="0" label="Disable" />
                                </x-splade-group>
                                <x-splade-textarea name="timer_text" label="Timer Text" autosize class="mb-4" />
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <x-splade-input name="scheduled_at" time label="Scheduled At" class="mb-4" />
                                    <x-splade-file name="timer_url" label="Background Image" class="mb-4" />
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
                    </section>
                    <!--/Section container-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
