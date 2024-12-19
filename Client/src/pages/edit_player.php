<?php

include "/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php";

if (isset($_GET['id'])) {
    $player_id = $_GET['id'];
    
    $sql = "SELECT * FROM player WHERE id = ?";
    if ($stmt = mysqli_prepare($dbconnect, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $player_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $photo = $row['photo'];
            $position = $row['position'];
            $status = $row['status'];
            $nationality = $row['nationality'];
            $flag = $row['flag'];
            $club = $row['club'];
            $logo = $row['logo'];
        } else {
            echo "Player not found.";
            exit;
        }

        mysqli_stmt_close($stmt);
    }
} else {
    echo "Player ID is missing.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $position = $_POST['position'];
    $status = $_POST['status'];
    $nationality = $_POST['nationality'];
    $flag = $_POST['flag'];
    $club = $_POST['club'];
    $logo = $_POST['logo'];

    $sql = "UPDATE player SET name = ?, photo = ?, position = ?, status = ?, nationality = ?, flag = ?, club = ?, logo = ? WHERE id = ?";
    if ($stmt = mysqli_prepare($dbconnect, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssssssi", $name, $photo, $position, $status, $nationality, $flag, $club, $logo, $player_id);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: /path_to_player_list_page.php?success=2");
        } else {
            echo "Error updating player: " . mysqli_error($dbconnect);
        }
        mysqli_stmt_close($stmt);
    }
}

mysqli_close($dbconnect);
?>

<form method="POST" action="edit_player.php?id=<?php echo $player_id; ?>">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>" required>

    <label for="photo">Photo</label>
    <input type="url" name="photo" value="<?php echo $photo; ?>" required>

    <label for="position">Position</label>
    <input type="text" name="position" value="<?php echo $position; ?>" required>

    <label for="status">Status</label>
    <input type="text" name="status" value="<?php echo $status; ?>" required>

    <label for="nationality">Nationality</label>
    <input type="text" name="nationality" value="<?php echo $nationality; ?>" required>

    <label for="flag">Flag</label>
    <input type="url" name="flag" value="<?php echo $flag; ?>" required>

    <label for="club">Club</label>
    <input type="text" name="club" value="<?php echo $club; ?>" required>

    <label for="logo">Logo</label>
    <input type="url" name="logo" value="<?php echo $logo; ?>" required>

    <button type="submit">Update Player</button>
</form>
