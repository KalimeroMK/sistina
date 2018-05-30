<!DOCTYPE html>
<?php session_start();
$language = $_POST['lang'];
if ($language === "mk") {
    $_SESSION['lang'] = "mk";
    require_once 'language/mk.php';
} else if ($language === "en") {
    $_SESSION['lang'] = "en";
    require_once 'language/en.php';
}
if (isset($_SESSION['lang']) && $_SESSION['lang'] === "en") {
    $_SESSION['lang'] = "en";
    require_once 'language/en.php';
} else {
    $_SESSION['lang'] = "mk";
    require_once 'language/mk.php';
}

$lang = $_SESSION['lang'] === "mk";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Roboto:300,300i,500,500i" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/slick-lightbox.css">
    <title>Систина - Нефроплус</title>
</head>