<?php
session_start();

session_start();
if (!isset($_SESSION['verified'])) {
	header('Location: Login.php');
	exit;
}



try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=saas', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }

    if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $emailAd = $_POST['emailAd'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];

    $statement = $connection->prepare("INSERT INTO `admin`(`USERNAME`, `FIRSTNAME`, `MIDDLENAME`, `LASTNAME`, `EMAIL`, `PASSWORD`) VALUES(?, ?, ?, ?, ?, ?)");

    $statement->execute([$username ,$firstName, $middleName, $lastName, $emailAd, $password]);
    
    header('Location: userEdited.php');

    }

    if(isset($_POST['userDel'])){

        $username = $_POST['userDel'];
    
        $statement = $connection->prepare("DELETE FROM `admin` WHERE USERNAME=?");
    
        $statement->execute([$username]);
        
        header('Location: editUser.php');
    
        }

    if(isset($_POST['userEm'])){

        $username = $_POST['userEm'];
        $email = $_POST['cemailAd'];
    
        $statement = $connection->prepare("UPDATE `admin` SET `EMAIL`= ? WHERE USERNAME=?");
    
        $statement->execute([$email, $username]);
        
        header('Location: editUser.php');
    
        }

    if(isset($_POST['userP'])){

        $username = $_POST['userP'];
        $password = $_POST['cpassword'];
    
        $statement = $connection->prepare("UPDATE `admin` SET `PASSWORD`= ? WHERE USERNAME=?");
    
        $statement->execute([$password, $username]);
        
        header('Location: userEdited.php');
    
        }

?>