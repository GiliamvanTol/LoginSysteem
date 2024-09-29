<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inschrijven</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="registreren.php" method="post">
        <?php if (isset($_GET["error"])) { ?>
         <p class="error"><?php echo $_GET["error"]; ?></p>   
        <?php } ?>

        <?php if (isset($_GET["success"])) { ?>
         <p class="succes"><?php echo $_GET["success"]; ?></p>   
        <?php } ?>

        <h2>Inschrijven</h2>

        <label>Naam</label>
        <input type="text" name="naam" placeholder="naam"><br>
        <label>Gebruikersnaam</label>
        <input type="text" name="gnaam" placeholder="Gebruikersnaam"><br>
        <label>Paswoord</label>
        <input type="password" name="pass" placeholder="Paswoord"><br>
        <label>Opnieuw Paswoord</label>
        <input type="password" name="oppass" placeholder="Opnieuw Paswoord"><br>
        <a href="index.php" class="tekst"><p>Heb een account</p></a>
        <button type="submit">Inschrijven</button>
    </form>
</body>
</html>