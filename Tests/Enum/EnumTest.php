<?php
namespace EXSyst\Common\Tests\Enum;

class EnumTest extends \PHPUnit_Framework_TestCase
{
    public function testValuesGetter() {
        $this->assertEquals(EnumClass::$values, EnumClass::getValues());
    }

    public function testValueGetter() {
        $values = EnumClass::getValues();
        foreach($values as $k => $v) {
            $this->assertEquals($v, EnumClass::getValue($k));
        }
    }

    public function testNameGetter() {
        $values = EnumClass::getValues();
        foreach($values as $k => $v) {
            $this->assertEquals([ $k => $v ], [ EnumClass::getName($v) => $v ]);
        }
    }
}
