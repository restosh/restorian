<?php

function dump($txt, $die = true){

    echo '<pre>';
    var_dump($txt);
    echo '</pre>';

    if($die){
        die();
    }

}