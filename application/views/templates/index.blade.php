<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
	{{ HTML::style('/css/app.css') }}
</head>
<body>
	<div class="wrapper">
		<div id="body">
			@yield('content')
		</div>
	</div>
</body>
</html>
