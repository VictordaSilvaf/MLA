<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    Logo
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-layouts.nav-link url="#" name="Home" :active="true" />
                    <x-layouts.nav-link url="#" name="Home" :active="false" />
                    <x-layouts.nav-link url="#" name="Home" :active="false" />
                    <x-layouts.nav-link url="#" name="Home" :active="false" />
                    <x-layouts.nav-link url="#" name="Home" :active="false" />
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">

        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800 dark:text-gray-200"></div>
                <div class="text-sm font-medium text-gray-500"></div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->

            </div>
        </div>
    </div>
</nav>
