<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 11/09/2015
 * Time: 09:39
 */

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">

    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/foundation.css">

    <!-- This is how you would link your custom stylesheet -->
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/foundation.css">

    <link rel="stylesheet" href="CSSindex.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="bootstrap-3.3.5-dist/js/vendor/modernizr.js"></script>

    <script src="bootstrap-3.3.5-dist/js/foundation/foundation.slider.js"></script>

    <title>Accueil - SOS Partenaires</title>



</head>
<body>


<?php include "lib/header.php"; ?>



<div class="row">
    <div class="large-12 columns">
        <div id="slider">
            <img src="img/sport1.jpg" />
           <!-- <img src="img/sport2.jpg" /> -->
        </div>

        <hr/>
    </div>
</div>



<div class="row">
    <div class="large-4 columns">
        <img src="img/petitsport1.jpg"/>
        <h4 class="speH4">Qui sommes nous ?</h4>
        <p>...</p>
    </div>

    <div class="large-4 columns">
        <img src="img/petitsport2.jpg"/>
        <h4 class="speH4">Test</h4>
        <p></p>
    </div>

    <div class="large-4 columns">
        <img src="img/petitsport3.jpg"/>
        <h4 class="speH4">Test</h4>
        <p></p>
    </div>

</div>


<div class="row">
    <div class="large-12 columns">

        <div class="panel">
            <h4>Contactez nous !</h4>

            <div class="row">
                <div class="large-9 columns">
                    <p>Avez-vous des questions à nous poser, ou des suggestions à apporter à notre applications ?
                    </p>
                </div>
                <div class="large-3 columns">
                    <a href="#" class="radius button right">Nous contacter</a>
                </div>
            </div>
        </div>

    </div>
</div>


<?php include "lib/footer.php"; ?>


</body>
</html>
