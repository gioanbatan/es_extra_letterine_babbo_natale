<?php

namespace App\Functions;

class Helpers
{
    public static function checkboxConverter($data, $key)
    {
        if (isset($data[$key]) && $data[$key] == 'on') {
            return true;
        }
        return false;
    }
}
