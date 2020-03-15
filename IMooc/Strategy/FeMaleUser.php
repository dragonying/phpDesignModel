<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 11:46
 */

namespace IMooc\Strategy;


class FeMaleUser implements UserStrategy
{


    public function showAd()
    {
        return '2020,女性服装';
    }

    public function showCategory()
    {
        return '女装';
    }

}