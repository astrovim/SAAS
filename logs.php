<?php


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


    if(isset($_POST['selectUsername'])){
    
    $selectedUser = $_POST['selectUsername'];

    $selectedTimestamp = $_POST['selectDate'];

        if(isset($_POST['selectKeyword']) && $_POST['selectKeyword'] != ""){
            $selectedKeyword = $_POST['selectKeyword'];

            $logDb = $connection->prepare("select * from log where user=? AND keyword=? AND date(timestamp)=? order by timestamp desc");

            $logDb->execute([$selectedUser, $selectedKeyword, $selectedTimestamp]);
        
            $logResult = $logDb->fetchAll(PDO::FETCH_ASSOC);
        
            $logQuery = $logResult;
        
        }else {
            $logDb = $connection->prepare("select * from log where user=? AND date(timestamp)=? order by timestamp desc");

            $logDb->execute([$selectedUser, $selectedTimestamp]);
        
            $logResult = $logDb->fetchAll(PDO::FETCH_ASSOC);
        
            $logQuery = $logResult;
        }

    } else {

    $logDb = $connection->prepare("select * from log order by timestamp desc");

    $logDb->execute();

    $logResult = $logDb->fetchAll(PDO::FETCH_ASSOC);

    $logQuery = $logResult;

    }


$userDb = $connection->prepare("SELECT DISTINCT USER FROM `log`");

$userDb->execute();

$userResult = $userDb->fetchAll(PDO::FETCH_ASSOC);

$userQuery = $userResult;

$keyDb = $connection->prepare("SELECT DISTINCT KEYWORD FROM `log`");

$keyDb -> execute();

$keyResult = $keyDb->fetchAll(PDO::FETCH_ASSOC);

$keyQuery = $keyResult;


$dateDb = $connection->prepare("SELECT DISTINCT DATE(TIMESTAMP) FROM `log`");

$dateDb -> execute();

$dateResult = $dateDb->fetchAll(PDO::FETCH_ASSOC);

$dateQuery = $dateResult;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>

    
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginmdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="editStyle.css">

<script>

function highlight_log_row() {
    var table = document.getElementById('logTable');
    var cells = table.getElementsByTagName('td');

    for (var i = 0; i < cells.length; i++) {
        // Take each cell
        var cell = cells[i];
        // do something on onclick event for cell
        cell.onclick = function () {
            // Get the row id where the cell exists
            var rowId = this.parentNode.rowIndex;

            var rowsNotSelected = table.getElementsByTagName('tr');
            for (var row = 0; row < rowsNotSelected.length; row++) {
                rowsNotSelected[row].style.backgroundColor = "";
                rowsNotSelected[row].classList.remove('selected');
            }
            var rowSelected = table.getElementsByTagName('tr')[rowId];
            rowSelected.style.backgroundColor = "#9FE2BF";
            rowSelected.className += " selected";

        }
    }

}

</script>
</head>
<body onload="highlight_log_row();">


<div class="logout">
    <a href="Logout.php">Log out</a>
</div>

<div class ='editBody'>

            <div class='editHeader'>
                <h1>EDITING LOGS</h1>
            </div>

<div class="back">
    <a href="menu.php">&#8592;BACK</a>
</div>

<form action="logs.php" method="POST">
            <select name="selectUsername" id="selectUsername" required>
                <option value="">--Select Username--</option>
                <?php 
                    foreach($userQuery as $d){
                        if(isset($_POST['selectUsername'])){
                            if($selectedUser == $d['USER']){
                        echo '<option value="'. $d['USER'] .'" selected>' . $d['USER'] . '</option>';
                            }else{
                        echo '<option value="'. $d['USER'] .'">' . $d['USER'] . '</option>';
                            }
                        }else{
                        echo '<option value="'. $d['USER'] .'">' . $d['USER'] . '</option>';

                        }
                    }                
                ?>
            </select>

            <select name="selectKeyword" id="selectKeyword">
                <option value="">--Select Keyword--</option>
                <?php 
                    foreach($keyQuery as $d){
                        if(isset($_POST['selectKeyword']) && $_POST['selectKeyword'] != ""){
                            if($selectedKeyword == $d['KEYWORD']){
                        echo '<option value="'. $d['KEYWORD'] .'" selected>' . $d['KEYWORD'] . '</option>';
                            }else{
                        echo '<option value="'. $d['KEYWORD'] .'">' . $d['KEYWORD'] . '</option>';
                            }
                        }else{
                        echo '<option value="'. $d['KEYWORD'] .'">' . $d['KEYWORD'] . '</option>';

                        }
                        echo '<option value="'. $d['KEYWORD'] .'">' . $d['KEYWORD'] . '</option>';
                    }                
                ?>
            </select>

            <select name="selectDate" id="selectDate" required>
                <option value="">--Select Date--</option>
                <?php 
                    foreach($dateQuery as $d){
                        if(isset($_POST['selectDate'])){
                            if($selectedTimestamp == $d['DATE(TIMESTAMP)']){
                        echo '<option value="'. $d['DATE(TIMESTAMP)'] .'" selected>' . $d['DATE(TIMESTAMP)'] . '</option>';
                            }else{
                        echo '<option value="'. $d['DATE(TIMESTAMP)'] .'">' . $d['DATE(TIMESTAMP)'] . '</option>';
                            }
                        }else{
                        echo '<option value="'. $d['DATE(TIMESTAMP)'] .'">' . $d['DATE(TIMESTAMP)'] . '</option>';

                        }
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SEARCH</button>
            <a href="logs.php" style="font-weight:500; font-family:inherit;"><button class="btn" type="button">VIEW ALL</button></a>
            </form>

<div class="tableArea">

            <table class="table table-bordered table-hover" id="logTable" cellspacing="0" cellpadding="1" border="2" width="100%">
                <thead class="table-dark">
                <tr>

                <th>USER</th>
                <th>KEYWORD</th>
                <th>OLD</th>
                <th>NEW</th>
                <th>TIMESTAMP</th>

                </tr>
                </thead>
                <tbody>
            <?php

            foreach ($logQuery as $val){
                echo '<tr>'.
                '<td>'.$val['USER'].'</td>'.
                '<td>'.$val['KEYWORD'].'</td>'.
                '<td>'.$val['OLD'].'</td>'.
                '<td>'.$val['NEW'].'</td>'.
                '<td>'.$val['TIMESTAMP'].'</td>'.
                '</tr>';
            }

            ?>
                </tbody>

            </table>

</div>
    
</body>
</html>