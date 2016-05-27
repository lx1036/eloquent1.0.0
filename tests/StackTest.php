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
//class StackDependencyTest extends PHPUnit_Framework_TestCase{
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
//require __DIR__.'/CsvFileIterator.php';
////$csv = new CsvFileIterator(__DIR__.'/data.csv');
////$current = $csv->current();
////echo $current.PHP_EOL;
////exit();
////$csv->isValid();exit();
//class DataTest extends PHPUnit_Framework_TestCase{
//    public function additionProvider()
//    {
//        return new CsvFileIterator(__DIR__.'/data.csv');
//        /*return [
//            'one' => [0, 0, 0],
//            'two' => [1, 1, 1],
//            'three' => [2, 0, 2],
//        ];*/
//    }
//
//    /**
//     * @dataProvider additionProvider
//     */
//    public function testAdd($a, $b, $expected)
//    {
//        $this->assertEquals($expected, $a + $b);
//    }
//}

//PHPUnit Dependency > dataProvider Test
//class DependencyAndDataProviderComboTest extends PHPUnit_Framework_TestCase{
//    public function provider()
//    {
//        return [
//            ['provider1'],
//            ['provider2'],
//        ];
//    }
//
//    public function testProducerFirst()
//    {
//        $this->assertTrue(true);
//        return 'first';
//    }
//
//    public function testProducerSecond()
//    {
//        $this->assertTrue(true);
//        return 'second';
//    }
//
//    /**
//     * @dataProvider provider
//     * @dependency testProducerFirst
//     * @dependency testProducerSecond
//     */
//    public function testConsumer()
//    {
//        $this->assertEquals([['provider1'], 'first', 'second'], func_get_args());
//    }
//}

//PHPUnit Exception Test
//class ExceptionTest extends PHPUnit_Framework_TestCase{
//
//    /**
//     * @expectedException InvalidArgumentException
//     */
//    public function testException()
//    {
////        $this->setExpectedException('InvalidArgumentException');
//        throw new \Prophecy\Exception\InvalidArgumentException();
//    }
//
//    /**
//     * @expectedException InvalidArgumentException
//     * @expectedExceptionMessage Right Message
//     */
//    public function testExceptionHasRightMessage()
//    {
////        $this->setExpectedExceptionRegExp('InvalidArgumentException', 'Right Message');
//        throw new \Prophecy\Exception\InvalidArgumentException('Some Message', 10);
//    }
//
//    /**
//     * @expectedException InvalidArgumentException
//     * @expectedExceptionMessageRegExp #message.*#
//     */
//    public function testExceptionMessageMatchesRegExp()
//    {
//        throw new \Prophecy\Exception\InvalidArgumentException('some message', 10);
//    }
//
//    /**
//     * @expectedException InvalidArgumentException
//     * @expectedExceptionCode 20
//     */
//    public function testExceptionHasRightCode()
//    {
//        throw new \Prophecy\Exception\InvalidArgumentException('message', 20);
//    }
//
//    public function testSetException()
//    {
//        $this->setExpectedException('InvalidArgumentException');
//    }
//
//    public function testSetExceptionHasRightMessage()
//    {
//        $this->setExpectedException('InvalidArgumentException', 'Right Message');
//        throw new \Prophecy\Exception\InvalidArgumentException('Right Message', 10);
//    }
//
//    public function testSetExceptionMessageMatchesRegExp()
//    {
//        $this->setExpectedExceptionRegExp('InvalidArgumentException', '/Right.*/', 10);
//        throw new \Prophecy\Exception\InvalidArgumentException('The Right Message', 10);
//    }
//
//    public function testSetExceptionHasRightCode()
//    {
//        $this->setExpectedException('InvalidArgumentException', 'Right Message', 20);
//        throw new \Prophecy\Exception\InvalidArgumentException('The Right Message', 20);
//    }
//
//}

