<?php
include "connectie.php";
session_start();
if (isset($_POST["gnaam"]) && isset($_POST["pass"])){
    function validatie($data)  {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $gnaam = validatie($_POST["gnaam"]);
    $pass = validatie($_POST["pass"]);

    if (empty($gnaam)){
        header("Location: index.php?error=Gebruikernaam is vereist");
        exit();
    } else if(empty($pass)){
        header("Location: index.php?error=Paswoord is vereist");
        exit();
    } else{
         $pass = md5($pass);
         $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam ='$gnaam' AND paswoord='$pass'";
         $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1 ) {
            $row = mysqli_fetch_assoc($result);
            if ($row["gebruikersnaam"] === $gnaam && $row["paswoord"] === $pass) {
               $_SESSION["gebruikersnaam"] = $row["gebruikersnaam"];
               $_SESSION["naam"] = $row["naam"];
               $_SESSION["id"] = $row["id"];
               header("Location: home.php");
               exit();
        }else{
            header("Location: index.php?error=Gebruikersnaam of paswoord is fout");
            exit();
        }

    }else{
        header("Location: index.php?error=Gebruikersnaam of paswoord is fout");
            exit();

    } 
    }

    }else{
        header("Location: index.php");
        exit();

    }




?>

