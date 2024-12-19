<?php
include "/xampp/htdocs/FUT_Champians_Backend/Server/db_connect.php";

if (!$dbconnect) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, photo, position, status, nationality, flag, club, logo
FROM player
INNER JOIN nationality ON player.id = nationality.id
INNER JOIN club ON player.id = club.id
";

$result = mysqli_query($dbconnect, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($dbconnect));
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr class='hover:bg-gray-100'>
            <td class='border px-4 py-2'>{$row['name']}</td>
            <td class='border px-4 py-2'>
                <img src='{$row['photo']}' alt='Photo' class='w-16 h-16 rounded-full'>
            </td>
            <td class='border px-4 py-2'>{$row['position']}</td>
            <td class='border px-4 py-2'>{$row['status']}</td>
            <td class='border px-4 py-2'>{$row['nationality']}</td>
            <td class='border px-4 py-2'>
                <img src='{$row['flag']}' alt='Flag' class='w-8 h-8'>
            </td>
            <td class='border px-4 py-2'>{$row['club']}</td>
            <td class='border px-4 py-2'>
                <img src='{$row['logo']}' alt='Logo' class='w-16 h-16'>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='9' class='text-center py-4'>No players found.</td></tr>";
}
?>
