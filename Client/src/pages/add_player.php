<?php
include '/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php';

$name = $_POST['name'];
$photo = $_POST['photo'];
$position = $_POST['position'];
$nationality = $_POST['nationality'];
$flag = $_POST['flag'];
$club = $_POST['club'];
$logo = $_POST['logo'];

$sql_nationality = "INSERT INTO nationality (nationality, flag) VALUES ('$nationality', '$flag')";
$dbconnect->query($sql_nationality);
$nationalityID = $dbconnect->insert_id;

$sql_club = "INSERT INTO club (club, logo) VALUES ('$club', '$logo')";
$dbconnect->query($sql_club);
$clubID = $dbconnect->insert_id;

$sql_player = "INSERT INTO player (name, photo, position) 
               VALUES ('$name', '$photo', '$position')";

if ($dbconnect->query($sql_player) === TRUE) {
    $playerID = $dbconnect->insert_id;
        if ($position == 'GK') {
        $diving = $_POST['diving'];
        $handling = $_POST['handling'];
        $kicking = $_POST['kicking'];
        $reflexes = $_POST['reflexes'];
        $speed = $_POST['speed'];
        $positioning = $_POST['positioning'];

        $sql_gk = "INSERT INTO gk_player (diving, handling, kicking, reflexes, speed, positioning) 
                   VALUES ($diving, $handling, $kicking, $reflexes, $speed, $positioning)";
        $dbconnect->query($sql_gk);
    } else {
        $pace = $_POST['pace'];
        $shooting = $_POST['shooting'];
        $passing = $_POST['passing'];
        $dribbling = $_POST['dribbling'];
        $defending = $_POST['defending'];
        $physical = $_POST['physical'];

        $sql_normal_player = "INSERT INTO normal_player (pace, shooting, passing, dribbling, defending, physical) 
                              VALUES ($pace, $shooting, $passing, $dribbling, $defending, $physical)";
        $dbconnect->query($sql_normal_player);
    }

    echo "Nice Add ^_0!";
} else {
    echo "Error: " . $sql_player . "<br>" . $dbconnect->error;
}

$dbconnect->close();
?>