<?php 
    class Employee{
        private $fisrtname;
        private $lastname;
        private $date;
        private $addres;
        private $job;
        public function __construct($fisrtname,$lastname,$date,$addres,$job){
            $this->fisrtname = $fisrtname;
            $this->lastname = $lastname;
            $this->date = $date;
            $this->addres = $addres;
            $this->job = $job;
        }
        public function setFisrtName($fisrtname){
            $this->fisrtname = $fisrtname;
        }
        public function setLastName($lastname){
            $this->lastname = $lastname;
        }
        public function setDate($date){
            $this->date = $date;
        }
        public function setAddres($addres){
            $this->addres = $addres;
        }
        public function setJob($job){
            $this->job = $job;
        }
        // get giá trị
        public function getFisrtName(){
            return $this->fisrtname;
        }
        public function getLastName(){
            return $this->lastname;
        }
        public function getDate(){
            return $this->date;
        }
        public function getAddres(){
            return $this->addres;
        }
        public function getJob(){
            return $this->job;
        }
    }
    $employee = new Employee();
    $employee->setFisrtName("ngô");
    $employee->setLastName("văn");
    echo $employee->getFisrtName();
    echo $employee->getLastName();
    // class EmployeeManager{
    //     public $emplpyee;
    //     public function __construct(){
    //         $this->empolyee =[];
    //     }
        
            
       
    
?>