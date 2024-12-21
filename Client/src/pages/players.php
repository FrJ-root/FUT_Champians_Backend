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
            <td class='border px-4 py-2 flex justify-center items-center space-x-4'>
                <a href='edit_player.php?id={$row['name']}' class='text-blue-500 hover:text-blue-700 transition-transform duration-200 transform hover:scale-125 mt-4 mb-5'>
                    <i class='fas fa-edit text-lg shadow hover:shadow-lg'></i>
                </a>
                <a href='delete_player.php?id={$row['name']}' class='text-red-500 hover:text-red-700 transition-transform duration-200 transform hover:scale-125 mt-4 mb-5' onclick='return confirm(\"Are you sure you want to delete this player?\");'>
                    <i class='fas fa-trash text-lg shadow hover:shadow-lg'></i>
                </a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='9' class='text-center py-4'>No players found.</td></tr>";
}

?>
