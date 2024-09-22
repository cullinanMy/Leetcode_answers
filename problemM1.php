<?php
function removeDuplicates(&$nums)
{
$n = count($nums);

if ($n<2){
    return $n;

}

$k =2;

for ($i=2; $i<$n; $i++) {
    if ($nums[$i]!= $nums[$k-2]){
        $nums[$k]= $nums[$i];
        $k++;


    }

}

return $k;



}

$nums = [1, 1, 1, 2, 2, 3,3,3,4];
$a = removeDuplicates($nums);
echo $a;

