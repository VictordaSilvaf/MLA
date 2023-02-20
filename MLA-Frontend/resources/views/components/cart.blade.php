<div class="relative z-10"
    aria-labelledby="slide-over-title"
    role="dialog"
    aria-modal="true"
    x-data="{open: false}"
    x-show="open"
    @open-cart.window="open = true"
    @click.outside="onpen = false"
    x-transition:enter="ease-in-out duration-500"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="oppacity-100"
    x-transition:leave="ease-in-out duration-500"
    x-transition:leave-start="oppacity-100"
    x-transition:leave-end="opacity-0"
>
    <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" x-show="open"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div
                x-show="open"
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="fixed inset-y-0 right-0 flex max-w-full pl-10 pointer-events-none">
                <div class="w-screen max-w-md pointer-events-auto">
                    <div class="flex flex-col h-full overflow-y-hidden bg-white shadow-xl">
                        <div class="flex-1 px-4 py-6 overflow-y-auto sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-lg font-medium text-gray-900">Shopping cart</h2>
                                <div class="flex items-center ml-3 cursor-pointer h-7">
                                    <x-icon @click="open = false" name='close' size="large" />
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flow-root">
                                    <div class="-my-6 divide-gray-200">
                                        <li class="flex py-6">
                                            <div
                                                class="flex-shrink-0 w-20 h-20 overflow-hidden border border-gray-300 rounded-md">
                                                <img src="{{ Vite::images('products/img1.png') }}" alt=""
                                                    class="object-cover object-center w-full h-full">
                                            </div>
                                            <div class="flex flex-col flex-1 ml-4">
                                                <div>
                                                    <div
                                                        class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Basic Tee</a>
                                                        </h3>
                                                        <p class="ml-4">$35.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Color: Black</p>
                                                </div>
                                                <div class="flex items-end justify-between flex-1 text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button
                                                            class="font-medium text-indigo-600 hover:text-indigo-500">
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-6 border-t border-gray-200 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <p>Subtotal</p>
                                <p>$35.00</p>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                            <div class="w-full mt-6">
                                <x-form.button type="button" variation="primary" size="large" text="Checkout" class="w-full"/>
                            </div>
                            <div class="mt-6 text-sm text-center text-gray-500">
                                or <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Continue
                                    Shopping<span aria-hidden="true"> &rarr;</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
