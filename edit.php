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

    // $aDstatement = $connection->prepare("SELECT content FROM text WHERE output='mainwelcometxt'");

    // $aDstatement->execute();

    // $AdResult = $aDstatement->fetchAll(PDO::FETCH_ASSOC);

    // $AdQuery = $AdResult;  

    // foreach ($AdQuery as $val){
    //     $ment = $val['content'];
    // }

    $textDB = $connection->prepare("SELECT * FROM text");

    $textDB->execute();

    $textResult = $textDB->fetchAll(PDO::FETCH_ASSOC);

    $textQuery = $textResult;  

    foreach ($textQuery as $val){
        // if($val['output']=='mainwelcometxt'){
        //     $mainwelcometxt = $val['content'];
        // }

        switch ($val['output']) {
            case 'mainwelcometxt':
                $mainwelcometxt = $val['content'];
                break;
            case 'mainheadertxt':
                $mainheadertxt = $val['content'];
                break;
            case 'mainwelcometxtheader':
                $mainwelcometxtheader = $val['content'];
                break;
            case 'mainneupagelink':
                $mainneupagelink = $val['content'];
                break;            
            case 'mainservice1':
                $mainservice1 = $val['content'];
                break;
            case 'mainservice2':
                $mainservice2 = $val['content'];
                break;
            case 'mainservice3':
                $mainservice3 = $val['content'];
                break;

            case '1.1embedUrl':
                $embedUrl11 = $val['content'];
                break;
            case 'welcometextheader11':
                $welcometextheader11 = $val['content'];
                break;
            case 'welcometext11':
                $welcometext11 = $val['content'];
                break;                
            case 'department11':
                $department11 = $val['content'];
                break;
            case 'mng11':
                $mng11 = $val['content'];
                break;
            case 'contact11':
                $contact11 = $val['content'];
                break;
            case 'email11':
                $email11 = $val['content'];
                break;

            case 'embedUrl12':
                $embedUrl12 = $val['content'];
                break;
            case 'welcometextheader12':
                $welcometextheader12 = $val['content'];
                break;
            case 'welcometext12':
                $welcometext12 = $val['content'];
                break;
            case 'department12':
                $department12 = $val['content'];
                break;
            case 'mng12':
                $mng12 = $val['content'];
                break;
            case 'contact12':
                $contact12 = $val['content'];
                break;
            case 'email12':
                $email12 = $val['content'];
                break;

            case 'embedUrl13':
                $embedUrl13 = $val['content'];
                break;
            case 'welcometextheader13':
                $welcometextheader13 = $val['content'];
                break;
            case 'welcometext13':
                $welcometext13 = $val['content'];
                break;
            case 'department13':
                $department13 = $val['content'];
                break;
            case 'mng13':
                $mng13 = $val['content'];
                break;
            case 'contact13':
                $contact13 = $val['content'];
                break;
            case 'email13':
                $email13 = $val['content'];
                break;

            case 'embedUrl14':
                $embedUrl14 = $val['content'];
                break;
            case 'welcometextheader14':
                $welcometextheader14 = $val['content'];
                break;
            case 'welcometext14':
                $welcometext14 = $val['content'];
                break;
            case 'department14':
                $department14 = $val['content'];
                break;
            case 'mng14':
                $mng14 = $val['content'];
                break;
            case 'contact14':
                $contact14 = $val['content'];
                break;
            case 'email14':
                $email14 = $val['content'];
                break;

            case 'embedUrl15':
                $embedUrl15 = $val['content'];
                break;
            case 'welcometextheader15':
                $welcometextheader15 = $val['content'];
                break;
            case 'welcometext15':
                $welcometext15 = $val['content'];
                break;
            case 'department15':
                $department15 = $val['content'];
                break;
            case 'mng15':
                $mng15 = $val['content'];
                break;
            case 'contact15':
                $contact15 = $val['content'];
                break;
            case 'email15':
                $email15 = $val['content'];
                break;

            case 'embedUrl21':
                $embedUrl21 = $val['content'];
                break;
            case 'welcometextheader21':
                $welcometextheader21 = $val['content'];
                break;
            case 'welcometext21':
                $welcometext21 = $val['content'];
                break;
            case 'department21':
                $department21 = $val['content'];
                break;
            case 'mng21':
                $mng21 = $val['content'];
                break;
            case 'contact21':
                $contact21 = $val['content'];
                break;
            case 'email21':
                $email21 = $val['content'];
                break;

            case 'embedUrl22':
                $embedUrl22 = $val['content'];
                break;
            case 'welcometextheader22':
                $welcometextheader22 = $val['content'];
                break;
            case 'welcometext22':
                $welcometext22 = $val['content'];
                break;
            case 'department22':
                $department22 = $val['content'];
                break;
            case 'mng22':
                $mng22 = $val['content'];
                break;
            case 'contact22':
                $contact22 = $val['content'];
                break;
            case 'email22':
                $email22 = $val['content'];
                break;

            case 'embedUrl23':
                $embedUrl23 = $val['content'];
                break;
            case 'welcometextheader23':
                $welcometextheader23 = $val['content'];
                break;
            case 'welcometext23':
                $welcometext23 = $val['content'];
                break;
            case 'department23':
                $department23 = $val['content'];
                break;
            case 'mng23':
                $mng23 = $val['content'];
                break;
            case 'contact23':
                $contact23 = $val['content'];
                break;
            case 'email23':
                $email23 = $val['content'];
                break;

            case 'embedUrl24':
                $embedUrl24 = $val['content'];
                break;
            case 'welcometextheader24':
                $welcometextheader24 = $val['content'];
                break;
            case 'welcometext24':
                $welcometext24 = $val['content'];
                break;
            case 'department24':
                $department24 = $val['content'];
                break;
            case 'mng24':
                $mng24 = $val['content'];
                break;
            case 'contact24':
                $contact24 = $val['content'];
                break;
            case 'email24':
                $email24 = $val['content'];
                break;
                

            case 'embedUrl25':
                $embedUrl25 = $val['content'];
                break;
            case 'welcometextheader25':
                $welcometextheader25 = $val['content'];
                break;
            case 'welcometext25':
                $welcometext25 = $val['content'];
                break;
            case 'department25':
                $department25 = $val['content'];
                break;
            case 'mng25':
                $mng25 = $val['content'];
                break;
            case 'contact25':
                $contact25 = $val['content'];
                break;
            case 'email25':
                $email25 = $val['content'];
                break;

            case 'embedUrl31':
                $embedUrl31 = $val['content'];
                break;
            case 'welcometextheader31':
                $welcometextheader31 = $val['content'];
                break;
            case 'welcometext31':
                $welcometext31 = $val['content'];
                break;
            case 'department31':
                $department31 = $val['content'];
                break;
            case 'mng31':
                $mng31 = $val['content'];
                break;
            case 'contact31':
                $contact31 = $val['content'];
                break;
            case 'email31':
                $email31 = $val['content'];
                break;

            case 'embedUrl32':
                $embedUrl32 = $val['content'];
                break;
            case 'welcometextheader32':
                $welcometextheader32 = $val['content'];
                break;
            case 'welcometext32':
                $welcometext32 = $val['content'];
                break;
            case 'department32':
                $department32 = $val['content'];
                break;
            case 'mng32':
                $mng32 = $val['content'];
                break;
            case 'contact32':
                $contact32 = $val['content'];
                break;
            case 'email32':
                $email32 = $val['content'];
                break;

            case 'embedUrl33':
                $embedUrl33 = $val['content'];
                break;
            case 'welcometextheader33':
                $welcometextheader33 = $val['content'];
                break;
            case 'welcometext33':
                $welcometext33 = $val['content'];
                break;
            case 'department33':
                $department33 = $val['content'];
                break;
            case 'mng33':
                $mng33 = $val['content'];
                break;
            case 'contact33':
                $contact33 = $val['content'];
                break;
            case 'email33':
                $email33 = $val['content'];
                break;

            case 'embedUrl34':
                $embedUrl34 = $val['content'];
                break;
            case 'welcometextheader34':
                $welcometextheader34 = $val['content'];
                break;
            case 'welcometext34':
                $welcometext34 = $val['content'];
                break;
            case 'department34':
                $department34 = $val['content'];
                break;
            case 'mng34':
                $mng34 = $val['content'];
                break;
            case 'contact34':
                $contact34 = $val['content'];
                break;
            case 'email34':
                $email34 = $val['content'];
                break;

            case 'embedUrl35':
                $embedUrl35 = $val['content'];
                break;
            case 'welcometextheader35':
                $welcometextheader35 = $val['content'];
                break;
            case 'welcometext35':
                $welcometext35 = $val['content'];
                break;
            case 'department35':
                $department35 = $val['content'];
                break;
            case 'mng35':
                $mng35 = $val['content'];
                break;
            case 'contact35':
                $contact35 = $val['content'];
                break;
            case 'email35':
                $email35 = $val['content'];
                break;

            case 'embedUrl36':
                $embedUrl36 = $val['content'];
                break;
            case 'welcometextheader36':
                $welcometextheader36 = $val['content'];
                break;
            case 'welcometext36':
                $welcometext36 = $val['content'];
                break;
            case 'department36':
                $department36 = $val['content'];
                break;
            case 'mng36':
                $mng36 = $val['content'];
                break;
            case 'contact36':
                $contact36 = $val['content'];
                break;
            case 'email36':
                $email36 = $val['content'];
                break;

            case 'embedUrl37':
                $embedUrl37 = $val['content'];
                break;
            case 'welcometextheader37':
                $welcometextheader37 = $val['content'];
                break;
            case 'welcometext37':
                $welcometext37 = $val['content'];
                break;
            case 'department37':
                $department37 = $val['content'];
                break;
            case 'mng37':
                $mng37 = $val['content'];
                break;
            case 'contact37':
                $contact37 = $val['content'];
                break;
            case 'email37':
                $email37 = $val['content'];
                break;

            case 'embedUrl38':
                $embedUrl38 = $val['content'];
                break;
            case 'welcometextheader38':
                $welcometextheader38 = $val['content'];
                break;
            case 'welcometext38':
                $welcometext38 = $val['content'];
                break;
            case 'department38':
                $department38 = $val['content'];
                break;
            case 'mng38':
                $mng38 = $val['content'];
                break;
            case 'contact38':
                $contact38 = $val['content'];
                break;
            case 'email38':
                $email38 = $val['content'];
                break;

            case 'embedUrl39':
                $embedUrl39 = $val['content'];
                break;
            case 'welcometextheader39':
                $welcometextheader39 = $val['content'];
                break;
            case 'welcometext39':
                $welcometext39 = $val['content'];
                break;
            case 'department39':
                $department39 = $val['content'];
                break;
            case 'mng39':
                $mng39 = $val['content'];
                break;
            case 'contact39':
                $contact39 = $val['content'];
                break;
            case 'email39':
                $email39 = $val['content'];
                break;


            case 'embedUrl310':
                $embedUrl310 = $val['content'];
                break;
            case 'welcometextheader310':
                $welcometextheader310 = $val['content'];
                break;
            case 'welcometext310':
                $welcometext310 = $val['content'];
                break;
            case 'department310':
                $department310 = $val['content'];
                break;
            case 'mng310':
                $mng310 = $val['content'];
                break;
            case 'contact310':
                $contact310 = $val['content'];
                break;
            case 'email310':
                $email310 = $val['content'];
                break;

            case 'embedUrl311':
                $embedUrl311 = $val['content'];
                break;
            case 'welcometextheader311':
                $welcometextheader311 = $val['content'];
                break;
            case 'welcometext311':
                $welcometext311 = $val['content'];
                break;
            case 'department311':
                $department311 = $val['content'];
                break;
            case 'mng311':
                $mng311 = $val['content'];
                break;
            case 'contact311':
                $contact311 = $val['content'];
                break;
            case 'email311':
                $email311 = $val['content'];
                break;





        }
    }

    $imgDb = $connection->prepare("select * from images");

    $imgDb->execute();

    $imgResult = $imgDb->fetchAll(PDO::FETCH_ASSOC);

    $imgQuery = $imgResult;


    $gallery = $connection->prepare("select * from gallery");

    $gallery->execute();

    $galResult = $gallery->fetchAll(PDO::FETCH_ASSOC);

    $galQuery = $galResult;


    foreach ($imgQuery as $imgOpt){
        
        switch  ($imgOpt['output']) {
            case 'events':
                $eventsimg = $imgOpt['filename'];
                break;
            case 'mainservice1icon':
                $service1icon = $imgOpt['filename'];
                break;
            case 'mainservice2icon':
                $service2icon = $imgOpt['filename'];
                break;
            case 'mainservice3icon':
                $service3icon = $imgOpt['filename'];
                break;
            case 'welcomeimg11':
                $welcomeimg11 = $imgOpt['filename'];
                break;
            case 'welcomeimg12':
                $welcomeimg12 = $imgOpt['filename'];
                break;   
            case 'welcomeimg13':
                $welcomeimg13 = $imgOpt['filename'];
                break;   
            case 'welcomeimg14':
                $welcomeimg14 = $imgOpt['filename'];
                break;   
            case 'welcomeimg15':
                $welcomeimg15 = $imgOpt['filename'];
                break;
            case 'welcomeimg21':
                $welcomeimg21 = $imgOpt['filename'];
                break;
            case 'welcomeimg22':
                $welcomeimg22 = $imgOpt['filename'];
                break;   
            case 'welcomeimg23':
                $welcomeimg23 = $imgOpt['filename'];
                break;     
            case 'welcomeimg24':
                $welcomeimg24 = $imgOpt['filename'];
                break;    
            case 'welcomeimg25':
                $welcomeimg25 = $imgOpt['filename'];
                break;      
            case 'welcomeimg31':
                $welcomeimg31 = $imgOpt['filename'];
                break;    
            case 'welcomeimg32':
                $welcomeimg32 = $imgOpt['filename'];
                break;     
            case 'welcomeimg33':
                $welcomeimg33 = $imgOpt['filename'];
                break;    
            case 'welcomeimg34':
                $welcomeimg34 = $imgOpt['filename'];
                break;      
            case 'welcomeimg35':
                $welcomeimg35 = $imgOpt['filename'];
                break;  
            case 'welcomeimg36':
                $welcomeimg36 = $imgOpt['filename'];
                break;
            case 'welcomeimg37':
                $welcomeimg37 = $imgOpt['filename'];
                break;
            case 'welcomeimg38':
                $welcomeimg38 = $imgOpt['filename'];
                break;
            case 'welcomeimg39':
                $welcomeimg39 = $imgOpt['filename'];
                break;
            case 'welcomeimg310':
                $welcomeimg310 = $imgOpt['filename'];
                break;
            case 'welcomeimg311':
                $welcomeimg311 = $imgOpt['filename'];
                break;
            case 'slide111':
                $slide111 = $imgOpt['filename'];
                break;
            case 'slide211':
                $slide211 = $imgOpt['filename'];
                break;
            case 'slide112':
                $slide112 = $imgOpt['filename'];
                break;
            case 'slide212':
                $slide212 = $imgOpt['filename'];
                break;   
            case 'slide113':
                $slide113 = $imgOpt['filename'];
                break;
            case 'slide213':
                $slide213 = $imgOpt['filename'];
                break;   
            case 'slide114':
                $slide114 = $imgOpt['filename'];
                break;
            case 'slide214':
                $slide214 = $imgOpt['filename'];
                break;
            case 'slide115':
                $slide115 = $imgOpt['filename'];
                break;
            case 'slide215':
                $slide215 = $imgOpt['filename'];
                break;   
            case 'slide121':
                $slide121 = $imgOpt['filename'];
                break;
            case 'slide221':
                $slide221 = $imgOpt['filename'];
                break;   
            case 'slide122':
                $slide122 = $imgOpt['filename'];
                break;
            case 'slide222':
                $slide222 = $imgOpt['filename'];
                break;  
            case 'slide123':
                $slide123 = $imgOpt['filename'];
                break;
            case 'slide223':
                $slide223 = $imgOpt['filename'];
                break;  
            case 'slide124':
                $slide124 = $imgOpt['filename'];
                break;
            case 'slide224':
                $slide224 = $imgOpt['filename'];
                break;  
            case 'slide125':
                $slide125 = $imgOpt['filename'];
                break;
            case 'slide225':
                $slide225 = $imgOpt['filename'];
                break;  
            case 'slide131':
                $slide131 = $imgOpt['filename'];
                break;
            case 'slide231':
                $slide231 = $imgOpt['filename'];
                break;  
            case 'slide132':
                $slide132 = $imgOpt['filename'];
                break;
            case 'slide232':
                $slide232 = $imgOpt['filename'];
                break;  
            case 'slide133':
                $slide133 = $imgOpt['filename'];
                break;
            case 'slide233':
                $slide233 = $imgOpt['filename'];
                break;  
            case 'slide134':
                $slide134 = $imgOpt['filename'];
                break;
            case 'slide234':
                $slide234 = $imgOpt['filename'];
                break;  
            case 'slide135':
                $slide135 = $imgOpt['filename'];
                break;
            case 'slide235':
                $slide235 = $imgOpt['filename'];
                break;  
            case 'slide136':
                $slide136 = $imgOpt['filename'];
                break;
            case 'slide236':
                $slide236 = $imgOpt['filename'];
                break;  
            case 'slide137':
                $slide137 = $imgOpt['filename'];
                break;
            case 'slide237':
                $slide237 = $imgOpt['filename'];
                break;  
            case 'slide138':
                $slide138 = $imgOpt['filename'];
                break;
            case 'slide238':
                $slide238 = $imgOpt['filename'];
                break;  
            case 'slide139':
                $slide139 = $imgOpt['filename'];
                break;
            case 'slide239':
                $slide239 = $imgOpt['filename'];
                break;  
            case 'slide1310':
                $slide1310 = $imgOpt['filename'];
                break;
            case 'slide2310':
                $slide2310 = $imgOpt['filename'];
                break;  
            case 'slide1311':
                $slide1311 = $imgOpt['filename'];
                break;
            case 'slide2311':
                $slide2311 = $imgOpt['filename'];
                break;  
                
        }

    }

    $imgico = "img/icons";
    $icodir = array_slice(scandir($imgico), 2);
    $imgcont = "img/contents";
    $condir = array_slice(scandir($imgcont), 2);
    $imgSubico = "ICON";
    $imgSubicodir = array_slice(scandir($imgSubico), 2);
    $imgSlide = "Resources/images/";
    $imgSlidedir = array_slice(scandir($imgSlide), 2);
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
                // document.getElementById("pageSelectBtn").disabled=false;
                // if(distext=='Main Page'){
                //     document.getElementById('MainEditSection').style.display = 'block';
                // }
                switch (distext) {
                    case 'Main Page':
                        document.getElementById('MainEditSection').style.display = 'flex';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                    case 'Section 1.1':
                        document.getElementById('1.1EditSection').style.display = 'block';
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                    case 'Section 1.2':
                        document.getElementById('1.2EditSection').style.display = 'block';
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;           

                    case 'Section 1.3':
                        document.getElementById('1.3EditSection').style.display = 'block';
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;   

                    case 'Section 1.4':
                        document.getElementById('1.4EditSection').style.display = 'block';
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none'; 
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                    case 'Section 1.5':
                        document.getElementById('1.5EditSection').style.display = 'block';
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 2.1':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'block';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 2.2':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'block';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 2.3':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'block';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 2.4':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'block';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 2.5':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'block';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.1':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'block';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.2':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'block';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.3':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'block';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.4':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'block';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.5':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'block';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.6':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'block';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.7':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'block';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.8':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'block';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.9':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'block';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.10':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'block';
                        document.getElementById('3.11EditSection').style.display = 'none';
                        break;

                        case 'Section 3.11':
                        document.getElementById('MainEditSection').style.display = 'none';
                        document.getElementById('1.1EditSection').style.display = 'none';
                        document.getElementById('1.2EditSection').style.display = 'none';
                        document.getElementById('1.3EditSection').style.display = 'none';
                        document.getElementById('1.4EditSection').style.display = 'none';
                        document.getElementById('1.5EditSection').style.display = 'none';
                        document.getElementById('2.1EditSection').style.display = 'none';
                        document.getElementById('2.2EditSection').style.display = 'none';
                        document.getElementById('2.3EditSection').style.display = 'none';
                        document.getElementById('2.4EditSection').style.display = 'none';
                        document.getElementById('2.5EditSection').style.display = 'none';
                        document.getElementById('3.1EditSection').style.display = 'none';
                        document.getElementById('3.2EditSection').style.display = 'none';
                        document.getElementById('3.3EditSection').style.display = 'none';
                        document.getElementById('3.4EditSection').style.display = 'none';
                        document.getElementById('3.5EditSection').style.display = 'none';
                        document.getElementById('3.6EditSection').style.display = 'none';
                        document.getElementById('3.7EditSection').style.display = 'none';
                        document.getElementById('3.8EditSection').style.display = 'none';
                        document.getElementById('3.9EditSection').style.display = 'none';
                        document.getElementById('3.10EditSection').style.display = 'none';
                        document.getElementById('3.11EditSection').style.display = 'block';
                        break;

                    default:
                    document.getElementById('MainEditSection').style.display = 'none';
                    document.getElementById('1.1EditSection').style.display = 'none';
                    document.getElementById('1.2EditSection').style.display = 'none';
                    document.getElementById('1.3EditSection').style.display = 'none';
                    document.getElementById('1.4EditSection').style.display = 'none';
                    document.getElementById('1.5EditSection').style.display = 'none';
                    document.getElementById('2.1EditSection').style.display = 'none';
                    document.getElementById('2.2EditSection').style.display = 'none';
                    document.getElementById('2.3EditSection').style.display = 'none';
                    document.getElementById('2.4EditSection').style.display = 'none';
                    document.getElementById('2.5EditSection').style.display = 'none';
                    document.getElementById('3.1EditSection').style.display = 'none';
                    document.getElementById('3.2EditSection').style.display = 'none';
                    document.getElementById('3.3EditSection').style.display = 'none';
                    document.getElementById('3.4EditSection').style.display = 'none';
                    document.getElementById('3.5EditSection').style.display = 'none';
                    document.getElementById('3.6EditSection').style.display = 'none';
                    document.getElementById('3.7EditSection').style.display = 'none';
                    document.getElementById('3.8EditSection').style.display = 'none';
                    document.getElementById('3.9EditSection').style.display = 'none';
                    document.getElementById('3.10EditSection').style.display = 'none';
                    document.getElementById('3.11EditSection').style.display = 'none';
                        break;
                }
            }else {
                // document.getElementById("pageSelectBtn").disabled=true;
            }
        }

    </script>
