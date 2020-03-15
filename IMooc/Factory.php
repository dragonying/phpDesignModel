<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 10:58
 */

namespace IMooc;

/**工厂模式
 * Class Factory
 * @package IMooc
 */
class Factory
{

    /**统一获取数据库的方法，避免多处使用new对象的形式创建数据库，或者当数据库名更改时，方面修改
     * @return \IMooc\Databases
     */
    public static function createDataBase()
    {
        $db = Databases::getInstance();
        Register::set('db', $db);//注册器

        return $db;
    }

}