<?php 
     class StopWatch{
         private $startTime;
         private $endTime;
        public function __construct(){ 
        }
        public function getStarTime(){
            return $this->startTime;
        }
        public function getEndTime(){
            return $this->endTime;
        }
        public function Start(){
            $this->startTime = hrtime(true);
        }
        public function Stop(){
            $this->endTime = hrtime(true);
        }
        public function getElapsedTime(){
            return $this->endTime-$this->startTime;
        }
    }
    $stopwatch = new StopWatch();
     $stopwatch->Start();
     echo $stopwatch->getStarTime()."<br>";
     for($i=0;$i<100;$i++){
         echo $i;
     }
     echo "<br>";
     $stopwatch->Stop();
     echo $stopwatch->getEndTime()."<br>";
     echo $stopwatch->getElapsedTime();
?>