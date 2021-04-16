<?php

class Route {
    
    public static $valideRoutes = array();
    
    public static function getUrl() {
        return $_GET['url'];
    }
    
    public static function set($route, $function) {
        
       self::$valideRoutes[] = $route;
              
       if(self::getUrl() == $route) {
           $function->__invoke();
       }
        
    }
    
}
