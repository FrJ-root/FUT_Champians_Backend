<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "fut_champians");

$dbconnect = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$dbconnect) die("Ooops! Faild");
// else echo"Yeesssss";

?>