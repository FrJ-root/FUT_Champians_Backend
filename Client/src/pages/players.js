const playersSection = document.getElementById('players');
const togglePlayersLink = document.getElementById('toggle-players');

togglePlayersLink.addEventListener('click', (event) => {
    event.preventDefault();
    playersSection.classList.toggle('hidden');
});