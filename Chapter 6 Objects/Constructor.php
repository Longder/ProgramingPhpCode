<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/19
 * Time: 16:57
 */

/**
 *php中的构造器，使用__construct()方法
 */
class Person
{
    public $name,$address,$age;

    /**
     * Person constructor.
     * @param $name
     * @param $address
     * @param $age
     */
    public function __construct($name, $address, $age)
    {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }
}
class Employee extends Person
{
    public $position,$salary;
    public function __construct($name,$address,$age,$position,$salary)
    {
        //子类在创建时不会自动调用父类的构造方法，需要显式调用
        parent::__construct($name,$address,$age);
        $this->position = $position;
        $this->salary = $salary;
    }

    /**
     * 析构函数，对象被销毁时调用
     */
    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}













