<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 11:46
 */

namespace IMooc\Strategy;


class MaleUser implements UserStrategy
{


    public function showAd()
    {
        return '2020,男性服装';
    }

    public function showCategory()
    {
        return '男装';
    }

}