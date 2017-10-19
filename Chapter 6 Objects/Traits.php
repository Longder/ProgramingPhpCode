<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/19
 * Time: 16:20
 */

/**
 * Trait Logger
 * 定义Trait，变相实现多继承
 */
trait Logger
{
    public function log($logString)
    {
        $className = __CLASS__;
        echo date("Y-m-d h:i:s", time()) . ": [{$className}] {$logString}";
    }
}

class User
{
    //use关键字引用trait，可以同事引用多个
    use Logger;
    public $name;

    function __construct($name = "")
    {
        $this->$name = $name;
        //可调用trait中的方法
        $this->log("Created user {$this->name}");
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->name;
    }
}

trait Command
{
    function run()
    {
        echo "Executing a command";
    }
}

trait Marathon
{
    function run()
    {
        echo "Executing a marathon";
    }
}

class Test
{
    //同时引用多个Trait，
    use Command, Marathon {
        //里面有名称相同的方法，可以可以使用 insteadof 关键字进行指定
        Marathon::run insteadof Command;
        //也可使用 as关键字指定另外一个run方法
        Command::run as runCommand;
    }
}

















