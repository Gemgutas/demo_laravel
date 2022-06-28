<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('js/popper.min.js') }}"></script>
    <script src="{{asset('js/boostrap.min.js') }}"></script>
    <title>My App</title>
</head>
<body>


    @include('_nav-bar')

    @if(Session::has('Error'))
        <div class="alert alert-danger">
            {{ Session::pull('Error') }}
        </div>
    @endif



    <div class="container">

        @yield('content')

    </div>

    <script>

    </script>

</body>
</html>
