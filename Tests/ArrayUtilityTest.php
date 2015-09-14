<?php

namespace EXSyst\Common\Tests;

use EXSyst\Common\ArrayUtility;

class ArrayUtilityTest extends \PHPUnit_Framework_TestCase
{
    public function testAssociativeArray()
    {
        $associativeArray = ['foo' => 'bar', 'foo2' => 'bar2'];
        $this->assertTrue(ArrayUtility::isAssociative($associativeArray), sprintf('Array is associate so ArrayUtility::isAssociative must return true.', $associativeArray));
    }

    public function testSequentialArray()
    {
        $sequentialArray = ['bar', 'bar2', 'foo', 'foo2'];
        $this->assertFalse(ArrayUtility::isAssociative($sequentialArray), sprintf('Array is sequential so ArrayUtility::isAssociative must return false.', $sequentialArray));
    }
}
