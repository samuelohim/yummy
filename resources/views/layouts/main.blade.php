<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Yummy</title>
		<link rel="stylesheet" href="/css/app.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
	</head>
	<body>
		<header id="site-header">
			<div class="navbar navbar-inverted">
				<div class="container">Home</div>

		</header>
		<main id="site-main">
			@yield('content')
		</main>
		<footer id="site-footer">Copyright &copy; 2017</footer>
	</body>
</html>