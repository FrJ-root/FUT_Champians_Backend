<?php

include "/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php";

if (isset($_GET['id'])) {
    $player_id = $_GET['id'];

    $sql = "DELETE FROM player WHERE id = ?";
    
    if ($stmt = mysqli_prepare($dbconnect, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $player_id);
        
        if (mysqli_stmt_execute($stmt)) {
            header("Location: /path_to_player_list_page.php?success=1");
        } else {
            echo "Error deleting player: " . mysqli_error($dbconnect);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the statement: " . mysqli_error($dbconnect);
    }
} else {
    echo "Player ID is missing.";
}

mysqli_close($dbconnect);
?>
