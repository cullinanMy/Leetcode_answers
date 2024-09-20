
 
                  <!-- Answer -->

<?php
 $nums1 = [];
 $nums2 = [1];
 $m= 0;
 $n = 1;


 function merge(&$nums1, $m, $nums2, $n) {
     array_splice($nums1,$m,count($nums1));
     array_splice($nums2,$n,count($nums2));
     
     foreach($nums2 as $num){
        array_push($nums1,$num);
    }
    sort($nums1);
     return $nums1;
     
}

var_dump(merge($nums1, $m, $nums2, $n));





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leetcode Crash </title>
</head>
<body>
    
</body>
</html>