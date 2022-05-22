<?php
function sum($num1,$num2){
    $sum = $num1 + $num2;
  return $sum;
}

function diff($num1,$num2){
    $diff = $num1 - $num2;
  return $diff;
}

function mult($num1,$num2){
    $mult = $num1 * $num2;
  return $mult;
}

function div($num1,$num2){
    $div = $num1 / $num2;
  return $div;
}

print(sum(10,2))."<br/>";
print(diff(10,2));"<br/>";
print(mult(10,2));"<br/>";
print(div(10,2));"<br/>";

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


