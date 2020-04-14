<?php
if(!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
    header("Location: ./index.php?content=message&alert=hacker-alert");
}
?>
<div class="row">
    <div class="col-12">
        <h2 id="wachtwoord-aanmaken"> Het aanmaken van een wachtwoord voor u acount</h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <form action="./index.php?content=activate-script" method="post">
                <div class="form-group">
                    <label for="Inputpassword">Kies een nieuw wachtwoord</label>
                    <input type="password" class="form-control" id="InputPassword" aria-describedby="password"
                        name="password">
                    <small id="password" class="form-text text-muted">Kies een veilig wachtwoord</small>
                </div>
                <div class="form-group">
                    <label for="InputPasswordcheck">Herhaal u wachtwoord</label>
                    <input type="password" class="form-control" id="InputPasswordcheck" aria-describedby="password"
                        name="passwordcheck">
                    <small id="passwordhelpcheck" class="form-text text-muted">Ter controle voert u nogmaals u
                        wachtwoord in</small>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                <button type="submit" class="btn btn-danger">Activeren</button>
            </form>
        </div>
    </div>
</div>