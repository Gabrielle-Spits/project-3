<div class="container mt-5">
<div class="row">
    <div class="col-6">
        <form action="./index.php?content=login-script" method="post">
            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">uw email is veilig</small>
            </div>
            <div class="form-group">
                    <label for="Inputpassword">wachtwoord</label>
                    <input type="password" class="form-control" id="InputPassword" aria-describedby="password"
                        name="password">
                    <small id="password" class="form-text text-muted">vul u wachtwoord in</small>
                </div>
            <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
</div>  