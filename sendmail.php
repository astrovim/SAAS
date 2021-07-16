<?php
try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=saas', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }

    if (isset($_POST['forgotEmail'])) {

        $forgotEmail = $_POST['forgotEmail'];

        $to_email = $forgotEmail;
        
        $emailDb = $connection->prepare("select * from ADMIN where EMAIL=?");

        $emailDb->execute([$forgotEmail]);
        
        $emailResult = $emailDb->fetchAll(PDO::FETCH_ASSOC);
        
        $emailQuery = $emailResult;
        
        foreach($emailResult as $d){
            $username = $d['USERNAME'];
            $password = $d['PASSWORD'];
            $firstName = $d['FIRSTNAME'];
        }
    
    }else{
        header('Location: Login.php');
        exit;
    }

$body = 'Hi! ' . $username . ',' . "\n" . "\n" . 'Here is your credentials,' . "\n" . "\n" . 'USERNAME: ' . $username . "\n" . 'PASSWORD: ' . $password;



$subject = "OSAS Recovery Email";
$headers = "From: neu.osas@gmail.com";
 
if (mail($to_email, $subject, $body, $headers)) {
    header('Location: sentEmail.php');
} else {
    echo "Email sending failed...";
}

?>