//class ExpectedErrorTest extends PHPUnit_Framework_TestCase{
//    /**
//     * @expectedException PHPUnit_Framework_Error
//     */
//    public function testFailingInclude()
//    {
//        include 'not_existing_file.php';
//    }
//}


//PHPUnit Output Test
//class OutputTest extends PHPUnit_Framework_TestCase{
//    public function testExpectedAndActualOutput()
//    {
//        $this->expectOutputString('foo');
//        echo 'foo';
//    }
//
//    public function testExpectedAndActualOutput2()
//    {
//        $this->expectOutputString('foo2');
//        echo 'foo';
//    }
//
//    public function testArray()
//    {
//        $this->assertEquals(
//            [1, 3, 4, 6, 0,0,0,0,0,0,0,0,0,0,0,0,1,2,3 ,4,5,6],
//            [1, 3, '4', 5,0,0,0,0,0,0,0,0,0,0,0,0,1,2,33,4,5,6]
//        );
//    }
//}

//PHPUnit Fixture Test
/*class StackFixtureTest extends PHPUnit_Framework_TestCase{
    protected $stack;

    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->stack = [];
    }

    public function testEmpty()
    {
        $this->assertEmpty($this->stack);
    }

    public function testPush()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', $this->stack[count($this->stack) - 1]);
        $this->assertNotEmpty($this->stack);
    }

    public function testPop()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', array_pop($this->stack));
        $this->assertEmpty($this->stack);
    }
}*/

//PHPUnit Template Test
/*class TemplateMethodTest extends PHPUnit_Framework_TestCase{
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass(); // TODO: Change the autogenerated stub
        fwrite(STDOUT, __METHOD__.PHP_EOL);
    }

    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        fwrite(STDOUT, __METHOD__.PHP_EOL);
    }

    protected function assertPreConditions()
    {
        parent::assertPreConditions(); // TODO: Change the autogenerated stub
        fwrite(STDOUT, __METHOD__.PHP_EOL);
    }

    public function testOne()
    {
        fwrite(STDOUT, __METHOD__.PHP_EOL);
        $this->assertTrue(true);
    }

    public function testTwo()
    {
        fwrite(STDOUT, __METHOD__.PHP_EOL);
        $this->assertTrue(false);
    }

    protected function assertPostConditions()
    {
        parent::assertPostConditions(); // TODO: Change the autogenerated stub
        fwrite(STDOUT, __METHOD__.PHP_EOL);
    }

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
        fwrite(STDOUT, __METHOD__.PHP_EOL);
    }

    public static function tearDownAfterClass()
    {
        parent::tearDownAfterClass(); // TODO: Change the autogenerated stub
        fwrite(STDOUT, __METHOD__.PHP_EOL);
    }

    protected function onNotSuccessfulTest($e)
    {
        parent::onNotSuccessfulTest($e); // TODO: Change the autogenerated stub
        fwrite(STDOUT, __METHOD__.PHP_EOL);
        throw $e;
    }
}*/

//PHPUnit Incomplete Test
/*class Incomplete extends PHPUnit_Framework_TestCase{
    public function test()
    {
        $this->assertTrue(true);
        $this->markTestIncomplete('Incomplete test');
    }

    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        if(extension_loaded('mysqli')){
            $this->markTestSkipped('Skipped');
        }
    }

    public function testConnection(){

    }
}*/


//PHPUnit Stub Test
//class SomeClass{
//    public function doSomething()
//    {
//        return 'foo2';
//    }
//}
require_once __DIR__.'/SomeClass.php';
class StubTest extends PHPUnit_Framework_TestCase{
    public function testStub()
    {
        $stub = $this->getMockBuilder('SomeClass')->getMock();
        $stub->method('doSometing')->willReturn($this->returnArgument(0));
        $this->assertEquals('foo', $stub->doSomething('foo'));
        $this->assertEquals('foo2', $stub->doSomething('foo2'));
    }
}

