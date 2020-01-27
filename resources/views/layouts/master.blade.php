<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d6bfc212a4.js" crossorigin="anonymous"></script>
    <title>EvApp - @yield('title')</title>
    
</head>
<body>
    <div class="container">
            <!-- Table -->
            @yield('content')
    </div>

    <script src="asset{{ asset('plugins/ciudad.js') }}"></script>
</body>
    
</html>