const playersNenber = JSON.parse(localStorage.getItem('players')) || [];
const players = JSON.parse(localStorage.getItem('players')) || [];
let playerReserve = document.getElementById("playerReserve");
const urlJson = "../../My_Backend/package.json"

fetch(urlJson)
.then(response => response.json())
.then(res=>{
    const data = res.players;
    let playerReserve = '';
    data.forEach(player=>{
        playerReserve+=`<div id="card" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 500px;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            background-image: url(/My_Frontend/src/assets/images/Borde1.png);
                            background-size: 100%;
                            background-repeat: no-repeat;
                            color: white;
                            font-size: 10px;
                            text-align: center;
                            font-family: sans-serif;margin-top:10px">
                            <p>${player.position}</p>
                            <img src="${player.photo}" alt="" style="width: 60px;margin-top:16px" class="md:w-32 lg:w-48">
                            <div class="playerName" style="color: white;font-size: 10px;text-align: center;font-family: sans-serif;font-size: 6px;display: flex;flex-direction: column;
                            justify-content: center;">
                                <p style="margin-top:5px;margin-bottom: 25px;font-size: 13px;">${player.name}</p>
                                <img src="${player.flag}" alt="" style="width: 30px; position: relative; left: 60px;" class="md:w-32 lg:w-48">
                                <div class="properTitle" style="margin-top: 2px;font-size: 6px; width: 150px;display: flex;justify-content: space-evenly;">
                                    <span>RAT</span>
                                    <span>PAC</span>
                                    <span>SHO</span>
                                    <span>PAS</span>
                                    <span>DRI</span>
                                    <span>DEF</span>
                                    <span>PHY</span>
                                </div>
                                <div class="properNum" style="width: 150px;
                                display: flex;
                                justify-content: space-evenly;">
                                    <span>${player.rating}</span>
                                    <span>${player.pace}</span>
                                    <span>${player.shooting}</span>
                                    <span>${player.passing}</span>
                                    <span>${player.dribbling}</span>
                                    <span>${player.defending}</span>
                                    <span>${player.physical}</span>
                                </div>
                            </div>
                        </div>`;
    })
    document.getElementById('playerReserve').innerHTML=playerReserve;
})
 


// ____________validation_______________




