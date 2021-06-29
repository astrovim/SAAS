<?php

session_start();
if (isset($_SESSION['verified'])) {
	header('Location: menu.php');
	exit;
}

try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=saas', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }


$emailDb = $connection->prepare("select EMAIL from ADMIN");

$emailDb->execute();

$emailResult = $emailDb->fetchAll(PDO::FETCH_ASSOC);

$emailQuery = $emailResult;

foreach($emailResult as $d){
    $emailArray[] = $d['EMAIL'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginmdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="LoginStyle.css">

<script>

    function emailCheck(){
        var inputEmail = document.getElementById('forgotEmail').value;
        var ar = <?php echo json_encode($emailArray) ?>;

        if(ar.includes(inputEmail)){
            document.getElementById('submitBtn').style.display = 'inline-block';
        }else {
            document.getElementById('submitBtn').style.display = 'none';
        }
    }

</script>
</head>

<body>
    <div class="loginBox">
        <form method="GET">
        <input type="hidden" name="credentials" value="">
        </form>
        <h1>FORGOT PASSWORD</h1>
        <form id="forgotForm" action="sendmail.php" method="POST">
        <div class="form-white form-outline">
            <input class="form-control" id="forgotEmail" name="forgotEmail" type="email" required onkeyup="emailCheck();">
            <label class="form-label" for="forgotEmail">Email Address</label>     
        </div>
        <div style="height:50px;">
            <button class="btn btn-primary" type="submit" id ="submitBtn" name="submit" style="display:none;">Send</button>            
        </div>
    </form>
    <div>
        <a href="login.php">Back to Login</a>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
</body>
</html>