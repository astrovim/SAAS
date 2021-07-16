<?php

session_start();
if (!isset($_SESSION['verified'])) {
	header('Location: main.php');
	exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAAS</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginmdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="editStyle.css">

</head>
<body style="text-align:center; margin-top: 35vh;">

<h2>UNFORTUNATELY THE SITE IS DOWN FOR A BIT OF MAINTENANCE RIGHT NOW.</h2>
<h4 style="color: whitesmoke;font-family: 'Bebas Neue';">PLEASE CHECK BACK SOON.</h4>
<i class="fa fa-wrench" aria-hidden="true" style="color: silver; font-size: 120px; margin-top: 5vh;"></i>

    
</body>
</html>