<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/17
 * Time: 10:49
 */

/**
 * Subsrings
 * substr(string,start[,length]) 截取字符串
 * start=0 则从开头开始截取
 */
$name = "Fred Flinstone";
$fluff = substr($name,6,4);
$tone = substr($name,11);
//substr_count(big_string,small_string) 返回小字符串在大字符串中出现的次数
$sketch = <<< EndOfSketch
Well,there's egg and bacon;egg sausage and bacon;egg and spam.
EndOfSketch;
$count = substr_count($sketch,"and");
//substr_replace(original,new,start[,length]) 替换字符串
$greeting = "good morning citizen";
$farewell = substr_replace($greeting,"bye",5,7);
//length传入0 相当于插入
$fare = substr_replace($farewell,"kind",9,0);
//new传入空字符串 相当于删除
$farewell = substr_replace($farewell,"",8);

/**
 * strrev() 字符串反转
 */
echo strrev("There is no cabal");

/**
 * str_repeat(string,count) 重复自己拼接字符串
 */
echo str_repeat("_.-.",40);

/**
 * str_pad() 给字符串加空白，填充为新的长度
 */
$string = str_pad("Fred Flitstone",30);
//第三个可选参数可指定用来填充的字符
$string = str_pad("Fred Filtstone",30,".");
//第四个可选参数：STR_PAD_RIGHT  STR_PAD_LEFT STR_PAD_BOTH
echo "[".str_pad("Fred Filtstone",30," ",STR_PAD_BOTH);

/**
 * Decomposing a String
 * 分解字符串
 */
//explode(separator,string[,limit]) 按照指定字符拆分字符串为数组
$input = "Fred,25,Wilma";
$fields = explode(",",$input);
$fields = explode(",",$input,2);
//implode(separator,array) 按照指定字符由数组拼接为字符串，有别名join()
$fields = array("Fred","25","Wilma");
$string = implode(",",$fields);
//strtok() 按单词分割字符串，第一次调用需要传递string和separator,之后只需要传递separator
$string = "Fred,Filntstone,35,Wilma";
$token = strtok($string,",");
while($token !== false){//返回false则代表并没有分隔出字符串
    echo"{$token}<br/>";
    $token = strtok(",");
}
//sscanf() 类似printf()的方式格式化分解字符串
//$array = sscanf(string,template);
$string = "Fred\tFintstone (35)";
$a = sscanf($string,"%s\t%s (%d)");
//$count = sscanf(string,template,var1,...);可使用后面传参让分割出的字符串直接存入变量
//此时方法返回的是分割了多少个域（变量的数量）
$string = "Fred\tFintstone (35)";
$n = sscanf($string,"%s\t%s (%d)",$first,$last,$age);

/**
 * String-Searching Functions
 * 字符串查询函数
 */
//strpos(large_string,small_string); 查询小字符串第一次在大字符串中出现的位置，找不到，返回false
//strrpos(large_string,small_string) 找最后一次出现的位置，参数同上
$record = "Fred,Flintstone,35,Wilma";
$pos = strrpos($record,35);
//strtr(large_string,small_string)查询小字符串第一次在大字符串中出现的位置，并返回第一次位置之后的所有字符串
$record = "Fred,Flintstone,35,Wilma";
$rest = strstr($record,",");
//TODO 不太理解 strspn(string,charset); 返回string中有几个字符在charset表中
function isOctal($str){
    return strspn($str,"01234567")==strlen($str);
}
//TODO 不太理解 strcspn() 反过来
function hasBadChars($str){
    return strscpn($str,"\n\t\0") != strlen($str);
}
//Decomposing URLS 解析URL 使用parse_url()函数 返回一个array，包括url中各个部分
$bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");
print_r($bits);









