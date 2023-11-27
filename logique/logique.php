<?php

function afficher($nomDeTemplate, $donnees)
{

    ob_start();
    extract($donnees);

    require_once "templates/${nomDeTemplate}.html.php";

    $content = ob_get_clean();

    require_once "templates/base.html.php";


}


