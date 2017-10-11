<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/11
 * Time: 15:56
 */

/**
 * Variables 变量，PHP中的变量都是以$符号开头
 * PHP是弱类型的语言，一个变量可以存储任意类型的数据。
 * 不需要初始化，一旦赋值则自动初始化
 */
$what = "Fred";
$what = 35;
$what = array("Fred",35,"Wilma");
$day = 60*60*24;
echo "There are {$day} seconds in a day.\n";
//如果一个变量没有被赋值，就是NULL
if($unInitializedVariable === null){
    echo "Yes!";
}

/**
 * Variable Variables 变量的变量
 */
$foo = "bar";
$$foo = "baz";
echo $bar;  //baz

/**
 * Variable References变量的引用，可以理解为变量的别名。两个变量名称同时指向一个值
 * 使用 & 符号
 */
$bigLongVariableName = "PHP";
$short = & $bigLongVariableName;
$bigLongVariableName .= " rocks"; //short中的值也会跟着改变
print "\$short is $short\n";
print "Long is $bigLongVariableName";
//使用unset清空变量之后，并不影响他的引用变量
$white = "snow";
$black = & $white;
unset($white);
print $black; //snow
//函数可以通过引用来返回值
function &retRef()
{
    $var = "PHP";
    return $var;
}
$v = & retRef();

/**
 * Variable Scope 变量的作用域
 */
//局部变量，函数内声明的变量，只能在函数内访问。
function updateCounter()
{
    //这里只是操作了function内部的变量，并非外部。
    $counter++;
    //使用global关键字声明后，则可以访问function外部声明的变量
    global $counter;
    $counter++;
    //也可以通过$GLOBALS数组访问
    $GLOBALS[$counter]++;
    //声明在方法内部的静态变量，在方法被多次调用的时候，会保留里面的值。但是只能在方法内部访问
    static $c1 = 0;
    $c1++;
}
//全局变量，声明在function外部
$counter = 10;
updateCounter();
echo $counter; //10
//方法的参数。只能在方法内部访问
function greet($name)
{
    echo "Hello,{$name}\n";
}
greet("Janet");








