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
}else{
  $sql="SELECT * FROM `registreren_blok3` Where `id` = $id AND `wachtwoord` = '$pwh'";

  $result= mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)){
      //updaten
  }else{
      
  }

  }
?>