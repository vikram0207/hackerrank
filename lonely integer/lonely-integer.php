<?php
    /**
     * Lonely Integer Coding Challange
     * https://www.hackerrank.com/challenges/lonely-integer
     * 
     * @author Vikram Singh <me@vikramsingh.co.in>
     */

    /**
     * loneyinteger
     * 
     * https://www.hackerrank.com/challenges/lonely-integer/submissions/code/11237629
     * @param array $a array of integers
     * @return the integer that occurs once
     */
    function lonelyinteger( $a) {
        $arrSingle = array();
        $arrDouble = array();
        
        foreach ($a as $k => $v) {
            //echo 'Value: '.$v.PHP_EOL;
            if(array_key_exists($v, $arrSingle)) {
                unset($arrSingle[$v]);
                $arrDouble[$v] = $v;
                //echo 'Unsetting from single and adding in double: '.$v . PHP_EOL;
            } else {
                $arrSingle[$v] = $v;
            }
        }
        print_r($arrSingle);
        print_r($arrDouble);
        return key($arrSingle);

    }


    $__fp = fopen("php://stdin", "r");

    fscanf($__fp, "%d", $_a_cnt);
    $_a = fgets($__fp);
    $_a = split(' ',$_a);
    $res = lonelyinteger($_a);
    echo $res;

?>
