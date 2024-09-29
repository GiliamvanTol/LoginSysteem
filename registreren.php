<?php
include "connectie.php";
session_start();
if (isset($_POST["naam"]) && isset($_POST["pass"]) && isset($_POST["gnaam"]) && isset($_POST["oppass"])){
    function validatie($data)  {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $gnaam = validatie($_POST["gnaam"]);
    $pass = validatie($_POST["pass"]);

    $naam = validatie($_POST["naam"]);
    $oppass = validatie($_POST["oppass"]);

    if (empty($gnaam)){
        header("Location: inschrijven.php?error=Gebruikernaam is vereist");
        exit();
    } else if(empty($pass)){
        header("Location: inschrijven.php?error=Paswoord is vereist");
        exit();

    } else if(empty($oppass)){
        header("Location: inschrijven.php?error=Opnieuw Paswoord is vereist");
        exit();

    } else if(empty($naam)){
        header("Location: inschrijven.php?error=Naam is vereist");
        exit();

    } else if($pass !== $oppass){
        header("Location: inschrijven.php?error=Paswoorden komen niet overeen.");
        exit();
    
    } else{

        $pass = md5($pass);

         $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam ='$gnaam' ";
         $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0 ) {
            header("Location: inschrijven.php?error=De gebruikersnaam komt al voor, probeer een ander.");
            exit();
        } else{
            $sql2 = "INSERT INTO gebruikers(gebruikersnaam, paswoord, naam) VALUES('$gnaam', '$pass', '$naam')";
            $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
                header("Location: inschrijven.php?success=Je account is succesvol gemaakt.");
                exit();
            }else{
                header("Location: inschrijven.php?error=error probeer opnieuw.");
                exit();
            }
        
        }

        }
        

    }else{
        header("Location: inschrijven.php");
        exit();

    }




?>

