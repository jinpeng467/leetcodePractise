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

//基本的表达式: area = min(height[i], height[j]) * (j - i) 使用两个指针，值小的指针向内移动，这样就减小了搜索空间 因为面积取决于指针的距离与值小的值乘积，如果值大的值向内移动，距离一定减小，而求面积的另外一个乘数一定小于等于值小的值，因此面积一定减小，而我们要求最大的面积，因此值大的指针不动，而值小的指针向内移动遍历
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        if (count($height) < 2) {
            return -1;
        }
        $i = 0;
        $j = count($height) - 1;
        $res = 0;
        while ($i < $j) {
            $min = min([$height[$i], $height[$j]]);
            $res = max([$res, $min * ($j - $i)]);
            if ($height[$i] < $height[$j]) {
                ++$i;
            } else {
                --$j;
            }
        }
	    return $res;
    }
}