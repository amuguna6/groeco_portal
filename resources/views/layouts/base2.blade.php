<!doctype html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <link rel="icon" href="assets/images/groeco.png" type="image/gif" sizes="16x16">
    <title>Grocery Store | Admin Dashboard
    </title>
       <!-- Font awesome -->
    <link rel="stylesheet" href="assets/admin/css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="assets/admin/css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="assets/admin/css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="assets/admin/css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="assets/admin/css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="assets/admin/css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    @livewireStyles
  </head>
  <body>

    {{$slot}}
    <!-- Loading Scripts -->
    @livewireScripts

    <script src="{{asset('assets/admin/js/jquery.min.js')}}">
    </script>
    <script src="{{asset('assets/admin/js/bootstrap-select.min.js')}}">
    </script>
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}">
    </script>
    <script src="assets/admin/js/jquery.dataTables.min.js">
    </script>
    <script src="{{asset('assets/admin/js/dataTables.bootstrap.min.js')}}">
    </script>
    <script src="assets/admin/js/Chart.min.js">
    </script>
    <script src="assets/admin/js/fileinput.js">
    </script>
    <script src="assets/admin/js/chartData.js">
    </script>
    <script src="{{asset('assets/admin/js/main.js')}}">
    </script>

  
</body>
</html>

