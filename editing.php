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


// Main Page ++    
// Text Edits

if(isset($_POST['mainheadertxt'])){

$ment= $_POST['mainheadertxt'];

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainheadertxt'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainwelcometxtheader'])){

    $ment= $_POST['mainwelcometxtheader'];
    
    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainwelcometxtheader'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['mainwelcometxt'])){

$ment= $_POST['mainwelcometxt'];

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainwelcometxt'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainservice1'])){

$ment= $_POST['mainservice1'];

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainservice1'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainservice2'])){

$ment= $_POST['mainservice2'];

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainservice2'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainservice3'])){

$ment= $_POST['mainservice3'];

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainservice3'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainneupagelink'])){

$ment= $_POST['mainneupagelink'];

$statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mainneupagelink'");

$statement->execute([$ment]);

header('Location: edited.php');

}

// Image edits

if(isset($_POST['mainslide'])){

$ment = $_POST['mainslide'];

$statement = $connection->prepare("INSERT INTO gallery(filename) VALUES (?)");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['mainslidermv'])){

    $ment = $_POST['mainslidermv'];
    
    $statement = $connection->prepare("DELETE FROM gallery WHERE filename=?");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['events'])){

$ment = $_POST['events'];

$statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'events'");

$statement->execute([$ment]);

header('Location: edited.php');

}