function validateForm() {
    const errorMessages = document.querySelectorAll('.error');
    errorMessages.forEach((msg) => msg.remove());
    const name = document.getElementById('nameR').value.trim();
    const pictureURL = document.getElementById('pictureURL').value.trim();
    const position = document.getElementById('positionR').value.trim();
    const nationality = document.getElementById('Nationality').value.trim();
    const flagURL = document.getElementById('flagURL').value.trim();
    const club = document.getElementById('club').value.trim();
    const rating = document.getElementById('Rating').value.trim();
    const pace = document.getElementById('Pace').value.trim();
    const shooting = document.getElementById('Shooting').value.trim();
    const passing = document.getElementById('Passing').value.trim();
    const dribbling = document.getElementById('Dribbling').value.trim();
    const defending = document.getElementById('Defending').value.trim();
    const physical = document.getElementById('Physical').value.trim();
    let isValid = true;
    if (!name) {
        displayError('nameR', 'Oooops!');
        isValid = false;
    }
    if (!pictureURL || !isValidURL(pictureURL)) {
        displayError('pictureURL', 'Oooops! Photo URL not Valid');
        isValid = false;
    }
    if (!position) {
        displayError('positionR', 'Oooops!');
        isValid = false;
    }
    if (!nationality) {
        displayError('Nationality', 'Oooops!');
        isValid = false;
    }
    if (!flagURL || !isValidURL(flagURL)) {
        displayError('flagURL', 'Oooops! Flag URL not Valid');
        isValid = false;
    }
    if (!club) {
        displayError('club', 'Oooops!');
        isValid = false;
    }
    if (!rating || rating < 1 || rating > 100) {
        displayError('Rating', 'Oooops! 1 <= Rating <= 100');
        isValid = false;
    }
    if (!pace || pace < 1 || pace > 100) {
        displayError('Pace', 'Oooops! 1 <= Pace <= 100');
        isValid = false;
    }
    if (!shooting || shooting < 1 || shooting > 100) {
        displayError('Shooting', 'Oooops! 1 <= Shooting <= 100');
        isValid = false;
    }
    if (!passing || passing < 1 || passing > 100) {
        displayError('Passing', 'Oooops! 1 <= Passing <= 100');
        isValid = false;
    }
    if (!dribbling || dribbling < 1 || dribbling > 100) {
        displayError('Dribbling', 'Oooops! 1 <= Dribbling <= 100');
        isValid = false;
    }
    if (!defending || defending < 1 || defending > 100) {
        displayError('Defending', 'Oooops! 1 <= Defending <= 100');
        isValid = false;
    }
    if (!physical || physical < 1 || physical > 100) {
        displayError('Physical', 'Oooops! 1 <= Physical <= 100');
        isValid = false;
    }
    if (isValid) {
        addToLocal();
        AddPlayerToggle(true);
        setTimeout(() => {
            AddPlayerToggle(false);
        }, 3000);
    }
}
function isValidURL(url) {
    const regex = /^(http|https|ftp):\/\/[^ "]+$/;
    return regex.test(url);
}
function displayError(inputId, message) {
    const inputField = document.getElementById(inputId);
    const errorMessage = document.createElement('div');
    errorMessage.textContent = message;
    errorMessage.classList.add('text-red-500', 'error');
    inputField.parentElement.appendChild(errorMessage);
}




// -----------------validation IMG-------------------




function updateImagePreview(inputId, previewId) {
    const input = document.getElementById(inputId);
    const previewDiv = document.getElementById(previewId);
    input.addEventListener('input', () => {
        const imageUrl = input.value;
        previewDiv.innerHTML = '';
        if (imageUrl) {
            const img = document.createElement('img');
            img.src = imageUrl;
            img.alt = 'Preview Image';
            img.style.width = '100%';
            img.style.height = '100%';
            img.style.objectFit = 'cover';
            previewDiv.appendChild(img);
        } else {
            previewDiv.innerHTML = '<span class="text-sm">No photo</span>';
        }
    });
}
updateImagePreview('pictureURL', 'picturePreview');
updateImagePreview('flagURL', 'flagPreview');




// ---------------Add Player----------------




function addToLocal(){
    const player = {
        name: document.getElementById('nameR').value,
        photo: document.getElementById('pictureURL').value,
        position: document.getElementById('positionR').value,
        nationality: document.getElementById('Nationality').value,
        flag: document.getElementById('flagURL').value,
        club: document.getElementById('club').value,
        rating: document.getElementById('Rating').value,
        pace: document.getElementById('Pace').value,
        shooting: document.getElementById('Shooting').value,
        passing: document.getElementById('Passing').value,
        dribbling: document.getElementById('Dribbling').value,
        defending: document.getElementById('Defending').value,
        physical: document.getElementById('Physical').value
    };
    playersNenber.push(player)
localStorage.setItem('players', JSON.stringify(playersNenber));
getFromLocal();
}
getFromLocal();
function getFromLocal() {
    const placementDiv = document.getElementById('placement'); 
    placementDiv.innerHTML=''
    playersNenber.forEach((player) => {
        placementDiv.innerHTML += `<div id="drag" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 160px;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            background-image: url(/My_Frontend/src/assets/images/Borde1.png);
                            background-size: 100%;
                            background-repeat: no-repeat;
                            color: white;
                            font-size: 10px;
                            text-align: center;
                            font-family: sans-serif;margin-top: 3px;">
                            <p>${player.position}</p>
                            <img src="${player.photo}" alt="" style="width: 60px;margin-top:16px" class="md:w-32 lg:w-48">
                            <div class="playerName" style="color: white;font-size: 10px;text-align: center;font-family: sans-serif;font-size: 6px;display: flex;flex-direction: column;
                            justify-content: center;">
                                <p style="margin-top:5px;margin-bottom: 35px;font-size: 13px;">${player.name}</p>
                                <img src="${player.flag}" alt="" style="width: 30px; position: relative; left: 60px;" class="md:w-32 lg:w-48">
                                <div class="properTitle" style="margin-top: 2px;font-size: 6px; width: 150px;display: flex;justify-content: space-evenly;">
                                    <span>RAT</span>
                                    <span>PAC</span>
                                    <span>SHO</span>
                                    <span>PAS</span>
                                    <span>DRI</span>
                                    <span>DEF</span>
                                    <span>PHY</span>
                                </div>
                                <div class="properNum" style="width: 150px;
                                display: flex;
                                justify-content: space-evenly;">
                                    <span>${player.rating}</span>
                                    <span>${player.pace}</span>
                                    <span>${player.shooting}</span>
                                    <span>${player.passing}</span>
                                    <span>${player.dribbling}</span>
                                    <span>${player.defending}</span>
                                <span>${player.physical}</span>
                                </div>
                            </div>
                            <div style="">
                            <button class="edit-button" style="margin-top: 10px; padding: 5px 10px; background-color: #4caf50; color: white; border: none; border-radius: 5px; cursor: pointer;" data-player-id="${player.name}">
                                Edit
                            </button>
                            <button class="delete-button" style="margin-top: 5px; padding: 5px 10px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;" data-player-id="${player.name}">
                                Delete
                            </button>
                            </div>
                        </div>`;
                        document.querySelector(`.edit-button[data-player-id="${player.name}"]`).addEventListener('click', () => {
                            openEditForm(player);
                        });
                        document.querySelector(`.delete-button[data-player-id="${player.name}"]`).addEventListener('click', () => {
                            deletePlayer(player.name);
                        });
                    });
}


function counterPlayers(){
    const players = document.querySelector("#placement");
     let arr = [players.length];
}
console.log(counterPlayers());




// -------------Drag & Drop---------------




function allowDrop(ev) {
    ev.preventDefault();
}
function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}
function drop(ev) {
    ev.preventDefault();
    let data = ev.dataTransfer.getData("text");
    let draggedElement = document.getElementById(data);
    let targetElement = ev.target;
    let targetCoord = targetElement.getBoundingClientRect();
    draggedElement.style.position = "relative";
    draggedElement.style.top = `${targetCoord.top}`;
    draggedElement.style.left = `${targetCoord.left}`;
    draggedElement.style.width = "160px";
    targetElement.parentNode.replaceChild(draggedElement, targetElement);
}
function dragDisplayMessage(message) {
    const messageBox = document.createElement("div");
    messageBox.innerText = message;
    messageBox.style.position = "fixed";
    messageBox.style.top = "20px";
    messageBox.style.right = "20px";
    messageBox.style.backgroundColor = "red";
    messageBox.style.color = "white";
    messageBox.style.padding = "10px 20px";
    messageBox.style.borderRadius = "5px";
    messageBox.style.zIndex = "1000";
    document.body.appendChild(messageBox);
    setTimeout(() => {
        document.body.removeChild(messageBox);
    }, 3000);
}




