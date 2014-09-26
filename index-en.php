<?php


    session_start();
    $defaultLang = 'uk';
    $page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    $page = $page.'.php';
    //NO VALID LANG FROM URL
    if(!isset($_GET['lang']) || !in_array($_GET['lang'], array('uk','en'))){
    if(isset($_SESSION['lang'])){
    $reloadLang = $_SESSION['lang'];
    }elseif(isset($_COOKIE['lang'])){
    $reloadLang = $_COOKIE['lang'];
    }else{
    $reloadLang = $defaultLang;
    }
    //RELOAD to a VALID url
    // header("Location: $reloadLang/$page.php/");
    include_once 'includes/header.php';
    include_once 'includes/lang.php';
    include_once 'includes/en/index.php';
    include_once 'includes/footer.php';


    exit;
    //VALID LANG FROM URL
    }else{
    $lang = $_GET['lang'];
    //you could set a cookie here too if req'd
    $_SESSION['lang'] = $lang;
    }



