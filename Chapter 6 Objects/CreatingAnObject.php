<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/19
 * Time: 14:30
 */

/**
 * php使用new关键字创建对象
 * $object = new Class;
 */
$rasmus = new Person;
//new关键字后面的类名可以使用变量
$class = "Person";
$object = new $class;

/**
 * 访问属性和方法
 */
echo "Rasmus is {$rasmus->age} years old.\n";
$rasmus -> name();
//可是使用变量的变量来充当属性名
$prop = "age";
echo $rasmus ->$prop;

/**
 * 静态方法，使用类名调用
 * HTML::p("Hello World");
 */

/**
 * 对象一旦创建，是按照引用的方式传递
 * 如果需要在变量传递时进行复制，使用clone关键字  $b = clone $f;
 */
















