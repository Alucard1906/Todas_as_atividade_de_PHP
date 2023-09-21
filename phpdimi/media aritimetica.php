<?php
$nota[0]=10;
$nota[1]=9;
$nota[2]=8;
$nota[3]=7;
$nota[4]=7;
$x=0;
$N_notas = count($nota)-1;
while ($x <= $N_notas)
{
@$N_somada +=$nota[$x];
$x++;
}
echo "A Média é nota: ".($N_somada/$N_notas);

?>
