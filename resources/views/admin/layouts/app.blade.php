<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.meta')
    @stack('before-style')
    @include('admin.includes.style')
    @stack('after-style')
    @vite([])
</head>

<body>
    @include('sweetalert::alert')
    @include('admin.includes.header')
    @yield('content')
    @stack('before-script')
    @include('admin.includes.script')
    @stack('after-script')
</body>

</html>