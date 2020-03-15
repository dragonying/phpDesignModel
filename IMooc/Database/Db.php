<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 11:11
 */

namespace IMooc\Database;

/**适配器模式,将截然不同的函数接口封装成统一的api; mysql,mysqli,pdb 统一db的操作api, 然后各自去实现
 * Interface Db
 * @package IMooc\Database
 */
interface Db
{
    public function connect();

    public function query();

    public function close();

}