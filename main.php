<?php


try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=saas', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }

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
        }
    }

    $statement = $connection->prepare("select filename FROM gallery");

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $Querysult = $result;

    // $events = $connection->prepare("select filename FROM images WHERE output='events'");

    // $events->execute();

    // $eventsResult = $events->fetchAll(PDO::FETCH_ASSOC);

    // $eventQuery = $eventsResult;

    $imgDb = $connection->prepare("select * from images");

    $imgDb->execute();

    $imgResult = $imgDb->fetchAll(PDO::FETCH_ASSOC);

    $imgQuery = $imgResult;

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
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAAS</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.php">

</head>

<body>

<div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="https://www.neu.edu.ph/main/">
        <img src="img/icons/blackNEULogoTop.png" onmouseover=this.src="img/icons/greenNEULogoTop.png" onmouseout=this.src="img/icons/blackNEULogoTop.png" alt="" loading="lazy">
        </a>
        <ul class="saas navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-left" href="#"><?php echo $mainheadertxt ?></a>
            </li>
        </ul>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ISN"
            aria-controls="ISN" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- <div class="collapse navbar-collapse" id="ISN"> -->
            <!-- <ul class="isn navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">INFO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hunterNews">NEWS</a>
                </li>
            </ul> -->
        <!-- </div> -->
        
        <!-- <ul class = "saas navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="Login.php">ADMIN</a>
            </li>
        </ul> -->
    </nav>

    <div class="welcome">
        <div class="row">
            <div class="msg animated fadeIn slow col-6">
                <div class="wlcmHeader"><?php echo $mainwelcometxtheader ?></div>
                <p class="wlcmtxt">
                    <!-- Lorem ipis dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna -->
                    <?php echo $mainwelcometxt ?>
                </p>

            </div>
            <div class="animated fadeIn slideInRight slow col-6 carousel slide carousel-fade" data-ride="carousel" data-interval="6900"">
                <div class="carousel-inner z-depth-3">
                    <!-- <div class="carousel-item active">
                        <img class="d-block w-100" src="img/contents/NEU_Main2.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/contents/NEU_Main.jpg" alt="">
                    </div> -->
                    <?php 
                    foreach($Querysult as $CurrName => $element){
                    if($CurrName === array_key_first($Querysult))
                    
                        echo '<div class="carousel-item active"> <img class="d-block w-100" src="img/contents/' . $element['filename'] . '" alt=""> </div>';
                    else
                        echo '<div class="carousel-item"> <img class="d-block w-100" src="img/contents/' . $element['filename'] . '" alt=""> </div>';
                    
                        // echo '<div class="carousel-item"> <img class="d-block w-100" src="img/contents/' . $CurrName['filename'] . '" alt=""> </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<div class="services" id="services">
    <div class="row">
        <div class="sws col-4">
            <img src=<?php echo '"img/icons/' . $service1icon . '"' ?>>
            <div class="serviceLabel"><p><?php echo $mainservice1 ?></p></div>
            <div class="swsTip service-container z-depth-2">
                <ul>
                    <li><a href="">1.1 Information and Orientation Services</a></li>
                    <li><a href="">1.2 Guidance and Counseling Services</a></li>
                    <li><a href="">1.3 Career and Job Placement Services</a></li>
                    <li><a href="">1.4 Economic Enterprise Development</a></li>
                    <li><a href="">1.5 Student Handbook Development</a></li>
                </ul>
            </div>
            <div class="tri sws-tri"></div>
        </div>
        <div class="sd col-4">
        <img src=<?php echo '"img/icons/' . $service2icon . '"' ?>>
            <div class="serviceLabel"><p><?php echo $mainservice2 ?></p></div>
            <div class="sdTip service-container z-depth-2">
                <ul>
                    <li><a href="">2.1 Student Organizations and Activities</a></li>
                    <li><a href="">2.2 Leadership Training</a></li>
                    <li><a href="">2.3 Student Council/Government</a></li>
                    <li><a href="">2.4 Student Discipline</a></li>
                    <li><a href="">2.5 Student Publication/Yearbook</a></li>
                </ul>
            </div>
            <div class="tri sd-tri"></div>
        </div>
        <div class="isp col-4">
        <img src=<?php echo '"img/icons/' . $service3icon . '"' ?>>
            <div class="serviceLabel"><p><?php echo $mainservice3 ?></p></div>
            <div class="ispTip service-container z-depth-2">
                <ul>
                    <li><a href="">3.1 Admission Services</a></li>
                    <li><a href="">3.2 Scholarships and Financial Assistance</a></li>
                    <li><a href="">3.3 Food Services</a></li>
                    <li><a href="">3.4 Health Service</a></li>
                    <li><a href="">3.5 Safety and Security Services</a></li>
                    <li><a href="">3.6 Student Housing and Residential</a></li>
                    <li><a href="">3.7 Foreign/International Students Services</a></li>
                    <li><a href="">3.8 Services for Specific Students Guidance</a></li>
                    <li><a href="">3.9 Cultural and Arts Programs</a></li>
                    <li><a href="">3.10 Sports Development Programs</a></li>
                    <li><a href="">3.11 Social and Community Involvement Programs</a></li>
                </ul>
            </div>
            <div class="tri isp-tri"></div>
        </div>
    </div>
</div>

<!-- <div class="hunterNews" id="hunterNews">
    <div class="row">
        <div class="col-7">
            <h1>HUNTERS NEWS</h1>
            <p>
                Lorem ipis dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            </p>
        </div>
        <div class="newsletter col-3 offset-2 z-depth-3">
            <div class="md-form input-with-pre-icon">
                <button type="submit" class="btn">SUBSCRIBE</button>
                <i class="fas fa-envelope input-prefix"></i>
                <input type="email" class="form-control" placeholder="JohnDoe@gmail.com">
            </div>
        </div>
    </div>
    <div class="row announcements">
        <div class="prioAnnouncement col-5">
            <img src="img/neu-phlsat.jpg" width="100%" alt="">
            <p>
                Lorem ipis dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna
            </p>
        </div>
        <div class="varAnnouncement col-7">
            <div id="carousel-announcements" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                  <li data-target="#carousel-announcements" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-announcements" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner z-depth-3" role="listbox">

                  <div class="carousel-item active">
                    <img class="d-block" width="100%" height="120%" src="img/NEU_Main.jpg">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block" width="100%" src="img/NEU_Main2.jpg">
                  </div>

                </div>

                <a class="carousel-control-prev" href="#carousel-announcements" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-announcements" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

              </div>
        </div>
    </div>
    <div class="row">
        <div class="social col-6">
            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/p/BdKduGtg6Se/"><img src="img/ig.png" alt=""></a>
            <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/NEU_PH_official"><img src="img/twitter.png" alt=""></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Neu.ph.official"><img src="img/fb.png" alt=""></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCXEnDGnw3poCdV7VL-8YJ7w"><img src="img/youtube.png" alt=""></a>
        </div>
        <div class="backToMain col-6 text-right">
           <a href="https://www.neu.edu.ph/main/"><span>BACK TO MAIN WEBSITE</span> <span class="fas fa-home"></span></a>
        </div>
    </div>
</div> -->

<!-- <div class="upcomingEvents">
    <p>UPCOMING EVENTS</p>
    <div class="gallery js-flickity" data-flickity='{"initialIndex": 1, "pageDots": false, "setGallerySize": false, "selectedAttraction": 0.005, "friction" : "0.25"}'>
        <div class="gallery-cell"><img src="img/events.png" alt=""></div>
        <div class="gallery-cell"><img src="img/events.png" alt=""></div>
        <div class="gallery-cell"><img src="img/events.png" alt=""></div>
      </div>
</div>

<div class="prevEvents">
    <p>PREVIOUS EVENTS</p>
</div>

</div> -->

<div class="events">
    <!-- <img src="img/events.png" alt=""> -->
    <?php
        echo '<img src="img/contents/' . $eventsimg . '" alt="">';
    ?>
</div>

<div class="mainSiteLink">
    <a href="https://www.neu.edu.ph/main/"><h1><?php echo $mainneupagelink ?></h1></a>
</div>

<footer class="page-footer">

    <div class="container">

      <div class="row">

        <div class="col-3 text-center">
            <a href="https://www.neu.edu.ph/main/"><img src="img/icons/neuIcon.png" alt=""></a>
        </div>

        <div class="address col-5">
        <a target="_blank" rel="noopener noreferrer" href="https://www.google.com/search?source=hp&ei=nHx7X_nKOafgz7sPyoeT-AQ&q=No.+9+Central+Ave.%2C+New+Era%2C+Quezon+City%2C+Philippines%2C+1107&oq=No.+9+Central+Ave.%2C+New+Era%2C+Quezon+City%2C+Philippines%2C+1107&gs_lcp=CgZwc3ktYWIQAzICCCYyAggmMgIIJjICCCYyAggmOg4IABDqAhC0AhCaARDlAjoLCC4QsQMQgwEQkwI6CAgAELEDEIMBOgUIABCxAzoICC4QsQMQgwE6AggAOgQIABAKOgUILhCTAjoCCC46CAguEMcBEK8BOgsILhDHARCvARCTAjoGCAAQFhAeOgcIIRAKEKABUM4UWIqiAWDu2QFoAnAAeASAAcAFiAGbmwGSARAxLjI0LjEzLjYuNy4xMi4xmAEAoAEBqgEHZ3dzLXdperABBg&sclient=psy-ab&ved=0ahUKEwj5iMeRoJ7sAhUn8HMBHcrDBE8Q4dUDCAY&uact=5">
            <p>
                No. 9 Central Ave., New Era, <br>
                Quezon City, Philippines, <br>
                1107 <br>
                Telephone: (02) 8981-4221
            </p>
        </a>

        </div>

        <div class="branch col-4 text-right">

          <h5>BRANCHES</h5>

          <ul>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://www.google.com/search?biw=844&bih=933&tbm=lcl&ei=Dn97X8yvIZKC4-EP14OVmA8&q=1795+P.+Olan+St+Lipa+4217%2C+Batangas&oq=1795+P.+Olan+St+Lipa+4217%2C+Batangas&gs_l=psy-ab.3...92228.92228.0.92996.1.1.0.0.0.0.188.188.0j1.1.0....0...1c.1.64.psy-ab..0.0.0....0.Fbopbq6KvWU#rlfi=hd:;si:17695128448191730458;mv:[[13.972927677319031,121.17356026510446],[13.972567722680973,121.17318933489553]]">Batangas</a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://www.google.com/search?sa=X&q=MacArthur%20Highway%2C%20City%20of%20San%20Fernando%2C%20Pampanga%2C%20Manila%20N%20Rd%2C%20San%20Fernando%2C%20Pampanga&ved=2ahUKEwiu34Syop7sAhXGzTgGHUYCAvoQvS4wAXoECAsQMg&biw=844&bih=933&dpr=1&npsic=0&rflfq=1&rlha=0&rllag=15066327,120654435,4103&tbm=lcl&rldimm=15381373631219734540&lqi=ClZNYWNBcnRodXIgSGlnaHdheSwgQ2l0eSBvZiBTYW4gRmVybmFuZG8sIFBhbXBhbmdhLCBNYW5pbGEgTiBSZCwgU2FuIEZlcm5hbmRvLCBQYW1wYW5nYVp2CiFtYW5pbGEgbiByZCBzYW4gZmVybmFuZG8gcGFtcGFuZ2EiUW1hY2FydGh1ciBoaWdod2F5IGNpdHkgb2Ygc2FuIGZlcm5hbmRvIHBhbXBhbmdhIG1hbmlsYSBuIHJkIHNhbiBmZXJuYW5kbyBwYW1wYW5nYQ&phdesc=WpbZF0ZvfR4&rldoc=1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:1&rlst=f#">Pampanga</a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://www.google.com.ph/maps/place/New+Era+University/@6.13661,125.1685399,17z/data=!4m12!1m6!3m5!1s0x32f79ef7e2b25f07:0x745350b9a55bd91c!2sNew+Era+University!8m2!3d6.1366047!4d125.1707286!3m4!1s0x32f79ef7e2b25f07:0x745350b9a55bd91c!8m2!3d6.1366047!4d125.1707286">General Santos City</a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="https://www.google.com/search?biw=844&bih=933&tbm=lcl&ei=H4B7X8qjB8Od4-EP0ZOxyAc&q=E+G+Manalo%2C+Baras%2C+Rizal&oq=E+G+Manalo%2C+Baras%2C+Rizal&gs_l=psy-ab.3...78409.78409.0.79077.1.1.0.0.0.0.109.109.0j1.1.0....0...1c.1.64.psy-ab..0.0.0....0.wl8SQL_d6u8#rlfi=hd:;si:4667349734602605144,l,ChhFIEcgTWFuYWxvLCBCYXJhcywgUml6YWxaIgoJZWcgbWFuYWxvIhVlZyBtYW5hbG8gYmFyYXMgcml6YWw;mv:[[14.605919,121.26845499999999],[14.520076999999999,121.17706369999999]]">Rizal</a>
            </li>
          </ul>

        </div>

      </div>

    </div>

</footer>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/popper.min.js"></script> -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
</body>
</html>