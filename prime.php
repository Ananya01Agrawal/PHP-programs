<?php
function checkprime($num)
{
$c = 0;
for ($den = 1 ; $den <= $num ; $den++)
{
    if ($num % $den == 0)
        $c = $c + 1;
}
if ($c == 2)
    return True;
else 
    return False;
}

for ($j = 2 ; $j <= 200 ; $j++)
{
    $a = checkprime($j);
    if ($a==True)
        echo $j."<br>";
}
?>


