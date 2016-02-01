<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

class Nabeatsu
{
    /**
     * @var int
     */ 
    private $maxNum;
    
    /**
     * コンストラクタ
     * 
     * @param int $maxNum 
     */
    public function __construct($maxNum)
    {
        $this->maxNum = $maxNum;
    }
    
    
    /**
     * カウントアップ
     */ 
    public function countUp(){
        for ($i = 1; $i <= $this->maxNum; $i ++) {
            echo $i;
     
            if ($i % 3 == 0) {
                echo '!';
            }
           echo PHP_EOL;
        }
    }
}

$nabeatsu1 = new Nabeatsu(10);
$nabeatsu2 = new Nabeatsu(20);
$nabeatsu3 = new Nabeatsu(30);

$nabeatsu1->countUp();
$nabeatsu2->countUp();
$nabeatsu3->countUp();

?>
