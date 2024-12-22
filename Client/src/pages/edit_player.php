<?php
include "/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php";

if(isset($_GET['id'])) {
    $player_id = $_GET['id'];
    
    $query = "SELECT * FROM players WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':id' => $player_id]);
    $player = $stmt->fetch();
    
    if (!$player) {
        echo "Player not found!";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $nationality = $_POST['nationality'];
    $photo = $_POST['photo'];
    $flag = $_POST['flag'];
    $club = $_POST['club'];
    $logo = $_POST['logo'];

=    $query = "UPDATE players SET name = :name, position = :position, nationality = :nationality, 
              photo = :photo, flag = :flag, club = :club, logo = :logo WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':name' => $name,
        ':position' => $position,
        ':nationality' => $nationality,
        ':photo' => $photo,
        ':flag' => $flag,
        ':club' => $club,
        ':logo' => $logo,
        ':id' => $player_id
    ]);

    header("Location: players.php");
    exit;
}
?>


<main class="flex-1 p-6">
            <section id="edit-player" class="mb-6">
                <h2 class="text-2xl font-bold mb-4">Edit Player</h2>
                <form action="edit_player.php?id=<?php echo $player['id']; ?>" method="POST" class="space-y-4">
                    <div class="mb-4">
                        <label for="name" class="block text-white">Name</label>
                        <input type="text" name="name" id="name" class="w-full p-2 border" value="<?php echo $player['name']; ?>" required />
                    </div>
                    <div class="mb-4">
                        <label for="position" class="block text-white">Position</label>
                        <input type="text" name="position" id="position" class="w-full p-2 border" value="<?php echo $player['position']; ?>" required />
                    </div>
                    <div class="mb-4">
                        <label for="nationality" class="block text-white">Nationality</label>
                        <input type="text" name="nationality" id="nationality" class="w-full p-2 border" value="<?php echo $player['nationality']; ?>" required />
                    </div>
                    <div class="mb-4">
                        <label for="photo" class="block text-white">Photo URL</label>
                        <input type="url" name="photo" id="photo" class="w-full p-2 border" value="<?php echo $player['photo']; ?>" required />
                    </div>
                    <div class="mb-4">
                        <label for="flag" class="block text-white">Flag URL</label>
                        <input type="url" name="flag" id="flag" class="w-full p-2 border" value="<?php echo $player['flag']; ?>" required />
                    </div>
                    <div class="mb-4">
                        <label for="club" class="block text-white">Club</label>
                        <input type="text" name="club" id="club" class="w-full p-2 border" value="<?php echo $player['club']; ?>" required />
                    </div>
                    <div class="mb-4">
                        <label for="logo" class="block text-white">Logo URL</label>
                        <input type="url" name="logo" id="logo" class="w-full p-2 border" value="<?php echo $player['logo']; ?>" required />
                    </div>
                    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded">Save Changes</button>
                </form>
            </section>
        </main>
    </div>

    <script>
        function toggleModal() {
            const modal = document.getElementById('add-player');
            modal.classList.toggle('hidden');
        }
    </script>
</body>

</html>
