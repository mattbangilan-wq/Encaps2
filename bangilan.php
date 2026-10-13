<?php
class Bangilan{
    public $num1;
    public $num2;

function set_details($num1,$num2){
    $this->num1=$num1;
    $this->num2=$num2;
    }
function get_details(){
    return $this->num1. " + "
    .$this->num2. " = ". ($this->num1 + $this->num2); 
    }
}
?>