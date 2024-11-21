<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  

    <link async rel="stylesheet" href="{{ asset('assets/petry/bootstrap.min.css') }}">
    <link async rel="stylesheet" href="{{ asset('assets/petry/prettify.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style-personal.min.css') }}">
    @yield('styles')
    <style>
        body {
            background-color: rgba(0, 36, 96, .8);
        }
    </style>


</head>

<body id="page-top">
    @yield('content')
</body>

</html>
