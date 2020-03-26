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
        $password = "geheim";
        $password_hash = password_hash($password,PASSWORD_BCRYPT);

        $sql = "INSERT INTO `registreren_blok3`
         (`id`, 
         `email`,
         `wachtwoord`, 
         `rollen`) 
         VALUES 
         (NULL, 
         '$email', 
         '$password_hash', 
         'customer')";

     if (mysqli_query($conn,$sql)){
        //mail versturen
        $to = $email;
        $subject = "activatielink voor uw acount op http://www.project-3.org/";
        $message ="dit is een test";
        $headers ="From: admin@ ";

        mail($to,$subject,$message,$headers);

        header("Location: ./index.php?content=message&alert=registreren-goed");
     }else{
         //error melding
         header("Location: ./index.php?content=message&alert=registreren-error");
     };

   };
}
 
?>