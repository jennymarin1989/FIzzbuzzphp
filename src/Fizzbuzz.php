<?php

    class Fizzbuzz
    {
        public function fizz($a)
        {
           if($a % 3 == 0){
               return "fizz";
           } elseif($a % 5 == 0){
               return "buzz";
           }
        }
    }