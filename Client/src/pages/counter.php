<?php
include "/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php";

$sql = "SELECT COUNT(*) AS conteur FROM player";
$result = $dbconnect->query($sql);

if ($result === false) {
    echo "Query failed: " . $dbconnect->error;
} else {
    $totalPlayers = 0;

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalPlayers = $row['conteur'];
    }

    $dbconnect->close();
    echo $totalPlayers;
}
?>
