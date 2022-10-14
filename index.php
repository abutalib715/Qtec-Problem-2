<?php

    $string = 'tadadattaetadadadafa';
    $pattern = 'dada';
    $str_length = strlen($string);
    $pat_length = strlen($pattern);
    $counter = 0;

    //Iterate over the given string
    for($i=0; $i <= $str_length-$pat_length; $i++){
      $mismatch = false;
      //Iterate over the given pattern
      for($j=0; $j < $pat_length; $j++){
          //If any character not matched set $mismatch 'true' and break the iteration
          if($string[$i+$j] != $pattern[$j]){
              $mismatch = true; break;
          }
      }
      //If pattern not mismatch increment the counter value
      if(!$mismatch) $counter++;
    }
    //Printing the result
    echo "The pattern ($pattern) appears in text ($string) <strong>$counter times </strong>.";die;
        
?>
