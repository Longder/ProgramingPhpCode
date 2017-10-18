<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/18
 * Time: 9:36
 */

/**
 * 数组一旦在给它赋值任意一个值的时候，即自动初始化
 */
echo $addresses[0]; //nothing
echo $addresses;    //nothing
$addresses[0] = "123@qq.com";
echo $addresses;

/**
 * 在数组末尾添加元素 使用[]
 */
$family = array("Fred","Wilma");
$family[] = "Pebbles";
//如果原数组下标不是数字，新添加进去的元素下标从0开始
$person = array("name" => "Fred");
$person[] = "Wilma";

/**
 * range()函数可以从指定范围的整数或字符中创建数组，连续。
 * 如果范围是字符串，只使用第一个字符来创建
 */
$number = range(2,5);
$letters = range('a','z');
$reversedNumber = range(5,2);

/**
 * count()和sizeof()函数返回数组中元素的个数
 */
$family = array("Fred","Wilma","Pebbles");
$size = count($family);

/**
 * array_pad()函数，使用指定字符补全数组
 * 第二个参数：补全后数组的长度（负数就在前面补）
 * 第三个参数：用什么补
 */
$scores = array(5,10);
$padded = array_pad($scores,5,0);










