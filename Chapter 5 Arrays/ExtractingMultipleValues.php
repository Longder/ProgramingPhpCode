<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/18
 * Time: 10:20
 */

/**
 * list()函数，把数组中的值赋值到多个变量中
 */
$person = array("Fred", 35, "Betty");
list($name, $age, $wife) = $person;

/**
 * array_slice()可从原数组中截取出子数组
 * array_slice(array,offset,length);
 */
$people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
$middle = array_slice($people, 2, 2);

/**
 * array_chunk()函数 拆分数组
 * array_chunk(array,size[,preserve_keys]);
 * 第三个参数是Boolean类型，用来标识新拆分出的数组使用原来的key还是自己新建key
 * 返回值是一个所有拆分出来的数组组成的数组
 */
$nums = range(1, 7);
$rows = array_chunk($nums, 3);
print_r($rows);

/**
 * array_keys()函数，返回一个数组，包括某数组中所有的keys
 * array_keys(array);
 * array_values(array) 返回一个数组，包括某数组中所有的values
 */
$person = array("name" => "Fred", "age" => 35, "wife" => "wilma");
$keys = array_keys($person);
$values = array_values($person);

/**
 * array_key_exists(key,array)检查某个元素是否存在于数组中
 */
$person["age"] = 0;
if(array_key_exists("age",$person)){
    echo "exists!\n";
}

/**
 * array_splice()函数可以在数组中插入和删除元素
 * $removed = array_splice(array,start,[,length [.replacement] ]);
 */
$subjects = array("physics","chem","math","bio","cs","drama","classics");
$removed = array_splice($subjects,2,3);//从第二个开始，删除3个，返回被删除的数组
$removed = array_splice($subjects,2);//从第二个开始，删除到结尾，返回被删除的
$subjects = array("physics","chem","math","bio","cs","drama","classics");
$new = array("law","business","IS");
array_splice($subjects,4,3,$new);//从第4个删除并替换为$new(length不一定要和新加入数组的长度一致)
$subjects = array("physics","chem","math");
$new = array("law","business");
array_splice($subjects,2,0,$new);//在第二个位置插入数组，不删除原数组中的任何元素
























