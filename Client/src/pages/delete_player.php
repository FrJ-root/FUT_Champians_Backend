<?php
include "/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $player_id = mysqli_real_escape_string($dbconnect, $_GET['id']);
    
    $sql = "SELECT id, nationalityID, clubID FROM player WHERE id = '$player_id' LIMIT 1";
    $result = mysqli_query($dbconnect, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nationalityID = $row['nationalityID'];
        $clubID = $row['clubID'];

        $delete_player = "DELETE FROM player WHERE id = '$player_id'";

        if (mysqli_query($dbconnect, $delete_player)) {
            $delete_nationality = "DELETE FROM nationality WHERE id = '$nationalityID' AND NOT EXISTS (SELECT 1 FROM player WHERE nationalityID = '$nationalityID')";
            $delete_club = "DELETE FROM club WHERE id = '$clubID' AND NOT EXISTS (SELECT 1 FROM player WHERE clubID = '$clubID')";

            mysqli_query($dbconnect, $delete_nationality);
            mysqli_query($dbconnect, $delete_club);

            // echo "<script>setTimeout(() => {
            //        alert('Player deleted successfully!'); window.location.href='players.php'; 
            //        }, "3000");</script>";
        } else {
            echo "Error deleting player: " . mysqli_error($dbconnect);
        }
    } else {
        echo "Player not found!";
    }
} else {
    echo "Invalid request!";
}

mysqli_close($dbconnect);
?>