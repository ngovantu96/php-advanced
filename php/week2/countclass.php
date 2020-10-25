<?php 
    class Application{
        private $name;
        public static $count = 0;
        public function __construct($name){
            $this->name = $name;
            self::$count++;
        }
        public function __toString(){
            return "application name : " .$this->name;
        }
    }
        echo "số lượng của đối tượng : ".Application::$count."<br>";
        $app1 = new Application("app one");
        echo $app1;
        $app2 = new Application("app 2");
        echo $app2;
        echo Application::$count;

    
?>