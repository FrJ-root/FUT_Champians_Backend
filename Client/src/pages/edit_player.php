<?php
include "/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php";

if (isset($_GET['id'])) {
    $player_id = intval($_GET['id']);

    $query = "
        SELECT p.*, n.nationality, n.flag, c.club, c.logo 
        FROM player p
        LEFT JOIN nationality n ON p.nationalityID = n.id
        LEFT JOIN club c ON p.clubID = c.id
        WHERE p.id = $player_id
    ";
    $result = $dbconnect->query($query);

    if ($result && $result->num_rows > 0) {
        $player = $result->fetch_assoc();
    } else {
        echo "Player not found!";
        exit;
    }
} else {
    echo "Invalid player ID!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $dbconnect->real_escape_string($_POST['name']);
    $position = $dbconnect->real_escape_string($_POST['position']);
    $nationalityID = intval($_POST['nationalityID']);
    $clubID = intval($_POST['clubID']);
    $photo = $dbconnect->real_escape_string($_POST['photo']);

    $update_query = "
        UPDATE player SET 
            name = '$name', 
            position = '$position', 
            nationalityID = $nationalityID, 
            clubID = $clubID, 
            photo = '$photo'
        WHERE id = $player_id
    ";

    if ($dbconnect->query($update_query)) {
        echo "<script>window.location.href = 'dashbord.php'</script>";
        exit;
    } else {
        echo "Error updating player: " . $dbconnect->error;
    }
}
$nationalities_result = $dbconnect->query("SELECT * FROM nationality");
$clubs_result = $dbconnect->query("SELECT * FROM club");
?>


<h2 class="text-2xl font-bold mb-4">Edit Player</h2>
<form action="edit_player.php?id=<?php echo $player['id']; ?>" method="POST" class="space-y-4">
    <div class="mb-4">
        <label for="name" class="block text-white">Name</label>
        <input type="text" name="name" id="name" class="w-full p-2 border"
            value="<?php echo htmlspecialchars($player['name'] ?? ''); ?>" required />
    </div>
    <div class="mb-4">
        <label for="position" class="block text-white">Position</label>
        <input type="text" name="position" id="position" class="w-full p-2 border"
            value="<?php echo htmlspecialchars($player['position'] ?? ''); ?>" required />
    </div>
    <div class="mb-4">
        <label for="nationalityID" class="block text-white">Nationality</label>
        <select name="nationalityID" id="nationalityID" class="w-full p-2 border" required>
            <?php while ($nationality = $nationalities_result->fetch_assoc()): ?>
            <option value="<?php echo $nationality['id']; ?>"
                <?php echo ($player['nationalityID'] == $nationality['id']) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($nationality['nationality']); ?>
            </option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="mb-4">
        <label for="clubID" class="block text-white">Club</label>
        <select name="clubID" id="clubID" class="w-full p-2 border" required>
            <?php while ($club = $clubs_result->fetch_assoc()): ?>
            <option value="<?php echo $club['id']; ?>"
                <?php echo ($player['clubID'] == $club['id']) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($club['club']); ?>
            </option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="mb-4">
        <label for="photo" class="block text-white">Photo URL</label>
        <input type="url" name="photo" id="photo" class="w-full p-2 border"
            value="<?php echo htmlspecialchars($player['photo'] ?? ''); ?>" required />
    </div>
    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded">Save Changes</button>
</form>