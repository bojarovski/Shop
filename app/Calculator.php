<?php

namespace App;

class Calculator{
    
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        return $num1 / $num2;
    }
   
    public function calculate($total){
        return ($total/100*18)+$total;
    }

    public function ddv($total){
        return $total/100*18;
    }
    	
}
$obj=new Calculator();