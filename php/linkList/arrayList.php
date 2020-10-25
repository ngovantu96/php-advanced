<?php 
    class ArrayList{
        public $size;
        public $arrayList=[];
        public function __construct($size){
            $this->size = $size;
        }
       
        public function ArrayList($arr = ""){
            if(is_array($arr)==true)
            $this->arrayList = $arr;
            else
            $this->arrayList = array();
        }
        // thêm 1 phần tử
        public function add($obj){
            array_push($this->arrayList,$obj);
            
        }
        public function insert($index,$obj){
            array_splice($this->elements,$index,$obj);
        }
        // them 1 phần tử
        
        // xóa tất cả danh sách
        public function clear(){
            $this->arrayList = array();
        }
        // trả về 1 phần tử trong danh sách
        // @param $index
        public function get($index){
            if($this->isInteger($index) && $index < $this->size()){
                return $this->arrayList[$index];
            }else{
                die("error in arraylist.get");
            }
        }
        // kiểm tra nếu dnah sách không có phần tử nào
        public function isEmpty(){
            if(count($this->arrayList)==0){
                return true;
            }
            return false;
        }
        // kiểm tra danh nếu danh sách này k có phần tử
        // trẻ về fale;
        public function isEmty(){
            if(count($this->arrayList)==0){
                return true;
            }
            return false;
        }
        // loai bỏ phần tử ở vị trí chỉ định trong danh sách này
        // @param $index
        public function remove($index){
            if($this->isInteger($index)){
                $newArrayList = array();
                for($i=0; $i <$this->size();$i++){
                    if($index != $i){
                        $newArrayList = $this->get($i);
                        $this->arrayList = $newArrayList;
                    }else{
                        die("error in aray list.move <br> integer value required");
                    }
                }
            }
        }
        public function size(){
            return count($this->arrayList);
        }
        public function addAll($arr){
            $this->elements = array_merge($this->elements, $arr);
        }
        public function indexof($obj){
            return array_search($this->elements,$obj);
        }

        // sắp xếp danh sách theo bảng chữ cái
        public function sort(){
            sort($this->arrayList);
        }
        // trả về 1 mảng chứa các phần tử trong danh sach này theo đúng thứ tự
        // return array;
        public function toArray(){
            return $this->arrayList;
        }
        // trả về true nếu tham số chứa 1 số gái trị số nguyên
        public function isInteger($tocheck){
            return preg_match("/^[0-9]+$/", $tocheck);
        }
        public function reset(){
            $this->elements = array();
        }

    }
    $arraylist = new ArrayList(5);
    $arrayList->add(1);
    var_dump($arrayList);
    // $arrayList->add(2); 
    // $arrayList->add(3);
    // $arrayList->add(4);
    echo implode ('-' , $arrayList);
     
?>