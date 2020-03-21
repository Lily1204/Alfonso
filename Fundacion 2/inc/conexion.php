<?php

try{
    $bd = new mysqli ('localhost', 'root', '', 'fbp');

}catch (Excepction $e) {
    echo $e->getMessage();
    exit;

}
?>