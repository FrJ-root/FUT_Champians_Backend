<?php

if (!defined("HOSTNAME") && !defined("USERNAME") && !defined("PASSWORD") && !defined("DATABASE")) {
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "fut_champians");
}

$dbconnect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$dbconnect) {
    die("WTF!");
}
// else echo "Yeesssss";

?>
