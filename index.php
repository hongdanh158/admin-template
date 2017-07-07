<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="minimum-scale=1.0, maximum-scale=2.0, width=device-width, user-scalable=yes" name="viewport" />
	<title>Admin Template</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- <link rel="stylesheet" href="css/ghpages-materialize.css"> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/init.js"></script>
</head>
<body>
<header>
    <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo">
        	<a id="logo-container" href="index.php" class="brand-logo">
            	<img src="images/logo-w.png" alt="">
            </a>
        </li>
        <li><a href="about.html" class="waves-effect waves-teal">About</a></li>
        <li><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li><a class="collapsible-header  waves-effect waves-teal">CSS</a>
                <ul class="collapsible-body">	
                  <li><a href="color.html">Color</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                  <li><a href="media-css.html">Media</a></li>
                  <li><a href="pulse.html">Pulse</a></li>
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="shadow.html">Shadow</a></li>
                  <li><a href="table.html">Table</a></li>
                  <li><a href="css-transitions.html">Transitions</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
            </li>
          </ul>
        </li>
        <li><a href="mobile.html" class="waves-effect waves-teal">Mobile</a></li>
        <li><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
        <li><a href="themes.html" class="waves-effect waves-teal">Themes<span class="new badge red"></span></a></li>
    </ul>
</header>
<main>
	<header class="header">
		<div class="container">
			<a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
			<ul class="admin-menu">
				<li>
					<a class='config-button' href='#' data-activates='config'><i class="fa fa-cog"></i> Cấu hình </a>
					<ul id='config' class='dropdown-content'>
						<li><a href="#!">Cấu hình chung</a></li>
						<li class="divider"></li>
						<li><a href="#!"><i class="fa fa-envelope"></i> SMTP</a></li>
						<li><a href="#!"><i class="fa fa-bell"></i> Thông báo</a></li>
					</ul>
				</li>
				<li>
					<a href="#"><i class="fa fa-sign-out"></i> Thoát</a>
				</li>
			</ul>
		</div>
	</header>
	<div class="container">
		<div class="row">
	    dsfdsfds
   		</div>
	</div>
	<!-- End Container -->
</main>
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
        © 2014-2017 Materialize, All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>