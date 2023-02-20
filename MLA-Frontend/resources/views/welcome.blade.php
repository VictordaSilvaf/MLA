<x-layouts.base title="home">
    <x-cart />

    <div class="container flex flex-col p-12">
        <h1 class="font-bold text-title-5">Product name</h1>
        <x-bread-crumb :items="['Home', 'Products', 'Product name']" />

        <div class="flex flex-col justify-between lg:flex-row">
            <div class="flex flex-col w-full lg:w-1/3">
                <x-carousel :images="['products/img1.png', 'products/img3.png', 'products/img2.png']" />
            </div>

            <div class="flex flex-col w-full p-0 lg:w-2/3 lg:flex-row lg:p-0">
                <x-product-infos />
                <x-product-actions />
            </div>
        </div>

        <x-tabs />
    </div>

</x-layouts.base>
