<div class="flex flex-col w-full" x-data="{ visible: 'description' }">
    <div class="border-b border-gray-200">
        <nav class="flex -mb-px space-x-8" aria-label="Tabs">

            <a @click="visible = 'description'" :class="{ 'border-blue-500 text-blue-500 font-bold': visible === 'description', 'border-transparent text-gray-800 hover:text-gray-700 hover:border-gray-300': visible !== 'description' }"
                class="px-1 py-4 border-b-2 cursor-pointer whitespace-nowrap ">
                Feature
            </a>

            <a @click="visible = 'reviews'" :class="{ 'border-blue-500 text-blue-500 font-bold': visible === 'reviews', 'border-transparent text-gray-800 hover:text-gray-700 hover:border-gray-300': visible !== 'reviews' }"
                class="px-1 py-4 border-b-2 border-transparent cursor-pointer whitespace-nowrap ">
                Reviews
            </a>
        </nav>
    </div>

    <x-description x-show="visible === 'description'" />
    <x-reviews x-show="visible === 'reviews'" />
</div>
