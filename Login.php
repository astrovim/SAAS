<?php

session_start();
if (isset($_SESSION['verified'])) {
	header('Location: menu.php');
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAAS Login</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginmdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="LoginStyle.css">
</head>

<body>
    <div class="loginBox">
        <form method="GET">
        <input type="hidden" name="credentials" value="">
        </form>
        <h1>LOG IN</h1>
        <form id="loginForm" action="LoginValidation.php" method="POST">
        <div class="form-white form-outline">
            <input class="form-control" id="username" name="username" type="text" required>
            <label class="form-label" for="username">Username</label>     
        </div>
        <div class="form-white form-outline">
            <input class="form-control" id="password" name="password" type="password" required>
            <label class="form-label" for="password">Password</label>
        </div>
        <div>
        <a href="forgot.php">Forgot Password?</a>
        </div>
        <div class="credentials">
           <h6> <?php if(isset($_GET['credentials'])) { echo $_GET['credentials']; } ?> </h6>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="submit">Login</button>
        </div>
    </form>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
</body>
</html>