<?php

/*Question : You are given an array strarr of strings and an integer k. Your task is to return the first longest 
string consisting of k consecutive strings taken in the array.
#Example: longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"
n being the length of the string array, if n = 0 or k > n or k <= 0 return "".
*/

function longest_consec($strarr,$k){
   
    $count = count($strarr);
    $res_arr =[];
    

    if($count==0 || $k>$count || $k<=0){
        return "";
    }
    $max = 0;
    for($i=0;$i<($count-$k+1);$i++){
        
        $current_string='';
        for($j=$i;$j<($k+$i);$j++){
            $current_string .= $strarr[$j];
        }
        $charcount = strlen($current_string);
        if($max<$charcount)
            $max = $charcount;   
        
        array_push($res_arr,[$charcount,$current_string]); 
    }
  
    foreach($res_arr as $key => $val){
   
           if($val['0'] == $max ){
               return $val[1];
           }
    }
    
     
}

echo longest_consec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1);
?>
