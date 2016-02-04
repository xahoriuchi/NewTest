<?php

/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2016/02/04
 * Time: 16:33
 */
class RuleMultipleNine implements RuleInterface
{

    /**
     * @param int $num
     * @return bool
     */
    public function isAho($num)
    {
        if ($num % 9 == 0) {
            return true;
        } else {
            return false;
        }
    }


}