// // -----------Edit card player-----------




function openEditForm(player) {
    const editFormContainer = document.getElementById('editFormContainer');
    editFormContainer.style.display = 'block';
    document.getElementById('editName').value = player.name;
    document.getElementById('editPhoto').value = player.photo;
    document.getElementById('editPosition').value = player.position;
    document.getElementById('editNationality').value = player.nationality;
    document.getElementById('editFlag').value = player.flag;
    document.getElementById('editClub').value = player.club;
    document.getElementById('editRating').value = player.rating;
    document.getElementById('editPace').value = player.pace;
    document.getElementById('editShooting').value = player.shooting;
    document.getElementById('editPassing').value = player.passing;
    document.getElementById('editDribbling').value = player.dribbling;
    document.getElementById('editDefending').value = player.defending;
    document.getElementById('editPhysical').value = player.physical;
    document.getElementById('saveEditButton').onclick = () => saveEditedPlayer(player.name);
    document.getElementById('cancelEditButton').onclick = () => {
        editFormContainer.style.display = 'none';
    };
}
function saveEditedPlayer(playerName) {
    const playerIndex = players.findIndex((p) => p.name === playerName);
    if (playerIndex !== -1) {
        players[playerIndex] = {
            ...players[playerIndex],
            name: document.getElementById('editName').value,
            photo: document.getElementById('editPhoto').value,
            position: document.getElementById('editPosition').value,
            nationality: document.getElementById('editNationality').value,
            flag: document.getElementById('editFlag').value,
            club: document.getElementById('editClub').value,
            rating: document.getElementById('editRating').value,
            pace: document.getElementById('editPace').value,
            shooting: document.getElementById('editShooting').value,
            passing: document.getElementById('editPassing').value,
            dribbling: document.getElementById('editDribbling').value,
            defending: document.getElementById('editDefending').value,
            physical: document.getElementById('editPhysical').value,
        };
        localStorage.setItem('players', JSON.stringify(players));
        document.getElementById('editFormContainer').style.display = 'none';
        editDisplayMessage("Player Edited Succes ^_-");
        setTimeout(()=>{
            location.reload();
        },2000);
        renderPlayers();
    }
}
function renderPlayers() {
    const container = document.getElementById('playerContainer');
    container.innerHTML = '';
}




// ---------------Delete card player------------------




function deletePlayer(index) {
    const players = JSON.parse(localStorage.getItem('players')) || [];
    players.splice(index, 1);
    localStorage.setItem('players', JSON.stringify(players));
    deleteDisplayMessage("Player deleted successfully ^_-");
    setTimeout(()=>{
        location.reload();
    }, 2000);
    renderPlayers();
}



// --------------------Toggle/Message----------------------




function AddPlayerToggle(show) {
    const Toggle = document.getElementById('AddPlayerSucces');
    if (show) {
        Toggle.classList.remove('hidden');
    } else {
        Toggle.classList.add('hidden');
    }
}
function deleteDisplayMessage(message) {
    const messageBox = document.createElement("div");
    messageBox.innerText = message;
    messageBox.style.position = "fixed";
    messageBox.style.top = "20px";
    messageBox.style.right = "20px";
    messageBox.style.backgroundColor = "red";
    messageBox.style.color = "white";
    messageBox.style.padding = "10px 20px";
    messageBox.style.borderRadius = "5px";
    messageBox.style.zIndex = "1000";
    document.body.appendChild(messageBox);
    setTimeout(() => {
        document.body.removeChild(messageBox);
    }, 3000);
}
function editDisplayMessage(message) {
    const messageBox = document.createElement("div");
    messageBox.innerText = message;
    messageBox.style.position = "fixed";
    messageBox.style.top = "20px";
    messageBox.style.right = "20px";
    messageBox.style.backgroundColor = "green";
    messageBox.style.color = "white";
    messageBox.style.padding = "10px 20px";
    messageBox.style.borderRadius = "5px";
    messageBox.style.zIndex = "1000";
    document.body.appendChild(messageBox);
    setTimeout(() => {
        document.body.removeChild(messageBox);
    }, 3000);
}