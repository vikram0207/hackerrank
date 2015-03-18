<?php
/**
 * ACM ICPC Team Coding Challange
 * https://www.hackerrank.com/challenges/acm-icpc-team
 * 
 * @author Vikram Singh <me@vikramsingh.co.in>
 */

/**
 * fillJar
 * https://www.hackerrank.com/challenges/maxsubarray/submissions/code/2960750
 * @param int $n number of rows
 * @param int $m number of columns or Jars
 * @param array $a array of integers
 * @return the integer that occurs once
 */


//int nonconti(int a[],int size)
//{   
//    int max_sum = 0,temp=0,neg_max=-9999;
//    
//    for(int i=0;i<size;i++)
//    {   
//        if ( a[i] < 0 )
//          {  temp++;
//             if( a[i] > neg_max )
//                 neg_max = a[i];
//          }
//        else
//            max_sum += max(0,a[i]);
//    }
//    if( temp == size )
//        return neg_max;
//    return max_sum;
//}

function nonconti($lenght,$array) {
    $pos=0;$tmp=0;$nMax='-9999';
    for($i=0;$i<=$lenght;$i++) {
        if($array[$i] < 0) { //Negative Values
            $tmp++;
            if($array[$i] > $nMax)
                $nMax = $array[$i];
            
         } else {
             $pos += $array[$i];
         }
    }
    if($tmp == $lenght) return $nMax;
    return $pos;
}

//int conti(int a[],int size)
//{
//    int max_so_far = a[0],curr_max = a[0];
//    
//    for(int i=1;i<size;i++)
//    {
//        curr_max = max(a[i],curr_max+a[i]);
//        max_so_far = max(curr_max,max_so_far);
//    }
//    return max_so_far;
//}


function conti($lenght,$array) {
    $pos=0;
    $cur_max =  $array[0];
    $max_sofar =  $array[0];
    
    for($i=0;$i<$lenght;$i++) {
        if(isset($array[$i -1])) {
            
            $pos  += ($array[$i] < 0 && $array[$i -1] < abs($array[$i])) ? 0 : $array[$i];
        } else {
            $cur_max += ($array[$i]> $cur_max ) ? $array[$i] : 0 ;
            $pos  = ($cur_max > $pos) ? $cur_max : $pos;
        }
    }
    
            
    return $pos;
}

 
//int main() {
//    int T;
//    cin>>T;
//    while(T--)
//    {   int size,output1=0,output2=0,*a;
//        cin>>size;
//        a = new int[size];
//        for(int i=0;i<size;i++)
//                cin>>a[i];
//        output1 = conti(a,size);
//        output2 = nonconti(a,size);
//        cout<<output1<<" "<<output2<<"\n";
//    }
//    
//    return 0;
//}




$__fp = fopen("php://stdin", "r");
$_a = fgets($__fp);
for ($i = 1; $i <= $_a; $i++) {
    $lenght = fgets($__fp);
    $array = split(' ', fgets($__fp));
    echo conti($lenght, $array) . ' ';
    echo nonconti($lenght, $array).PHP_EOL;
}
?>
