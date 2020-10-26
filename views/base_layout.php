<?php
$generic = GenericInfoController::ctlShowGenericInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $generic["description"] ?>">
    <?php 
        // $keywords = json_decode($generic["keywords"], true);
        // $k_w = '';
        // foreach($keywords as $keyword) {
        //     $k_w .= "$keyword, ";
        // }
        // $k_w = substr($k_w, 0, -2)
    ?>
    <meta name="keywords" content="<?php echo "Keywords here" ?>">


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
    <title><?php echo $generic["title"] ?></title>
</head>
<body>

    <?php include_once 'elements/navigation.php' ?>

    <?php 

    $availableRoutes = ['home' => 'index', 'about' => 'about', 'contacts' => 'contacts', 'testimonials' => 'testimonials'];

    if(isset($_GET["page"])){
        $url_request = $_GET["page"];
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