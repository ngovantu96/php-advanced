<?php 
    class Employee{
        private $fisrtname;
        private $lastname;
        private $date;
        private $addres;
        private $job;
        public function __construct(){
            // $this->fisrtname = $fisrtname;
            // $this->lastname = $lastname;
            // $this->date = $date;
            // $this->addres = $addres;
            // $this->job = $job;
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
    // $employee = new Employee("ngo","văn",1990,"qb","it");
    // $employee->setFisrtName("ngô");
    // $employee->setLastName("văn");
    // $employee->setDate(1990);
    // $employee->setAddres("quảng bình");
    // $employee->setJob("IT");
  

    // echo $employee->getFisrtName();
    // echo $employee->getLastName();
    // echo $employee->getDate();
    // echo $employee->getAddres();
    // echo $employee->getJob();
    
    class EmployeeManager extends Employee{
        public $emplpyees;
        public function __construct(){
            $this->empolyees =[];
        }
        public function Show(){
            return $this->emplpyee;
        }
        public function add($emplpyee){
            $this->emplpyees[] = $emplpyee;
        }
        // public function Info(){
        //     return $this->firstname .$this->lastname .$this->date .$this->addres .$this->job;
        // }
        // public function Delecte($emplpyee){
        //     unset($emplpyee[$emplpyee]);
        // }
        public function getEmployee(){
            return $this->employees;
        }
    }  
    $employeemanager = new EmployeeManager();
    $employeemanager->add(new EmployeeManager("ngô","văn",1990,"qb","it"));
    $employeemanager->add(new EmployeeManager("nguyen","hoàng",1993,"huế","kinh tê"));
    $employee = $employeemanager->getEmployee();
       
    foreach($employees as $employee){
        echo $Employee;
    }
    
?>