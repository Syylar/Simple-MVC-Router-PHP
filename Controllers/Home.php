<?php

class Home extends Controller {
    
    public static function doSomething() {
        
        $test = self::query("SELECT * FROM users");
        
        while ($users = mysqli_fetch_assoc($test)) {
            echo "<br>";
            echo $users['username'];
        }
    

    }
    
}
