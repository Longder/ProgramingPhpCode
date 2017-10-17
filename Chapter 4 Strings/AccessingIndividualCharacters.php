<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/16
 * Time: 13:34
 */

/**
 * strlen() 函数可以返回字符串中字符的数量
 */
$string = "Hello,world";
$length = strlen($string);//$length is 12
//遍历访问字符串中的每一个字符
$string = "Hello";
for($i=0;$i<strlen($string);$i++){
    printf("The %dth character is %s\n",$i,$string{$i});
}