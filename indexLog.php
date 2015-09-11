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
        <img src="http://placehold.it/400x300&text=[img]"/>
        <h4>Qui sommes nous ?</h4>
        <p>...</p>
    </div>

    <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]"/>
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]"/>
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
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
