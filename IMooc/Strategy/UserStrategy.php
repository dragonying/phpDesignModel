<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 11:19
 */

namespace IMooc\Strategy;

/**
 * 1.策略模式，将一组特定的行为和算法封装成类,以适应某些特定的上下文环境,这种模式就是策略模式
 *2.实际应用举例,假如一-个电商网站系统,针对男性女性用户要各自跳转到不同的商品类目,并且所有广告位展示不同的广告
 * 3.常规是硬编码通过if else判断处理，现在根据类类型处理
 * 4.结耦
 * Interface UserStrategy
 * @package IMooc
 */
interface UserStrategy
{

    public function showAd();

    public function showCategory();

}