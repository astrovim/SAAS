<?php
    header("Content-type: text/css; charset: UTF-8");
?>

@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@500&display=swap');

<style type="text/css">

:root {

/* SERVICES SECTION COLORS */
    --sws-color: #18694F;
    --sd-color: #4D4F50;
    --isp-color: #E33E1B;
}

.container {
    max-width: none;
    padding-left: 0;
    padding-right: 0;
}

.row {
    margin-left: 0;
    margin-right: 0;
}

.navbar {
    box-shadow: 0 0 0 0;
    font-family: 'Source Code Pro', monospace;
    font-size: min(2vw, 15px);
    width: 90%;
    margin: auto;
}

.navbar-nav {
    flex-direction: row;
}

.navbar img {
    width: min(5vw, 70px);
}

.saas .nav-link:hover {
    color: #006a4e !important;
}

.isn .nav-link:hover {
    color: #a81c07 !important;
}

.welcome {
    margin-top: min(10vw,100px);
    margin-bottom: min(20vw, 200px);
    width: 90%;
    margin-left: auto;
    margin-right: auto;
}

.welcome .wlcmHeader {
    text-align: center;
    font-size: min(6vw, 5em);
    font-family: 'Bebas Neue';
    border-bottom: min(1vw,5px) solid black;
    white-space: nowrap;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
}

.welcome .wlcmtxt {
    text-align: justify;
    margin-top: min(2vw, 25px);
    font-size: min(1.5vw,1.2em);
    font-family: 'Cutive Mono', monospace;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
}

.services {
    scroll-margin-top: 50px;
    text-align: center;
    color: white;
    margin-bottom: min(25vw, 300px);
}

.serviceLabel {
    width: max-content;
    text-align: center;
    font-size: min(2vw, 20px);
    font-family: 'Source Code Pro', monospace;
    color: white;
    transform: translateX(-50%);
    line-height: 100%;
    position: absolute;
    left: 50%;
    top: 75%;
}

.services .col-4 {
    height: min(35vw, 400px);
    width: 400px;
}

/* .services i {
    margin-top: min(18vw, 200px);
    transform: translateY(-50%);
    font-size: min(20vw, 10em);
} */

.services img {
    margin-top: min(13vw, 150px);
    transform: translateY(-50%);
    height: min(20vw,250px);
}

.services .sws {
    background-color: var(--sws-color);
    background-image: url(img/contents/sws1.png);
    background-size: cover;
    background-repeat: no-repeat;
}

.services .sd {
    background-color: var(--sd-color);
    background-image: url(img/contents/sws.png);
    background-size: cover;
    background-repeat: no-repeat;
}

.services .isp {
    background-color: var(--isp-color);
    background-image: url(img/contents/isps.png);
    background-size: cover;
    background-repeat: no-repeat;
}

.service-container {
    position: absolute;
    visibility: hidden;
    opacity: 0;
    height: max-content;
    max-height: 300px;
    width: max-content;
    /* min-width: 500px; */
    background-color: white;
    border-radius: min(5vw, 50px);
    text-align: left;
    padding-right: min(2vw, 15px);
    bottom: max(2vw, -175px);
    z-index: 1000;
    transform: translateY(100%);
}

.services ul {
    margin-top: min(3vw, 50px);
    margin-left: min(2.5vw, 30px);
    white-space: nowrap;
}

.services li {
    font-family: 'Source Code Pro', monospace;
    font-size: min(1.3vw, 17px);
    width: 90%;
    margin-bottom: 5px;
}

.services li:not(:first-child) {
    border-top: 1px solid grey;
}

.services a {
    color: black;
}

.services .tri {
    position: absolute;
    height: 10px;
    width: 10px;
    border: min(2.5vw, 25px) solid transparent;
    z-index: 1001;
    visibility: hidden;
    opacity: 0;
    transform: translateY(100%);
}

.services .sws .sws-tri {
    border-top: min(2.5vw, 25px) solid var(--sws-color);
    bottom: max(2.1vw, -175px);
    left: 69px;
}

.sws:hover .sws-tri {
    visibility: visible;
    opacity: 1;
}

.services .sd .sd-tri {
    border-top: min(2.5vw, 25px) solid var(--sd-color);
    bottom: max(2.1vw, -175px);
    left: min(10vw, 180px);
}

.sd:hover .sd-tri {
    visibility: visible;
    opacity: 1;
}

.services .isp .isp-tri {
    border-top: min(2.5vw, 25px) solid var(--isp-color);
    bottom: max(2.2vw, -175px);
    left: min(10vw, 180px);
}

.isp:hover .isp-tri {
    visibility: visible;
    opacity: 1;
}

.services .swsTip a:hover{
    color: var(--sws-color);
}

.sws:hover .swsTip{
    visibility: visible;
    opacity: 1;
}

/* .swsTip:hover {
    visibility: visible;
    opacity: 1;
} */

.swsTip::before {
    content: '';
    width: 10px;
    height: 10px;
    background-color: black;
    z-index: 5000;
}

.sd:hover .sdTip{
    visibility: visible;
    opacity: 1;
}

.sd .sdTip a:hover {
    color: var(--sd-color);
}

.sd .sdTip {
    left: -50px;
}

.isp:hover .ispTip {
    visibility: visible;
    opacity: 1;
}

.isp .ispTip {
    left: max(-53vw, -650px);
    bottom: max(2.1vw, -175px);
}

