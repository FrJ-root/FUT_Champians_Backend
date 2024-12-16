<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex min-h-screen">

        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4 text-center">
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            </div>
            <nav class="mt-6">
                <ul>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#dashboard" class="flex items-center space-x-2">
                            <span>🏠</span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#players" class="flex items-center space-x-2">
                            <span>👥</span>
                            <span>Players</span>
                        </a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#add-player" class="flex items-center space-x-2">
                            <span>➕</span>
                            <span>Add Player</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-6">

            <section id="dashboard" class="mb-6">
          <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 shadow rounded-md">
              <h3 class="text-lg font-bold">Total Players</h3>
              <p class="text-2xl mt-2">
        <?php
        include "C:/xampp/htdocs/FUT_Champians_Backend/My_FullStack_Project/Server/config.php";
        if (!$conn) {
            echo "Connection error!";
        } else {
            $query = "SELECT COUNT(*) AS total_players FROM players";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $data = mysqli_fetch_assoc($result);
                echo $data['total_players'];
            } else {
                echo "0";
            }
            mysqli_close($conn);
        }
        ?>
              </p>
            </div>
          </div>
            </section>

            <section id="players" class="mb-6">
                <h2 class="text-2xl font-bold mb-4">Players</h2>
                <table class="table-auto w-full bg-white rounded-lg shadow">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Photo</th>
                            <th class="px-4 py-2">Posit</th>
                            <th class="px-4 py-2">Statu</th>
                            <th class="px-4 py-2">Natio</th>
                            <th class="px-4 py-2">Flag</th>
                            <th class="px-4 py-2">Club</th>
                            <th class="px-4 py-2">Logo</th>
                            <th class="px-4 py-2">Rat</th>
                            <th class="px-4 py-2">Pace</th>
                            <th class="px-4 py-2">Shoot</th>
                            <th class="px-4 py-2">Pass</th>
                            <th class="px-4 py-2">Dribbl</th>
                            <th class="px-4 py-2">Def</th>
                            <th class="px-4 py-2">Phy</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
    include "/xampp/htdocs/FUT_Champians_Backend/My_FullStack_Project/Server/config.php";
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM player";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "
      <tr class='hover:bg-gray-100'>
        <td class='border px-4 py-2'>{$row['id']}</td>
        <td class='border px-4 py-2'>{$row['name']}</td>
        <td class='border px-4 py-2'>
          <img src='{$row['photo']}' alt='Photo' class='w-16 h-16 rounded-full'>
        </td>
        <td class='border px-4 py-2'>{$row['position']}</td>
        <td class='border px-4 py-2'>{$row['statu']}</td>
        <td class='border px-4 py-2 flex space-x-2'>
          <button class='bg-blue-500 hover:bg-blue-700 text-white px-4 py-1 rounded'>Edit</button>
          <button class='bg-red-500 hover:bg-red-700 text-white px-4 py-1 rounded'>Delete</button>
        </td>
      </tr>";
    }
  } else {
    echo "0 results";
  }
    ?>
                    </tbody>
                </table>
            </section>

            <section id="add-player" class="mb-6">
                <h2 class="text-2xl font-bold mb-4">Add Player</h2>
                <form id="player-form">
                    <div class="form border-b border-gray-900/10 pb-12">

                        <div class="nameArea sm:col-span-4">
                            <label for="name" class="block text-sm/6 font-medium text-black mt-2 ml-2">-> Name</label>
                            <div class="form-name mt-2" style="width: 320px; margin-left: 15px;padding-bottom: 20px;">
                                  <div class="flex rounded-md bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                      <input type="text" name="name" id="nameR"
                                          class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                  </div>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="PicArea col-span-full flex items-center space-x-10">
                            <div>
                                <label for="pictureURL" class="block text-sm font-medium text-black ml-2 mb-7">
                                    -> Photo
                                </label>
                                <div class="ml-4 mb-7">
                                    <input id="pictureURL" name="pictureURL" type="url"
                                        class="rounded-md text-gray-800 px-4 py-2 w-full border border-gray-300"
                                        placeholder="Enter image URL" required>
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="positionArea sm:col-span-3">
                            <label for="position" class="block text-sm/6 font-medium text-black mt-2 ml-2">->
                                Position</label>
                            <div class="mt-2">
                                <select id="positionR" name="position"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6 ml-4">
                                    <option value="">Select a position &#8595;</option>
                                    <option>GK</option>
                                    <option>CB</option>
                                    <option>RB</option>
                                    <option>LB</option>
                                    <option>CM</option>
                                    <option>RW</option>
                                    <option>ST</option>
                                    <option>LW</option>
                                </select>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="nationArea sm:col-span-3">
                            <label for="Nationality" class="block text-sm/6 font-medium text-black mt-2 ml-2">->
                                Nationality</label>
                            <div class="mt-2">
                                <select id="Nationality" name="Nationality"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6 ml-4">
                                    <option value="">Select a nationality &#8595;</option>
                                    <option>Morroco</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                    <option>Spain</option>
                                    <option>italy</option>
                                </select>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="flagArea col-span-full flex items-center space-x-10">
                            <div>
                                <label for="flagURL" class="block text-sm font-medium text-black ml-2 mb-7">
                                    -> Flag
                                </label>
                                <div class="ml-4 mb-7">
                                    <input id="flagURL" name="flagURL" type="url"
                                        class="rounded-md text-gray-800 px-4 py-2 w-full border border-gray-300"
                                        placeholder="Enter image URL" required>
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="clubArea sm:col-span-4">
                            <label for="name" class="block text-sm/6 font-medium text-black mt-2 ml-2">-> Club</label>
                            <div class="mt-2" style="width: 320px; margin-left: 15px;padding-bottom: 20px;">
                                <div
                                    class="flex rounded-md bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="club" id="club"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="flex space-x-10 playerPointsArea mt-10">

                            <div class="sm:col-span-3">
                                <label for="Rating" class="block text-sm/6 font-medium text-black">Rating</label>
                                <div class="mt-2">
                                    <input type="number" name="Rating" id="Rating" min="1" max="100" required
                                        class="block bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-white focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 w-14">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="Diving" class="block text-sm/6 font-medium text-black">Pace</label>
                                <div class="mt-2">
                                    <input type="number" name="Pace" id="Pace" min="1" max="100" required
                                        class="block bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm w-14 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="Handling" class="block text-sm/6 font-medium text-black">Shooting</label>
                                <div class="mt-2">
                                    <input type="number" name="Shooting" id="Shooting" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="Kicking" class="block text-sm/6 font-medium text-black">Passing</label>
                                <div class="mt-2">
                                    <input type="number" name="Passing" id="Passing" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm/6 font-medium text-black">Dribbling</label>
                                <div class="mt-2">
                                    <input type="number" name="Dribbling" id="Dribbling" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm/6 font-medium text-black">Defending</label>
                                <div class="mt-2">
                                    <input type="number" name="Defending" id="Defending" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm/6 font-medium text-black">Physical</label>
                                <div class="mt-2">
                                    <input type="number" name="Physical" id="Physical"
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                        min="1" max="100" required>
                                </div>
                            </div>

                        </div>

                        <div class="submitArea h-3 mb-5">
                            <button type="button" class="btn rounded-full text-black border w-36 h-12">add player</button>
                        </div>
                    </div>
                </form>
            </section>

        </main>
    </div>
</body>

</html>