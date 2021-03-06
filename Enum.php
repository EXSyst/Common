<?php

namespace EXSyst\Common;

abstract class Enum
{
    private function __construct()
    {
    }

    public static function isValid($value)
    {
        return static::getName($value) !== null;
    }

    public static function getValue($name)
    {
        $values = static::getValues();
        if (!isset($values[$name])) {
            return;
        }

        return $values[$name];
    }

    public static function getName($value)
    {
        $name = array_search($value, static::getValues());
        if ($name === false) {
            return;
        }

        return $name;
    }

    public static function getValues($case_lower = false)
    {
        static $values = null;
        if ($values === null) {
            $clazz = new \ReflectionClass(get_called_class());
            $values = $clazz->getConstants();
        }

        if ($case_lower) {
            $values = array_change_key_case($values);
        }

        return $values;
    }
}
