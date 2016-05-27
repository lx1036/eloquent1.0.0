<?php

/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/5/27
 * Time: 12:04
 */
class SomeClass
{
    public function doSomething($str)
    {
        echo $str.PHP_EOL;
    }
}

class SomeClass2{
    public function doSome(SomeClass $someClass)
    {
        $someClass->doSomething('hello');
    }
}

$class2 = new SomeClass2();
$class2->doSome(new SomeClass());