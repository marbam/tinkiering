<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tinking with Alpine.js</title>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body>

    {{--
        Dropdown example
    --}}

    <div x-data="{ open: false }">
    <button @click="open = true">Open Dropdown</button>
    <ul
        x-show="open"
        @click.away="open = false"
    >
        Dropdown Body
    </ul>

    <hr>

    {{-- Tabs --}}

    <div x-data="{ tab: 'foo' }">
        <button :class="{ 'active': tab === 'foo' }" @click="tab = 'foo'">Foo</button>
        <button :class="{ 'active': tab === 'bar' }" @click="tab = 'bar'">Bar</button>

        <div x-show="tab === 'foo'">Tab Foo</div>
        <div x-show="tab === 'bar'">Tab Bar</div>
    </div>

</div>


    </body>
</html>
