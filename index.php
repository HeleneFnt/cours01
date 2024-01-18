<?php
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
