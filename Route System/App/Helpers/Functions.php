<?php

function show($params, $die=false){
    echo "<pre>";
    switch(gettype($params)){
        case 'string':
            echo $params;
        break;
        case 'array':
            print_r($params);
        break;
        case 'object':
            var_dump($params);
        break;
    }
    echo "</pre>";

    if(die==true){
        die();
    }
}