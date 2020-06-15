<?php

    include './connect.php';

    $css    = './layout/css/';
    $js     = './layout/js/';
    $tpl    = './includes/templates/';
    $lang   = './includes/languages/';
    $func   = './includes/functions/';
    

    include $lang    . 'english.php';
    include $func    . 'functions.php';
    include $tpl     . 'header.php';
    
    if ( !isset( $noNavbar )) {
        include $tpl . 'navbar.php';
    }