if(isset($_POST['service1icon'])){

    $ment = $_POST['service1icon'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'mainservice1icon'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['service2icon'])){

    $ment = $_POST['service2icon'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'mainservice2icon'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['service3icon'])){

    $ment = $_POST['service3icon'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'mainservice3icon'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

// Main Page --


//Subpage 1.1 ++

if(isset($_POST['embedUrl11'])){

    $ment = $_POST['embedUrl11'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = '1.1embedUrl'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext11'])){

    $ment = $_POST['welcometext11'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader11'])){

    $ment = $_POST['welcometextheader11'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department11'])){

    $ment = $_POST['department11'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng11'])){

    $ment = $_POST['mng11'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact11'])){

    $ment = $_POST['contact11'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email11'])){

    $ment = $_POST['email11'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg11'])){

    $ment = $_POST['welcomeimg11'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg11'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide111'])){

    $ment = $_POST['slide111'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide111'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide211'])){

    $ment = $_POST['slide211'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide211'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }


//Subpage 1.1 --

//Subpage 1.2 ++

if(isset($_POST['embedUrl12'])){

    $ment = $_POST['embedUrl12'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext12'])){

    $ment = $_POST['welcometext12'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader12'])){

    $ment = $_POST['welcometextheader12'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department12'])){

    $ment = $_POST['department12'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng12'])){

    $ment = $_POST['mng12'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact12'])){

    $ment = $_POST['contact12'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email12'])){

    $ment = $_POST['email12'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg12'])){

    $ment = $_POST['welcomeimg12'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg12'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide112'])){

    $ment = $_POST['slide112'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide112'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide212'])){

    $ment = $_POST['slide212'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide212'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//Subpage 1.2 --

//Subpage 1.3 ++

if(isset($_POST['embedUrl13'])){

    $ment = $_POST['embedUrl13'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext13'])){

    $ment = $_POST['welcometext13'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader13'])){

    $ment = $_POST['welcometextheader13'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department13'])){

    $ment = $_POST['department13'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng13'])){

    $ment = $_POST['mng13'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact13'])){

    $ment = $_POST['contact13'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email13'])){

    $ment = $_POST['email13'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg13'])){

    $ment = $_POST['welcomeimg13'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg13'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide113'])){

    $ment = $_POST['slide113'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide113'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide213'])){

    $ment = $_POST['slide213'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide213'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//Subpage 1.3 --


//Subpage 1.4 ++

if(isset($_POST['embedUrl14'])){

    $ment = $_POST['embedUrl14'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext14'])){

    $ment = $_POST['welcometext14'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader14'])){

    $ment = $_POST['welcometextheader14'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department14'])){

    $ment = $_POST['department14'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng14'])){

    $ment = $_POST['mng14'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact14'])){

    $ment = $_POST['contact14'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email14'])){

    $ment = $_POST['email14'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg14'])){

    $ment = $_POST['welcomeimg14'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg14'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide114'])){

    $ment = $_POST['slide114'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide114'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide214'])){

    $ment = $_POST['slide214'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide214'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//Subpage 1.4 --

//Subpage 1.5 ++

if(isset($_POST['embedUrl15'])){

    $ment = $_POST['embedUrl15'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext15'])){

    $ment = $_POST['welcometext15'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader15'])){

    $ment = $_POST['welcometextheader15'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department15'])){

    $ment = $_POST['department15'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng15'])){

    $ment = $_POST['mng15'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact15'])){

    $ment = $_POST['contact15'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email15'])){

    $ment = $_POST['email15'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg15'])){

    $ment = $_POST['welcomeimg15'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg15'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide115'])){

    $ment = $_POST['slide115'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide115'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide215'])){

    $ment = $_POST['slide215'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide215'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//Subpage 1.5 --


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl21'])){

    $ment = $_POST['embedUrl21'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext21'])){

    $ment = $_POST['welcometext21'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader21'])){

    $ment = $_POST['welcometextheader21'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department21'])){

    $ment = $_POST['department21'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng21'])){

    $ment = $_POST['mng21'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact21'])){

    $ment = $_POST['contact21'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email21'])){

    $ment = $_POST['email21'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg21'])){

    $ment = $_POST['welcomeimg21'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg21'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide121'])){

    $ment = $_POST['slide121'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide121'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide221'])){

    $ment = $_POST['slide221'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide221'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl22'])){

    $ment = $_POST['embedUrl22'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext22'])){

    $ment = $_POST['welcometext22'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader22'])){

    $ment = $_POST['welcometextheader22'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department22'])){

    $ment = $_POST['department22'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng22'])){

    $ment = $_POST['mng22'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact22'])){

    $ment = $_POST['contact22'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email22'])){

    $ment = $_POST['email22'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg22'])){

    $ment = $_POST['welcomeimg22'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg22'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide122'])){

    $ment = $_POST['slide122'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide122'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide222'])){

    $ment = $_POST['slide222'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide222'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl23'])){

    $ment = $_POST['embedUrl23'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext23'])){

    $ment = $_POST['welcometext23'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader23'])){

    $ment = $_POST['welcometextheader23'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department23'])){

    $ment = $_POST['department23'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng23'])){

    $ment = $_POST['mng23'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact23'])){

    $ment = $_POST['contact23'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email23'])){

    $ment = $_POST['email23'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg23'])){

    $ment = $_POST['welcomeimg23'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg23'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide123'])){

    $ment = $_POST['slide123'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide123'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide223'])){

    $ment = $_POST['slide223'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide223'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl24'])){

    $ment = $_POST['embedUrl24'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext24'])){

    $ment = $_POST['welcometext24'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader24'])){

    $ment = $_POST['welcometextheader24'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department24'])){

    $ment = $_POST['department24'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng24'])){

    $ment = $_POST['mng24'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact24'])){

    $ment = $_POST['contact24'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email24'])){

    $ment = $_POST['email24'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg24'])){

    $ment = $_POST['welcomeimg24'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg24'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide124'])){

    $ment = $_POST['slide124'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide124'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide224'])){

    $ment = $_POST['slide224'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide224'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl25'])){

    $ment = $_POST['embedUrl25'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext25'])){

    $ment = $_POST['welcometext25'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader25'])){

    $ment = $_POST['welcometextheader25'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department25'])){

    $ment = $_POST['department25'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng25'])){

    $ment = $_POST['mng25'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact25'])){

    $ment = $_POST['contact25'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email25'])){

    $ment = $_POST['email25'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg25'])){

    $ment = $_POST['welcomeimg25'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg25'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide125'])){

    $ment = $_POST['slide125'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide125'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide225'])){

    $ment = $_POST['slide225'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide225'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl31'])){

    $ment = $_POST['embedUrl31'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext31'])){

    $ment = $_POST['welcometext31'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader31'])){

    $ment = $_POST['welcometextheader31'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department31'])){

    $ment = $_POST['department31'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng31'])){

    $ment = $_POST['mng31'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact31'])){

    $ment = $_POST['contact31'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email31'])){

    $ment = $_POST['email31'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg31'])){

    $ment = $_POST['welcomeimg31'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg31'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide131'])){

    $ment = $_POST['slide131'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide131'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide231'])){

    $ment = $_POST['slide231'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide231'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl32'])){

    $ment = $_POST['embedUrl32'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext32'])){

    $ment = $_POST['welcometext32'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader32'])){

    $ment = $_POST['welcometextheader32'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department32'])){

    $ment = $_POST['department32'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng32'])){

    $ment = $_POST['mng32'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact32'])){

    $ment = $_POST['contact32'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email32'])){

    $ment = $_POST['email32'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg32'])){

    $ment = $_POST['welcomeimg32'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg32'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide132'])){

    $ment = $_POST['slide132'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide132'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide232'])){

    $ment = $_POST['slide232'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide232'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl33'])){

    $ment = $_POST['embedUrl33'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext33'])){

    $ment = $_POST['welcometext33'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader33'])){

    $ment = $_POST['welcometextheader33'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department33'])){

    $ment = $_POST['department33'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng33'])){

    $ment = $_POST['mng33'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact33'])){

    $ment = $_POST['contact33'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email33'])){

    $ment = $_POST['email33'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg33'])){

    $ment = $_POST['welcomeimg33'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg33'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide133'])){

    $ment = $_POST['slide133'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide133'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide233'])){

    $ment = $_POST['slide233'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide233'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl34'])){

    $ment = $_POST['embedUrl34'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext34'])){

    $ment = $_POST['welcometext34'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader34'])){

    $ment = $_POST['welcometextheader34'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department34'])){

    $ment = $_POST['department34'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng34'])){

    $ment = $_POST['mng34'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact34'])){

    $ment = $_POST['contact34'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email34'])){

    $ment = $_POST['email34'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg34'])){

    $ment = $_POST['welcomeimg34'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg34'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide134'])){

    $ment = $_POST['slide134'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide134'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide234'])){

    $ment = $_POST['slide234'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide234'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl35'])){

    $ment = $_POST['embedUrl35'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext35'])){

    $ment = $_POST['welcometext35'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader35'])){

    $ment = $_POST['welcometextheader35'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department35'])){

    $ment = $_POST['department35'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng35'])){

    $ment = $_POST['mng35'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact35'])){

    $ment = $_POST['contact35'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email35'])){

    $ment = $_POST['email35'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg35'])){

    $ment = $_POST['welcomeimg35'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg35'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide135'])){

    $ment = $_POST['slide135'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide135'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide235'])){

    $ment = $_POST['slide235'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide235'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl36'])){

    $ment = $_POST['embedUrl36'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext36'])){

    $ment = $_POST['welcometext36'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader36'])){

    $ment = $_POST['welcometextheader36'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department36'])){

    $ment = $_POST['department36'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng36'])){

    $ment = $_POST['mng36'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact36'])){

    $ment = $_POST['contact36'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email36'])){

    $ment = $_POST['email36'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg36'])){

    $ment = $_POST['welcomeimg36'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg36'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide136'])){

    $ment = $_POST['slide136'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide136'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide236'])){

    $ment = $_POST['slide236'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide236'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl37'])){

    $ment = $_POST['embedUrl37'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext37'])){

    $ment = $_POST['welcometext37'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader37'])){

    $ment = $_POST['welcometextheader37'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department37'])){

    $ment = $_POST['department37'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng37'])){

    $ment = $_POST['mng37'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact37'])){

    $ment = $_POST['contact37'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email37'])){

    $ment = $_POST['email37'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg37'])){

    $ment = $_POST['welcomeimg37'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg37'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide137'])){

    $ment = $_POST['slide137'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide137'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide237'])){

    $ment = $_POST['slide237'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide237'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl38'])){

    $ment = $_POST['embedUrl38'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext38'])){

    $ment = $_POST['welcometext38'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader38'])){

    $ment = $_POST['welcometextheader38'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department38'])){

    $ment = $_POST['department38'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng38'])){

    $ment = $_POST['mng38'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact38'])){

    $ment = $_POST['contact38'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email38'])){

    $ment = $_POST['email38'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg38'])){

    $ment = $_POST['welcomeimg38'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg38'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide138'])){

    $ment = $_POST['slide138'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide138'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide238'])){

    $ment = $_POST['slide238'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide238'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl39'])){

    $ment = $_POST['embedUrl39'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext39'])){

    $ment = $_POST['welcometext39'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader39'])){

    $ment = $_POST['welcometextheader39'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department39'])){

    $ment = $_POST['department39'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng39'])){

    $ment = $_POST['mng39'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact39'])){

    $ment = $_POST['contact39'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email39'])){

    $ment = $_POST['email39'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg39'])){

    $ment = $_POST['welcomeimg39'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg39'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide139'])){

    $ment = $_POST['slide139'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide139'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide239'])){

    $ment = $_POST['slide239'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide239'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl310'])){

    $ment = $_POST['embedUrl310'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext310'])){

    $ment = $_POST['welcometext310'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader310'])){

    $ment = $_POST['welcometextheader310'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department310'])){

    $ment = $_POST['department310'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng310'])){

    $ment = $_POST['mng310'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact310'])){

    $ment = $_POST['contact310'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email310'])){

    $ment = $_POST['email310'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg310'])){

    $ment = $_POST['welcomeimg310'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide1310'])){

    $ment = $_POST['slide1310'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide1310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide2310'])){

    $ment = $_POST['slide2310'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide2310'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['embedUrl311'])){

    $ment = $_POST['embedUrl311'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'embedUrl311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometext311'])){

    $ment = $_POST['welcometext311'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometext311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcometextheader311'])){

    $ment = $_POST['welcometextheader311'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'welcometextheader311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['department311'])){

    $ment = $_POST['department311'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'department311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['mng311'])){

    $ment = $_POST['mng311'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'mng311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}


if(isset($_POST['contact311'])){

    $ment = $_POST['contact311'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'contact311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['email311'])){

    $ment = $_POST['email311'];

    $statement = $connection->prepare("UPDATE text SET content=? WHERE output = 'email311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');

}

if(isset($_POST['welcomeimg311'])){

    $ment = $_POST['welcomeimg311'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'welcomeimg311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
}

if(isset($_POST['slide1311'])){

    $ment = $_POST['slide1311'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide1311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

if(isset($_POST['slide2311'])){

    $ment = $_POST['slide2311'];
    
    $statement = $connection->prepare("UPDATE images SET filename=? WHERE output = 'slide2311'");
    
    $statement->execute([$ment]);
    
    header('Location: edited.php');
    
    }

//--------------------------------------------------------------------------------------------------------

?>