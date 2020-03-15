<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 08:44
 */

define('BASE_DIR', __DIR__);

require_once BASE_DIR . '/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoLoad');

//$_db1 = \IMooc\Factory::createDataBase();
//$_db2 = \IMooc\Factory::createDataBase();
//$db = \IMooc\Register::get('db');
//
//var_dump($_db1 === $_db2);
//var_dump($db === $_db2);



/** 策略模式 */
$page = new \IMooc\Strategy\Page();
$type = $argv[1] ?? 'male';
if($type == 'male'){
    $stategy = new \IMooc\Strategy\MaleUser();
}else{
    $stategy = new \IMooc\Strategy\FeMaleUser();
}
$page->setStategy($stategy);
$page->show();