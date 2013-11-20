<?php

session_start();

if(isset($_SESSION['user'])){
    header("Location: ./");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>CourtWatch</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/libs/html5shiv.js"></script>
      <script src="js/libs/respond.min.js"></script>
    <![endif]-->
  </head>

    <body>

        <div id="container">
            <form id="loginForm" class="form-signin">
                <img src="img/logo.png" />
                <input type="text" id="username" class="form-control" placeholder="User ID" autofocus>
                <input type="password" id="password" class="form-control" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                <div class="login-error" style="display:none;"></div>
            </form>
        </div>

        <script type="text/javascript" src="js/libs/jquery.js"></script>
        <script type="text/javascript" src="js/views/login.js"></script>
    </body>
</html>