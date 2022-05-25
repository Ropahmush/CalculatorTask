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

function calculator(float $num1,string $opp,float $num2,): float{
  if (!($opp == '+' or $opp == '-' or $opp == '*' or $opp == '/')){
     return 0;
   } 
   switch ($opp){
     case '+': return sum($num1,$num2);
     case '-': return diff($num1,$num2); 
     case '*': return mult($num1,$num2);
     case '/': return div($num1,$num2);
   }
}
echo calculator(1,"+",2)."<br/>";
echo calculator(1,"-",2)."<br/>";
echo calculator(1,"*",2)."<br/>";
echo calculator(1,"/",2)."<br/>";


function calculator2(float $num1,string $opp,float $num2,):float{
  if (!in_array($opp, ['+','-','*','/'])){
    return 0;
  }
  $funct_name=['+' => 'sum',
                    '-' => 'diff',
                    '*' => 'mult',
                    '/' => 'div'];
 return $funct_name[$opp]($num1,$num2);   
}

echo calculator2(1,'+',2);

?>


