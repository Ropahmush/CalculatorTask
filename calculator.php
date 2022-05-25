<?php
function sum(float ...$nums): float{
  $sum = 0; 
  foreach($nums as $num){
   $sum = ($num+$sum); 
  }
  return $sum;
}
function diff(float ...$nums): float{
    $diff = 0;
    foreach($nums as $num){
    $diff = $num - $diff;
    }
  return $diff;
}

function mult(float ...$nums):float{
   $mult = 0;
   $mult++;
   foreach($nums as $num){
       $mult = $num*$mult;
   }
        return $mult;
}

function div(float ...$nums):float{
    $div = 0;
    $div++;
    foreach($nums as $num){
        $div = $num/$div;
    }
  return $div;
}

print(sum(10,2))."<br/>";
print(diff(10,2))."<br/>";
print(mult(10,2))."<br/>";
print(div(10,2))."<br/>";

function calculator2(string $userinput): float{
   
  echo($userinput);
  preg_match_all('!\d+!',$userinput,$matches);
  
  print_r($matches);
  
preg_match_all('!\D+!', $userinput,$operators);
  
print_r($operators);

return(0);
}

echo calculator2('3+2*3');

