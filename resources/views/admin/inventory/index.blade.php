<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>
            <Link modal href="{{ route('products.create') }}"
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
                @cell('actions', $inventory)
                    <x-index.actions :edit="route('inventory.edit', $inventory->uuid)" :delete="route('inventory.destroy', $inventory->uuid)" />
                @endcell
            </x-splade-table>
        </div>

    </div>

</x-app-layout>
