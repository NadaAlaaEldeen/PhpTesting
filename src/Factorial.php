<?php
class Factorial
{
    public function factorial($num) {
        // Check if the parameter is numeric
        if (!is_numeric($num)) {
            return null;
        }
        // Check if the parameter is integer
        if (is_float($num)) {
            return null;
        }
       
        // Check if the parameter is non-negative
        if ($num < 0) {
            return null;
        }
       // Calculate the factorial of the parameter
        if ($num==0 ) {
            return 1;
        } 
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
          $factorial *= $i;
        }
        return $factorial;
    }
}

