<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/18
 * Time: 13:45
 */
/**
 * php提供很多数组和变量互相装换的方法
 * 数组中的key ==> 变量名
 * 数组中的value ==>对应变量中的值
 */

/**
 * extract()函数把数组自动转换为对应名称的变量
 */
$shape = "round";
$array = array("cover"=>"bird","shape"=>"rectangular");
//可以使用后两个参数定义变量名称的前缀
extract($array,EXTR_PREFIX_ALL,"book");
echo "Cover:{$book_cover},Book Shape{$book_shape},Shape:{$shape}";

/**
 * compact()函数由变量生成数组
 * 以变量名作为key，值作为对应的value
 */
$color = "indigo";
$shape = "curvy";
$floppy = "none";
$a = compact("color","shape","floppy");
//或者:
$name = array("color","shape","floppy");
$a = compact($name);