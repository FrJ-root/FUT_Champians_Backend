<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="Dev" content="FrJ">
        <meta name="keywords" content="HTML, CSS, JS">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Application web de gestion d'équipe Ultimate Team pour EA FC 25, permettant aux utilisateurs de créer, personnaliser et gérer leurs formations tactiques et équipes de joueurs via une interface interactive.">
        <link rel="stylesheet" href="/My_FullStack_Project/Client/src/assets/styles/index.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>FUT Champions</title>
    </head>

    <body>

        <header>
            <div class="logo">
                <img src="/My_FullStack_Project/Client/src/assets/images/FUT_logo.png" alt>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Squad Builder</a></li>
                    <li><a href="#">Players</a></li>
                    <li><a href="#">Evolutions</a></li>
                    <li><a href="#">Objectives</a></li>
                    <li><a href="#">App</a></li>
                </ul>
            </div>
            <div class="socieux">
                <img src="/My_FullStack_Project/Client/src/assets/images/FUT_search.png" alt
                    style="width: 30px;">
                <img src="/My_FullStack_Project/Client/src/assets/images/FUT_X.png" alt
                    style="width: 30px;">
                <img src="/My_FullStack_Project/Client/src/assets/images/FUT_insta.png" alt
                    style="width: 30px;">
                <img src="/My_FullStack_Project/Client/src/assets/images/FUT_discord.png" alt
                    style="width: 30px;">
                <span style="color: white;">|</span>
                <div class="dashboard">
                        <a href="/My_FullStack_Project/Client/src/pages/dashbord.html"><h3 style="background-color: rgb(255, 0, 0); color:white; text-align: center; width: 100px; height: 30px; border-radius: 5px; font-size: 15px;">Admin</h3></a>
                </div>
            </div>
        </header>

        <div id="container">

            <div id="playerReserve">
            </div>

            <video autoplay muted loop id="myVideo">
                <source src="/My_FullStack_Project/Client/src/assets/images/FUT_gif_1_.mp4"
                    type="video/mp4">
            </video>

            <div class="content">

                <section class="squad-field">
                    <div class="field_card">
                        <div id="LCM" class="allCards" data-position="CM" style="position: relative;top:190px;left:140px;">
                        </div>
                        <div id="LW" class="allCards" data-position="LW" style="position: relative;bottom:10px;right:100px;">
                        </div>
                        <div id="ST" class="allCards" data-position="ST" style="position: relative;top:15px;right:80px;">
                        </div>
                        <div id="RW" class="allCards" data-position="RW" style="position: relative;bottom:10px;right:70px;">
                        </div>
                        <div id="LB" class="allCards" data-position="LB" style="position: relative;top:110px;right: 10px;">
                        </div>
                        <div id="CM" class="allCards" data-position="CM" style="position: relative;bottom:10px;left: 128px;">
                        </div>
                        <div id="RCM" class="allCards" data-position="CM" style="position: relative;bottom:40px;left: 110px;">
                        </div>
                        <div id="RB" class="allCards" data-position="RB" style="position: relative;top:110px;left: 45px;">
                        </div>
                        <div id="RCB" class="allCards" data-position="CB" style="position: relative;bottom:60px;left: 160px;">
                        </div>
                        <div id="GK" class="allCards" data-position="GK" style="position: relative;top:20px;left: 120px;">
                        </div>
                        <div id="LCB" class="allCards" data-position="CB" style="position: relative;bottom: 60px;left: 80px;">
                        </div>
                    </div>
                </section>

                <section class="Reserve-field">

                    <form id="player-form">
                        <div class="form border-b border-gray-900/10 pb-12">
                                    
                            <div class="nameArea sm:col-span-4">
                                    <label for="name" class="block text-sm/6 font-medium text-white mt-2 ml-2">-> Name</label>
                                    <div class="form-name mt-2" style="width: 320px; margin-left: 15px;padding-bottom: 20px;">
                                        <div class="flex rounded-md bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="text" name="name" id="nameR" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                        </div>
                                    </div>
                            </div>

                            <hr class="border-gray-600 my-6">

                            <div class="PicArea col-span-full flex items-center space-x-10">
                                <div>
                                    <label for="pictureURL" class="block text-sm font-medium text-white ml-2 mb-7">
                                        -> Photo
                                    </label>
                                    <div class="ml-4 mb-7">
                                        <input 
                                            id="pictureURL" 
                                            name="pictureURL" 
                                            type="url" 
                                            class="rounded-md text-gray-800 px-4 py-2 w-full border border-gray-300" 
                                            placeholder="Enter image URL" 
                                            required 
                                        >
                                    </div>
                                </div>
                                <div id="picturePreview" class="w-24 h-24 rounded-lg border border-dashed flex items-center justify-center bg-gray-100 text-gray-400 mt-2" style="margin-right:35px; width: 100px;">
                                    <span class="text-sm">No photo</span>
                                </div>
                            </div>

                            <hr class="border-gray-600 my-6">
                            
                            <div class="positionArea sm:col-span-3">
                                <label for="position" class="block text-sm/6 font-medium text-white mt-2 ml-2">-> Position</label>
                                <div class="mt-2">
                                    <select id="positionR" name="position" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6 ml-4">
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
                                    <label for="Nationality" class="block text-sm/6 font-medium text-white mt-2 ml-2">-> Nationality</label>
                                    <div class="mt-2">
                                        <select id="Nationality" name="Nationality" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6 ml-4">
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
                                    <label for="flagURL" class="block text-sm font-medium text-white ml-2 mb-7">
                                        -> Flag
                                    </label>
                                    <div class="ml-4 mb-7">
                                        <input 
                                            id="flagURL" 
                                            name="flagURL" 
                                            type="url" 
                                            class="rounded-md text-gray-800 px-4 py-2 w-full border border-gray-300" 
                                            placeholder="Enter image URL" 
                                            required 
                                        >
                                    </div>
                                </div>
                                <div id="flagPreview" class="w-24 h-24 rounded-lg border border-dashed flex items-center justify-center bg-gray-100 text-gray-400 mt-2" style="margin-right:35px; width: 100px;">
                                    <span class="text-sm">No photo</span>
                                </div>
                            </div>

                            <hr class="border-gray-600 my-6">

                            <div class="clubArea sm:col-span-4">
                                <label for="name" class="block text-sm/6 font-medium text-white mt-2 ml-2">-> Club</label>
                                <div class="mt-2" style="width: 320px; margin-left: 15px;padding-bottom: 20px;">
                                    <div class="flex rounded-md bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="club" id="club" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                    </div>
                                </div>
                            </div>

                            <hr class="border-gray-600 my-6">

                            <div class="playerPointsArea mt-10">

                                <div class="sm:col-span-3">
                                    <label for="Rating"
                                        class="block text-sm/6 font-medium text-white">Rating</label>
                                    <div class="mt-2">
                                        <input type="number" name="Rating"
                                            id="Rating" min="1" max="100" required
                                            class="block bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-white focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 w-14">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="Diving"
                                        class="block text-sm/6 font-medium text-white">Pace</label>
                                    <div class="mt-2">
                                        <input type="number" name="Pace"
                                            id="Pace" min="1" max="100" required
                                            class="block bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm w-14 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="Handling"
                                        class="block text-sm/6 font-medium text-white">Shooting</label>
                                    <div class="mt-2">
                                        <input type="number" name="Shooting"
                                            id="Shooting" min="1" max="100" required
                                            class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="Kicking"
                                        class="block text-sm/6 font-medium text-white">Passing</label>
                                    <div class="mt-2">
                                        <input type="number" name="Passing"
                                            id="Passing" min="1" max="100" required
                                            class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm/6 font-medium text-white">Dribbling</label>
                                    <div class="mt-2">
                                        <input type="number" name="Dribbling"
                                            id="Dribbling" min="1" max="100" required
                                            class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm/6 font-medium text-white">Defending</label>
                                    <div class="mt-2">
                                        <input type="number" name="Defending"
                                            id="Defending" min="1" max="100" required
                                            class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm/6 font-medium text-white">Physical</label>
                                    <div class="mt-2">
                                        <input type="number" name="Physical"
                                            id="Physical"
                                            class="block w-14 bg-gray-100 text-gray-900 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="1" max="100" required>
                                    </div>
                                </div>

                            </div>

                            <hr class="border-gray-600 my-8">

                            <div class="submitArea h-3 mb-5">
                                <button type="button" class="btn rounded-full text-white border w-36 h-12" onclick="validateForm()">add player</button>
                            </div>
                        </div>
                    </form>

                </section>

            </div>

            <div id="placement">
            </div>

            <div id="editFormContainer" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); z-index: 1000;">
                <form id="editForm">
                    <label>
                     -> Name:
                        <input type="text" id="editName" />
                    </label>
                    <label>
                       -> Photo:
                        <input type="url" id="editPhoto" />
                    </label>
                    <label>
                       -> Position:
                        <input type="text" id="editPosition" />
                    </label>
                    <label>
                        -> Nationality:
                         <input type="number" id="editNationality" />
                     </label>
                    <label>
                       -> Flag:
                        <input type="url" id="editFlag" />
                    </label>
                    <label>
                        -> Club:
                         <input type="text" id="editClub" />
                     </label>
                    <label>
                       -> Rating:
                        <input type="number" id="editRating" />
                    </label>
                    <label>
                        -> Pace:
                         <input type="number" id="editPace" />
                     </label>
                     <label>
                        -> Shooting:
                         <input type="number" id="editShooting" />
                     </label>
                     <label>
                        -> Passing:
                         <input type="number" id="editPassing" />
                     </label>
                     <label>
                        -> Dribbling:
                         <input type="number" id="editDribbling" />
                     </label>
                     <label>
                        -> Defending:
                         <input type="number" id="editDefending" />
                     </label>
                     <label>
                        -> Physical:
                         <input type="number" id="editPhysical" />
                     </label>
                    <button type="button" id="saveEditButton" style="margin-top: 20px;">Save</button>
                    <button type="button" id="cancelEditButton" style="margin-top: 20px;">Cancel</button>
                </form>
            </div>  
            
            <div id="AddPlayerSucces" class="hidden fixed inset-0 flex items-center justify-center bg-black/50 w-full h-36" style="z-index: 1000;">
                <div class="bg-white text-green-600 text-center p-6 rounded-md shadow-lg">
                    <p class="font-bold text-lg">Player added successfully ^_^</p>
                </div>
            </div>       

        </div>

        <footer>
            <div class="container-footer">
                <div class="EAFC25">
                    <h2>EA FC 25</h2>
                    <ul>
                        <li><a href="#">Players</a></li>
                        <li><a href="#">Evolutions</a></li>
                        <li><a href="#">Squad Builder</a></li>
                        <li><a href="#">SBC</a></li>
                    </ul>
                </div>
                <div class="trackers">
                    <h2>Trackers</h2>
                    <ul>
                        <li><a href="#">Live Hub</a></li>
                        <li><a href="#">RTTK Tracker</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">TOTS Live Trackers</a></li>
                    </ul>
                </div>
                <div class="tools">
                    <h2>Tools</h2>
                    <ul>
                        <li><a href="#">Live Upgrade Hub</a></li>
                        <li><a href="#">Card Creator</a></li>
                        <li><a href="#">Player Pools</a></li>
                        <li><a href="#">Cheapest by Rating</a></li>
                    </ul>
                </div>
                <div class="misc">
                    <h2>Misc</h2>
                    <ul>
                        <li><a href="#">Player Library</a></li>
                        <li><a href="#"><img
                                    src="https://assets.fut.gg/frontend/site-images/site/download-apple.webp"
                                    alt="iOS" style="width: 120px;"></a></li>
                        <li><a href="#"><img
                                    src="https://assets.fut.gg/frontend/site-images/site/download-google.webp"
                                    alt="Android"
                                    style="width: 120px;"></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="/My_FullStack_Project/Client/src/index.js"></script>

    </body>
</html>