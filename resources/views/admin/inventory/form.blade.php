<x-splade-modal max-width="5xl">
    <x-splade-form :default="['inventory' => $inventory, 'uuid'=> $uuid]" :action="isset($inventory->id) ? route('inventory.update', $inventory->uuid) : route('inventory.store')" :method="isset($inventory->id) ? 'PUT' : 'POST'">
        <div class="masters_modal m-3 p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Name and Description -->
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
                <div class="input_one">
                    <x-splade-input name="price" label="Price" type="number" step="0.01" />
                </div>

                <!-- Offer Price and Rating -->
                <div class="input_one">
                    <x-splade-input name="offer_price" label="Offer Price" type="number" step="0.01" />
                </div>
                <div class="input_one">
                    <x-splade-input name="quantity" label="Quantity" type="number" />
                </div>
                <div class="input_one">
                    <x-splade-select label="Size" name="size">
                        <option value="xs">Extra Small</option>
                        <option value="s">Small</option>
                        <option value="m">Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra Large</option>
                        <option value="xxl">Double Extra Large</option>
                    </x-splade-select>
                </div>
                <!-- Image and URL -->
                <div class="input_one flex gap-2">
                    <x-splade-file data-required name="cover_image" label="Cover Image" />
                    <x-splade-file data-required name="images[]" label="Images" multiple />
                </div>

                <!-- Image and URL -->
                <div class="input_one">
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
