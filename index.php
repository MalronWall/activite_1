<?php
    include_once "functions.php";
    $name = "'Unknown'";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="default.css">
    <title>Page de test</title
</head>

<body>

<header>

    <h1><?php Hello($name);?></h1>

    <input type="radio" name="im" value="0"> I'm bad...
    <br/>
    <input type="radio" name="im" value="1"> I'm fine thank's !
    
</header>
