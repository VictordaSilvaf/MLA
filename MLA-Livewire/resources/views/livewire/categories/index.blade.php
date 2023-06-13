<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Index') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <x-table
                    :items="$categories"
                    :columns="[['label' => 'Name', 'column' => 'name']]"
                    edit='category.update'
                    :delete="true"
                />
            </div>
        </div>
    </div>
</div>
