<?php 
include './Routes.php';



function __autoload($class) {
    
    $classPath = str_replace("\\", DIRECTORY_SEPARATOR , $class);   
    
    if          (file_exists('./Classes/' . $classPath . '.php')) {
        require_once './Classes/' . $classPath . '.php';
    } else if   (file_exists('./Controllers/' . $classPath . '.php')) {
        require_once './Controllers/' . $classPath . '.php';
    }    
   
}



//This one isn't working and i have no idea why...
//
//
//spl_autoload_register(function($class) {
//    $classPath = str_replace("\\", DIRECTORY_SEPARATOR , $class);
//   
//    
//    if          (file_exists('./classes/' . $classPath . '.php')) {
//        require_once './classes/' . $classPath . '.php';
//    } else if   (file_exists('./Controllers/' . $classPath . '.php')) {
//        require_once './Controllers/' . $classPath . '.php';
//    }
//});


