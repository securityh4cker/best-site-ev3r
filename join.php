<?php

include 'vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader, array(
    //'debug' => true,
    'autoescape' => false
));

$twig->addGlobal('mainkey', ""); // Just for debug

if(isset($_GET["name"]))
    $name = $_GET["name"];
else
    $name = "%username%";

$result= $twig->render($name);
?>

<html>
<head>
    <link rel="stylesheet" href="css/join.css">
    <title>./join_us.cgi</title>
</head>
<body>
<div id="text-container">

    We have no leaders, civilians or soldiers.<p>

    We are all one.<p>

    Join us, <?= $result ?> <p>

    Hacking is a kind of science, and as such should be discussed on its logical basis by anyone that wish to participate where ever anonymously or not. Discovering a vulnerability should not imply obligations of any kind for the discoverer - except publishing it, as an engagement towards the scientific community.



</body>
</html>