<?php 
echo'head.php';  
/* 
    A css fájlnál mivel ez a home.view.php-ban van behúzva így
    az útvonal a home.view.php-hoz képest van megadva és kell ide egy / a css fájl elé
*/
$path = __DIR__;
echo $path;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" 
    integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\utilities.css">
    <title>Welcome</title>
</head>
<body>

