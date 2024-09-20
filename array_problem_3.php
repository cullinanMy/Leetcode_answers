<?php
$nums = [1, 1, 2, 2, 3];
function removeDuplicates(&$nums)
{
    $unique = [];
    for ($a = 0; $a < count($nums); $a++) {
        if (!in_array($nums[$a], $unique)) {
            $unique[] = $nums[$a];
        }
    }
    $nums = $unique;

    return count($nums);
}

echo (removeDuplicates($nums));
