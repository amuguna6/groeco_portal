<html class="no-js" lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <link rel="icon" href="assets/images/groeco.png" type="image/gif" sizes="16x16">
    <title>GroEco Store | Admin Dashboard
    </title>
    
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="assets/dashcss/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="assets/dashcss/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="assets/dashcss/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="assets/dashcss/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="assets/dashcss/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="assets/dashcss/awesome-bootstrap-checkbox.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/dashcss/font-awesome.min.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="assets/dashcss/style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

  </head>
  
    
<body>

<div class="layouts">
    {{$slot}}
    @include ('layouts.footer')
</div>
    <!-- Loading Scripts -->
    <!-- script --> 
    @livewireScripts
    @yield('custom_script')   

    <script src="assets/dashjs/jquery.min.js">
    </script>
    <script src="assets/dashjs/bootstrap-select.min.js">
    </script>
    <script src="assets/dashjs/bootstrap.min.js">
    </script>
    <script src="assets/dashjs/jquery.dataTables.min.js">
    </script>
    <script src="assets/dashjs/dataTables.bootstrap.min.js">
    </script>
    <script src="assets/dashjs/Chart.min.js">
    </script>
    <script src="assets/dashjs/fileinput.js">
    </script>
    <script src="assets/dashjs/chartData.js">
    </script>
    <script src="assets/dashjs/main.js">
         </script>
@livewireScripts
</body>

</html>


