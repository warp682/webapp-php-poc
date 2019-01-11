<?php
echo "<--- 3c75 poc --->";
echo "Headers: ";
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
?>
