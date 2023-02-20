<a href="{{ $url }}"
    {{ $attributes->class([
        'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 dark:text-gray-200 focus:outline-none transition duration-150 ease-in-out hover:text-blue-500  duration-200' => !$active,
        'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 text-gray-900 dark:text-gray-200 border-gray-900 dark:border-gray-200 focus:outline-none focus:border-gray-700 transition duration-150 ease-in-out hover:text-blue-500 hover:border-blue-500 duration-200' => $active,
    ]) }}>
    {{ $name }}
</a>
