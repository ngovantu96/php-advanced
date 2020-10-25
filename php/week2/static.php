<?php 
    class Application{
        private  $name;
        public static $count =0;
        public function __construct($name){
            $this->name = $name;
            self::$count++;
        }
        
        public function _tostring(){
            return $this->name;
        }
    }
    echo "total object count :".Application::$count."<br>";
    $app1 = new Application('app one');
    echo "tatlo object count ".Application::$count."<br>";
    $app2 = new Application("app tow");
    echo "tatlo objects count".Application::$count."<br>";
    echo $app1."<br>";
    echo $app2."<br>";

?> 