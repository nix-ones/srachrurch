<!doctype html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" >
    <title>Hello, world!</title>
  </head>
  <body>
    @include('template.navbar')
    @yield('content')


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://kit.fontawesome.com/5ad897e4a9.js" crossorigin="anonymous"></script>
  </body>
</html>
