<?php 
    abstract class AbstractClass{
        // các lớp kế thừa bắt buộc phải có phương thức này
        abstract protected function getValue();
        abstract protected function preFixValue($prefix);
        // phương thức thông thường
        public function printOut(){
            print $this->getValue();
        }
    }
    class concreteClass1 extends AbstractClass{
        protected function getValue(){
            return "concreteClass1";
        }
        public function preFixValue($prefix){
            return "{$prefix}ConcreteClass1";
        }

    }
    $class1 = new ConcreteClass1;
    $class1->printOut();
    // echo $class1->preFixValue('Foo_');
?>