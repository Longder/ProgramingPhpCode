<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/13
 * Time: 9:25
 */

/**
 * 定义函数 Defining Function
 * @param $left
 * @param $right
 * @return string
 */
function strcat($left,$right){
    $combinedString = $left.$right;
    return $combinedString;
}

/**
 * 调用函数 Calling Function
 */
$first = "This is a ";
$second = " complete sentence!";
echo strcat($first,$second);

/**
 * 函数也可定义在函数中
 * @param $a
 */
function outer($a){
    function inner($b){
        echo "there $b";
    }
    echo "$a,hello ";
}
outer("well");
//但在外部方法外也可调用内部方法
inner("reader");

/**
 * 声明在函数中的静态变量，只会在第一次调用的时候初始化并始终保留变量中的值，不论函数调用多少次。
 */
function counter(){
    static $count = 0;
    return $count++;
}
for($i = 1;$i<=5;$i++){
    print counter();
}

/**
 * 通过引用方式传递参数 Passing Parameters by Reference
 * 此时参数必须是变量形式，不能传递常量和字面量
 * @param $value
 */
function doubler(&$value){
    $value = $value<<1;
}
$a = 3;
doubler($a);
echo $a;//6

/**
 * 默认参数 Default Parameters
 * 使用：getPreferences()方式来调用
 * @param string $whichPreference
 */
function getPreferences($whichPreference = 'all'){

}

/**
 * 可变参数 Variable Parameters
 * func_num_args()的返回值不能直接用来调用方法，必须用变量传递：
 * $count = func_num_args();
 * foo($count);
 */
function countList(){
    if(func_num_args()==0){
        return false;
    }else{
        $count = 0;
        for($i=0;$i<func_num_args();$i++){
            $count+=func_get_arg("$i");
        }
        return $count;
    }
}
echo countList(1,5,9);//output 15

/**
 * 类型提示 Type Hinting
 * 可在参数名前写明该参数的类型
 */
class Entertainment{}
class Clown extends Entertainment{}
class Job{}
function handleEntertainment(Entertainment $a,callable $callback = null){
    echo "Handling" . get_class($a) . " fun\n";
    if($callback!==null){
        $callback();
    }
}
$callback = function(){};

handleEntertainment(new Clown(),$callback);

/**
 * 返回值 Return Values
 * 没有return关键在在函数中，默认返回null
 */
function returnOne(){
    return 42;
}
function returnTwo(){
    return array("Fred",35);
}
//默认情况下，返回值是会复制一份返回给调用者。可声明使用引用的方式返回值。
$names = array("Fred","Barney","Wilma","Betty");
function &findOne($n){
    global $names;
    return $names[$n];
}
$person = &findOne(1);//Barney
$person = "Barnetta"; //changes $names[1]

/**
 * 可变方法 Variable Functions
 */
if(function_exists($which)){
    $which();
}

/**
 * 匿名方法 Anonymous Functions
 */
$array = array("really long string here,boy","this","middling length","larger");
usort($array,function($a,$b){
    return strlen($a) - strlen($b);
});
print_r($array);
$sortOption = "random";
//匿名函数可以使用use关键字实现在函数内部访问外部传递给它的变量
usort($array,function($a,$b) use ($sortOption){
    if($sortOption=="random"){
        return rand(0,2) - 1;
    }else{
        return strlen($a) - strlen($b);
    }
});




