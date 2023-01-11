<?php
$value = current($_SERVER);
do {
    print key($_SERVER) .": $value<br>";
} while ($value = next($_SERVER))
?>;