<x-splade-modal max-width="5xl">
    <x-splade-form :default="$product" :action="isset($product->id) ? route('products.update', $product->id) : route('products.store')" :method="isset($product->id) ? 'PUT' : 'POST'">
        <div class="masters_modal m-3 p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Name and Description -->
                <div class="input_one">
                    <x-splade-input data-required name="name" label="Product Name" />
                </div>
                <div class="input_one">
                    <x-splade-input data-required name="description" label="Description" />
                </div>

                <!-- Image and URL -->
                <div class="input_one">
                    <x-splade-file data-required name="image[]" label="Image" type="file" multiple />
                </div>

                <!-- Image and URL -->
                <div class="input_one">
                    <x-splade-file data-required name="cover_image" label="Cover Image" />
                </div>

                <!-- Color and Size -->
                <div class="input_one">
                    <x-splade-input type="color" name="color" label="Color" />
                </div>
                <div class="input_one">
                    <x-splade-input name="width" type="number" label="Width" />
                </div>
                <div class="input_one">
                    <x-splade-input name="height" type="number" label="Height" />
                </div>
                <div class="input_one">
                    <x-splade-input name="weight" type="number" label="Weight" />
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
                <div class="input_one">
                    <x-splade-input name="price" label="Price" type="number" step="0.01" />
                </div>

                <!-- Offer Price and Rating -->
                <div class="input_one">
                    <x-splade-input name="offer_price" label="Offer Price" type="number" step="0.01" />
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-2">
            <Link
                class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Cancel</Link>
            <x-splade-submit
                class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                label="Submit" />
        </div>
    </x-splade-form>
</x-splade-modal>
