<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="minimum-scale=1.0, maximum-scale=2.0, width=device-width, user-scalable=yes" name="viewport" />
  <title>Login</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- <link rel="stylesheet" href="css/ghpages-materialize.css"> -->
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
</head>
<style>
  body {
    background:  #f6f6f6;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 16px;
    color: rgba(0,0,0,0.9);
  }
  .login {
    width: 100%;
    max-width: 420px;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.35);
    margin:  120px auto 0 auto;
    background: #fff;
  }
  .login .header {
    background: #f6f6f6;
    text-align: center;
    padding: 10px 0;
    height:  70px;
  }
  .login .header .logo {
    height:  50px;
  }
  .login .content {
    padding: 30px;
  }
  
  .login .content .forgot-password {
      text-align: right;
      margin-bottom: 20px;
  }
  .login .content .forgot-password a {
      text-decoration: none;
      display: block;
      padding: 0 0 10px 0;
  }

  .login .show-pass {
    float: left;
    display: none;
  }
  .forgot-pass {
    color: #555;
    font-size: 14px;
    -webkit-transition: all .25s ease-in-out;
       -moz-transition: all .25s ease-in-out;
        -ms-transition: all .25s ease-in-out;
         -o-transition: all .25s ease-in-out;
            transition: all .25s ease-in-out;
  }
  .forgot-pass:hover {
    color: #dd3004;
  }
</style>
<body>
    <div class="login">
      <div class="header">
        <img src="images/logo.png" class="logo" alt="">
      </div>
      <div class="content">
        <form action="" method="post" class="login-form">
          <div class="input-field">
            <input id="txtUsername" type="text" class="validate">
            <label for="txtUsername">Username</label>
          </div>
          <div class="input-field">
            <input id="txtPassword" type="text"  class="validate">
            <label for="txtPassword">Password</label>
          </div>
        </form>
        <div class="forgot-password">
            <div class="checkbox show-pass">
              <input type="checkbox" class="filled-in" id="show-pass"/>
              <label for="show-pass">Hiện mật khẩu</label>
            </div>
          <a href="#" class="forgot-pass">Quên mật khẩu?</a>
        </div>
        <div class="center-align">
          <a class="waves-effect waves-light btn red"><i class="material-icons left">cloud</i>button</a>
        </div>
      </div>
    </div>
</body>
</html>