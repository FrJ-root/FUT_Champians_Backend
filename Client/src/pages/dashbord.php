<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/styles/add_player.css">
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
                        <a href="#dashboard" id="toggle-players" class="flex items-center space-x-2">
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
                            <span id="addPlayerBtn">Add Player</span>
                        </a>                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-6">

            <section id="dashboard" class="mb-6">
               <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white p-4 shadow rounded-md">
                        <h3 class="text-lg font-bold">Total Players</h3>
                        <p class="text-2xl mt-2"><?php include "/xampp/htdocs/FUT_Champians_Backend/Client/src/pages/counter.php" ?></p>
                    </div>
                </div>
            </section>

            <section id="players" class="mb-6">
                <h2 class="text-2xl font-bold mb-4">Players</h2>
                <table class="table-auto w-full bg-white rounded-lg shadow">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Photo</th>
                            <th class="px-4 py-2">Posit</th>
                            <th class="px-4 py-2">Statu</th>
                            <th class="px-4 py-2">Natio</th>
                            <th class="px-4 py-2">Flag</th>
                            <th class="px-4 py-2">Club</th>
                            <th class="px-4 py-2">Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include "/xampp/htdocs/FUT_Champians_Backend/Client/src/pages/players.php"; ?>
                    </tbody>
                </table>
            </section>

            <section id="add-player" class="mb-10 hidden overflow-y-auto max-h-[600px] ">
                <h2 class="text-2xl font-bold mb-4">Add Player</h2>
                <form id="player-form" action="add_player.php" method="post">
                    <div class="form border-b border-gray-900/10 pb-12">

                        <div class="name sm:col-span-4">
                            <label for="name" class="block text-sm/6 font-medium text-black mt-2 ml-2">-> Name</label>
                            <div class="form-name mt-2" style="width: 320px; margin-left: 15px;padding-bottom: 20px;">
                                  <div class="flex rounded-md bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                      <input type="text" name="name" id="name"
                                          class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                  </div>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="photo col-span-full flex items-center space-x-10">
                                <div>
                                    <label for="photo" class="block text-sm font-medium text-black ml-2 mb-7">
                                        -> Photo
                                    </label>
                                    <div class="ml-4 mb-7">
                                        <input 
                                            id="photo" 
                                            name="photo" 
                                            type="url" 
                                            class="rounded-md text-gray-800 px-4 py-2 w-full border border-gray-300" 
                                            placeholder="Enter image URL" 
                                            required 
                                        >
                                    </div>
                                </div>
                                <div id="PhotoPreview" class="w-24 h-24 rounded-lg border border-dashed flex items-center justify-center bg-gray-100 text-gray-400 mt-2" style="margin-right:35px; width: 100px;">
                                    <span class="text-sm">No photo</span>
                                </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="position sm:col-span-3">
                            <label for="position" class="block text-sm/6 font-medium text-black mt-2 ml-2">->
                                Position</label>
                            <div class="mt-2">
                                <select id="position" name="position"
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

                        <div class="nationality sm:col-span-4">
                            <label for="nationality" class="block text-sm/6 font-medium text-black mt-2 ml-2">-> Name</label>
                            <div class="form-name mt-2" style="width: 320px; margin-left: 15px;padding-bottom: 20px;">
                                  <div class="flex rounded-md bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                      <input type="text" name="nationality" id="nationality"
                                          class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                  </div>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="flag col-span-full flex items-center space-x-10">
                                <div>
                                    <label for="flag" class="block text-sm font-medium text-black ml-2 mb-7">
                                        -> Flag
                                    </label>
                                    <div class="ml-4 mb-7">
                                        <input 
                                            id="flag" 
                                            name="flag" 
                                            type="url" 
                                            class="rounded-md text-gray-800 px-4 py-2 w-full border border-gray-300" 
                                            placeholder="Enter image URL" 
                                            required 
                                        >
                                    </div>
                                </div>
                                <div id="FlagPreview" class="w-24 h-24 rounded-lg border border-dashed flex items-center justify-center bg-gray-100 text-gray-400 mt-2" style="margin-right:35px; width: 100px;">
                                    <span class="text-sm">No Flag</span>
                                </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="club sm:col-span-4">
                            <label for="club" class="block text-sm/6 font-medium text-black mt-2 ml-2">-> Club</label>
                            <div class="mt-2" style="width: 320px; margin-left: 15px;padding-bottom: 20px;">
                                <div
                                    class="flex rounded-md bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="club" id="club"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="logo col-span-full flex items-center space-x-10">
                                <div>
                                    <label for="logo" class="block text-sm font-medium text-black ml-2 mb-7">
                                        -> Logo
                                    </label>
                                    <div class="ml-4 mb-7">
                                        <input 
                                            id="logo" 
                                            name="logo" 
                                            type="url" 
                                            class="rounded-md text-gray-800 px-4 py-2 w-full border border-gray-300" 
                                            placeholder="Enter image URL" 
                                            required 
                                        >
                                    </div>
                                </div>
                                <div id="FlagPreview" class="w-24 h-24 rounded-lg border border-dashed flex items-center justify-center bg-gray-100 text-gray-400 mt-2" style="margin-right:35px; width: 100px;">
                                    <span class="text-sm">No Logo</span>
                                </div>
                        </div>

                        <hr class="border-gray-600 my-6">

                        <div class="NR-player flex space-x-10 mt-10">

                            <div class="pace sm:col-span-3">
                                <label for="pace" class="block text-sm/6 font-medium text-black">Pace</label>
                                <div class="mt-2">
                                    <input type="number" name="pace" id="pace" min="1" max="100" required
                                        class="block bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm w-14 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="shooting sm:col-span-3">
                                <label for="shooting" class="block text-sm/6 font-medium text-black">Shooting</label>
                                <div class="mt-2">
                                    <input type="number" name="shooting" id="shooting" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="passing sm:col-span-3">
                                <label for="passing" class="block text-sm/6 font-medium text-black">Passing</label>
                                <div class="mt-2">
                                    <input type="number" name="passing" id="passing" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="dribbling sm:col-span-3">
                                <label for="dribbling" class="block text-sm/6 font-medium text-black">Dribbling</label>
                                <div class="mt-2">
                                    <input type="number" name="dribbling" id="dribbling" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="defending sm:col-span-3">
                                <label for="defending" class="block text-sm/6 font-medium text-black">Defending</label>
                                <div class="mt-2">
                                    <input type="number" name="defending" id="defending" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="physical sm:col-span-3">
                                <label for="first-name" class="block text-sm/6 font-medium text-black">Physical</label>
                                <div class="mt-2">
                                    <input type="number" name="physical" id="physical"
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                        min="1" max="100" required>
                                </div>
                            </div>

                        </div>

                        <div class="GOOL-Keeper flex space-x-10 mt-10">

                            <div class="diving sm:col-span-3">
                                <label for="diving" class="block text-sm/6 font-medium text-black">Pace</label>
                                <div class="mt-2">
                                    <input type="number" name="diving" id="diving" min="1" max="100" required
                                        class="block bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm w-14 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="handling sm:col-span-3">
                                <label for="handling" class="block text-sm/6 font-medium text-black">Shooting</label>
                                <div class="mt-2">
                                    <input type="number" name="handling" id="handling" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="kicking sm:col-span-3">
                                <label for="kicking" class="block text-sm/6 font-medium text-black">Passing</label>
                                <div class="mt-2">
                                    <input type="number" name="kicking" id="kicking" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="reflexes sm:col-span-3">
                                <label for="reflexes" class="block text-sm/6 font-medium text-black">Dribbling</label>
                                <div class="mt-2">
                                    <input type="number" name="reflexes" id="reflexes" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="speed sm:col-span-3">
                                <label for="speed" class="block text-sm/6 font-medium text-black">Defending</label>
                                <div class="mt-2">
                                    <input type="number" name="speed" id="speed" min="1" max="100" required
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="positioning sm:col-span-3">
                                <label for="positioning" class="block text-sm/6 font-medium text-black">Physical</label>
                                <div class="mt-2">
                                    <input type="number" name="positioning" id="positioning"
                                        class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                        min="1" max="100" required>
                                </div>
                            </div>

                        </div>

                        <div class="submit h-3 mb-5">
                            <button type="submit" class="btn rounded-full text-black border w-36 h-12">Submit</button>
                        </div>
                    </div>
                </form>
            </section>

        </main>
    </div>
    <script src="../add_player.js"></script>
</body>

</html>