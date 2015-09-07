<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 07/09/2015
 * Time: 14:47
 */
$auth = 0;
include 'lib/includes.php';
/**
 *  TRAITEMENT DU FORMULAIRE
 */
if(isset($_POST['username']) && isset ($_POST['password'])){
    $password = sha1($_POST['password']);
    $username = $db->quote($_POST['username']);
    $select = $db->query("SELECT * FROM users WHERE username=$username AND password ='$password'");
    if($select->rowCount() > 0){
        $_SESSION['Auth']= $select->fetch();
        setFlash('Vous êtes connecté');
        header('location:' . WEBROOT . '/' . 'testconnection.php');
        die();
    }else header('location:'. WEBROOT . '/' . 'index.php');

}
/**
 * INCLUSION HEADER
 */


?>