<?php

session_start();
if (!isset($_SESSION['verified'])) {
	header('Location: Login.php');
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAAS MENU</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginmdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="LoginStyle.css">
</head>

<body>
    <div class="loginBox" style="height: 33vh;">
        
    <div class="menuBtn">
    <a href="editUser.php"><button class="btn">User Management</button></a>
    </div>
    <div class="menuBtn">
    <a href="edit.php"><button class="btn">Edit Page Contents</button></a>
    </div>
    <div class="menuBtn">
    <a href="logs.php"><button class="btn">View Edit Logs</button></a>
    </div>
    <div class="menuBtn">
    <a href="Logout.php">Log out</a>
    </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
</body>
</html>