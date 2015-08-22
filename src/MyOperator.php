<?php
namespace liopic;

class MyOperator
{
    public function doAnd($param1, $param2)
    {
        if ($param1) {
            if ($param2) {
                return true;
            }
        }
        return false;
    }

    public function biggerThan5($number)
    {
        if ($number > 5) {
            return true;
        }
        return false;
    }
}
