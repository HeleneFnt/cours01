<?php

date_default_timezone_set("Europe/Paris");
$date= date("Y-m-d-m-Y-H-i-s");
// Démarre une nouvelle session
session_start();
if (!isset($_SESSION ['dateFirstVisit'] )){
    $_SESSION ['dateFirstVisit']=$date;
}

$userPage = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

    if ($userPage == 'cv')
    {
        include  'pages/cv.php';
    }
    else if ($userPage == 'hobby'){
        include 'pages/hobby.php';
    }
    else if ($userPage == 'contact'){
       include 'pages/contact.php';
    }
    else {
        include 'my_404.php';
    }
