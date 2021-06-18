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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginmdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="editStyle.css">

    <script>
        function pageSelect(){
            var a=document.getElementById("editSelect");
            var distext=a.options[a.selectedIndex].text;
            if(distext!='--Select Section to Edit--'){
                document.getElementById("pageSelectBtn").disabled=false;
            }else {
                document.getElementById("pageSelectBtn").disabled=true;
            }
        }
    </script>
</head>
<body>

<div class="logout">
    <a href="Logout.php">Log out</a>
</div>

<div class ='editBody'>

            <div class='editHeader'>
                <h1>Edit Selection</h1>
            </div>

            <form action="editing.php" method="POST">
                <select name="editSelect" id="editSelect" onchange="pageSelect();">
                    <option value="default">--Select Section to Edit--</option>
                    <option value="MainPage">Main Page</option>
                    <option value="Sect1.1">Section 1.1</option>
                    <option value="Sect1.1">Section 1.2</option>
                    <option value="Sect1.1">Section 1.3</option>
                    <option value="Sect1.1">Section 1.4</option>
                    <option value="Sect1.1">Section 1.5</option>
                    <option value="Sect1.1">Section 2.1</option>
                    <option value="Sect1.1">Section 2.2</option>
                    <option value="Sect1.1">Section 2.3</option>
                    <option value="Sect1.1">Section 2.4</option>
                    <option value="Sect1.1">Section 2.5</option>
                    <option value="Sect1.1">Section 3.1</option>
                    <option value="Sect1.1">Section 3.2</option>
                    <option value="Sect1.1">Section 3.3</option>
                    <option value="Sect1.1">Section 3.4</option>
                    <option value="Sect1.1">Section 3.5</option>
                    <option value="Sect1.1">Section 3.6</option>
                    <option value="Sect1.1">Section 3.7</option>
                    <option value="Sect1.1">Section 3.8</option>
                    <option value="Sect1.1">Section 3.9</option>
                    <option value="Sect1.1">Section 3.10</option>
                    <option value="Sect1.1">Section 3.11</option>
                </select>
                <button id="pageSelectBtn" class="btn" type="submit" disabled>GO</button>
            </form>
</div>
    
</body>
</html>