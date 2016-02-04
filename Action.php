<?php

/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2016/02/04
 * Time: 15:35
 */
class Action implements ActionInterface
{

    public function actAsAho($num)
    {
        echo $num. '!' . PHP_EOL;

    }

    public function actAsNormal($num)
    {
        echo $num .PHP_EOL;
    }
}