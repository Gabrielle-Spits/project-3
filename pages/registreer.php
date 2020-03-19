<form  action="./index.php?content=registreren_script" method="post">
    <div class="row">
        <div class="form-group col-md-5">
            <label for="voornaam">voornaam</label>
            <input type="voornaam" class="form-control" id="voornaam" placeholder="voornaam" name="voornaam">
        </div>
        <div class="form-group col-md-2">
            <label for="tussenvoegsel">tussenvoegsel</label>
            <input type="tussenvoegsel" class="form-control" id="tussenvoegsel" placeholder="tussenvoegsel"
                name="tussenvoegsel">
        </div>
        <div class="form-group col-md-5">
            <label for="achternaam">achternaam</label>
            <input type="achternaam" class="form-control" id="achternaam" placeholder="achternaam" name="achternaam">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
        </div>
        <div class="col-md-2"></div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-md-8">
            <label for="geboortedatum">Geboortedatum*</label>
            <input type="geboortedatum" class="form-control" id="e-mail" placeholder="00-00-0000" name="geboortedatum">
        </div>
        <div class="col-1"></div>
        <div class="form-group col-md-2">
            <label for="inputState">heb je adhd?</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>ja</option>
                <option>nee</option>
            </select>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

hoi