<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/5/25
 * Time: 下午11:53
 */
//PHPUnit Basic Test
/*class StackTest extends PHPUnit_Framework_TestCase{
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertEquals(1, count($stack));
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}*/

//PHPUnit Dependency Test
//class StackDependsTest extends PHPUnit_Framework_TestCase{
//    public function testEmpty()
//    {
//        $stack = [];
//        $this->assertEquals(0, count($stack));
//        return $stack;
//    }
//
//    /**
//     * @depends testEmpty
//     */
//    public function testPush(array $stack)
//    {
//        array_push($stack, 'foo');
//        $this->assertEquals('foo', $stack[count($stack) - 1]);
//        $this->assertNotEmpty($stack);
//        return $stack;
//    }
//
//    /**
//     * @depends testPush
//     */
//    public function testPop(array $stack)
//    {
//        $this->assertEquals('foo', array_pop($stack));
//        $this->assertEmpty($stack);
//    }
//}

//PHPUnit Dependency Sort
//class DependencyFailureTest extends PHPUnit_Framework_TestCase{
//    public function testOne()
//    {
//        $this->assertTrue(false);
//    }
//
//    /**
//     * @depends testOne
//     */
//    public function testTwo()
//    {
//
//    }
//}

//PHPUnit Multiple Dependency
//class MultipleDependencyTest extends PHPUnit_Framework_TestCase{
//    public function testProducerFirst()
//    {
//        $this->assertTrue(true);
//        return 'first';
//    }
//
//    public function testProducerTwo()
//    {
//        $this->assertTrue(true);
//        return 'two';
//    }
//
//    /**
//     * @depends testProducerFirst
//     * @depends testProducerTwo
//     */
//    public function testConsumer()
//    {
//        $this->assertEquals(['first', 'two'], func_get_args());
//    }
//}

//PHPUnit DataProvider
require __DIR__.'/CsvFileIterator.php';
//$csv = new CsvFileIterator(__DIR__.'/data.csv');
//$current = $csv->current();
//echo $current.PHP_EOL;
//exit();
//$csv->isValid();exit();
class DataTest extends PHPUnit_Framework_TestCase{
    public function additionProvider()
    {
        return new CsvFileIterator(__DIR__.'/data.csv');
        /*return [
            'one' => [0, 0, 0],
            'two' => [1, 1, 1],
            'three' => [2, 0, 2],
        ];*/
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }
}