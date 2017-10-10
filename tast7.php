<?php
echo "<table border='1px'>";
$a = array();
$m = 1;
for ($i=1;$i<=10;$i++) {
    echo "<tr>";
    for($j=1;$j<=10;$j++) {
        echo "<td>";
        $a[$i][$j]=$i*$j;
        echo $a[$i][$j];
        $m++;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";