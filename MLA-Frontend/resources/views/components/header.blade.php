<div class="flex flex-row items-center justify-between w-full px-12 py-4 border-b border-gray-300 border-solid">
    <div class="">
        <img class="w-32" src="{{ Vite::images($logo) }}" alt="">
    </div>

    <div class="flex-row items-center hidden gap-0.5 md:flex">
        <x-form.input icon="home" iconPosition="right" type="text" name="name" placeholder="Nome" size="medium" />
        <x-form.button variation="primary" text="" type="button" icon="search" iconPosition="right"
            size="medium" />
    </div>

    <div class="flex flex-row items-center gap-0.5">
        <x-form.button class="flex md:hidden" variation="primary" text="" type="button" icon="search" iconPosition="right"
            size="medium" />

        <x-form.button variation="primary" text="Login In" type="button" icon="person" iconPosition="right"
            size="medium" />

        <x-form.button variation="outline" text="" type="button" icon="shopping_cart" iconPosition="right"
            size="medium" />
    </div>
</div>
