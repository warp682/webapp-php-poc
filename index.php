<?php
echo "<--- 3c75 poc ---><br>\n";
echo "You subdomain is vulnerable to subdomain takeower attack!<br>\n";
echo "What is it? <a href="https://www.hackerone.com/blog/Guide-Subdomain-Takeovers">Read here</a>"
echo "<table>";
foreach (getallheaders() as $name => $value) {
    echo "<tr><td>$name</td><td>$value</td></tr>";
}
echo "</table>";
?>
