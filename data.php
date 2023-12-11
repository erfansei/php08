<?php
    class Plan{
        private $name;
        private $time;
        private $price;

        public function __construct($name,$time,$price){
            $this->name=$name;
            $this->time=$time;
            $this->price=$price;
        }
        public function getName(){
            return $this->name;
        }
        public function getTime(){
            return $this->time;
        }
        public function getPrice(){
            return $this->price;
        }
    }
    class PCollection{
        private $items;
        
        public function __construct(){
            $this->items=[];
        }
        public function addPlan($item){
            $this->items[]=$item;
        }
        public function getItem(){
            return $this->items;
        }
    }
    $p1=new Plan("Short Plan","7 Days",8);
    $p2=new Plan("Standard Plan","30 Days",20);
    $p3=new Plan("Economy Plan","6 Months",100);

    $pCol=new PCollection();
    $pCol->addPlan($p1);
    $pCol->addPlan($p2);
    $pCol->addPlan($p3);
    $pCol->addPlan(new Plan("Business Plan","1 Year",170));
    
?>