@aware(['type' => 'error'])
<button {{ $attributes->merge(['type' => 'button'])->class(["mt-2 px-4 py-2 flex justify-center items-center rounded-md border border-gray-300 text-sm"]) }}>
    @if ($type === 'error')
    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12zm-1-5a1 1 0 112 0v4a1 1 0 11-2 0v-4zm1-2a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
    </svg>
    @elseif ($type === 'warning')
    <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12zm-1-5a1 1 0 112 0v4a1 1 0 11-2 0v-4zm1-2a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
    </svg>
    @endif

</button>
