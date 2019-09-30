<?php
include_once '../system/System.php';
$ultra = new System();

if (isset($_POST['submit'])){
    $email = $_POST['username'];
    $pwd = $_POST['password'];

    $ultra->setEmail($email);
    $ultra->setPassword($pwd);

    $ultra->login();

}

if ($ultra->checkLoginState() == true){
    //header('location:'.$ultra->domain().'/dashboard/');
    exit();
}else {
    $ultra->deleteCookie();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Login - Dashboard</title>
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
    <link rel="manifest" href="../img/icons/site.webmanifest">
    <link href="../vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="../vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="login">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-user"></i>
                      </span>
                    </div>
                    <input class="form-control" name="username" type="email" placeholder="Email">
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-lock"></i>
                      </span>
                    </div>
                    <input class="form-control" name="password" type="password" placeholder="Password">
                  </div>
                </form>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-danger px-4" type="submit" name="submit" form="login">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button"><a href="../login/forgot-password.php">Forgot password?</a></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card text-white bg-light py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2 class="text-danger">Ultramed Health </h2>
                  <img src="../img/icons/android-chrome-512x512.png" alt="Ultramed logo" width="200">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="../vendors/jquery/js/jquery.min.js"></script>
    <script src="../vendors/popper.js/js/popper.min.js"></script>
    <script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendors/pace-progress/js/pace.min.js"></script>
    <script src="../vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="../vendors/@coreui/coreui/js/coreui.min.js"></script>
  </body>
</html>
