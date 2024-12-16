<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $position = $_POST['position'];
    $nationality = $_POST['nationality'];
    $club = $_POST['club'];
    $rating = $_POST['rating'];
    
    $sql = "INSERT INTO players (name, photo, position, nationality, club, rating) VALUES ('$name', '$photo', '$position', '$nationality', '$club', '$rating')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New player added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
