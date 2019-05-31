<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href= "https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>
<p>hey {{$na}} welcome to the new world.!</p>
<p>My second name is {{$fname}} the most</p>
    <div class="container">
        @yield('content')

    </div>
    <div class="container">
        @yield('footer')

    </div>
    
</body>
</html>