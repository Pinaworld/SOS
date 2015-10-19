<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 18/05/2015
 * Time: 13:17
 */
function input($id){
    $value = isset($_POST[$id]) ? $_POST[$id] : '';
    return "<input type='text' class='form-control' id='$id' name='$id'
            value='$value'>";
}