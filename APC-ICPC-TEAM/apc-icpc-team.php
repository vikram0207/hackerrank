<?php
    /**
     * ACM ICPC Team Coding Challange
     * https://www.hackerrank.com/challenges/acm-icpc-team
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
    function lonelyinteger( $n, $m,$val ) {
        
        for($i=0;$i<$n;$i++){  
            for($j=$i+1;$j<$n;$j++)  
              {  
              $flag = 0;  
              $tproblem = 0;  
              for($k=0;$k<$m;$k++){  
                //int $x,$y;  
                $x = $val[$i][$k]-48;  
                $y = $val[$j][$k]-48;  
                //cout<<x<<"x";  
                if($x || $y){  
                  $tproblem ++;  
                }  
              }  
              if($tproblem == $problem){  
                $tteam++;  
              }  
              if($tproblem > $problem){  
                $problem = $tproblem;  
                $tteam= 1;  
              }  
            }  
          }      
          return array( 
              'team'    => $tteam,
              'problem' => $problem
                  );

    }


    $__fp = fopen("php://stdin", "r");
    $_a = fgets($__fp);
    $arr = split(' ',$_a);
    //print_r($arr[0]);exit;
    for($i=1;$i<=$arr[0];$i++) {
     //fscanf($__fp, "%d", $_a_cnt);
     $mArr[] =  split(' ',fgets($__fp));
    }
    //print_r($mArr);
    //exit;
    //fscanf($__fp, "%d", $_a_cnt);
    //$_a = fgets($__fp);
    //print_r($_a_cnt);exit;
    //$_a = split(' ',$_a);
    //print_r($_a);
    $res = lonelyinteger($row, $column, $mArr);
    
    echo $res['team'] . ' : ' . $res['problem'];
    exit('exit')

?>
