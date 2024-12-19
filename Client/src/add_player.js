document.addEventListener('DOMContentLoaded', function () {
    const addPlayerBtn = document.getElementById('addPlayerBtn');
    const addPlayerSection = document.getElementById('add-player');
    const popupOverlay = document.createElement('div');
    popupOverlay.id = 'popupOverlay';
    document.body.appendChild(popupOverlay);

    const closeBtn = document.createElement('button');
    closeBtn.id = 'popupCloseBtn';
    closeBtn.innerHTML = 'X';
    addPlayerSection.appendChild(closeBtn);

    addPlayerBtn.addEventListener('click', function () {
        popupOverlay.style.display = 'block';
        addPlayerSection.style.display = 'block';
    });

    popupOverlay.addEventListener('click', function () {
        popupOverlay.style.display = 'none';
        addPlayerSection.style.display = 'none';
    });

    closeBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        popupOverlay.style.display = 'none';
        addPlayerSection.style.display = 'none';
    });
});
