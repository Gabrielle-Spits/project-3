<?php 
    // var_dump($_POST);
    include("./pages/connect_db.php");
    include("./pages/functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if(empty($email) || empty($password)){
        //check of login velden zijn ingevuld
        header("Location: ./index.php?content=message&alert=login-form-empty");
    }else{
                        $sql="SELECT * FROM `registreren_blok3` WHERE `email` = '$email'";

                        $result= mysqli_query($conn,$sql);

                        if (!mysqli_num_rows($result)){
                                //email onbekend
                                header("Location: ./index.php?content=message&alert=email-onbekend");
                        }else{
                                    $record = mysqli_fetch_assoc($result);

                                    //var_dump($record["geactiveerd"]);

                                    if(!$record["geactiveerd"]){
                                        //niet geactiveerd
                                        header("Location: ./index.php?content=message&alert=niet-geactiveerd&email=$email");
                                    }elseif(!password_verify($password,$record["wachtwoord"])){
                                        //geen match wachtwoord
                                        header("Location: ./index.php?content=message&alert=no-pw-match&email=$email");
                                    }else{
                                        //password match
                                        
                                        $_SESSION["id"] = $record["id"];
                                        $_SESSION["rollen"] = $record["rollen"];

                                        //'admin','super-admin','moderator','root','customer'

                                        switch($record["rollen"]) {
                                            case 'customer':
                                            header("Location: ./index.php?content=home");
                                            break;
                                            default:
                                            header("Location: ./index.php?content=home");
                                            break;
                                        }   
                                    }
                        }

    }
