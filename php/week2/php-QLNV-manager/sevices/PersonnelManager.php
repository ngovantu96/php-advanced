<?php 
    class PersonneManager{
        private $personnels;
        public function __construct(){
            $this->personnels =[];
        }
        public function Show(){
           return $this->personnels;
        }
        public function add($personnel){
            $this->personnels[] = $personnel;
        }
        public function Info(){
            return $this->firstname .$this->lastname .$this->date .$this->addres .$this->job;
        }
        public function Delecte($personnel){
            unset($personnels[$personnel]);
        }
        public function Edit($personnel){
            
        }
    }
?>