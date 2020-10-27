<?php
$generic = GenericInfoController::ctlShowGenericInfo();
$availableRoutes = ['home' => 'index', 'about' => 'about', 'contacts' => 'contacts',
                    'testimonials' => 'testimonials', 'cookies-policy' => 'cookies',
                    'privacy-policy' => 'privacy'];
if(isset($_GET['page'])) {
    $url_request = $_GET["page"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $generic["description"] ?>">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="./views/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./views/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./views/favicons/favicon-16x16.png">
    <link rel="manifest" href="./views/favicons/site.webmanifest">
    <link rel="mask-icon" href="./views/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
    <?php 
        if(isset($_GET['page']) && isset($availableRoutes[$url_request])) {
            echo $generic["title"] . " | " . ucfirst($_GET['page']);
        } else {
            echo $generic["title"];
        }
    ?>
    </title>

    <!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
    <script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/3.1.0/cookie-consent.js"></script>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
    cookieconsent.run({"notice_banner_type":"interstitial","consent_type":"express","palette":"dark","language":"en","cookies_policy_url":"https://kbtravel.tommasodemarco.com/cookies-policy"});
    });
    </script>

    <noscript>Cookie Consent by <a href="https://www.FreePrivacyPolicy.com/free-cookie-consent/" rel="nofollow noopener">FreePrivacyPolicy.com</a></noscript>
    <!-- End Cookie Consent -->
    
</head>
<body>

    <?php include_once 'elements/navigation.php' ?>

    <?php

    if(isset($_GET["page"])){
        if(isset($availableRoutes[$url_request])) {
            include "pages/" . $availableRoutes[$url_request] . ".php";
        } else {
            include 'pages/404.php';
        }
    } else {
        include 'pages/index.php';
    }
    ?>

    <?php include_once 'elements/footer.php' ?>
    
</body>
</html>