<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/16
 * Time: 11:09
 */
/**
 * echo
 * echo是PHP中的一个关键字，虽然后面可带小括号，但它不是一个真正的函数。
 */
echo "Printy";
echo("Printy");
echo "First","second","third";

/**
 * print()
 * 是一个方法，打印传递给它的参数
 */
if(print("test")){
    print("It worked!");
}

/**
 * printf()
 * 格式化打印，从C衍生
 */
printf("%.2f",27.452);//27.45
printf("The hex value of %d is %x",214,214);
printf("Bond. James Bond. %03d.",7);
printf("$02d/%02d/%04d",$month,$day,$year);

/**
 * print_r()
 *  可以用来打印数组、对象等。会自动格式化输出
 */
$a = array("name"=>"Fred","age"=>35,"wife"=>"Wilma");
print_r($a);
//print_r()在打印某些值时会有不同含义
print_r(true);// "1"
print_r(false);// ""
print_r(null);// ""

/**
 * var_dump()
 * 也可以打印所有，但所有值的含义明确
 */
var_dump(true);// bool(true)











