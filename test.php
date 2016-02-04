<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once 'Nabeatsu.php';
require_once 'RuleMultiplueThree.php';
require_once 'RuleMultipleNine.php';
require_once 'Action.php';

$ruleMulipeThree = new RuleMultiplueThree();
$ruleMultipleNine = new RuleMultipleNine();
$action = new Action();



$nabeatsu1 = new Nabeatsu(10, $ruleMulipeThree, $action);
$nabeatsu2 = new Nabeatsu(20, $ruleMultipleNine, $action);
$nabeatsu3 = new Nabeatsu(30, $ruleMulipeThree, $action);

$nabeatsu1->countUp();
$nabeatsu2->countUp();
$nabeatsu3->countUp();

