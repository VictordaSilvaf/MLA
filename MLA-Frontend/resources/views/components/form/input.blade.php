<div class="flex flex-col w-full">
    @if (!empty($label))
        <label for="{{ $name }}" class="mb-1 text-sm font-bold text-gray-700">{{ $label }}</label>
    @endif

    <div class="relative flex items-center w-full">
        @if (!empty($icon) && $iconPosition === 'left')
            <x-icon :name="$icon" class="absolute left-4"></x-icon>
        @endif

        <input type="{{ $type }}" name={{ $name }} placeholder="{{ $placeholder }}"
            @class([
                'w-full bg-gray-200 broder border-solid border-gray-400 px-3 active:border-blue-500 disabled:bg-gray-300 disabled:border-gray-400 disabled:cursor-not-allowed rounded',
                'py-3' => $size === 'large',
                'py-2' => $size === 'medium',
                'py-0.5' => $size === 'small',
                'pl-12' => !empty($icon) && $iconPosition === 'left',
                'pr-12' => !empty($icon) && $iconPosition === 'right',
            ])>

        @if (!empty($icon) && $iconPosition === 'right')
            <x-icon :name="$icon" class="absolute right-4"></x-icon>
        @endif
    </div>
</div>
