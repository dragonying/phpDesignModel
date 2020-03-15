<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 10:52
 */

namespace IMooc;

/**单利模式
 * Class Databases
 * @package IMooc
 */
class Databases
{
    static $db;//数据库实例

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$db instanceof self){
            return self::$db;
        }else{
            return self::$db = new self();
        }
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function select($select)
    {
        return $this;
    }

    public function delete($delete)
    {
        return $this;
    }

    public function add($add)
    {
        return $this;
    }

    public function update($update)
    {
        return $this;
    }

    public function where($where)
    {
        return $this;
    }

    public function order($order)
    {
        return $this;
    }

    public function group($group)
    {
        return $this;
    }

}