<?php
   $x = $_GET["num"];

   
   if ($x % 3 ==0 && $x % 5 ==0) {
       echo "FizzBuzz<br />";
   } 
   if ($x % 3 == 0){
       echo "Fizz<br />";
   }
   if ($x % 5 == 0){
    echo "Buzz<br />";
    }
    else {
        echo "NO FizzBuzz<br />";
    }
   ?>