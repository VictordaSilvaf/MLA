<div {{ $attributes->class(["rounded-md p-4", $getBgClass]) }}>
    <div>
        <div class="flex justify-between">
            {{ $icon }}

            <h3 {{ $attributes->class(["text-sm font-medium ", $getTitleClass]) }}>{{ $title }}</h3>

            <p {{ $attributes->class(["text-sm font-medium ", $getTitleClass]) }}>{{ $now }}</p>
        </div>
        <div {{ $attributes->class([" mt-2 text-sm", $getMessageClass]) }}>
            <span>{{ $message }}</span>
            {{ $slot }}
        </div>
    </div>
</div>
