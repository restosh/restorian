<?php

$lang = 'en';

if (isset($_GET['lang']) && in_array($_GET['lang'], ['pl', 'en', 'de'])) {
    $lang = $_GET['lang'];
}

$words = require(__DIR__ . '/lang/' . $lang.'.php');

function __($txt)
{

    global  $words;

    if (isset($words[$txt])) {
        return $words[$txt];
    }

    return $txt;
}