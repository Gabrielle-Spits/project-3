<?php
include("./pages/connect_db.php");
include("./pages/functions.php");

$id = sanitize($_POST["id"]);
$pwh = sanitize($_POST["pwh"]);
$password = sanitize($_POST["password"]);
$passwordcheck = sanitize($_POST["passwordcheck"]);

if(empty($_POST["password"]) || empty($_POST["passwordcheck"])){
    
    header("Location: ./index.php?content=message&alert=geen-wachtwoord&id=$id&pwh=$pwh");
} elseif(strcmp($password,$passwordcheck)!=0) {
    header("Location: ./index.php?content=message&alert=geen-match-wachtwoord&id=$id&pwh=$pwh");
} else{
    
    $sql = "SELECT * FROM `registreren_blok3` WHERE `id` = $id AND `wachtwoord` = '$pwh'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){
        // stappen die je moet uitvoeren voor het updaten:

        //1. maak eeen passwordhash voor het nieuw gekozen wachtwoord
       $password_hash = password_hash($password,PASSWORD_BCRYPT);

        //2. ga het record updaten met het nieuw gekozen gehashte wachtwoord
        $sql ="UPDATE `registreren_blok3` 
                SET `wachtwoord` = '$password_hash' 
                WHERE `id` = $id
                AND   `wachtwoord` ='$pwh'";
        
        if(mysqli_query($conn,$sql)){
            //succes
            echo"werk";
            //header("Location: ./index.php?content=message&alert=update-gelukt");
        }else{
            //faal
            //header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
        };

        //3. geef de gebruiker feedback met een alert dat het updaten gelukt is of niet en stuur hem dan door naar een andere pagina
    }else{
        //foutmelding
        //header("Location: ./index.php?content=message&alert=geen-id-pwh-gelijk");
    }
}
?>