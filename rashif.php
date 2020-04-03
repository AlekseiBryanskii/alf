<?php
$str1 = '->11гe+20∆∆A+4µcњil->5•Ћ®†Ѓ p+5f-7Ќ¬f pro+10g+1悦ra->58->44m+1*m+2a喜er!';
$str = '->11re+20@@A+4@c@il->5.@@@@ p+5f-7k@f pro+10g+1@ra->58->44m+1*m+2a@er!';
$rez = '';
$par = '';
echo $str;
$i = 0;
function param($str)
{
    global $i;
    $par = '';
    while (is_numeric($str[$i])) {
        $par = $par . $str[$i];
        $i++;
    }
    return $par;
}
while ($i < strlen($str)) {
    if ($str[$i] == '-' && $str[$i + 1] == '>') {
            $i += 2;
            $par = param($str,$i);
            $r = $str[$i];
            if ($str[$par] != '+' && $str[$par] != '-' && $str[$par] != '>')
            {
                $rez = $rez . $str[$par];
                $i = $par + 1;
            }
    }
    if ($str[$i] == '>' && $str[$i-1] == '-') {
        $i += 1;
        $par = param($str,$i);
        if ($str[$par] != '+' && $str[$par] != '-' && $str[$par] != '>')
        {
            $rez = $rez . $str[$par];
            $i = $par + 1;
        }
    }
    if ($str[$i] == '+') {
        $i++;
        $par = param($str,$i);
        $i = $par + $i;
        if ($str[$i] != '+' && $str[$i] != '-' && $str[$i] != '>')
        {
            $rez = $rez . $str[$i];
            $i++;
        }
    }
    if ($str[$i] == '-' && $str[$i+1] != '>') {
        $i++;
        $par = param($str,$i);
        $i = $par - $i;
        if ($str[$i] != '+' && $str[$i] != '-' && $str[$i] != '>')
        {
            $rez = $rez . $str[$i];
            $i++;
        }
    }
    if ($str[$i] != '+' && $str[$i] != '-' && $str[$i] != '>') {
        $rez = $rez . $str[$i];
        $i++;
    }
}
echo  '<br>Расшифрованная строка: ' . $rez;
?>
