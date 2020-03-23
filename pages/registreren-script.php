<?php
 if(empty($_POST["email"])) {
       
    header("Location: ./index.php?content=message&alert=no-email");
}
else{
    include("./connect_db.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);

    $sql ="SELECT * FROM `registreren_blok3`";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=emailbestaat");
      }
}
?>