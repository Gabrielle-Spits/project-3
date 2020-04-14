<div class="row">
    <div class="col-12">
        <h1 id="login-titel">inloggen op uw acount</h1>
    </div>
</div>

<div class="container mt-5">
<div class="row">
    <div class="col-6">
        <form action="./index.php?content=login-script" method="post">
            <div class="form-group">
                <label for="exampleInputEmail">E-mailadres</label>
                <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Uw email is veilig</small>
            </div>
            <div class="form-group">
                    <label for="Inputpassword">Wachtwoord</label>
                    <input type="password" class="form-control" id="InputPassword" aria-describedby="password"
                        name="password">
                    <small id="password" class="form-text text-muted">Vul u wachtwoord in</small>
                </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>  