<?php 
    class Fruit{
        public $name;
        public $color;
        // method
        function set_name($name){
            $this->name = $name;
        }
        function set_color($color){
            $this->color = $color;
        }
        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
    }
    // tạo đối tượng 
    $apple = new Fruit();
    $banana = new Fruit();
    
   
    $apple->set_name("Táo");
    $apple ->set_color("red");
    echo '- Loại trái cây: ' . $apple->get_name()."<br>";
    echo '- Màu: ' . $apple->get_color()."<br>";

    $banana->set_name("Chuối");
    $banana ->set_color("blue");
    echo '- Loại trái cây: ' . $banana->get_name()."<br>";
    echo '- Màu: ' . $banana->get_color();
    
?>