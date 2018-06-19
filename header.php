<?php //require_once 'top-cache.php';?>
<!DOCTYPE html PUBLIC
        "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN"
        "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">
<?php
session_start();
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


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Roboto:300,300i,500,500i" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <meta name="description"
          content="„Систина Нефроплус“ се стреми кон врвен квалитет во грижата за пациенти со бубрежни заболувања. Обезбедуваме дијализни третмани во 10 дијализни центри во Република Македонија.">
    <meta name="keywords"
          content="Kidney Stones,Kidney Cancer,Chronic Kidney Disease, Polycystic Kidney, Diabetes and the Kidney,24/7,здравје, бубрези,нефроплус,систина,бубрезите,хемодијализа,третман">
    <meta name="author" content="digital present">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/slick-lightbox.css">
    <title>Систина - Нефроплус</title>
    <style type="text/css">
        #loading-mask {
            background-color: white;
            height: 100%;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
        }
    </style>
    <script type="text/javascript">
        window.onload = function () {
            document.getElementById('loading-mask').style.display = 'none';
        }
    </script>
</head>
