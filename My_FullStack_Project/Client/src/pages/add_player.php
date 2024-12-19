<?php

include "/xampp/htdocs/FUT_Champians_Backend/My_FullStack_Project/Server/dbconnect.php";

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$photo = mysqli_real_escape_string($conn,$_REQUEST['photo']);
$position = mysqli_real_escape_string($conn,$_REQUEST['position']);
$status = mysqli_real_escape_string($conn, $_REQUEST['status']);
$nationality = mysqli_real_escape_string($conn,$_REQUEST['nationality']);
$flag = mysqli_real_escape_string($conn,$_REQUEST['flag']);
$club = mysqli_real_escape_string($conn,$_REQUEST['club']);
$logo = mysqli_real_escape_string($conn,$_REQUEST['logo']);
$pace = mysqli_real_escape_string($conn,$_REQUEST['pace']);
$shooting = mysqli_real_escape_string($conn,$_REQUEST['shooting']);
$passing = mysqli_real_escape_string($conn,$_REQUEST['passing']);
$dribbling = mysqli_real_escape_string($conn,$_REQUEST['dribbling']);
$defending = mysqli_real_escape_string($conn,$_REQUEST['defending']);
$physical = mysqli_real_escape_string($conn,$_REQUEST['physical']);
$diving = mysqli_real_escape_string($conn,$_REQUEST['diving']);
$handling = mysqli_real_escape_string($conn,$_REQUEST['handling']);
$kicking = mysqli_real_escape_string($conn,$_REQUEST['kicking']);
$reflexes = mysqli_real_escape_string($conn,$_REQUEST['reflexes']);
$speed = mysqli_real_escape_string($conn,$_REQUEST['speed']);
$positioning = mysqli_real_escape_string($conn,$_REQUEST['positioning']);

$sql = "INSERT INTO player(name, photo, position, status) VALUES ('$name','$photo','$position','$status')";
$sql2 = "INSERT INTO nationality(nationality, flag) VALUES ('$nationality','$flag')";
$sql3 = "INSERT INTO club(club, logo) VALUES ('$club','$logo')";
$sql4 = "INSERT INTO gk_player(diving,handling,kicking,reflexes,speed,positioning) VALUES ('$diving','$handling','$kicking','$reflexes','$speed','$positioning')";
$sql5 = "INSERT INTO normal_player(pace,shooting,passing,dribbling,defending,physical) VALUES ('$pace','$shooting','$passing','$dribbling','$defending','$physical')";

if(mysqli_query($conn,$sql && $sql2 && $sql3 && $sql4 && $sql5)){
    echo "Added successfuly.";
} else {
    echo "Error!";
mysqli_error($conn);
}

mysqli_close($conn);

?>
