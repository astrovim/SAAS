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

$logDb = $connection->prepare("select * from log order by timestamp desc");

$logDb->execute();

$logResult = $logDb->fetchAll(PDO::FETCH_ASSOC);

$logQuery = $logResult;

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