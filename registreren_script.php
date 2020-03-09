<?php
if(empty($_POST["email"])){
    header("Location: ./index.php?content=message&alert=no-email");
}else{
    include("./connect_db.php");
    include("./functions.php");

}
?>