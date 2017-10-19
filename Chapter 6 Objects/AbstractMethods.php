<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/19
 * Time: 16:48
 */

/**
 * 定义了抽象方法的类，必须是抽象类
 */
abstract class Component
{
    abstract function printOutput();
}

/**
 * Class ImageComponent必须实现抽象方法
 */
class ImageComponent extends Component
{

    function printOutput()
    {
        // TODO: Implement printOutput() method.
    }
}

/**
 * Trait Sortable
 * trait也可定义抽象方法
 */
trait Sortable
{
    abstract function uniqueId();

    function compareById(Sortable $object)
    {
        return ($object->uniqueId() < $this->uniqueId()) ? -1 : 1;
    }
}

/**
 * Class Bird
 * 使用了有抽象方法的trait的类，也要实现抽象方法
 */
class Bird
{
    use Sortable;

    function uniqueId()
    {
        // TODO: Implement uniqueId() method.
    }
}













