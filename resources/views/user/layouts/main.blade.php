<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.layouts.head')
    <title>Песочница | @yield('title')</title>
</head>
<body class="grey lighten-5 ">
    @include('user.layouts.navbar')
    <div class="row">

        <div class="container">
                <div class="col s9">

                    @section('content')
                        @show
                </div>
        </div>

    </div>
    @include('user.layouts.footer')

</body>
</html>
