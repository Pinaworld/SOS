<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 18/05/2015
 * Time: 11:16
 */
session_start();
if(!isset($auth)){
    if(!isset($_SESSION['Auth']['id'])){
        header('Location:' . WEBROOT . '/'. 'login.php'.'/');
        die();
    }
}
?>