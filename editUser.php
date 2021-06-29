<?php

session_start();
if (!isset($_SESSION['verified'])) {
	header('Location: Login.php');
	exit;
}

$userT = $_SESSION['CurrentUser'];

try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=saas', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }

$userDb = $connection->prepare("select * from ADMIN");

$userDb->execute();

$userResult = $userDb->fetchAll(PDO::FETCH_ASSOC);

$userQuery = $userResult;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN USERS</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginmdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="editStyle.css">

    <script>
        function submitBtnVis(){
            var pass1 = document.getElementById('password').value;
            var pass2 = document.getElementById('password1').value;

            if (pass1 == pass2 && pass1 != ""){
                document.getElementById('submitBtn').style.display = 'block';
            }else {
                document.getElementById('submitBtn').style.display = 'none';
            }
        }
        function csubmitBtnVis(){
            var pass1 = document.getElementById('cpassword').value;
            var pass2 = document.getElementById('cpassword1').value;

            if (pass1 == pass2){
                document.getElementById('csubmitBtn').style.display = 'block';
            }else {
                document.getElementById('csubmitBtn').style.display = 'none';
            }
        }

        function cpSectDis(){
            document.getElementById('cpSect').style.display = 'block';
            document.getElementById('emSect').style.display = 'none';

        }
        
        function emSectDis(){
            document.getElementById('cpSect').style.display = 'none';
            document.getElementById('emSect').style.display = 'block';
        }

        function highlight_log_row() {
    var table = document.getElementById('userTable');
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

            if(rowSelected.cells[0].innerHTML != 'admin'){
            document.getElementById('cpBtn').style.display = 'inline-block';
            document.getElementById('delBtn').style.display = 'inline-block';
            document.getElementById('cmBtn').style.display = 'inline-block';
            }else{
            document.getElementById('delBtn').style.display = 'none';
            document.getElementById('cpBtn').style.display = 'none';
            document.getElementById('cmBtn').style.display = 'none';
            }

            var wew = '<?php echo $userT?>';
            if(wew == 'admin'){
            document.getElementById('cpBtn').style.display = 'inline-block';
            document.getElementById('cmBtn').style.display = 'inline-block';
            }

            document.getElementById('cpSect').style.display = 'none';
            document.getElementById('emSect').style.display = 'none';

            document.getElementById("userDel").value=rowSelected.cells[0].innerHTML;
            document.getElementById("userP").value=rowSelected.cells[0].innerHTML;
            document.getElementById("userEm").value=rowSelected.cells[0].innerHTML;

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

<a href="menu.php">&#8592;BACK</a>

            <div class='editHeader'>
                <h1>User Credentials</h1>
            </div>

<div style="display:inline-block; width: 35%">
            <h2>ADD USER</h2>
            <form action="userDb.php" method="POST" onsubmit="return confirm('Are you sure you want to add this user?')">
            <div class="form-white form-outline credentials">
            <input class="form-control" id="username" name="username" type="text" required>
            <label class="form-label" for="username">Username</label>     
            </div>
            <div class="form-white form-outline credentials">
            <input class="form-control" id="firstName" name="firstName" type="text" required>
            <label class="form-label" for="firstName">First Name</label>
            </div>
            <div class="form-white form-outline credentials">
            <input class="form-control" id="middleName" name="middleName" type="text" required>
            <label class="form-label" for="middleName">Middle Name</label>
            </div>
            <div class="form-white form-outline credentials">
            <input class="form-control" id="lastName" name="lastName" type="text" required>
            <label class="form-label" for="lastName">Last Name</label>
            </div>
            <div class="form-white form-outline credentials">
            <input class="form-control" id="emailAd" name="emailAd" type="email" required>
            <label class="form-label" for="emailAd">Email</label>
            </div>
            <div class="form-white form-outline credentials">
            <input class="form-control" id="password" name="password" type="password" onkeyup="javascript:submitBtnVis();" required>
            <label class="form-label" for="password">Password</label>
            </div>
            <div class="form-white form-outline credentials">
            <input class="form-control" id="password1" name="password1" type="password" onkeyup="javascript:submitBtnVis();" required>
            <label class="form-label" for="password1">Confirm Password</label>
            </div>
            <div style="height:30px">
            <button id="submitBtn" class="btn btn-primary" type="submit" name="submit" name="action" style="display:none;">SUBMIT</button>
            </div>
            </form>
</div>


            <div class="tableArea" style="width:60%; display: inline-block;">

            <table class="table table-bordered table-hover" id="userTable" cellspacing="0" cellpadding="1" border="2" width="100%">
                <thead class="table-dark">
                <tr>

                <th>USERNAME</th>
                <th>FIRSTNAME</th>
                <th>MIDDLENAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>

                </tr>
                </thead>
                <tbody>
            <?php

            foreach ($userQuery as $val){
                echo '<tr>'.
                '<td>'.$val['USERNAME'].'</td>'.
                '<td>'.$val['FIRSTNAME'].'</td>'.
                '<td>'.$val['MIDDLENAME'].'</td>'.
                '<td>'.$val['LASTNAME'].'</td>'.
                '<td>'.$val['EMAIL'].'</td>'.
                '</tr>';
            }

            ?>
                </tbody>

            </table>

            
            <form action="userDb.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                <input type="hidden" id="userDel" name="userDel">
                <button id="delBtn" class="btn btn-primary" type="submit" style="display:none;">DELETE</button> 
                <button id="cpBtn" class="btn btn-primary" type="button" style="display:none;" onclick="cpSectDis();">CHANGE PASSWORD</button>
                <button id="cmBtn" class="btn btn-primary" type="button" style="display:none;" onclick="emSectDis();">CHANGE EMAIL</button>                             
            </form>

<div id="cpSect" style="display:none; margin-top: 15px;">
            <form action="userDb.php" method="post" onsubmit="return confirm('Are you sure you want to save?')">
            <input type="hidden" id="userP" name="userP">
            <div class="form-white form-outline credentials">
            <input class="form-control" id="cpassword" name="cpassword" type="password" onkeyup="javascript:csubmitBtnVis();" required>
            <label class="form-label" for="cpassword">Password</label>
            </div>
            <div class="form-white form-outline credentials">
            <input class="form-control" id="cpassword1" name="cpassword1" type="password" onkeyup="javascript:csubmitBtnVis();" required>
            <label class="form-label" for="cpassword1">Confirm Password</label>
            </div>
            <button class="btn btn-primary" id="csubmitBtn" type="submit" style="display:none;">SAVE</button>
            </form>
</div>

<div id="emSect" style="display:none; margin-top: 15px;">
            <form action="userDb.php" method="post" onsubmit="return confirm('Are you sure you want to save?')">
            <input type="hidden" id="userEm" name="userEm">
            <div class="form-white form-outline credentials">
            <input class="form-control" id="cemailAd" name="cemailAd" type="email" required>
            <label class="form-label" for="cemailAd">Email</label>
            </div>
            <button class="btn btn-primary" id="emubmitBtn" type="submit">SAVE</button>
            </form>
</div>

            </div>


</div>

<input type="hidden" id="userType" name="userType" value="<?php echo $userT ?>">
    

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
</body>
</html>