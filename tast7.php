<?php
echo "<table border='1px'>";
$a = array();
$m = 1;
for ($i=1;$i<=10;$i++) {
    echo "<tr>";
    for($j=1;$j<=10;$j++) {
        echo "<td>";
        $a[$i][$j]=$i*$j;
        if ($i%2 == 0 and $j%2 == 0) {
            echo "(" .$a[$i][$j] .")";
        }       else echo "[" .$a[$i][$j] ."]";
        $m++;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";