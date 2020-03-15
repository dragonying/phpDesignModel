<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 09:50
 */

namespace IMooc;

/**注册器模式， 将对象注册到全局到树上，可以全局获取被访问
 * Class Register
 * @package IMooc
 */
class Register
{
    protected static $objects = [];

    /**注册
     * @param $alias
     * @param $object
     */
    public static function set($alias, $object)
    {
        !isset(self::$objects[$alias]) && self::$objects[$alias] = $object;
    }

    /**获取对象
     * @param $alias
     * @return mixed|null
     */
    public static function get($alias)
    {
        return self::$objects[$alias] ?? null;
    }


    /**销毁
     * @param $alias
     */
    public static function noset($alias)
    {
        if (isset(self::$objects[$alias])){
            unset(self::$objects[$alias]);
        }
    }

}