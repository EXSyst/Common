<?php

namespace EXSyst\Common\Tests\Enum;

use EXSyst\Common\Enum;

class EnumClass extends Enum
{
    const FOO = 0;
    const FOO_TWO = 1;
    const FOO_THREE = 3;

    public static $values = ['FOO' => 0, 'FOO_TWO' => 1, 'FOO_THREE' => 3];
}
