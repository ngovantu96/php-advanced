<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>
<?php 
    class Fruit{
        public $name;
        public $color;
        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        function get_name(){
        return $this->name;
        }
        function get_color(){
        return $this->color;
        }
    }
    $apple = new Fruit("táo","blue");
    echo '- Loại trái cây: ' . $apple->get_name()."<br>";
    echo '- Màu: ' . $apple->get_color();
    // $banana = new Fruit("chuối","blue");
?>
</body>
</html>