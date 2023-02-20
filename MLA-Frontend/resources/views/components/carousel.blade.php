<div class="flex flex-col" x-data="carousel(@js($images))">
    <div class="p-2 mt-4 overflow-hidden border border-gray-300 border-solid rounded-md">
        <img x-ref="highlight" src="{{ Vite::images($images[0]) }}" alt="" class="object-scale-down w-full">
    </div>

    <div class="relative flex flex-row items-center justify-center gap-1 mt-4">
        <x-icon @click="changeImage('previous')" name='chevron_left' icon="chevron_left" size="large"
            class="absolute duration-100 cursor-pointer left-0.5 hover:left-0" />

        @foreach ($images as $image)
            <img x-ref="image{{ $loop->index }}" @click="showImage($event.target.src)"
                src="{{ Vite::images($image) }}" alt=""
                class="object-scale-down object-center w-16 h-16 p-2 overflow-hidden border border-gray-300 border-solid rounded-md cursor-pointer">
        @endforeach

        <x-icon @click="changeImage('next')" name='chevron_right' icon="chevron_right" size="large"
            class="absolute duration-100 cursor-pointer right-0.5 hover:right-0" />
    </div>
</div>
