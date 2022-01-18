<?php
     abstract class Cars{
         abstract function flying();
     }
     class Tesla extends Cars{
        function flying(){
            return "we are flying";
        }
     }
     $tesla = new Tesla;
     echo $tesla->flying();
      
?>