<?php 
session_start();

if (isset($_SESSION["id"]) && isset($_SESSION["gebruikersnaam"])) {

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>Hallo, <?php echo $_SESSION["naam"]; ?></h1>
    <a class="btn" href="logout.php">logout</a>
</body>
</html>

<?php 

}else{
    header("Location: index.php");
    exit();
}

?>