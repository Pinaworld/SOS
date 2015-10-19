<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 18/05/2015
 * Time: 10:59
 */
    try {
        $db = new PDO('mysql:host=localhost;dbname=portofolio', 'root', '');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }catch (Exception $e){
    echo 'Impossible de se connecter à la base de donnée';
    echo $e->getMessages();
    die();
}