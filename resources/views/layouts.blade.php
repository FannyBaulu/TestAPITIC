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
    <div class="d-flex flex-row mb-4">
        <h3 class="flex-grow-1 m-3">My Guild Info</h3>

    </div>
  @yield('content')
  @yield('script')  

</body>
</html>