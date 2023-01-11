<?php
session_start();
@print "Setting cookie" . ++$_SESSION["j"] . "<br>;";
setcookie("testcookie", "cookie " . $_SESSION["j"]);
if (isset($_COOKIE["testcookie"])) {
    print "Testcookie received: " . $_COOKIE["testcookie"];
}
?>;