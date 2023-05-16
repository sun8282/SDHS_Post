<?php 

function ss(){    
    return isset($_SESSION['user']) ? $_SESSION['user'] : false;
}