<?php
    class Patien{
        public $name;
        public $code;
        public $next;
        function __construct($name,$code)
        {
            $this->name = $name;
            $this->code = $code;
            $this->next = null;
        }
        function readNode(){
            return array("name"=>$this->name,"code"=>$this->code);
        }
        
    }
    class Queue{
        public $headNode =null;
        public $tailNode = null;
        public function __construct()
        {
            $this->headNode =null;
            $this->tailNode = null;
        }
        
        public function isEmpty(){
            return $this->headNode==null;
        }
        public function enqueue($name,$code){
            $oldback = $this->tailNode;
            $this->tailNode = new Patien($name,$code);
            $this->tailNode->name = $name;
            if($this->isEmpty()){
                $this->tailNode = $this->tailNode;
            }else{
                $oldback->next = $this->tailNode;
            }
        }
        public function dequeue(){
            if($this->isEmpty()){
                return null;
        }else{
        $delectedNode = $this->headNode->name;
        $this->headNode = $this->headNode->next;
        return $delectedNode;
        }
    }
    public function __toString()
    {
        $current = $this->headNode;
        $list = [];
        while($current != null){
            array_push($list,$current->readNode());
            $current = $current->next;
        }
        for($i=0;$i<count($list)-1;$i++){
            $min = $i;
            for($j = $i+1;$j<count($list)-1;$j++){
                if($list[$j]["code"] < $list[$min]["code"]){
                    $min = $i;
                }
            }
            $temp = $list[$i];
            $list[$i] = $list[$min];
            $list[$min] = $temp;
        }
        
        return ($list);
    }
    }
    $hospital = new Queue();
$hospital->enqueue("Smith", 5);
$hospital->enqueue("Jones", 4);
$hospital->enqueue("Fehrenbach", 6);
$hospital->enqueue("Brown", 1);
$hospital->enqueue("Ingram", 1);

// print_r($hospital->__toString());
// echo("<br>".$hospital->dequeue()."<br>");
// print_r($hospital->__toString());
echo "<pre>";
print_r($hospital->__toString());
echo "</pre>";
?>