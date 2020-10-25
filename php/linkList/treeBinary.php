<?php
    class BinaryNode{
        public $value;
        public $left;
        public $right;
        public function __construct($item)
        {
            $this->value = $item;
            $this->left = null;
            $this->right = null;
        }
    }
    class BinaryTree{
        protected $root;
        public function __construct()
        {
            $this->root = null;
        }
        public function isEmpty(){
            return $this->root === null;
        }
        // chèn phần tử vapf cây
        public function insert($item){
            $node = new BinaryNode($item);
            if($this->isEmpty()){
                $this->root = $node;
            }else{
                $this->insertNode($node,$this->root);
            }
        }
        protected function insertNode($node, &$subtree){
            if($subtree === null){
                $subtree = $node;
            }else{
                if($node->value > $subtree->value){
                    $this->insertNode($node,$subtree->right);
                }else{
                    if($node->value < $subtree->value);
                }
            }
        }
        // duyệt qua phần tử của cây
        public function dump(){
            if ($this->left !== null) {
                $this->left->dump();
            }
            var_dump($this->value);
            if ($this->right !== null) {
                $this->right->dump();
            }
        }
         
        public function traverse(){
            $this->root->dump();
        }
    }
    $binarytre = new BinaryTree();
    $binarytre->insert(5);
    $binarytre->insert(10);
    $binarytre->insert(57);
    $binarytre->insert(3);
    $binarytre->insert(9);
    $binarytre->dump();


?>