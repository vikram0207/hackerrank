<?php
/**
 * ACM ICPC Team Coding Challange
 * https://www.hackerrank.com/challenges/acm-icpc-team
 * 
 * @author Vikram Singh <me@vikramsingh.co.in>
 */

/**
 * fillJar
 * 
 https://www.hackerrank.com/challenges/filling-jars/submissions/code/11238597
 * @param int $n number of rows
 * @param int $m number of columns or Jars
 * @param array $a array of integers
 * @return the integer that occurs once
 */
function fillJar($n, $m, $array) {

    foreach ($array as $key => $value) {
        //echo $money . '+ ((abs(' . $value[0] . ' -  ' . $value[1] . ') + 1) * ' . $value[2] . ' ) ' . PHP_EOL;
        $money = $money + ((abs($value[0] - $value[1]) + 1) * $value[2]);
        //echo 'Money : ' . $money . PHP_EOL;
    }
    //echo 'Money : ' . $money . ' : Number ' . $m . PHP_EOL;
    $money = floor($money / $m);
    return $money;
}

$__fp = fopen("php://stdin", "r");
$_a = fgets($__fp);
$arr = split(' ', $_a);
for ($i = 1; $i <= $arr[1]; $i++) {
    //fscanf($__fp, "%d", $_a_cnt);
    $mArr[] = split(' ', fgets($__fp));
}

$res = fillJar($arr[1], $arr[0], $mArr);

echo $res;
?>
