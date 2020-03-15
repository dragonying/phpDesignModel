<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 08:50
 */

namespace IMooc;

/**自动加载类
 * Class Loader
 * @package IMooc
 */
class Loader
{
    public static function autoLoad($class)
    {
        require_once BASE_DIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}