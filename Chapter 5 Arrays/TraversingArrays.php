<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/18
 * Time: 14:11
 */

/**
 * foreach循环遍历
 */
$addresses = array("123@qq.com", "456@outlook.com");
foreach ($addresses as $value) {
    echo "Processing {$value}\n";
}
$person = array("name" => "Fred", "age" => 35, "wife" => "Wilma");
foreach ($person as $key => $value) {
    echo "Fred's {$key} is {$value}\n";
}

/**
 * 迭代器遍历
 * 比foreach效率较高
 */
reset($addressed);
while(list($key,$value) = each($address)){
    echo "{$key} is {$value}<br/>";
}

/**
 * 普通for循环
 */
$addressCount = count($addresses);
for($i = 0;$i<$addressCount;$i++){
    $value = $addresses[$i];
    echo "{$value}\n";
}

/**
 * array_walk(array,callable)函数 可以在每次遍历到数组中某个元素的时候，调用callable函数
 * 第三个参数可选，可传递自己需要在回调中使用的数据
 */
$person = array("name"=>"Fred","age"=>"35","wife"=>"Wilma");
array_walk($person,function($value,$key){
    print("<tr><td>{$value}</td><td>${key}</td></tr>");
});

/**
 * array_reduce() 用迭代地方式将一个数组转换为一个单一值
 */
//求平方和
$callback = function ($runningTotal,$currentValue){
    $runningTotal +=$currentValue*$currentValue;
    return $runningTotal;
};
$numbers = array(2,3,5,7);
$total = array_reduce($numbers,$callback);
echo $total;

/**
 *in_array() 判断某个元素是否在数组中，返回true false
 * in_array(to_find,array[,strict]);
 * 如果第三个参数为true，则类型和值都必须相等才算找到
 */
$addresses = array("123@qq.com","abc@google.com","789@yahoo.com");
$gotQq = in_array("123@qq.com",$addresses);

/**
 * array_search() 查看某个value是否在数组中，返回对应此value的key
 */
$person = array("name"=>"Fred","age"=>35,"wife"=>"Wilma");
$k = array_search("Wilma",$person);


