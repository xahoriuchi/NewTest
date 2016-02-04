<?php

/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2016/02/04
 * Time: 15:20
 */
interface RuleInterface
{
    /**
     * アホかどうかをチェックして返す
     * @param int $num
     * @return bool
     */
    public function isAho($num);
}
