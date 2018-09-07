<?php
    function isValidCoordinates($coordinates) {
        if(preg_match("/[a-z]/i", $coordinates))
            return false;
        $coordinates = explode(",",$coordinates);
        if(count($coordinates )>=3)
        return false;
        
        if((substr_count($coordinates[0],"." )>=2) || (substr_count($coordinates[1],"." )>=2 ))
            return false;
        
        $first_float= abs($coordinates[0]);
        $second_float= abs($coordinates[1]);
        
        if($first_float > 0 && $first_float < 90){
            if($second_float > 0 && $second_float < 180){
                return true;
            }else{
                return false;   
            }
        }else{
            return false;
        }
    }  
?>