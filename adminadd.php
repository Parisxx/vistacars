<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Cars</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="./fotos/icon2.png">
</head>

<body class="background_adminadd">

    <div class="header_image">
        <img class="logo" src="./fotos/logo2.png" alt="Vista Cars logo">
    </div>
    <div class="header_text">
        <h1 class="title_yellow"> Vista Cars</h1>
    </div>


    <div class="content_yellow">

        <form action="/action_page.php">
            <label class="text_form_yellow" for="fname">Gebruikersnaam</label><br>
            <input class="input_form_yellow" type="text" name="username" required><br>
            <label class="text_form_yellow"  for="lname">Wachtwoord</label><br>
            <input class="input_form_yellow"  type="text" name="password" required><br>
            <label class="text_form_yellow"  for="lname">Herhaal wachtwoord</label><br>
            <input class="input_form_yellow"  type="text" name="password" required><br>
            <input class="button" type="submit" value="Verstuur">
        </form>

    </div>


</body>

</html>