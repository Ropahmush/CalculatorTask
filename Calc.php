<?php
function execute(string $text):void
 {
    echo ($text);
}
  execute("param3t3r");


function repeatContent(int $count = 1):void
{
    for($i = 0; $i <= $count; $i++) {
     execute("me");
    }
 }
 repeatContent();
 repeatContent(5);

?>