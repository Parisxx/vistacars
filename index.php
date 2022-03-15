<?php
session_start();
include("includes/functions.php");
login_user($conn);
errors();
add();
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Cars </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="./fotos/icon2.png">
</head>

<body class="background_index">

<!-- START HEADER-->
    <div class="header_image">
        <img class="logo" src="./fotos/logo2.png" alt="Vista Cars logo">
    </div>
    <div class="header_text">
        <h1 class="title"> Vista Cars</h1>
    </div>
<!-- END HEADER-->

<!--START LOG IN-->
    <div class="content">

        <form action="index.php" method="post">
            <label class="text_form">Gebruikersnaam</label><br>
            <input class="input_form" type="text" name="username" required><br>
            <label class="text_form">Wachtwoord</label><br>
            <input class="input_form"  type="password" name="password" required><br>
            <input class="button" type="submit" value="Verstuur">
        </form>

    </div>
<!--END LOG IN-->

</body>

</html>