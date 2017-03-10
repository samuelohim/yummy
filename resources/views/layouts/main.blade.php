<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Yummy</title>
		<link rel="stylesheet" href="/css/app.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
		<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
	</head>
	<body>
		<div id="outer-elem">
				<header id="site-header">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							
							<div class="navbar-header">
								<a href="/home" class="navbar-brand"><i class="fa fa-btn fa-home"></i>Homee</a>
								<ul class="navbar-nav">
									<li><a href="/home">Home</a></li>
								</ul>
								<ul class="navbar-nav">
									<li><a href="home/create">Add</a></li>
								</ul>
							</div>
						</div>

					</nav>

				</header>
				<main id="site-main">
					@yield('content')
				</main>

			<div id="outer-elem">
				<footer id="site-footer">
					<div class="container-fluid">Copyright &copy; 2017</div>
				</footer>
				<div class="footer" style = 'background-color: #c3c3c3;'>Copyright &copy; 2018</div>
			</div>
		</div>
	</body>
</html>