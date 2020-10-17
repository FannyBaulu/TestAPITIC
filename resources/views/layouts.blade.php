<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}" rel='stylesheet'>
    <script src="{{asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="d-flex flex-row">
        <h3 class="flex-grow-1 ">Game Info</h3>
        <p class="m-1">Se connecter</p>
        <p class="m-1">S'enregistrer</p>
    </div>
  @yield('content')  

</body>
</html>