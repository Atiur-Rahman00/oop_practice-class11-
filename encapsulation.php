<?php
    //inheritance

    //parent class
    class Cars{
        //public access modifier
        public $color = "Green";
        //private access modifier
        private $clr = "Red";
        //protected access modifier
        protected $colr = "Yellow";
        
        function forward($car_name="default"){
            return "$this->clr $car_name is Going forward<br>";
        }
        function backward(){
            return "is Going backward<br>";
        }
    }

    //child class
    class Tesla extends Cars{
        function colorname(){
            return "$this->colr";
        }
        function flying($car_name="default"){
            return "$this->color $car_name is flying<br>";
        }
        function protect($car_name="default"){
            return "$this->colr $car_name is protected<br>";
        }
    }
    $toyota = new Cars;
    echo $toyota->forward("Toyota");
    $tesla = new Tesla;
    echo $tesla->color;
    echo "<br>";
    echo $tesla->flying("Tesla");
    echo $tesla->protect("Tesla");


?>