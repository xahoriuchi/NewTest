<?php

require_once 'RuleInterface.php';
require_once 'ActionInterface.php';

class Nabeatsu
{
    /**
     * @var int
     */ 
    private $maxNum;

    /**
     * @var ActionInterface
     */
    private $action;

    /**
     * @var RuleInterface
     */
    private $rule;

    /**
     * コンストラクタ
     * 
     * @param int $maxNum 
     */
    public function __construct($maxNum, RuleInterface $rule, ActionInterface $action)
    {
        $this->maxNum = $maxNum;
        $this->rule = $rule;
        $this->action = $action;
    }
    
    
    /**
     * カウントアップ
     */ 
    public function countUp()
    {
        for ($i = 1; $i <= $this->maxNum; $i ++) {

            if ($this->rule->isAho($i)) {
                $this->action->actAsAho($i);
            } else {
                $this->action->actAsNormal($i);
            }
        }
    }

}

