<?php
switch($_GET["alert"]){
    case 'no-email' :
        echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
                vul hier je e-mail in
            </div>';
        header("Refresh: 3; url=./index.php?content=registreer");
    break;
    case 'email_bestaat' :
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
                Deze email bestaat al. Probeer het met een ander email adres
            </div>';
        header("Refresh: 3; url=./index.php?content=registreer");
    break;
    case 'registreren-error':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
                er is iets fout gegaan probeer het opnieuw
            </div>';
        header("Refresh: 3; url=./index.php?content=registreer");
    break;
    
    default: 
        header("Location: ./index.php?content=home");
    break;

}
?> 