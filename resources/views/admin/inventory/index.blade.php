<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $product->name ?? 'Inventory' }}
            </h2>
            <Link modal href="{{ route('inventory.create', $product->uuid) }}"
                class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Create Inventory
            </Link>
        </div>
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 h-[80vh] overflow-auto">
        <x-splade-form :default="$product" :action="isset($product->id) ? route('products.update', $product->uuid) : route('products.store')" :method="isset($product->id) ? 'PUT' : 'POST'">
            <div class="masters_modal m-3 p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Name and Description -->
                    <div class="input_one">
                        <x-splade-input data-required name="name" label="Product Name" />
                    </div>
                    <div class="input_one">
                        <x-splade-input data-required name="description" label="Description" />
                    </div>
                    <!-- Manufacturer and Tags -->
                    <div class="input_one">
                        <x-splade-select data-required name="manufacturer_id" label="Manufacturer" :options="$manufacturer"
                            choices />
                    </div>
                    <div class="input_one">
                        <x-splade-input name="tags" label="Tags" />
                    </div>
                    <!-- Collection ID and Price -->
                    <div class="input_one">
                        <x-splade-select data-required name="category_id" label="Category" :options="$category" choices />
                    </div>
                    <div class="input_one mt-8">
                        <div class="flex justify-end gap-2">
                            <Link
                                class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                            Cancel</Link>
                            <x-splade-submit
                                class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                label="Submit" />
                        </div>
                    </div>
                </div>
            </div>
        </x-splade-form>
        <div class="mt-14">
            <x-splade-table :for="$inventory">
                @cell('color', $inventory)
                    <div class="w-6 h-6 rounded-full" style="background-color: {{ $inventory->color }}"></div>
                @endcell
                @cell('actions', $inventory,$product)
                    <a href="{{ route('inventory.edit', ['inv' => $inventory->uuid, 'pro' => $product->uuid]) }}" modal>    
                    <div class="flex items-center p-3 border-b border-blue-gray-100 hover:bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" viewBox="0 0 16 15" fill="none">
                            <path
                                d="M9.11851 2.00239L2.2754 8.8455C2.01488 9.10602 1.75435 9.61839 1.70225 9.99181L1.32883 12.6057C1.18988 13.5523 1.85856 14.2123 2.80513 14.082L5.41906 13.7086C5.7838 13.6565 6.29616 13.396 6.56537 13.1355L13.4085 6.29236C14.5895 5.11132 15.1453 3.73922 13.4085 2.00239C11.6716 0.265562 10.2996 0.821348 9.11851 2.00239V2.00239Z"
                                stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M8.13721 2.98438C8.42517 4.0069 8.97086 4.93836 9.72202 5.68953C10.4732 6.44069 11.4046 6.98639 12.4272 7.27434"
                                stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        {{-- <span>Edit</span> --}}
                    </div>
                    </Link>
                    {{-- <x-index.actions :edit="route('inventory.edit', $inventory->uuid)" :delete="route('inventory.destroy', $inventory->uuid)" /> --}}
                @endcell
            </x-splade-table>
        </div>

    </div>

</x-app-layout>
