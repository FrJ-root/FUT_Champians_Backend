<?php
include "/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php";

$name = mysqli_real_escape_string($dbconnect, $_POST['name']);
$photo = mysqli_real_escape_string($dbconnect, $_POST['photo']);
$position = mysqli_real_escape_string($dbconnect, $_POST['position']);
$nationality = mysqli_real_escape_string($dbconnect, $_POST['nationality']);
$flag= mysqli_real_escape_string($dbconnect, $_POST['flag']);
$club = mysqli_real_escape_string($dbconnect, $_POST['club']);
$logo = mysqli_real_escape_string($dbconnect, $_POST['logo']);
$pace = mysqli_real_escape_string($dbconnect, $_POST['pace']);
$shooting = mysqli_real_escape_string($dbconnect, $_POST['shooting']);
$passing = mysqli_real_escape_string($dbconnect, $_POST['passing']);
$dribbling = mysqli_real_escape_string($dbconnect, $_POST['dribbling']);
$defending = mysqli_real_escape_string($dbconnect, $_POST['defending']);
$physical = mysqli_real_escape_string($dbconnect, $_POST['physical']);
$diving = mysqli_real_escape_string($dbconnect, $_POST['diving']);
$handling = mysqli_real_escape_string($dbconnect, $_POST['handling']);
$kicking = mysqli_real_escape_string($dbconnect, $_POST['kicking']);
$reflexes = mysqli_real_escape_string($dbconnect, $_POST['reflexes']);
$speed = mysqli_real_escape_string($dbconnect, $_POST['speed']);
$positioning = mysqli_real_escape_string($dbconnect, $_POST['positioning']);

$sql1 = "INSERT INTO player(name, photo, position) VALUES ('$name', '$photo', '$position')";
$sql2 = "INSERT INTO nationality(nationality, flag) VALUES ('$nationality', '$flag')";
$sql3 = "INSERT INTO club(club, logo) VALUES ('$club', '$logo')";
$sql4 = "INSERT INTO normal_player(pace, shooting, passing, dribbling, defending, physical) VALUES ('$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical')";
$sql5 = "INSERT INTO gk_player(diving, handling, kicking, reflexes, speed, positioning) VALUES ('$diving', '$handling', '$kicking', '$reflexes', '$speed', '$positioning')";

if(mysqli_query($dbconnect, $sql1) && mysqli_query($dbconnect, $sql2) && mysqli_query($dbconnect, $sql3) && mysqli_query($dbconnect, $sql4) && mysqli_query($dbconnect, $sql5)) {
    echo "Nice Add ^_0";
} else {
    echo "Ooops! Couldn't execute the queries: " . mysqli_error($dbconnect);
}

mysqli_close($dbconnect);
?>