<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.layouts.head')
    <title>Песочница | @yield('title')</title>
</head>
<body class="grey lighten-5 ">
    @include('user.layouts.navbar')

        @section('content')
            @show

    @include('user.layouts.footer')

</body>
</html>
