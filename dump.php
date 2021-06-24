$old = $connection->prepare("SELECT content FROM text WHERE output = '69'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['content'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, '69', $oldVal, $ment]);










$old = $connection->prepare("SELECT filename FROM images WHERE output = '69'");

$old->execute();

$older = $old->fetchAll(PDO::FETCH_ASSOC);

foreach ($older as $oldest){
    $oldVal = $oldest['filename'];
}

$log = $connection->prepare("INSERT INTO `log`(`USER`, `KEYWORD`, `OLD`, `NEW`) VALUES (?, ?, ?, ?)");

$log->execute([$currentUser, '69', $oldVal, $ment]);












if(isset($_POST['embedUrl11'])){

$ment = $_POST['embedUrl11'];

$old = $connection->prepare("SELECT content FROM text WHERE output = 'embedUrl11'");

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