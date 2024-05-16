<x-splade-modal>
    <x-splade-form :default="$category" :action="isset($category->id) ? route('categories.update', $category->id)
     : route('categories.store')" :method="isset($category->id) ? 'PUT' : 'POST'">
        <div class="masters_modal m-3">
            <div class="input_one">
                <x-splade-input data-required name="name" label="Category name" autocomplete="off" />
                <x-splade-input data-required name="description" label="Description" autocomplete="off" />
                <x-splade-errors>
                    <p class="error" v-if="errors.has('v_message')" v-text="errors.first('v_message')"></p>
                </x-splade-errors>
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
