<?php

/*Question :
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
The sum of these multiples is 23.Finish the solution so that it returns the sum of all the 
multiples of 3 or 5 below the number passed in.
*/

function solution($number){
   
    /*  Using for loop
        for ($i=0; $i < $number; $i++) { 
        if($i % 3 ==0 || $i % 5 ==0){
            $sum +=$i; 
        }
    }*/
    $sum = 0;
    $sum = array_filter(range(1,$number-1), function($i){
                return ( ($i % 3 ==0 || $i % 5 ==0) ? $i : 0);
            });
    return array_sum($sum);

}

echo solution(10);
?>
