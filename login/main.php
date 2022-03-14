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
    <div class="header_image">
        <img class="logo" src="../fotos/logo2.png" alt="Vista Cars logo">
    </div>
    <div class="header_text">
        <h1 class="title"> Vista Cars</h1>
    </div>
<!-- END HEADER-->

<!--START CONTENT-->
    <div class="content_main">
        <div class="buttons">

            <form action="../afsprakensysteem/index.php">
                <input class="button_main" type="submit" value="Afspraken">
            </form>

            <form action="adminadd.php">
                <input class="button_main" type="submit" value="Admin toevoegen">
            </form>

            <form action="../includes/logout.php">
                <input class="button_main" type="submit" value="Uitloggen">
            </form>

        </div>

        <div class="video" >
        <video width="100%" height="300" width="300" autoplay muted loop poster="../fotos/poster.png">
            <source src="../videos/vistacars.mp4" type="video/mp4">
        </div>

    </div>

<!-- END CONTENT-->


</body>

</html>