<?php
$alert= (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id= (isset($_GET["id"]))? $_GET["id"]: "";
$pwh= (isset($_GET["pwh"]))? $_GET["pwh"]: "";
$email = (isset($_GET["email"]))? $_GET["email"]: "";

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
    case 'no-id-pwh-match':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
        u bent niet geregistreerd in de database, u wordt doorgestuurd naar de registratiepagina
    </div>';
    header("Refresh: 3; url=./index.php?content=registreren");
    break;
    case 'update-succes':
        echo '<div class="alert alert-success w-50 mx-auto mt-5" role="alert">
        u bent met succes geregistreerd u wordt doorgestuurd naar de login page
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'update-faal':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
            het registratieproces is niet gelukt kies een niew wachtwoord
    </div>';
    header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case 'al-geactiveerd':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
        u acount is al actief, log in met uw zelfgekozen wachtwoord en emailadres.
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    case 'no-match-pwh':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u activatielink gegevens zijn niet correct, registreer opnieuw
    </div>';
    header("Refresh: 3; url=./index.php?content=registreer");
    break;
    case 'login-form-empty':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u heeft een van beide velden niet ingevuld, probeer het opnieuw.
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'email-onbekend':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        dit email bestaat niet in onze database, probeer het opnieuw
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'niet-geactiveerd':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u acount is nog niet geactiveerd. check uw email ' .$email. ' voor het klikken op de activatielink
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'no-pw-match':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u ingevulde wachtwoord voor dit emailadres ' .$email. ' is niet correct,probeer het opnieuw
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    default: 
        header("Location: ./index.php?content=home");
    break;

}
?>