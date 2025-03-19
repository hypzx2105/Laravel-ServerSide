<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tourism Panama</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ time() }}">

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    
<body>

    @include('layouts.nav')


    <div class="content-container">
        @yield('content')
    </div>

    @include('layouts.footer')

</body>
</html>
