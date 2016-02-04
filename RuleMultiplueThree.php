<?php

/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2016/02/04
 * Time: 15:52
 */
class RuleMultiplueThree implements RuleInterface
{

    /**
     * @param int $num
     * @return bool
     */
    public function isAho($num)
    {
        if ($num % 3 == 0) {
            return true;
        } else {
            return false;
        }
    }


}