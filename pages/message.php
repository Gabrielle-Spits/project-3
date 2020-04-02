<?php
$alert= (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id= (isset($_GET["id"]))? $_GET["id"]: "";
$pwh= (isset($_GET["pwh"]))? $_GET["pwh"]: "";

switch($_GET["alert"]){
    case 'no-email' :
        echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
                vul hier je e-mail in
            </div>';
        header("Refresh: 3; url=./index.php?content=registreer");
    break;
    case'email-bestaat' : 
        echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
        email bestaat al probeer een andere 
    </div>';
    header("Refresh: 3; url=./index.php?content=registreer");
    break;
    case 'registreren-error':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
                er is iets fout gegaan probeer het opnieuw
            </div>';
        header("Refresh: 3; url=./index.php?content=registreer");
    break;
    case 'registreren-goed':
        echo '<div class="alert alert-success w-50 mx-auto mt-5" role="alert">
        het is gelukt u krijgt een activatie-mailtje.
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'hacker-alert':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
        u heeft geen rechten u wordt doorgestuurd naar home
    </div>';
    header("Refresh: 3; url=./index.php?content=home");
    break;
    case 'geen-wachtwoord':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
        u heeft een van beide wachtwoord velden niet ingevuld probeer het opnieuw
    </div>';
    header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case 'geen-match-wachtwoord':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
        u heeft twee keer een ander wachtwoord ingevoerd probeer het opnieuw
    </div>';
    header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    default: 
        header("Location: ./index.php?content=home");
    break;

}
?>