<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Collections') }}
            </h2>
            <Link modal href="{{ route('categories.create') }}"
                class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Create
            </Link>
        </div>

    </x-slot>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-splade-table :for="$categories">
            @cell('actions', $categories)
                <x-index.actions :edit="route('categories.edit', $categories->id)" :delete="route('categories.destroy', $categories->id)"/>
            @endcell
        </x-splade-table>
    </div>
</x-app-layout>
