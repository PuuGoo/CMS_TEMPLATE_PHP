<?php

function classAutoloader($classname)
{
    $classname = strtolower($classname);
    $the_path = "model/{$classname}.php";

    if (is_file($the_path) && !class_exists($classname)) {
        include $the_path;
    } else {
        die("The file name: {$classname}.php not found");
    }
}

function redirect($location) {
    header("Location: {$location}");
}

spl_autoload_register('classAutoloader');
