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

if(isset($_POST['editSelect'])){

$ment= $_POST['editSelect'];

switch ($ment) {
    case 'MainPage':
        header('Location: edit.php');
        break;
    
    default:
        header('Location: main.php');
        break;
}
}

$currentUser = $_SESSION['CurrentUser'];


// Main Page ++    
// Text Edits

if(isset($_POST['mainheadertxt'])){

$ment= $_POST['mainheadertxt'];

$old = $connection->prepare("SELECT content FROM text WHERE output = 'mainheadertxt'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainheadertxt', $oldVal, $ment]);

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainheadertxt'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainwelcometxtheader'])){

    $ment= $_POST['mainwelcometxtheader'];

    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mainwelcometxtheader'");

    $old->execute();

    $older = $old->fetchAll(PDO::FETCH_ASSOC);

    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }

    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

    $log->execute([$currentUser, 'mainwelcometxtheader', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainwelcometxtheader'");
    
    $statement->execute([$ment]);

    header('Location: edited.php');
    
    }

if(isset($_POST['mainwelcometxt'])){

$ment= $_POST['mainwelcometxt'];

$old = $connection->prepare("SELECT content FROM text WHERE output = 'mainwelcometxt'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainwelcometxt', $oldVal, $ment]);

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainwelcometxt'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainservice1'])){

$ment= $_POST['mainservice1'];

$old = $connection->prepare("SELECT content FROM text WHERE output = 'mainservice1'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainservice1', $oldVal, $ment]);

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainservice1'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainservice2'])){

$ment= $_POST['mainservice2'];

$old = $connection->prepare("SELECT content FROM text WHERE output = 'mainservice2'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainservice2', $oldVal, $ment]);

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainservice2'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainservice3'])){

$ment= $_POST['mainservice3'];

$old = $connection->prepare("SELECT content FROM text WHERE output = 'mainservice3'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainservice3', $oldVal, $ment]);

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainservice3'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainneupagelink'])){

$ment= $_POST['mainneupagelink'];

$old = $connection->prepare("SELECT content FROM text WHERE output = 'mainneupagelink'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainneupagelink', $oldVal, $ment]);

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainneupagelink'");

$statement->execute([$ment]);

header('Location: edited.php');

}

// Image edits

if(isset($_POST['mainslide'])){

$ment = $_POST['mainslide'];

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainslide', '**ADDED**', $ment]);

$statement = $connection->prepare("INSERT INTO gallery(filename) VALUES (?)");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainslidermv'])){

    $ment = $_POST['mainslidermv'];

    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

    $log->execute([$currentUser, 'mainslide', '**DELETED**', $ment]);    
    
    $statement = $connection->prepare("DELETE FROM gallery WHERE filename=?");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['events'])){

$ment = $_POST['events'];

$old = $connection->prepare("SELECT filename FROM images WHERE output = 'events'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['filename'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'events', $oldVal, $ment]);

$statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'events'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['service1icon'])){

    $ment = $_POST['service1icon'];

    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'mainservice1icon'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['filename'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainservice1icon', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'mainservice1icon'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['service2icon'])){

    $ment = $_POST['service2icon'];

    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'mainservice2icon'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['filename'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainservice2icon', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'mainservice2icon'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['service3icon'])){

    $ment = $_POST['service3icon'];

    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'mainservice3icon'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['filename'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'mainservice3icon', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'mainservice3icon'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

// Main Page --


//Subpage 1.1 ++

if(isset($_POST['embedUrl11'])){

    $ment = $_POST['embedUrl11'];

    $old = $connection->prepare("SELECT content FROM text WHERE output = '1.1embedUrl'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext11'])){

    $ment = $_POST['welcometext11'];

    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext11'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'welcometext11', $oldVal, $ment]);

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader11'])){

    $ment = $_POST['welcometextheader11'];

    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader11'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'welcometextheader11', $oldVal, $ment]);

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department11'])){

    $ment = $_POST['department11'];

    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department11'");

    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department11', $oldVal, $ment]);

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng11'])){

    $ment = $_POST['mng11'];

    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng11'");

    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng11', $oldVal, $ment]);

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact11'])){

    $ment = $_POST['contact11'];

    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact11'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, 'contact11', $oldVal, $ment]);

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email11'])){

    $ment = $_POST['email11'];

    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email11'");

    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email11', $oldVal, $ment]);

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg11'])){

    $ment = $_POST['welcomeimg11'];

    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg11'");

    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg11', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide111'])){

    $ment = $_POST['slide111'];

    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide111'");

    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide111', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide111'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide211'])){

    $ment = $_POST['slide211'];

    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide211'");

    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide211', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide211'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }


//Subpage 1.1 --

//Subpage 1.2 ++

if(isset($_POST['embedUrl12'])){

    $ment = $_POST['embedUrl12'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl12'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext12'])){
    
    $ment = $_POST['welcometext12'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext12'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext12', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader12'])){
    
    $ment = $_POST['welcometextheader12'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader12'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader12', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department12'])){
    
    $ment = $_POST['department12'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department12'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department12', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng12'])){
    
    $ment = $_POST['mng12'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng12'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng12', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact12'])){
    
    $ment = $_POST['contact12'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact12'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact12', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email12'])){
    
    $ment = $_POST['email12'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email12'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email12', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg12'])){
    
    $ment = $_POST['welcomeimg12'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg12'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg12', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide112'])){
    
    $ment = $_POST['slide112'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide112'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide112', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide112'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide212'])){
    
    $ment = $_POST['slide212'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide212'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide212', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide212'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//Subpage 1.2 --

//Subpage 1.3 ++

if(isset($_POST['embedUrl13'])){

    $ment = $_POST['embedUrl13'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl13'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext13'])){
    
    $ment = $_POST['welcometext13'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext13'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext13', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader13'])){
    
    $ment = $_POST['welcometextheader13'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader13'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader13', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department13'])){
    
    $ment = $_POST['department13'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department13'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department13', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng13'])){
    
    $ment = $_POST['mng13'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng13'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng13', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact13'])){
    
    $ment = $_POST['contact13'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact13'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact13', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email13'])){
    
    $ment = $_POST['email13'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email13'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email13', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg13'])){
    
    $ment = $_POST['welcomeimg13'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg13'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg13', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide113'])){
    
    $ment = $_POST['slide113'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide113'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide113', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide113'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide213'])){
    
    $ment = $_POST['slide213'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide213'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide213', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide213'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//Subpage 1.3 --


//Subpage 1.4 ++

if(isset($_POST['embedUrl14'])){

    $ment = $_POST['embedUrl14'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl14'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext14'])){
    
    $ment = $_POST['welcometext14'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext14'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext14', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader14'])){
    
    $ment = $_POST['welcometextheader14'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader14'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader14', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department14'])){
    
    $ment = $_POST['department14'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department14'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department14', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng14'])){
    
    $ment = $_POST['mng14'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng14'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng14', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact14'])){
    
    $ment = $_POST['contact14'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact14'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact14', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email14'])){
    
    $ment = $_POST['email14'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email14'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email14', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg14'])){
    
    $ment = $_POST['welcomeimg14'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg14'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg14', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide114'])){
    
    $ment = $_POST['slide114'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide114'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide114', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide114'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide214'])){
    
    $ment = $_POST['slide214'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide214'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide214', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide214'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//Subpage 1.4 --

//Subpage 1.5 ++

if(isset($_POST['embedUrl15'])){

    $ment = $_POST['embedUrl15'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl15'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext15'])){
    
    $ment = $_POST['welcometext15'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext15'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext15', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader15'])){
    
    $ment = $_POST['welcometextheader15'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader15'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader15', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department15'])){
    
    $ment = $_POST['department15'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department15'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department15', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng15'])){
    
    $ment = $_POST['mng15'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng15'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng15', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact15'])){
    
    $ment = $_POST['contact15'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact15'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact15', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email15'])){
    
    $ment = $_POST['email15'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email15'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email15', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg15'])){
    
    $ment = $_POST['welcomeimg15'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg15'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg15', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide115'])){
    
    $ment = $_POST['slide115'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide115'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide115', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide115'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide215'])){
    
    $ment = $_POST['slide215'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide215'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide215', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide215'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//Subpage 1.5 --


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl21'])){

    $ment = $_POST['embedUrl21'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl21'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext21'])){
    
    $ment = $_POST['welcometext21'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext21'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext21', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader21'])){
    
    $ment = $_POST['welcometextheader21'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader21'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader21', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department21'])){
    
    $ment = $_POST['department21'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department21'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department21', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng21'])){
    
    $ment = $_POST['mng21'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng21'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng21', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact21'])){
    
    $ment = $_POST['contact21'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact21'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact21', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email21'])){
    
    $ment = $_POST['email21'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email21'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email21', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg21'])){
    
    $ment = $_POST['welcomeimg21'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg21'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg21', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide121'])){
    
    $ment = $_POST['slide121'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide121'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide121', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide121'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide221'])){
    
    $ment = $_POST['slide221'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide221'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide221', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide221'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl22'])){

    $ment = $_POST['embedUrl22'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl22'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext22'])){
    
    $ment = $_POST['welcometext22'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext22'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext22', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader22'])){
    
    $ment = $_POST['welcometextheader22'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader22'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader22', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department22'])){
    
    $ment = $_POST['department22'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department22'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department22', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng22'])){
    
    $ment = $_POST['mng22'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng22'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng22', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact22'])){
    
    $ment = $_POST['contact22'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact22'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact22', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email22'])){
    
    $ment = $_POST['email22'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email22'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email22', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg22'])){
    
    $ment = $_POST['welcomeimg22'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg22'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg22', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide122'])){
    
    $ment = $_POST['slide122'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide122'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide122', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide122'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide222'])){
    
    $ment = $_POST['slide222'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide222'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide222', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide222'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl23'])){

    $ment = $_POST['embedUrl23'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl23'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext23'])){
    
    $ment = $_POST['welcometext23'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext23'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext23', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader23'])){
    
    $ment = $_POST['welcometextheader23'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader23'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader23', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department23'])){
    
    $ment = $_POST['department23'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department23'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department23', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng23'])){
    
    $ment = $_POST['mng23'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng23'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng23', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact23'])){
    
    $ment = $_POST['contact23'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact23'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact23', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email23'])){
    
    $ment = $_POST['email23'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email23'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email23', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg23'])){
    
    $ment = $_POST['welcomeimg23'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg23'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg23', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide123'])){
    
    $ment = $_POST['slide123'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide123'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide123', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide123'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide223'])){
    
    $ment = $_POST['slide223'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide223'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide223', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide223'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl24'])){

    $ment = $_POST['embedUrl24'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl24'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext24'])){
    
    $ment = $_POST['welcometext24'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext24'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext24', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader24'])){
    
    $ment = $_POST['welcometextheader24'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader24'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader24', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department24'])){
    
    $ment = $_POST['department24'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department24'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department24', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng24'])){
    
    $ment = $_POST['mng24'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng24'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng24', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact24'])){
    
    $ment = $_POST['contact24'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact24'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact24', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email24'])){
    
    $ment = $_POST['email24'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email24'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email24', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg24'])){
    
    $ment = $_POST['welcomeimg24'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg24'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg24', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide124'])){
    
    $ment = $_POST['slide124'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide124'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide124', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide124'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide224'])){
    
    $ment = $_POST['slide224'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide224'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide224', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide224'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl25'])){

    $ment = $_POST['embedUrl25'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl25'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext25'])){
    
    $ment = $_POST['welcometext25'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext25'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext25', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader25'])){
    
    $ment = $_POST['welcometextheader25'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader25'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader25', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department25'])){
    
    $ment = $_POST['department25'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department25'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department25', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng25'])){
    
    $ment = $_POST['mng25'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng25'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng25', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact25'])){
    
    $ment = $_POST['contact25'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact25'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact25', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email25'])){
    
    $ment = $_POST['email25'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email25'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email25', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg25'])){
    
    $ment = $_POST['welcomeimg25'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg25'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg25', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide125'])){
    
    $ment = $_POST['slide125'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide125'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide125', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide125'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide225'])){
    
    $ment = $_POST['slide225'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide225'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide225', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide225'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl31'])){

    $ment = $_POST['embedUrl31'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl31'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext31'])){
    
    $ment = $_POST['welcometext31'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext31'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext31', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader31'])){
    
    $ment = $_POST['welcometextheader31'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader31'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader31', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department31'])){
    
    $ment = $_POST['department31'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department31'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department31', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng31'])){
    
    $ment = $_POST['mng31'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng31'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng31', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact31'])){
    
    $ment = $_POST['contact31'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact31'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact31', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email31'])){
    
    $ment = $_POST['email31'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email31'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email31', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg31'])){
    
    $ment = $_POST['welcomeimg31'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg31'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg31', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide131'])){
    
    $ment = $_POST['slide131'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide131'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide131', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide131'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide231'])){
    
    $ment = $_POST['slide231'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide231'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide231', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide231'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl32'])){

    $ment = $_POST['embedUrl32'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl32'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext32'])){
    
    $ment = $_POST['welcometext32'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext32'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext32', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader32'])){
    
    $ment = $_POST['welcometextheader32'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader32'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader32', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department32'])){
    
    $ment = $_POST['department32'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department32'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department32', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng32'])){
    
    $ment = $_POST['mng32'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng32'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng32', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact32'])){
    
    $ment = $_POST['contact32'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact32'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact32', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email32'])){
    
    $ment = $_POST['email32'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email32'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email32', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg32'])){
    
    $ment = $_POST['welcomeimg32'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg32'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg32', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide132'])){
    
    $ment = $_POST['slide132'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide132'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide132', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide132'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide232'])){
    
    $ment = $_POST['slide232'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide232'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide232', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide232'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl33'])){

    $ment = $_POST['embedUrl33'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl33'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext33'])){
    
    $ment = $_POST['welcometext33'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext33'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext33', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader33'])){
    
    $ment = $_POST['welcometextheader33'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader33'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader33', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department33'])){
    
    $ment = $_POST['department33'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department33'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department33', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng33'])){
    
    $ment = $_POST['mng33'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng33'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng33', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact33'])){
    
    $ment = $_POST['contact33'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact33'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact33', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email33'])){
    
    $ment = $_POST['email33'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email33'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email33', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg33'])){
    
    $ment = $_POST['welcomeimg33'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg33'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg33', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide133'])){
    
    $ment = $_POST['slide133'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide133'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide133', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide133'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide233'])){
    
    $ment = $_POST['slide233'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide233'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide233', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide233'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl34'])){

    $ment = $_POST['embedUrl34'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl34'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext34'])){
    
    $ment = $_POST['welcometext34'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext34'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext34', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader34'])){
    
    $ment = $_POST['welcometextheader34'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader34'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader34', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department34'])){
    
    $ment = $_POST['department34'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department34'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department34', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng34'])){
    
    $ment = $_POST['mng34'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng34'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng34', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact34'])){
    
    $ment = $_POST['contact34'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact34'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact34', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email34'])){
    
    $ment = $_POST['email34'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email34'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email34', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg34'])){
    
    $ment = $_POST['welcomeimg34'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg34'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg34', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide134'])){
    
    $ment = $_POST['slide134'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide134'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide134', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide134'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide234'])){
    
    $ment = $_POST['slide234'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide234'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide234', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide234'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl35'])){

    $ment = $_POST['embedUrl35'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl35'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext35'])){
    
    $ment = $_POST['welcometext35'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext35'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext35', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader35'])){
    
    $ment = $_POST['welcometextheader35'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader35'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader35', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department35'])){
    
    $ment = $_POST['department35'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department35'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department35', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng35'])){
    
    $ment = $_POST['mng35'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng35'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng35', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact35'])){
    
    $ment = $_POST['contact35'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact35'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact35', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email35'])){
    
    $ment = $_POST['email35'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email35'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email35', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg35'])){
    
    $ment = $_POST['welcomeimg35'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg35'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg35', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide135'])){
    
    $ment = $_POST['slide135'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide135'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide135', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide135'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide235'])){
    
    $ment = $_POST['slide235'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide235'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide235', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide235'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl36'])){

    $ment = $_POST['embedUrl36'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl36'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext36'])){
    
    $ment = $_POST['welcometext36'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext36'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext36', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader36'])){
    
    $ment = $_POST['welcometextheader36'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader36'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader36', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department36'])){
    
    $ment = $_POST['department36'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department36'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department36', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng36'])){
    
    $ment = $_POST['mng36'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng36'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng36', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact36'])){
    
    $ment = $_POST['contact36'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact36'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact36', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email36'])){
    
    $ment = $_POST['email36'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email36'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email36', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg36'])){
    
    $ment = $_POST['welcomeimg36'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg36'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg36', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide136'])){
    
    $ment = $_POST['slide136'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide136'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide136', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide136'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide236'])){
    
    $ment = $_POST['slide236'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide236'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide236', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide236'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl37'])){

    $ment = $_POST['embedUrl37'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl37'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext37'])){
    
    $ment = $_POST['welcometext37'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext37'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext37', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader37'])){
    
    $ment = $_POST['welcometextheader37'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader37'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader37', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department37'])){
    
    $ment = $_POST['department37'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department37'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department37', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng37'])){
    
    $ment = $_POST['mng37'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng37'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng37', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact37'])){
    
    $ment = $_POST['contact37'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact37'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact37', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email37'])){
    
    $ment = $_POST['email37'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email37'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email37', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg37'])){
    
    $ment = $_POST['welcomeimg37'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg37'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg37', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide137'])){
    
    $ment = $_POST['slide137'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide137'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide137', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide137'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide237'])){
    
    $ment = $_POST['slide237'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide237'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide237', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide237'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl38'])){

    $ment = $_POST['embedUrl38'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl38'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext38'])){
    
    $ment = $_POST['welcometext38'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext38'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext38', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader38'])){
    
    $ment = $_POST['welcometextheader38'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader38'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader38', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department38'])){
    
    $ment = $_POST['department38'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department38'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department38', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng38'])){
    
    $ment = $_POST['mng38'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng38'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng38', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact38'])){
    
    $ment = $_POST['contact38'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact38'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact38', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email38'])){
    
    $ment = $_POST['email38'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email38'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email38', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg38'])){
    
    $ment = $_POST['welcomeimg38'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg38'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg38', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide138'])){
    
    $ment = $_POST['slide138'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide138'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide138', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide138'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide238'])){
    
    $ment = $_POST['slide238'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide238'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide238', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide238'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl39'])){

    $ment = $_POST['embedUrl39'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl39'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext39'])){
    
    $ment = $_POST['welcometext39'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext39'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext39', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader39'])){
    
    $ment = $_POST['welcometextheader39'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader39'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader39', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department39'])){
    
    $ment = $_POST['department39'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department39'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department39', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng39'])){
    
    $ment = $_POST['mng39'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng39'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng39', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact39'])){
    
    $ment = $_POST['contact39'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact39'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact39', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email39'])){
    
    $ment = $_POST['email39'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email39'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email39', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg39'])){
    
    $ment = $_POST['welcomeimg39'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg39'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg39', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide139'])){
    
    $ment = $_POST['slide139'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide139'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide139', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide139'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide239'])){
    
    $ment = $_POST['slide239'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide239'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide239', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide239'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl310'])){

    $ment = $_POST['embedUrl310'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext310'])){
    
    $ment = $_POST['welcometext310'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader310'])){
    
    $ment = $_POST['welcometextheader310'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department310'])){
    
    $ment = $_POST['department310'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng310'])){
    
    $ment = $_POST['mng310'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact310'])){
    
    $ment = $_POST['contact310'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email310'])){
    
    $ment = $_POST['email310'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg310'])){
    
    $ment = $_POST['welcomeimg310'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide1310'])){
    
    $ment = $_POST['slide1310'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide1310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide1310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide1310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide2310'])){
    
    $ment = $_POST['slide2310'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide2310'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide2310', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide2310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl311'])){

    $ment = $_POST['embedUrl311'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, '1.1embedUrl', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometext311'])){
    
    $ment = $_POST['welcometext311'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometext311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometext311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcometextheader311'])){
    
    $ment = $_POST['welcometextheader311'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'welcometextheader311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcometextheader311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['department311'])){
    
    $ment = $_POST['department311'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'department311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'department311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['mng311'])){
    
    $ment = $_POST['mng311'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'mng311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'mng311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    
    if(isset($_POST['contact311'])){
    
    $ment = $_POST['contact311'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'contact311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
    $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'contact311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['email311'])){
    
    $ment = $_POST['email311'];
    
    $old = $connection->prepare("SELECT content FROM text WHERE output = 'email311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['content'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'email311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['welcomeimg311'])){
    
    $ment = $_POST['welcomeimg311'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'welcomeimg311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'welcomeimg311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide1311'])){
    
    $ment = $_POST['slide1311'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide1311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide1311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide1311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }
    
    if(isset($_POST['slide2311'])){
    
    $ment = $_POST['slide2311'];
    
    $old = $connection->prepare("SELECT filename FROM images WHERE output = 'slide2311'");
    
    $old->execute();
    
    $older = $old->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($older as $oldest){
        $oldVal = $oldest['filename'];
    }
    
    $log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");
    
    $log->execute([$currentUser, 'slide2311', $oldVal, $ment]);
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide2311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------

?>