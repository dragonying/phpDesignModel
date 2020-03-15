<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-03-15
 * Time: 10:51
 */

/**
 * spl库
 */

/** 栈 先进后出 */
$stack = new SplStack();
$stack->push('a');
$stack->push('b');
$stack->push('c');

echo $stack->pop().PHP_EOL;
echo $stack->pop().PHP_EOL;
echo $stack->pop().PHP_EOL;

/** 队列 先进先出 */
$queue = new SplQueue();

$queue->enqueue('a');
$queue->enqueue('b');
$queue->enqueue('c');

echo $queue->dequeue().PHP_EOL;
echo $queue->dequeue().PHP_EOL;
echo $queue->dequeue().PHP_EOL;

/** 堆 */
$heap = new SplMinHeap();//最小堆

$heap->insert('a');
$heap->insert('b');
$heap->insert('c');

echo $heap->extract().PHP_EOL;
echo $heap->extract().PHP_EOL;
echo $heap->extract().PHP_EOL;

/** 固定尺寸数组, 超出范围会报错，不赋值也会给大小 */
$sizeArr = new SplFixedArray(3);
$sizeArr[0] = 1;
$sizeArr[1] = 2;
$sizeArr[2] = 3;
print_r($sizeArr);
