<?php
echo "<h2><--- 3c75 poc ---></h2><br>";
echo "<h3>Headers:</h3> <br>";
foreach (getallheaders() as $name => $value) {
    echo "<b>$name</b>: $value<br>";
}
?>
