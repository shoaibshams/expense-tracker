<x-layouts.base>

    <x-layouts.sidenav/>

    <main class="content">

        <x-layouts.topbar/>

        {{ $slot }}

        <x-layouts.footer/>

    </main>

</x-layouts.base>
