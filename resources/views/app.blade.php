<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/images/logo.png" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="/css/cravetering-style.css">
    <link rel="stylesheet" type="text/css" href="/css/lightbox.css">
    @yield('css')
</head>
<body>
	@yield('content')
</body>
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/jquery-easing/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="/js/bootstrap-4/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/font-awesome/js/all.js"></script>
<script type="text/javascript" src="/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="/js/lightbox.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>

@yield('js')

<!-- sweetalert -->
@if(Session::has('msg') && Session::has('type') && Session::has('title'))
    <script>
        swal("{{ Session::get('title') }}", "{{ Session::get('msg') }}", "{{ Session::get('type') }}");
    </script>
@endif

<!-- sweetalert -->
@if(Session::has('text'))
    <script>
        swal({
        	text: "{{ Session::get('text') }}",
        });
    </script>
@endif

</html>