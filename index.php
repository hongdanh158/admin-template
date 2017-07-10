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
        <li><a href="#"><i class="fa fa-fw fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
        <li><a href="#"><i class="fa fa-fw fa-newspaper-o" aria-hidden="true"></i>Tạp chí khoa học</a>
          <ul>  
            <li><a href="#">Danh sách bài tạp chí</a></li>
            <li><a href="#">Danh sách quyển tạp chí</a></li>
            <li><a href="#">Quản lý xuất bản</a></li>
            <li><a href="#">Quản lý tác giả</a></li>
            <li><a href="#">Thống kê</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa-flask" aria-hidden="true"></i>Quản lý đề tài NCKH</a>
          <ul>  
            <li><a href="#">Danh sách đề tài</a></li>
            <li><a href="#">Danh sách giáo trình</a></li>
            <li><a href="#">Danh sách tài liệu giảng dạy</a></li>
            <li><a href="#">Lĩnh vực</a></li>
            <li><a href="#">Cấp quản lý</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa-lightbulb-o" aria-hidden="true"></i>Sáng kiến - Kinh nghiệm</a>
          <ul>  
            <li><a href="#">Danh sách SKKN</a></li>
            <li><a href="#">Lĩnh vực</a></li>
            <li><a href="#">Thống kê</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa-address-book" aria-hidden="true"></i>Bản ghi nhớ</a>
          <ul>  
            <li><a href="#">Danh sách bản ghi nhớ</a></li>
            <li><a href="#">Đơn vị hợp tác</a></li>
            <li><a href="#">Thống kê</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa-handshake-o" aria-hidden="true"></i>Đoàn ra - Đoàn vào</a>
          <ul>  
            <li><a href="#">Danh sách đoàn ra</a></li>
            <li><a href="#">Danh sách đoàn vào</a></li>
            <li><a href="#">Thống kê</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa fa-users"></i>Tình nguyện viên</a>
          <ul>  
            <li><a href="#">TNV trong nước</a></li>
            <li><a href="#">TNV quốc tế</a></li>
            <li><a href="#">Thống kê</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa fa-file-text-o"></i>Quản lý công văn</a>
          <ul>  
            <li><a href="#">Danh sách công văn</a></li>
            <li><a href="#">Thống kê</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa fa-users"></i>Quản lý công việc</a>
          <ul>  
            <li><a href="#">Quản lý theo công việc</a></li>
            <li><a href="#">Quản lý theo nhân viên</a></li>
          </ul>
        </li>
    </ul>
</header>
<main class="main">
  <header class="header">
    <div class="container">
      <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
      <ul class="admin-menu">
        <li>
          <a class='config-button' href='#' data-activates='user-config'><i class="fa fa-user"></i>Quản lý thành viên</a>
          <ul id='user-config' class='dropdown-content'>
            <li><a href="#!">Danh sách thành viên</a></li>
            <li><a href="#!">Nhóm thành viên</a></li>
          </ul>
        </li>
        <li>
          <a class='config-button' href='#' data-activates='config'><i class="fa fa-cog"></i>Cấu hình site</a>
          <ul id='config' class='dropdown-content'>
            <li><a href="#!">Cấu hình chung</a></li>
            <li class="divider"></li>
            <li><a href="#!"><i class="fa fa-sitemap"></i> Cấu hình menu</a></li>
            <li><a href="#!"><i class="fa fa-sitemap"></i> Phân quyền menu</a></li>
            <li class="divider"></li>
            <li><a href="#!"><i class="fa fa-envelope"></i> SMTP</a></li>
            <li><a href="#!"><i class="fa fa-bell"></i> Thông báo</a></li>
          </ul>
        </li>
        <li>
          <a class='config-button' href='#' data-activates='personal-config'><i class="fa fa-user"></i>Lê Trương Hồng Danh </a>
          <ul id='personal-config' class='dropdown-content'>
            <li><a href="#!"><i class="fa fa-user"></i>Thông tin tài khoản</a></li>
            <li><a href="#!"><i class="fa fa-sign-out"></i>Thoát</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
  <div class="container body">
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