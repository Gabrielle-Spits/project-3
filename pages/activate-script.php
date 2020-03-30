<?php
include("./pages/connect_db.php");
include("./pages/functions.php");

$id = sanitize($_POST["id"]);
$pwh = sanitize($_POST["pwh"]);
$password = sanitize($_POST["password"]);
$passwordcheck = sanitize($_POST["passwordcheck"]);

if(empty($_POST["password"]) || (empty($_POST["passwordcheck"]))){
    header("Location: ./index.php?content=message&alert=geen-wachtwoord&id=$id&pwh=$pwh");
} elseif(strcmp($password,$passwordcheck)) {
    header("Location: ./index.php?content=message&alert=geen-match-wachtwoord&id=$id&pwh=$pwh");
} else{
    

}
?>