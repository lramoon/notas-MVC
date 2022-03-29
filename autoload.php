<?php

function autoCargar($clase){
    include './controladores/'.$clase .'.php';
}

spl_autoload_register('autoCargar');

?>