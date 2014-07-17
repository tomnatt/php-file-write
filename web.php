<?php

echo "<p>hi</p>";
echo exec("php -f script.php > /dev/null &");
echo "<p>bye</p>";

?>