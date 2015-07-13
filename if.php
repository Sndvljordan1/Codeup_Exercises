 <?php

 $a = 25;
 $b = 11;
 $c = '7';

 if ($a < $b) {
     // output the appropriate result
     echo "$a is less than $b\n";
 } else {
     // output the appropriate result
     echo "$b is greater than $a\n";
 }


 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 }else{
     // output the appropriate result
     echo "$b is less than or equal to $c\n";
 }

 if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c\n";
 }elseif ($b === $c) {
     // output the appropriate result
     echo "$b is identical to $c\n";
 }elseif ($b != $c) {
     echo "$b is not equal to $c\n";
 }elseif ($b !== $c) {
     echo "$b is not identical to $c\n";
 }

 ?>