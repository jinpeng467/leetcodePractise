<?php


 //暴力解决法， 未能够真正解决问题
 class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        if (count($height) < 2) {
            return 0;
        }
        $maxArea = 0;
        for ($i = 0; $i < count($height); $i++) {
            for ($j = $i + 1; $j < count($height); $j++) {
                $minVal = min([$height[$i], $height[$j]]);
                $nowValue = ($j - $i) * $minVal;
                if ($nowValue > $maxArea) {
                    $maxArea = $nowValue;
                }
            }
	    } 
	    return $maxArea;
    }
}