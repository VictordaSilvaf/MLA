<div class="flex flex-col w-full px-0 mt-8 lg:w-1/2 lg:px-12 lg:mt-0">
    <h2 class="font-bold text-title-5">Product Name</h2>
    <span class="text-xs font-thin text-gray-500">No.123456</span>

    <div class="flex flex-row items-center justify-between w-full mt-1">
        <div class="flex flex-row items-start">
            <x-icon name='star' icon="star" size="small" class="text-yellow-500" />
            <x-icon name='star' icon="star" size="small" class="text-yellow-500" />
            <x-icon name='star' icon="star" size="small" class="text-yellow-500" />
            <x-icon name='star' icon="star" size="small" class="text-yellow-500" />
            <x-icon name='star' icon="star" size="small" class="text-yellow-500" />
        </div>
    </div>
    <div class="flex flex-row items-start my-4 space-x-2" x-data="{size: 'S'}">
        @foreach (["S", "M", "L", "XL"] as $size)
            <span
                @click="size = '{{ $size }}'"
                x-transition
                class="flex items-center justify-center w-8 h-8 p-1 text-xs duration-150 border border-blue-300 border-solid rounded-md cursor-pointer"
                :class="{'bg-blue-300 text-white': size === '{{ $size }}'}">
                {{ $size }}
            </span>
        @endforeach
    </div>

    <span class="text-sm font-bold">Colors:</span>
    <div class="flex flex-row items-start flex-shrink-0 mt-2 space-x-2" x-data="{color: 'red-500'}">
        @foreach (["red-500", "blue-500", "blue-700", "blue-300", "blue-400"] as $color)
            <div @click="color = '{{ $color }}'" :class="{'ring-2 ring-blue-400': color === '{{ $color }}'}" class="cursor-pointer rounded-full h-4 w-4 bg-{{ $color }}"></div>
        @endforeach
    </div>

    <span class="mt-8 text-sm font-bold">Description:</span>
    <div class="flex flex-col items-start mt-2 space-y-1">
        @foreach ([1,2,3,4,5] as $item)
            <div class="flex flex-row justify-between w-full">
                <span class="text-xs font-thin text-gray-400">Detail {{ $item }}</span>
                <span class="text-xs font-thin text-gray-400">Info</span>
            </div>
        @endforeach
    </div>
</div>
