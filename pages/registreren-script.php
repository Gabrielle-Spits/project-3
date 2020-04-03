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
     // maakt een password hash en haalt de tijd en datum op en geeft dit terug in een array
        $array = mk_password_hash_from_microtime();
        
        $sql = "INSERT INTO `registreren_blok3`
         (`id`, 
         `email`,
         `wachtwoord`, 
         `rollen`,
         `geactiveerd`) 
         VALUES 
         (NULL, 
         '$email', 
         '{$array["password_hash"]}', 
         'customer',
          0)";

     if (mysqli_query($conn,$sql)){
         $id= mysqli_insert_id($conn);
        //mail versturen
        $to = $email;
        $subject = "activatielink voor uw acount op http://www.project-3.org/";
        $message ='<!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <style>
            body {
                background-color: red;
                color: white;
            }

            </style>
            <title>Hello, world!</title>
          </head>
          <body>
          <tr>
          <td>
           '. $array["date"]. ' ' . $array["time"] .'
           <td>
           <tr>
           <h3>Beste gebruiker,</h3>
           <p>U heeft u onlangs geregistreerd bij http://www.project-3.org</p>
           <p>Klik <a href="http://www.project-3.org/index.php?content=activate&id='.
           $id . '&pwh='. $array['password_hash'] .'">hier</a> voor het activeren en wijzigen van het wachtwoord van u acount</p>
            <p>bedankt voor het registreren</p>
           <p>met vriendelijke groet,</p>
            <p>team ADHDENZO inc</p>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          </body>
        </html>';
        
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .="From: admin@adhdEnzo.com\r\n";
        $headers .= "Cc: moderator@adhdEnzo.com\r\n";
        $headers .= "Bcc: root@adhdEnzo.com";

        mail($to,$subject,$message,$headers);
    

        header("Location: ./index.php?content=message&alert=registreren-goed");
     }else{
         //error melding
         header("Location: ./index.php?content=message&alert=registreren-error");
     };

   };
}
 
?>