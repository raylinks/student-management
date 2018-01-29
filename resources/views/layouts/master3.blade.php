 <!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
  <title>Tempo | Rainforest sch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/tempo/css/bootstrap.min.css')}} ">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/tempo/css/font-awesome.min.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{ asset ('css/tempo/css/slick-team-slider.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/tempo/css/style.css') }}">
  <!-- =======================================================
        Theme Name: Tempo
        Theme URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
	<script>
		window.Laravel = <?php echo json_encode([
		    'csrfToken' => csrf_field(),
				'appUrl' => url('/')
			]); ?>
	</script>
</head>
<body>
<div id="app">
	<!--HEADER START-->
	<div class="main-navigation navbar-fixed-top">
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.html">RainForest school</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
			    <li class="active"><a href="#banner">Home</a></li>
			    <li><a href="#service">Our School</a></li>
			    <li><a href="#portfolio">Portfolio</a></li>
			    
			  </ul>
			</div>
		  </div>
		</nav>
	</div>
	<!--HEADER END-->
	@yield('content')
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
 </html>
