<?php 
    class ArrayList{
        public $arrayList;
        public function ArrayList($arr = ""){
            if(is_array($arr)==true){
                $this->arrayList = $arr;
            }else{
                $this->arrayList = array();
            }
        }
        // theem 1 phan tu vao cuoi dnah sahc
        public function add($obj){
            array_push($this->arrayList,$obj);
        }
        // tao pt get() de tra ve pt thu i trong danh sach

        public function get($index){
            if($this->isInteger($index) && $index < $this->size()){
                return $this ->arayList[$index];
            }else{
                die("ERROR in ArrayList.get");
            }
        }
        public function isInteger($tocheck){
            return preg_match("/^[0-9]+$/",$tocheck);
        }
    }
    $listInteger = new ArrayList();
    $listInteger->add(1);
    $listInteger->add(2);
    $listInteger->add(3);
    
    echo $listInteger->get(6);
   
?>