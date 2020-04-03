<?php
function fibonacci($n)
{
    if ($n < 3)
    {
        return 1;
    }
    else
    {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$n = 1;
$sum = 0;

for ($i = 0; $i < 6; $i++)
{
    for ($j = 0; $j < 6; $j++)
    {
        $mas[$j][$i] = fibonacci($n);
        $n++;
    }
}

for ($i=0; $i<6; $i++)
{
    $sum += $mas[$i][5-$i];
}
echo '<pre>';
print_r($mas);
echo '</pre>';
echo $sum;
?>