<?php
    //inheritance

    //parent class
    class Cars{
        //magic method
        function __construct(){
            echo "Hi, I am construct method<br>";
        }
        //magic method
        function __destruct(){
            echo "Hi, It's destruct method<br>";
        }
        function forward($car_name="default"){
            return "$car_name is Going forward<br>";
        }
        function backward(){
            return "is Going backward<br>";
        }
    }
    //child class
    class Tesla extends Cars{
        function flying($car_name="default"){
            return "$car_name is flying<br>";
        }
    }

    $toyota = new Cars;
    echo $toyota->forward("Toyota");
    $tesla = new Tesla;
    echo $tesla->forward("Tesla");
    echo $tesla->flying("Tesla");

?>