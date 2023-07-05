<?php

//Add class autoload functionality
function autoloadtest($class)
{

    $filePrep = $class_name = str_replace('\\', '/', $class);


    $file = __DIR__ .'/'.$filePrep . '.php';

    if (file_exists($file)) {
        include_once $file;
    }

}
// first autoloader
spl_autoload_register('autoloadtest');
