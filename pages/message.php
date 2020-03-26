<?php
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
    default: 
        header("Location: ./index.php?content=home");
    break;

}
?>