</head>
<body>

<div class="logout">
    <a href="Logout.php">Log out</a>
</div>

<div class ='editBody'>

<a href="menu.php">&#8592;BACK</a>

            <div class='editHeader'>
                <h1>Edit Selection</h1>
            </div>

            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
                <select required name="editSelect" id="editSelect" onchange="pageSelect();">
                    <option value="">--Select Section to Edit--</option>
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
                <!-- <button id="pageSelectBtn" class="btn" type="submit" disabled>GO</button> -->
            </form>

<div id='MainEditSection' style="display:none;">
<div style="width:40%;">
<div class='editHeader'>
                <h1>MAIN PAGE</h1>
            </div>

            <h2>Main Header Text</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mainheadertxt" id="mainheadertxt"><?php echo $mainheadertxt ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Main Welcome Header Text</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mainwelcometxtheader" id="mainwelcometxtheader"><?php echo $mainwelcometxtheader ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>            

            <h2> Main Welcome Text</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mainwelcometxt" id="mainwelcometxt"><?php echo $mainwelcometxt ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Main Service 1</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mainservice1" id="mainservice1"><?php echo $mainservice1 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Main Service 2</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mainservice2" id="mainservice2"><?php echo $mainservice2 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Main Service 3</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mainservice3" id="mainservice3"><?php echo $mainservice3 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Main Neu Page Link Text</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mainneupagelink" id="mainneupagelink"><?php echo $mainneupagelink ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Slideshow</h2>
            <label for="">Current Images:</label>
            <table style="width:200px; color:white;" class="table table-sm table-borderless">                
                <tbody>
                    <?php
                        $i = 0;
                        foreach($galQuery as $gal) {
                            $i++;
                            echo '<tr><td>' . $gal['filename'] . '</td></tr>';
                        }
                    ?>
                </tbody>
            </table>

            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to add this image?')">
            <select required name="mainslide" id="mainslide">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($condir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>
            <button class="btn" type="submit">ADD</button>
            </form>

            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?')">
            <select required name="mainslidermv" id="mainslidermv"  <?php if($i==1) echo 'disabled'; ?>>
                <option value="">--Select Image--</option>
                <?php 
                    foreach($galQuery as $gal){
                        echo '<option value="'. $gal['filename'] .'">' . $gal['filename'] . '</option>';
                    }                
                ?>
            </select>
            <button class="btn" type="submit" <?php if($i==1) echo 'disabled'; ?>>DELETE</button>
            </form>

            <!-- <?php
            foreach($galQuery as $gal) {
                echo '<label for ="' . $gal['filename'] . '">Current Image :</label>
                <input id="' . $gal['filename'] . '" name="' . $gal['filename'] . '" type="text" readonly value="' . $gal['filename'] . '"><br>';
            }            
            ?> -->

            <h2>Services1 icon</h2>
            <label for="currentServices1icon">Current Image :</label>
            <input id="currentServices1icon" name="currentServices1icon" type="text" readonly value=<?php echo $service1icon ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="service1icon" id="service1icon">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($icodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Services2 icon</h2>
            <label for="currentServices2icon">Current Image :</label>
            <input id="currentServices2icon" name="currentServices2icon" type="text" readonly value=<?php echo $service2icon ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="service2icon" id="service2icon">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($icodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Services3 icon</h2>
            <label for="currentServices3icon">Current Image :</label>
            <input id="currentServices3icon" name="currentServices3icon" type="text" readonly value=<?php echo $service3icon ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="service3icon" id="service3icon">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($icodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Events image</h2>
            <label for="currentEvents">Current Image :</label>
            <input id="currentEvents" name="currentEvents" type="text" readonly value=<?php echo $eventsimg ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="events" id="events">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($condir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>
</div>
<div style="flex-grow: 1;">
<iframe style="margin-left: 50px; width:90%; height: 2023px; pointer-events: none;" scrolling="no" src="main.php" frameborder="0"></iframe>
</div>
</div>

<div id="1.1EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 1.1</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader11" id="welcometextheader11"><?php echo $welcometextheader11 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext11" id="welcometext11"><?php echo $welcometext11 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg11">Current Image :</label>
            <input id="currentWelcomeimg11" name="currentWelcomeimg11" type="text" readonly value=<?php echo $welcomeimg11 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg11" id="welcomeimg11">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide111">Current Image :</label>
            <input id="currentslide111" name="currentslide111" type="text" readonly value=<?php echo $slide111 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide111" id="slide111">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide211">Current Image :</label>
            <input id="currentslide211" name="currentslide211" type="text" readonly value=<?php echo $slide211 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide211" id="slide211">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department11" id="department11"><?php echo $department11 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng11" id="mng11"><?php echo $mng11 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact11" id="contact11"><?php echo $contact11 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email11" id="email11"><?php echo $email11 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl11" id="embedUrl11"><?php echo $embedUrl11 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="1.2EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 1.2</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader12" id="welcometextheader12"><?php echo $welcometextheader12 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext12" id="welcometext12"><?php echo $welcometext12 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg12">Current Image :</label>
            <input id="currentWelcomeimg12" name="currentWelcomeimg12" type="text" readonly value=<?php echo $welcomeimg12 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg12" id="welcomeimg12">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide112">Current Image :</label>
            <input id="currentslide112" name="currentslide112" type="text" readonly value=<?php echo $slide112 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide112" id="slide112">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide212">Current Image :</label>
            <input id="currentslide212" name="currentWelcomeimg212" type="text" readonly value=<?php echo $slide212 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide212" id="slide212">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department12" id="department12"><?php echo $department12 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng12" id="mng12"><?php echo $mng12 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact12" id="contact12"><?php echo $contact12 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email12" id="email12"><?php echo $email12 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl12" id="embedUrl12"><?php echo $embedUrl12 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="1.3EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 1.3</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader13" id="welcometextheader13"><?php echo $welcometextheader13 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext13" id="welcometext13"><?php echo $welcometext13 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg13">Current Image :</label>
            <input id="currentWelcomeimg13" name="currentWelcomeimg13" type="text" readonly value=<?php echo $welcomeimg13 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg13" id="welcomeimg13">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide113">Current Image :</label>
            <input id="currentslide113" name="currentslide113" type="text" readonly value=<?php echo $slide113 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide113" id="slide113">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide213">Current Image :</label>
            <input id="currentslide213" name="currentslide213" type="text" readonly value=<?php echo $slide213 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide213" id="slide213">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department13" id="department13"><?php echo $department13 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng13" id="mng13"><?php echo $mng13 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact13" id="contact13"><?php echo $contact13 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email13" id="email13"><?php echo $email13 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl13" id="embedUrl13"><?php echo $embedUrl13 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="1.4EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 1.4</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader14" id="welcometextheader14"><?php echo $welcometextheader14 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext14" id="welcometext14"><?php echo $welcometext14 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg14">Current Image :</label>
            <input id="currentWelcomeimg14" name="currentWelcomeimg14" type="text" readonly value=<?php echo $welcomeimg14 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg14" id="welcomeimg14">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide114">Current Image :</label>
            <input id="currentslide114" name="currentslide114" type="text" readonly value=<?php echo $slide114 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide114" id="slide114">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide214">Current Image :</label>
            <input id="currentslide214" name="currentslide214" type="text" readonly value=<?php echo $slide214 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide214" id="slide214">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department14" id="department14"><?php echo $department14 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng14" id="mng14"><?php echo $mng14 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact14" id="contact14"><?php echo $contact14 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email14" id="email14"><?php echo $email14 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl14" id="embedUrl14"><?php echo $embedUrl14 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="1.5EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 1.5</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader15" id="welcometextheader15"><?php echo $welcometextheader15 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext15" id="welcometext15"><?php echo $welcometext15 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg15">Current Image :</label>
            <input id="currentWelcomeimg15" name="currentWelcomeimg15" type="text" readonly value=<?php echo $welcomeimg15 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg15" id="welcomeimg15">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide115">Current Image :</label>
            <input id="currentslide115" name="currentslide115" type="text" readonly value=<?php echo $slide115 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide115" id="slide115">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide215">Current Image :</label>
            <input id="currentslide215" name="currentslide215" type="text" readonly value=<?php echo $slide215 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide215" id="slide215">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department15" id="department15"><?php echo $department15 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng15" id="mng15"><?php echo $mng15 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact15" id="contact15"><?php echo $contact15 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email15" id="email15"><?php echo $email15 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl15" id="embedUrl15"><?php echo $embedUrl15 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="2.1EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 2.1</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader21" id="welcometextheader21"><?php echo $welcometextheader21 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext21" id="welcometext21"><?php echo $welcometext21 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg21">Current Image :</label>
            <input id="currentWelcomeimg21" name="currentWelcomeimg21" type="text" readonly value=<?php echo $welcomeimg21 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg21" id="welcomeimg21">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide121">Current Image :</label>
            <input id="currentslide121" name="currentslide121" type="text" readonly value=<?php echo $slide121 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide121" id="slide121">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide221">Current Image :</label>
            <input id="currentslide221" name="currentslide221" type="text" readonly value=<?php echo $slide221 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide221" id="slide221">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department21" id="department21"><?php echo $department21 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng21" id="mng21"><?php echo $mng21 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact21" id="contact21"><?php echo $contact21 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email21" id="email21"><?php echo $email21 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl21" id="embedUrl21"><?php echo $embedUrl21 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="2.2EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 2.2</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader22" id="welcometextheader22"><?php echo $welcometextheader22 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext22" id="welcometext22"><?php echo $welcometext22 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg22">Current Image :</label>
            <input id="currentWelcomeimg22" name="currentWelcomeimg22" type="text" readonly value=<?php echo $welcomeimg22 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg22" id="welcomeimg22">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide122">Current Image :</label>
            <input id="currentslide122" name="currentslide122" type="text" readonly value=<?php echo $slide122 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide122" id="slide122">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide222">Current Image :</label>
            <input id="currentslide222" name="currentslide222" type="text" readonly value=<?php echo $slide222 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide222" id="slide222">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department22" id="department22"><?php echo $department22 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng22" id="mng22"><?php echo $mng22 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact22" id="contact22"><?php echo $contact22 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email22" id="email22"><?php echo $email22 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl22" id="embedUrl22"><?php echo $embedUrl22 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="2.3EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 2.3</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader23" id="welcometextheader23"><?php echo $welcometextheader23 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext23" id="welcometext23"><?php echo $welcometext23 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg23">Current Image :</label>
            <input id="currentWelcomeimg23" name="currentWelcomeimg23" type="text" readonly value=<?php echo $welcomeimg23 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg23" id="welcomeimg23">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide123">Current Image :</label>
            <input id="currentslide123" name="currentslide123" type="text" readonly value=<?php echo $slide123 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide123" id="slide123">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide223">Current Image :</label>
            <input id="currentslide223" name="currentslide223" type="text" readonly value=<?php echo $slide223 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide223" id="slide223">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department23" id="department23"><?php echo $department23 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng23" id="mng23"><?php echo $mng23 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact23" id="contact23"><?php echo $contact23 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email23" id="email23"><?php echo $email23 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl23" id="embedUrl23"><?php echo $embedUrl23 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="2.4EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 2.4</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader24" id="welcometextheader24"><?php echo $welcometextheader24 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext24" id="welcometext24"><?php echo $welcometext24 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg24">Current Image :</label>
            <input id="currentWelcomeimg24" name="currentWelcomeimg24" type="text" readonly value=<?php echo $welcomeimg24 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg24" id="welcomeimg24">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide124">Current Image :</label>
            <input id="currentslide124" name="currentslide124" type="text" readonly value=<?php echo $slide124 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide124" id="slide124">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide224">Current Image :</label>
            <input id="currentslide224" name="currentslide224" type="text" readonly value=<?php echo $slide224 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide224" id="slide224">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department24" id="department24"><?php echo $department24 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng24" id="mng24"><?php echo $mng24 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact24" id="contact24"><?php echo $contact24 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email24" id="email24"><?php echo $email24 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl24" id="embedUrl24"><?php echo $embedUrl24 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="2.5EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 2.5</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader25" id="welcometextheader25"><?php echo $welcometextheader25 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext25" id="welcometext25"><?php echo $welcometext25 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg25">Current Image :</label>
            <input id="currentWelcomeimg25" name="currentWelcomeimg25" type="text" readonly value=<?php echo $welcomeimg25 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg25" id="welcomeimg25">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide125">Current Image :</label>
            <input id="currentslide125" name="currentslide125" type="text" readonly value=<?php echo $slide125 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide125" id="slide125">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide225">Current Image :</label>
            <input id="currentslide225" name="currentslide225" type="text" readonly value=<?php echo $slide225 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide225" id="slide225">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department25" id="department25"><?php echo $department25 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng25" id="mng25"><?php echo $mng25 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact25" id="contact25"><?php echo $contact25 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email25" id="email25"><?php echo $email25 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl25" id="embedUrl25"><?php echo $embedUrl25 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.1EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.1</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader31" id="welcometextheader31"><?php echo $welcometextheader31 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext31" id="welcometext31"><?php echo $welcometext31 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg31">Current Image :</label>
            <input id="currentWelcomeimg31" name="currentWelcomeimg31" type="text" readonly value=<?php echo $welcomeimg31 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg31" id="welcomeimg31">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide131">Current Image :</label>
            <input id="currentslide131" name="currentslide131" type="text" readonly value=<?php echo $slide131 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide131" id="slide131">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide231">Current Image :</label>
            <input id="currentslide231" name="currentslide231" type="text" readonly value=<?php echo $slide231 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide231" id="slide231">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department31" id="department31"><?php echo $department31 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng31" id="mng31"><?php echo $mng31 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact31" id="contact31"><?php echo $contact31 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email31" id="email31"><?php echo $email31 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl31" id="embedUrl31"><?php echo $embedUrl31 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.2EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.2</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader32" id="welcometextheader32"><?php echo $welcometextheader32 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext32" id="welcometext32"><?php echo $welcometext32 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg32">Current Image :</label>
            <input id="currentWelcomeimg32" name="currentWelcomeimg32" type="text" readonly value=<?php echo $welcomeimg32 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg32" id="welcomeimg32">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide132">Current Image :</label>
            <input id="currentslide132" name="currentslide132" type="text" readonly value=<?php echo $slide132 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide132" id="slide132">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide232">Current Image :</label>
            <input id="currentslide232" name="currentslide232" type="text" readonly value=<?php echo $slide232 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide232" id="slide232">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department32" id="department32"><?php echo $department32 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng32" id="mng32"><?php echo $mng32 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact32" id="contact32"><?php echo $contact32 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email32" id="email32"><?php echo $email32 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl32" id="embedUrl32"><?php echo $embedUrl32 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.3EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.3</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader33" id="welcometextheader33"><?php echo $welcometextheader33 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext33" id="welcometext33"><?php echo $welcometext33 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg33">Current Image :</label>
            <input id="currentWelcomeimg33" name="currentWelcomeimg33" type="text" readonly value=<?php echo $welcomeimg33 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg33" id="welcomeimg33">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide133">Current Image :</label>
            <input id="currentslide133" name="currentslide133" type="text" readonly value=<?php echo $slide133 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide133" id="slide133">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide233">Current Image :</label>
            <input id="currentslide233" name="currentslide233" type="text" readonly value=<?php echo $slide233 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide233" id="slide233">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department33" id="department33"><?php echo $department33 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng33" id="mng33"><?php echo $mng33 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact33" id="contact33"><?php echo $contact33 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email33" id="email33"><?php echo $email33 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl33" id="embedUrl33"><?php echo $embedUrl33 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.4EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.4</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader34" id="welcometextheader34"><?php echo $welcometextheader34 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext34" id="welcometext34"><?php echo $welcometext34 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg34">Current Image :</label>
            <input id="currentWelcomeimg34" name="currentWelcomeimg34" type="text" readonly value=<?php echo $welcomeimg34 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg34" id="welcomeimg34">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide134">Current Image :</label>
            <input id="currentslide134" name="currentslide134" type="text" readonly value=<?php echo $slide134 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide134" id="slide134">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide234">Current Image :</label>
            <input id="currentslide234" name="currentslide234" type="text" readonly value=<?php echo $slide234 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide234" id="slide234">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department34" id="department34"><?php echo $department34 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng34" id="mng34"><?php echo $mng34 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact34" id="contact34"><?php echo $contact34 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email34" id="email34"><?php echo $email34 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl34" id="embedUrl34"><?php echo $embedUrl34 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.5EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.5</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader35" id="welcometextheader35"><?php echo $welcometextheader35 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext35" id="welcometext35"><?php echo $welcometext35 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg35">Current Image :</label>
            <input id="currentWelcomeimg35" name="currentWelcomeimg35" type="text" readonly value=<?php echo $welcomeimg35 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg35" id="welcomeimg35">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide135">Current Image :</label>
            <input id="currentslide135" name="currentslide135" type="text" readonly value=<?php echo $slide135 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide135" id="slide135">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide235">Current Image :</label>
            <input id="currentslide235" name="currentslide235" type="text" readonly value=<?php echo $slide235 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide235" id="slide235">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department35" id="department35"><?php echo $department35 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng35" id="mng35"><?php echo $mng35 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact35" id="contact35"><?php echo $contact35 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email35" id="email35"><?php echo $email35 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl35" id="embedUrl35"><?php echo $embedUrl35 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.6EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.6</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader36" id="welcometextheader36"><?php echo $welcometextheader36 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext36" id="welcometext36"><?php echo $welcometext36 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg36">Current Image :</label>
            <input id="currentWelcomeimg36" name="currentWelcomeimg36" type="text" readonly value=<?php echo $welcomeimg36 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg36" id="welcomeimg36">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide136">Current Image :</label>
            <input id="currentslide136" name="currentslide136" type="text" readonly value=<?php echo $slide136 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide136" id="slide136">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide236">Current Image :</label>
            <input id="currentslide236" name="currentslide236" type="text" readonly value=<?php echo $slide236 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide236" id="slide236">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department36" id="department36"><?php echo $department36 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng36" id="mng36"><?php echo $mng36 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact36" id="contact36"><?php echo $contact36 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email36" id="email36"><?php echo $email36 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl36" id="embedUrl36"><?php echo $embedUrl36 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.7EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.7</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader37" id="welcometextheader37"><?php echo $welcometextheader37 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext37" id="welcometext37"><?php echo $welcometext37 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg37">Current Image :</label>
            <input id="currentWelcomeimg37" name="currentWelcomeimg37" type="text" readonly value=<?php echo $welcomeimg37 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg37" id="welcomeimg37">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide137">Current Image :</label>
            <input id="currentslide137" name="currentslide137" type="text" readonly value=<?php echo $slide137 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide137" id="slide137">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide237">Current Image :</label>
            <input id="currentslide237" name="currentslide237" type="text" readonly value=<?php echo $slide237 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide237" id="slide237">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department37" id="department37"><?php echo $department37 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng37" id="mng37"><?php echo $mng37 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact37" id="contact37"><?php echo $contact37 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email37" id="email37"><?php echo $email37 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl37" id="embedUrl37"><?php echo $embedUrl37 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.8EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.8</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader38" id="welcometextheader38"><?php echo $welcometextheader38 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext38" id="welcometext38"><?php echo $welcometext38 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg38">Current Image :</label>
            <input id="currentWelcomeimg38" name="currentWelcomeimg38" type="text" readonly value=<?php echo $welcomeimg38 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg38" id="welcomeimg38">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide138">Current Image :</label>
            <input id="currentslide138" name="currentslide138" type="text" readonly value=<?php echo $slide138 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide138" id="slide138">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide238">Current Image :</label>
            <input id="currentslide238" name="currentslide238" type="text" readonly value=<?php echo $slide238 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide238" id="slide238">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department38" id="department38"><?php echo $department38 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng38" id="mng38"><?php echo $mng38 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact38" id="contact38"><?php echo $contact38 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email38" id="email38"><?php echo $email38 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl38" id="embedUrl38"><?php echo $embedUrl38 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.9EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.9</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader39" id="welcometextheader39"><?php echo $welcometextheader39 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext39" id="welcometext39"><?php echo $welcometext39 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg39">Current Image :</label>
            <input id="currentWelcomeimg39" name="currentWelcomeimg39" type="text" readonly value=<?php echo $welcomeimg39 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg39" id="welcomeimg39">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide139">Current Image :</label>
            <input id="currentslide139" name="currentslide139" type="text" readonly value=<?php echo $slide139 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide139" id="slide139">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide239">Current Image :</label>
            <input id="currentslide239" name="currentslide239" type="text" readonly value=<?php echo $slide239 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide239" id="slide239">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department39" id="department39"><?php echo $department39 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng39" id="mng39"><?php echo $mng39 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact39" id="contact39"><?php echo $contact39 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email39" id="email39"><?php echo $email39 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl39" id="embedUrl39"><?php echo $embedUrl39 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.10EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.10</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader310" id="welcometextheader310"><?php echo $welcometextheader310 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext310" id="welcometext310"><?php echo $welcometext310 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg310">Current Image :</label>
            <input id="currentWelcomeimg310" name="currentWelcomeimg310" type="text" readonly value=<?php echo $welcomeimg310 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg310" id="welcomeimg310">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide1310">Current Image :</label>
            <input id="currentslide1310" name="currentslide1310" type="text" readonly value=<?php echo $slide1310 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide1310" id="slide1310">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide2310">Current Image :</label>
            <input id="currentslide2310" name="currentslide2310" type="text" readonly value=<?php echo $slide2310 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide2310" id="slide2310">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department310" id="department310"><?php echo $department310 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng310" id="mng310"><?php echo $mng310 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact310" id="contact310"><?php echo $contact310 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email310" id="email310"><?php echo $email310 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl310" id="embedUrl310"><?php echo $embedUrl310 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<div id="3.11EditSection" style="display:none">
            <div class='editHeader'>
                <h1>Sub 3.11</h1>
            </div>

            <h2>Welcome Header</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometextheader311" id="welcometextheader311"><?php echo $welcometextheader311 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Paragraph</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="welcometext311" id="welcometext311"><?php echo $welcometext311 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Welcome Icon</h2>
            <label for="currentWelcomeimg311">Current Image :</label>
            <input id="currentWelcomeimg311" name="currentWelcomeimg311" type="text" readonly value=<?php echo $welcomeimg311 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="welcomeimg311" id="welcomeimg311">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSubicodir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 1</h2>
            <label for="currentslide1311">Current Image :</label>
            <input id="currentslide1311" name="currentslide1311" type="text" readonly value=<?php echo $slide1311 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide1311" id="slide1311">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Slide Image 2</h2>
            <label for="currentslide2311">Current Image :</label>
            <input id="currentslide2311" name="currentslide2311" type="text" readonly value=<?php echo $slide2311 ?>>
            <form action="editing.php"method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <select required name="slide2311" id="slide2311">
                <option value="">--Select Image--</option>
                <?php 
                    foreach($imgSlidedir as $d){
                        echo '<option value="'. $d .'">' . $d . '</option>';
                    }                
                ?>
            </select>

            <button class="btn" type="submit">SAVE</button>
            </form>

            <h2>Department</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="department311" id="department311"><?php echo $department311 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>MNG</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="mng311" id="mng311"><?php echo $mng311 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>CONTACT</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="contact311" id="contact311"><?php echo $contact311 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>EMAIL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="email311" id="email311"><?php echo $email311 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

            <h2>Embed Video URL</h2>
            <form action="editing.php" method="POST" onsubmit="return confirm('Are you sure you want to save?')">
            <textarea name="embedUrl311" id="embedUrl311"><?php echo $embedUrl311 ?></textarea>
            <div>
            <button class="btn" type="submit">SAVE</button>
            </div>
            </form>

</div>

<!-- 
<div id="" style="display:none">
            <div class='editHeader'>
                <h1>MAIN PAGE</h1>
            </div>
</div> 
-->

</div>
    
</body>
</html>