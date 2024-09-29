<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <?php if (isset($_GET["error"])) { ?>
         <p class="error"><?php echo $_GET["error"]; ?></p>   
        <?php } ?>

        <h2>Login</h2>
        <label>Gebruikersnaam</label>
        <input type="text" name="gnaam" placeholder="Gebruikersnaam"><br>
        <label>Paswoord</label>
        <input type="password" name="pass" placeholder="Paswoord"><br>
        <a class="tekst" href="inschrijven.php"><p>Account aanmaken</p></a>
        <button type="submit">Login</button>
    </form>
</body>
</html>