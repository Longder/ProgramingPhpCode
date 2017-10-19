<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/19
 * Time: 9:53
 */

/**
 * array_sum() 计算数组中所有元素的累加和
 */
$scores = array(98,76,56,80);
$total = array_sum($scores);

/**
 * array_merge() 合并数组
 */
$first = array("hello","world");
$second = array("exit","here");
$merged = array_merge($first,$second);

/**
 * array_diff() 计算数组的差集
 * 是通过 === 来比较元素的，所以必须类型和值都相等
 */
$a1 = array("bill","claire","ella","simon","judy");
$a2 = array("jack","claire","toni");
$a3 = array("ella","simon","garfunkel");
$difference = array_diff($a1,$a2,$a3);//$a1中的key值会保留
print_r($difference);

/**
 * array_filter(array,callback)
 *过滤数组，每个元素都会传递给callback回调
 *整个函数返回的数组是只由callback之后为true的元素组成
 */
$callback = function($element){
    return $element % 2;
};
$numbers = array(9,23,24,27);
$odds = array_filter($numbers,$callback);//会保留$numbers中的key









