<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 11:53
 */

namespace IMooc\Strategy;

/**
 * 1.策略模式，将一组特定的行为和算法封装成类,以适应某些特定的上下文环境,这种模式就是策略模式
 *2.实际应用举例,假如一-个电商网站系统,针对男性女性用户要各自跳转到不同的商品类目,并且所有广告位展示不同的广告
 * 3.常规是硬编码通过if else判断处理，现在根据类类型处理
 * 4.实现依赖倒置，控制反转
 */
class Page
{
    /**
     * @var \IMooc\Strategy\UserStrategy
     */
    protected $stategy = null;

    public function show()
    {

        echo 'AD is:' . $this->stategy->showAd();
        echo PHP_EOL;
        echo 'CATEGORY is:' . $this->stategy->showCategory();
    }

    /**根据策略设置用户类型， 因为UserStrategy是接口，方便替换具体的实现
     * @param \IMooc\Strategy\UserStrategy $strategy
     */
    public function setStategy(UserStrategy $strategy)
    {
        $this->stategy = $strategy;
    }

}