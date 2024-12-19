const playersSection = document.getElementById('players');
const togglePlayersLink = document.getElementById('toggle-players');

togglePlayersLink.addEventListener('click', (event) => {
    event.preventDefault();
    playersSection.classList.toggle('hidden');
});
//--------------
document.querySelectorAll('tr').forEach(row => {
    row.addEventListener('mousemove', (e) => {
        const icons = row.querySelector('.flex');
        if (icons) {
            icons.style.position = 'fixed';
            icons.style.left = `${e.pageX + 10}px`;
            icons.style.top = `${e.pageY}px`;
        }
    });
    row.addEventListener('mouseleave', () => {
        const icons = row.querySelector('.flex');
        if (icons) {
            icons.style.position = 'absolute';
        }
    });
});
