<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/11
 * Time: 17:18
 */

/**
 * 运算符的操作数 Number of Operands
 */
/**
 * 运算符的优先级 Operator Precedence
 */
/**
 * 运算符的连接性 Operator Associativity
 */
/**
 * 隐式转换 Implicit Casting
 */
$a = 5+5.2;//结果转换为浮点型
$a = 5+'5.2';//结果转换为浮点型
$a = "5"+5.2;//结果转换为浮点型
$a = 3 . 2.47;//转换为string 这是字符串拼接
//字符串可隐式转换为整数或浮点数
$a = "9 Lives"-1;//8(int)
$a = "3.14 Pies"*2;//6.28(float)
$a = "9 Lives."-1;//8(float)
$a = "1E3 Points of Light"+1;//1001(float)

/**
 * 算数运算符 Arithmetic Operators
 * + - * /(加减乘除) %(取余) -(负号) +(正号)
 */

/**
 * 字符串连接运算符 String Concatenation Operator
 */
$n = 5;
$s = "There were ".$n." ducks";

/**
 * 自增和自减运算符 Auto-increment and Auto-decrement Operators
 * 除了可对整数进行自增自减，也可操作字符。
 */
$n++;++$n;$n--;--$n;

/**
 * 比较运算符 Comparison Operators
 * 返回值是Boolean
 * == === !=or<> !==
 */

/**
 * 位运算符 Bitwise Operators
 * ~ & | ^ << >>
 */

/**
 * 逻辑运算符 Logical Operators
 * &&,and  ||,or  xor  !
 */

/**
 * 强制转换运算符 Casting Operators
 */
$a = "5";
$b = (int)$a; //强制转换并不会影响原有变量的值 $a中还是字符串 "5"
//对象和数组可互相进行强制转换
class P{
    var $name = "Fred";
    var $age = 35;
}
$o = new P;
$a = (array)$o;

/**
 * 赋值运算符 Assignment Operators
 * 赋值运算符本身也返回值，返回被赋值变量中存储的值
 */
$a = 5;
$b = 10;
$c = ($a = $b);
//扩展形式 += -= *= /= %=

/**
 * 混合运算符 Miscellaneous Operators
 * Error suppression @
 * Execution `...`
 * Conditional ? :  三目运算
 */
$listing = `ls -ls /tmp`;
echo  $listing;







