<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class tinh_giai_thua{
            public $n;
            public function __construct($n){
                if(!is_int($n)){
                    throw new InvalidArgumentException('không phải tham số');
                }
                $this->n = $n;
            }
            public function result($n){
                if($n==1)
                return 1;
                return $this->result($n-1)*$n;
            }
        }
        $ketqua = new tinh_giai_thua(4);
        echo $ketqua->result(4);
    ?>
</body>
</html>