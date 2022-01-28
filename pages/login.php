<form class="w-50 mt-5 m-auto d-flex flex-column justify-content-center align-items-center" action="" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="password">
    </div>
    <?php if((empty($_POST['username']) && (isset($_POST['username']))) || (empty($_POST['password']) && (isset($_POST['password'])))) { ?>
        <div class="alert alert-warning" role="alert">
            Veuillez entrer vos identifiants.
        </div>
    <?php } ?>
    <?php if((isset($_POST['password'])) && $_POST['password'] != $mdp && !(empty($_POST['password']))) {?>
        <div class="alert alert-warning" role="alert">
            Mot de passe incorrect.
        </div>
    <?php } ?>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>