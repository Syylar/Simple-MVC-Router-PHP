<?php

class Database {
    
    private static $instance = null;
    private static $conn;
    
    public static $host        = "127.0.0.1";
    public static $dbName      = "";
    public static $userName    = "";
    public static $password    = "";
    
    private function __construct() {
        self::$conn = mysqli_connect(self::$host, self::$userName, self::$password, self::$dbName);
        
    }
    
    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new Database();
        }
        
        return self::$instance;
    }
    
    public static function getConnection() {
        return self::$conn;
    }
    
    public static function query($sqlQuery) {
        $dbConnection   = self::getInstance();
        self::$conn     = self::getConnection();

        $result = mysqli_query(self::$conn, $sqlQuery);
        
        if(!$result) {
            
            echo '<div class="query">';
            echo $sqlQuery;
            echo mysqli_error(self::$conn);
            echo '</div>';    
        }

        return $result;
    }
    
    
}
