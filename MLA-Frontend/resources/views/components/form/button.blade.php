<button type="{{ $type }}"
    {{ $attributes->class([
        'rounded flex item-center justify-center px-4 duration-100',
        'border-solid border border-blue-500 bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white' =>
            $variation == 'primary',
        'bg-red-500 hover:bg-red-600 active:bg-red-700 focus:ring-red-400 focus:ring-offset-red-200 text-white' =>
            $variation == 'danger',
        'bg-white border-solid border border-blue-500 hover:border-blue-700 hover:text-blue-700 focus:ring-blue-700 focus:ring-offset-blue-200 text-blue-500 active:text-blue-900 disabled:text-blue-500' =>
            $variation == 'outline',
        'py-3 text-md' => $size === 'large',
        'py-2.5 text-md' => $size === 'medium',
        'py-2 text-xs' => $size === 'small',
    ]) }}>
    <div class="flex flex-row items-center">
        @if (!empty($icon) && $iconPosition === 'left')
            <x-icon :name="$icon"></x-icon>
        @endif

        <span @class([
            'ml-2' => !empty($text) && !empty($icon) && $iconPosition === 'left',
            'mr-2' => !empty($text) && !empty($icon) && $iconPosition === 'right',
        ])>{{ $text }}</span>

        @if (!empty($icon) && $iconPosition === 'right')
            <x-icon :name="$icon"></x-icon>
        @endif
    </div>
</button>
