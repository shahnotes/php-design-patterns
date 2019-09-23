<?php

$data = [1,3,5,2,3,4,5,3];

function sort_data($data) {
    if (count($data) > 20) {
        $sort = new BubbleSort($data);
    } else if(count($data) < 20) {
        $sort = new MergeSort($data);
    } else {
        $sort = new QuickSort($data);
    }
    return $sort->sort();
}

sort_data($data);