.isp .ispTip ul {
    columns: 2;
    -webkit-columns: 2;
    -moz-columns: 2;
}

.isp .ispTip li:nth-child(7) {
    border-top: none;
}

.isp .ispTip a:hover {
    color: var(--isp-color);
}

.hunterNews {
    scroll-margin-top: 50px;
    margin-bottom: min(15vw, 150px);
    width: 95%;
    margin-left: auto;
    margin-right: auto;
}

.hunterNews h1 {
    font-family: 'Bebas Neue';
    font-size: min(8.5vw, 6.5em);
    white-space: nowrap;
}

.hunterNews p {
    font-family: 'Poppins';
    font-size: min(1.5vw, 1em);
}

.newsletter {
    background-color: black;
    border-radius: min(10vw, 40px);
    height: min(13vw, 50%);
}

.fa-envelope {
    /* margin-top: min(1.7vw, 20px); */
    font-size: min(1.5vw, 1em);
}

.md-form {
    text-align: center;
    margin-top: 0;
    margin-bottom: min(2vw, 25px);
}

.md-form .btn {
    margin: 0;
}

.md-form .input-prefix.active {
    color: black;
}

.md-form .btn {
    padding: 0;
    font-family: 'Poppins';
    font-size: min(2vw, 1.5em);
    box-shadow: 0 0 0 0;
    color: white;
}

.md-form input[type="email"]:not(.browser-default) {
    background-color: white;
    border-radius: 20px;
    font-size: min(1vw, 1em);
    height: 3vw;
    margin: 0;
}

.md-form.input-with-pre-icon .form-control {
    padding-left: min(4vw, 2.6rem) !important;
}

.md-form.input-with-pre-icon .input-prefix {
    left: min(2vw, 16px);
    top: min(78%, 65px);
}

.announcements {
    border-top: 5px solid #006a4e;
    border-bottom: 5px solid #a81c07;
    padding-top: min(5vw, 50px);
    padding-bottom: min(2vw,25px);
    margin-top: min(1vw, 25px);
    margin-bottom: min(1vw, 25px);
}

.prioAnnouncement {
    padding-left: 0px;
    padding-right: min(5vw, 30px);
    font-size: min(1.5vw, 11px);
    text-align: justify;
}

.prioAnnouncement p {
    margin-top: 1vw;
}

.varAnnouncement {
    padding-right: 0px;
    padding-left: 0;
}

.social img {
    margin-right: min(2vw, 30px);
    width: min(5vw,50px);
}

.backToMain {
    display: inline;
    font-family: 'Bebas Neue';
    font-size: min(2.5vw, 1.5em);
}

.backToMain .fas {
    margin-left: 10px;
}

.backToMain a, .social a {
    color: black;
}

.upcomingEvents, .prevEvents {
    background-color: #2d2d2d;
    height: 350px;
    max-width: 1080px;
    margin: auto;
    margin-bottom: 100px;
}

.upcomingEvents p, .prevEvents p{
    margin-left: min(2vw,25px);
    padding-top: min(1vw,15px);
    font-size: min(5vw,50px);
    font-family: 'Bebas Neue';
    color: white;
}

.upcomingEvents img {
    width: 100%;
}

  .gallery {
      height: 60%;
  }

  .gallery-cell {
    width: 200px;
    margin-top: 25px;
    margin-right: 125px;
    opacity: 40%;
    transform: translateY(3%);
    object-fit: cover;
  }

  .gallery-cell.is-selected {
    opacity: 100%;
    transform: scale(1.25);
    transition: transform 1s;
  }

  .flickity-button {
    background: transparent;
  }

  .flickity-button:hover {
      background: transparent;
  }

  .flickity-button-icon {
      fill: white;
  }

  .flickity-prev-next-button:disabled {
    display: none;
  }

.events {
    text-align: center;
}

.events img {
    width: 60vw;
    /* margin-left: 50%; */
    /* transform: translateX(-50%); */
    margin-bottom: 100px;
}

.mainSiteLink h1{
    color: black;
    margin-left: 50%;
    margin-bottom: 75px;
    transform: translateX(-50%);
    text-align: center;
    font-family: 'Bebas Neue';
    font-size: min(3vw, 35px);
    width: max-content;
    border-bottom: 5px solid black;
}

.page-footer {
    background-color: #006a4e;
    /* background-image: url("img/University\ Information\ bg\ fix.png"); */
    background-size: 100%;
    font-family: 'Poppins', sans-serif;
    font-size: min(1.7vw, 20px);
    padding-top: min(1.5vw, 15px);
    /* max-width: 1080px; */
    margin-left: auto;
    margin-right: auto;
}

.page-footer img {
    width: 18vw;
    max-width: 160px;
    margin-top: min(3vw, 30px);
    margin-bottom: min(1.5vw, 15px);
}

.page-footer .address {
    border-left: min(.5vw, 5px) solid white;
    margin: auto;
    margin-left: 0;
    padding-top: min(2vw, 10px);
    padding-left: 2vw;
}

.page-footer .address p {
    margin-bottom: 5px;
}

.page-footer .branch {
    margin-top: min(3vw, 30px);
    padding-right: min(1.5vw, 15px);
}

.page-footer .branch h5 {
    margin-bottom: 0px;
    font-family: 'Source Code Pro', monospace;
    font-size: min(2vw, 1.5em);
}

</style>