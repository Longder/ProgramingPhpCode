<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/16
 * Time: 13:42
 */

/**
 * trim() ltrim() rtrim()
 * 去除空白字符
 */
$title = "  Programing PHP \n";
$str1 = ltrim($title);
$str2 = rtrim($title);
$str3 = trim($title);

/**
 * 大小写处理 Changing Case
 * strtolower()  strtoupper()  ucfirst()  ucwords()
 */
$string1 = "FRED flintstone";
$string2 = "barney rubble";
print(strtolower($string1));
print(strtoupper($string1));
print(ucfirst($string2));
print(ucwords($string2));