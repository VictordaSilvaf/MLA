<div class="flex flex-col px-0 mt-8 lg:w-1/2 lg:mt-0 lg:px-12"
    x-data="{ count: 1}"
>
    <div class="flex flex-col w-full p-4 border border-gray-200 rounded">
        <div class="flex flex-row items-start space-x-4">
            <span class="font-bold text-title-5">$20</span>
            <span class="text-sm font-thin text-gray-500 line-through">$30</span>
        </div>

        <div class="flex flex-row items-center mt-4 space-x-4">
            <x-form.button @click="count > 1 ? count-- : count = 1" type="button" variation="outline" size="small" icon="remove" icon-position="left" text=""/>
            <span class="font-bold text-title-5" x-text="count"></span>
            <x-form.button @click="count++" type="button" variation="outline" size="small" icon="add" icon-position="left" text=""/>
         </div>
         <x-form.button @click="$dispatch('open-cart')" class="mt-4" type="button" variation="primary" size="small" icon="shopping_cart" icon-position="left" text="Add to cart"/>
         <x-form.button class="mt-2" type="button" variation="primary" size="small" text="Buy now"/>
         <div class="flex flex-col items-start mt-2 space-y-1">
            @foreach ([1,2,3,4,5] as $item)
                <div class="flex flex-row justify-between w-full">
                    <span class="text-xs font-thin text-gray-400">Detail {{ $item }}</span>
                    <span class="text-xs font-thin text-gray-400">Info</span>
                </div>
            @endforeach
        </div>
    </div>
    <div class="flex flex-row px-6 py-4 mt-4 space-x-2 bg-blue-200 bg-opacity-50 rounded-md item-center">
        <x-icon name="local_shipping" icon="local_shipping" size="large" class="text-blue-500" />
        <span class="text-sm font-bold">Free shipping</span>
    </div>

    <div class="flex flex-row px-6 py-4 mt-4 space-x-2 bg-blue-200 bg-opacity-50 rounded-md item-center">
        <x-icon name="local_shipping" icon="local_shipping" size="large" class="text-blue-500" />
        <span class="text-sm font-bold">Free shipping</span>
    </div>
</div>
