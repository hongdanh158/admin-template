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
  <script src="js/script.js"></script>
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
        <li><a href="#"><i class="fa fa-fw fa-user-o"></i><span class="text">About</span></a></li>
        <li><a href="#"><i class="fa fa-fw fa-address-book"></i><span class="text">Getting Started</span></a></li>
        <li><a href="#"><i class="fa fa-fw fa-calendar"></i><span class="text">CSS</span></a>
            <ul>  
              <li><a href="#">Color</a></li>
              <li><a href="#">Grid</a></li>
              <li><a href="#">Helpers</a></li>
              <li><a href="#">Media</a></li>
              <li><a href="#">Pulse</a></li>
              <li><a href="#">Sass</a></li>
              <li><a href="#">Shadow</a></li>
              <li><a href="#">Table</a></li>
              <li><a href="#">Transitions</a></li>
              <li><a href="#">Typography</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa-camera"></i><span class="text">Mobile</span></a></li>
        <li><a href="#"><i class="fa fa-fw fa-cloud-download"></i><span class="text">Showcase</span></a></li>
        <li><a href="#"><i class="fa fa-fw fa-database"></i><span class="text">Themes</span><span class="new badge red"></span></a></li>
    </ul>
</header>
<main class="main">
  <header class="header">
    <div class="container">
      <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
      <a href="#" id="btn-nav-desktop" class="btn-nav-desktop"><i class="material-icons">menu</i></a>
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