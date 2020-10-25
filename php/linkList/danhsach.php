<?php 
    class ListNode {
        public $data = NULL;
        public $next = NULL;
        public function __construct(string $data = NULL){
            $this->data = $data;
        }
    }
    class LinkedList {
        private $_fisrtNode = NULL;
        private $_totalNode = NULL;

        public function insert(string $data = NULL){
            $newNode = new ListNode($data);
            if($this->_fisrtNode == NULL){
                $this->_fisrtNode = &$newNode;
            }else {
                $currentNode = $this->_fisrtNode;
                while($currentNode->next !== NULL){
                    $currentNode = $currentNode->next;
                }
                $currentNode->next = $newNode;
            }
            $this->_totalNode++;
            return true;
        }
        public function display(){
            echo 'total book titel '.$this->_totalNode."<br";
            $currentNode = $this->_fisrtNode;
            while($currentNode !== NULL){
                echo $currentNode->data."<br>";
                $currentNode = $currentNode->next;
            }
        }
        // them 1 phan tuw
        public function insertAtFirst(string $data = NULL){
            $newNode = new ListNode($data);
            if($this->_fisrtNode === NULL){
                $this->_firstNode = &$newNode;
            }else{
                $currentNode = $this->_firstNode;
                $this->_firstNode = &$newNode;
                $newNode->next = $currentNode;
            }
            $this->_totalNode++;
            return true;
        }
        // search element into list
        public function search(string $data = NULL){
            if($this->_totalNode){
                $currentNode = $this->_fisrtNode;
                while($currentNode !== NULL){
                    if($currentNode->data === $data){
                        return $currentNode;
                    }
                    $currentNode = $currentNode->next;
                }
            }
            return false;
        }
        // delete element head of the list
        public function deleteFirst(){
            if($this->_fisrtNode !== NULL){
                if($this->_fisrtNode->next !== NULL){
                    $this->_fisrtNode = $this->next;
                }else{
                    $this->_fisrtNode = NULL;
                }
                $this->_totalNode--;
                return true;
            }
            return false;
        }
        // delete element last of the list

        public function deleteLast(){
            if($this->_fisrtNode !== NULL){
                $currentNode = $this->_fisrtNode;
                if($currentNode->next === NULL){
                    $this->_fisrtNode = NULL;
                }else{
                    $previousNode =NULL;
                    while($currentNode->next !== NULL){
                        $previousNode = $currentNode;
                        $currentNode = $currentNode->next;
                    }
                    $previousNode->next = NULL;
                    $this->_totalNode--;
                    return true;
                }
            }
            return false;
        }
        // delete element index any positon;
    
    }
    
    $bookTitel = new LinkedList();
    // $bookTitel->insert("introduction to algorithm <br>");
    // $bookTitel->insert(("introduction to php and data structure <br>"));
    // $bookTitel->insert("programming intelligonce");
    // $bookTitel->display();
    echo $bookTitel->insertAtFirst("java")."-";
    echo $bookTitel->insertAtFirst("php")."-";
    echo $bookTitel->insertAtFirst("c++")."-";
    echo $bookTitel->deleteFirst("java");

    // add element to th top of the linkedlist;
   
?>