<?php

class Controller extends Database{
    
    public static function CreateHomeView($viewName) {
        require_once("./Views/$viewName.php");
        static::doSomething();
    } 
    
    public static function CreateAboutUsView($viewName) {
        require_once("./Views/$viewName.php");
    } 
    
    public static function CreateContactUsView($viewName) {
        require_once("./Views/$viewName.php");
    } 
}