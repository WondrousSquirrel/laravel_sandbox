<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
    <title>Песочница | @yield('title')</title>
</head>
<body class="grey lighten-5 ">
    @include('admin.layouts.navbar')
    <div class="row">
        <div class="col s3  blue-text text-lighten-5 teal darken-4"  >
            @include('admin.layouts.sidebar')
        </div>
        <div class="container">
            <div class="col s9">

                @section('content')
                    @show

            </div>
        </div>
        
    </div>
    @include('admin.layouts.footer')

</body>
</html>