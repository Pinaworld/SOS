
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">


    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">

    <link rel="stylesheet" href="CSSindex.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="JSindex.js"></script>

    <script src="bootstrap-3.3.5-dist/js/bootstrap.js"></script>

    <link rel="icon" href="img/ico.ico" />

    <title>Connexion - SOS Partenaires</title>

</head>

<body background="img/fond.jpg">
<div class="container">
    <div class="row">


        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <h1 class="h1-title">SOS - Partenaires </h1>
                        <br />

                        <hr />

                        <br />

                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Connexion</a>
                        </div>

                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">S'enregistrer</a>
                        </div>

                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

<!--CONNEXION -->
                            <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Identifiant" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember">Se souvenir de moi</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Connexion">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="#" tabindex="5" class="forgot-password">Mot de passe oublié ?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
<!--INSCRIPTION -->
                            <form id="register-form" action="register.php" method="post" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Identifiant" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Adresse email" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Comfirmer mot de passe">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Valider">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>