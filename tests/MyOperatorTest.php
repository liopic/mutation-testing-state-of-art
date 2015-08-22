<?php
namespace liopic;

class MyOperatorTest extends \PHPUnit_Framework_TestCase
{
    public function testDoAnd()
    {
        $operator = new MyOperator();
        $this->assertEquals(true, $operator->doAnd(true, true));
        $this->assertEquals(false, $operator->doAnd(true, false));
        //but 2 cases are missing!!
    }

    public function testBiggerThan5()
    {
        $operator = new MyOperator();
        $this->assertEquals(true, $operator->biggerThan5(8));
        $this->assertEquals(false, $operator->biggerThan5(3));
    }
}
