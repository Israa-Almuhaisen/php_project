<?php
$arr = [1,2,3,4,5,6,7,6,4,3,4,5,5,6,7];
function coun($arr){
    asort($arr);
    $result = [array_shift($arr)=>1];
    array_push($result);
    foreach($arr as $val){
        if ($val == $result[1]){
            array_shift($arr);
            $result[-1] +=1;
        }else {
            array_push($result,array_shift($arr));
        }
    }
    return $result;
}

echo "<pre>";
print_r(coun($arr)) ;
echo "</pre>";
?>