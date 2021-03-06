<?php
session_start();
include("../includes/functions.php");
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Cars</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" type="image" href="../fotos/icon2.png">
</head>

<body class="background_main">

    <!-- START HEADER-->

    <img class="logo" src="../fotos/logo2.png" alt="Vista Cars logo">

    <h1 class="title"> Vista Cars</h1>

    <!-- END HEADER-->

    <!--START CONTENT-->
    <div class="content_main">

        <form action="../afsprakensysteem/index.php">
            <input class="button_main" type="submit" value="Afspraken">
        </form>

        <form action="adminadd.php">
            <input class="button_main" type="submit" value="Gebruiker toevoegen">
        </form>

        <form action="../includes/logout.php">
            <input class="button_main" type="submit" value="Uitloggen">
        </form>



        <div class="video">
            <video autoplay muted loop poster="../fotos/poster.png">
                <source src="../videos/vistacars.mp4" type="video/mp4">
        </div>

    </div>

    <!-- END CONTENT-->


</body>

</html>