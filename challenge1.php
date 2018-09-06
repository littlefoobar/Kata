<?php
function parse($data) {
    $i=0;
    $result=[];
    /*$data = preg_replace('/[^idso]/', '', $data)*/; // Regular expression.
    $data  = str_split($data) ;
    $data  = array_filter($data,function($char){
                return (in_array($char,array('i','d','s','o')) ? $char : null);
            });
    foreach( $data as $val){
        switch($val){
            case 'i' :  $i++; break;
            case 'd' : $i--;break;
            case 's' : $i = $i*$i; break;
            case 'o' :  $result[] = $i;break;
        }  
    }
	print_r($result);
}
echo "<br />";
parse("iiisdoso"); // output [8,64]
echo "<br />";
parse("iiisxxxdoso");// output [8,64]
echo "<br />";
parse("sxghdmissqmds");
?>