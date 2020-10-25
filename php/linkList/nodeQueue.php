<?php
    class Node {
        public $data;
        public $next;
        public function __construct($data)
        {
            $this->data = $data;
            $this->next = null;
        }
        // get data
        public function getData(){
            return $this->data;
        }
    }
    class LinkedList {
        private $headNode;
        private $tailNode;
        // tạo cóntructor
        public function __construct()
        {
            $this->headNode = null;
            $this->tailNode = null;
        }
        public function isEmpty(){
            return $this->headNode = null;
        }
        public function enqueue($data){
            $newNode = new Node($data);
            $newNode->next = $this->headNode;
            $this->headNode = $newNode;
            if($this->tailNode == null){
                $this->tailNode = $newNode;
            }
        }
        public function dequeue(){
            if($this->headNode == null){
                return ;
            }
            $delecteNode = $this->headNode;
            $this->headNode = $this->headNode->next;
            if($this->headNode = null){
                $this->tailNode = null;
                return $delecteNode;
            }
        }

        // public function printData(){
        //     $currentNode = $this->headNode;
        //     $print = "";
        //     while($currentNode != null){
        //         $print .= ",".$currentNode->getData();
        //     }
        //     echo substr($print,1)."\n";
        // }
    }
    $ll = new LinkedList();
    $ll->enqueue("data 1");
    $ll->enqueue("data 2");
    $ll->enqueue("data 3");
    $ll->enqueue("data 4");
    
//    $ll->dequeue();
    echo "<pre>" ;
    print_r($ll);
    // $ll->dequeue();
   
    //   while(!$ll->isEmpty()){
    //   echo $ll->dequeue();
    // //  }