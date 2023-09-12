<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.meta')
    @stack('before-style')
    @include('admin.includes.style')
    @stack('after-style')
    @livewireStyles
    @vite([])

</head>

<body>
    @include('sweetalert::alert')
    @include('admin.includes.header')
    @yield('content')
    @stack('before-script')
    @include('admin.includes.script')
    @stack('after-script')
    @livewireScripts
    @livewireChartsScripts
</body>

</html>
