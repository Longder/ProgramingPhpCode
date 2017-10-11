<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/11
 * Time: 10:00
 */

/**
 *  PHP中有8种数据类型
 * 4 种数值类型：
 * integer,floating-point numbers,string,Booleans.
 * 两种符合类型：
 * arrays,objects
 * 两种特殊类型：
 * resource,NULL
 */

//Integer代表整数
$i1 = 1999;
$i1 = -6541;
$i1 = +33;
//八进制数以0开头
$i1 = 0755;
$i1 = +010;
//十六进制数以 0x 开头
$i1 = 0xFF;
$i1 = 0x10;
$i1 = -0xDAD1;
//二进制数以 0b开头
$i1 = 0b01100000;
$i1 = 0b00000010;
$i1 = -0b10;
//is_int()函数（或者is_integer()）可以判断一个变量是否是整数
if(is_int($i1)){
    echo "$i1是整数";
}

//Floating-Point Numbers 浮点数，代表实数
$f = 3.14;
$f = 0.017;
$f = -7.1;
//浮点数也可使用科学计数法
$f = 0.312E1;
$f = 17.0E-3;
//浮点数是不精确的，需要注意
//is_float()函数（或is_real()）可以判断一个变量是否是浮点数
if(is_float($f)){
    echo "$f是实数";
}

//Strings 字符串 可以用双引号或单引号标识
$s = 'big dog';
$s = "fat hog";
//变量在双引号字符串中会被解析
$name = "Guido";
echo "Hi,$name\n"; //Hi,Guido
echo 'Hi,$name'; //Hi,$name
//转义字符，反斜杠 \
$dosPath = 'C:\\WINDOWS\\SYSTEM';
//检查两个字符串是否一样，使用双等号 ==
if($s==$name){
    //一样
}
//is_string()函数可以检测某个变量是否是字符串
if(is_string($s)){
    //$s是字符串
}

//Boolean 布尔值 代表“真”或者“假”
$x = 5;  //$x 是true
$x = true;
$y = ""; //$y 是false
$y = false;
//is_bool()函数可以判断一个变量是否是布尔类型
if(is_bool($x)){
    //$x 是布尔类型
}

//Array 数组 可以使用数值作为下标，也可以使用其他值（类似Map）
$person[0] = "Edison";
$person[1] = "Wankel";
$person[2] = "Crapper";
$creator["Light bulb"] = "Edison";
$creator["Rotary Engine"] = "Wankel";
$creator["Toilet"] = "Crapper";
//也可使用array()创建数组
$person = array("Edison","Wankel","Crapper");
$creator = array("Light bulb"=>"Edison","Rotary Engine"=>"Wankel","Toilet"=>"Crapper");
//遍历数组，使用foreach循环
foreach($person as $name){
    echo "Hello,{$name}\n";
}
foreach ($creator as $invention =>$inventor){
    echo "{$inventor} created the {$invention}\n";
}
//可以使用sort()函数对数组进行排序
sort($person);
asort($creator);
//is_array()函数判断某个变量是否是数组
if(is_array($person)){
    //是数组
}

/**
 * Objects 对象
 * 可以使用class关键字创建一个类，有类之后可使用new关键字以类创建对象
 */
class Person{
    public $name = "";
    function name($newName = NULL){
        if(!is_null($newName)){
            $this->name = $newName;
        }
        return $this->name;
    }
}
$ed = new Person;
$ed->name("Edison");
echo "Hello,{$ed->name}";
//is_object()函数判断是否是对象
if(is_object($ed)){
    //是对象
}

//Resource 资源类型，是引用外部资源的一个句柄，一般用于数据库连接等
//is_resource()函数可以判断一个变量是否是资源类型
if(is_resource($name)){
    //是资源
}

//Callbacks 匿名函数
$callback = function ()
{
    echo "callback achieved";
};
call_user_func($callback);

//NULL 空值
$aleph = "beta";
$aleph = null;
$aleph = NULL;
//is_null()函数判断是否为空
if(is_null($aleph)){
    //空
}









