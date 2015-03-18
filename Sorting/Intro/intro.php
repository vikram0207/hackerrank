<?php
/**
 * Sorting Intro Coding Challange
 * https://www.hackerrank.com/challenges/tutorial-intro
 * 
 * @author Vikram Singh <me@vikramsingh.co.in>
 */

/**
 * fillJar
 * 
 * https://www.hackerrank.com/challenges/tutorial-intro/submissions/code/11238807
 * @param int $v Value which need to search in $array
 * @param array $a array of integers
 * @return key index of value
 */
function getKey($v, $array) {
    return array_search($v, $array);
}
    
$_fp = fopen("php://stdin", "r");
fscanf($__fp, "%d", $_a_cnt);
$n = fgets($_fp);
$k = fgets($_fp);
$n  = str_replace("\n", "", $n );//To remove weird new line problem
$n  = str_replace("\r", "", $n );//To remove weird new line problem
$array = split(' ', fgets($_fp));
echo getKey($n, $array);
?>