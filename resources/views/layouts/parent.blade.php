<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.include')
    <title>E-learning | @yield('title')</title>
    <!-- <script>
        module.exports = {
            darkMode: ['class', '[data-mode="dark"]'],
        }
    </script> -->
</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.script')

    @stack('add-script')
</body>

</html>
