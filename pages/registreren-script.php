<?php

 if(empty($_POST["email"])) {
       
    header("Location: ./index.php?content=message&alert=no-email");
}
else{
    include("./pages/connect_db.php");
    include("./pages/functions.php");

   $email=sanitize($_POST["email"]);

    $sql="SELECT * FROM `registreren_blok3` WHERE `email` = '$email'";

    $result= mysqli_query($conn,$sql);

   if (mysqli_num_rows($result)){
       //melding email bestaat
       header("Location: ./index.php?content=message&alert=email-bestaat");

   }else{
        //email toevoegen aan de tabel
   };
}
 
?>