<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIPCOP') }}</title>
   

    <!-- Styles -->
    
	<link rel="stylesheet" href="/css/normalize.css">

	<link rel="stylesheet" href="/css/materialize.min.css">

	<link rel="stylesheet" href="/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" href="/css/sweetalert.css">

	<link rel="stylesheet" href="/css/style.css">

	<link rel="stylesheet" href="/css/animate.css">

    <!-- Scripts -->
    
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    

        @yield('content')
   

    <!-- Scripts -->
	<script src="/js/sweetalert.min.js"></script>

	<script src="/js/jquery-2.2.0.min.js"></script>

	<script src="/js/materialize.min.js"></script>

	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>

	<script src="/js/main.js"></script>

	
</body>
</html>
