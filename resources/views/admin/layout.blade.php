<!DOCTYPE html>

<html lang="en">
@yield('head')

<body>
    <x-admin-loader />
    <x-admin-sidebar />
    <main class="main-content">
        <x-admin-header />
        @yield('content')
    </main>

    @yield('scripts')
</body>

</html>