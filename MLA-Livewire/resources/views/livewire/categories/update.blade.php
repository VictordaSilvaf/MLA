<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form wire:submit.prevent="save">
                    <div>
                        <div class="w-full">
                            <x-input-label for="name" value="Name"/>
                            <x-text-input id="name" class="block mt-1 w-full" wire:model.debounce="category.name" type="text"
                                          name="email"/>
                            <x-input-error :messages="$errors->get('category.name')" for="category.name" class="mt-2"/>
                        </div>
                    </div>

                    <x-primary-button class="m-4" wire:loading.attr="disabled">
                        {{ __('Save') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
