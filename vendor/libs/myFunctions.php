<?php

function dumpPre($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function printPre($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}