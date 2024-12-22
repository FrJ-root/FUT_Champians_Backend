function toggleModal() {
    const modal = document.getElementById('add-player');
    modal.classList.toggle('hidden');
}

document.getElementById("position").addEventListener("change", function () {
const nrPlayerSection = document.getElementById("nr-player-section");
const gkSection = document.getElementById("gk-section");
nrPlayerSection.style.display = "none";
gkSection.style.display = "none";
if (this.value === "GK") {
gkSection.style.display = "flex";
} else {
nrPlayerSection.style.display = "flex";
}
});

function closeForm() {
document.getElementById('player-form').reset();
const modal = document.getElementById('add-player');
modal.classList.add('hidden');
}

function previewImage(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    input.addEventListener('input', () => {
        if (input.value) {
            preview.innerHTML = `<img src="${input.value}" class="w-full h-full object-cover rounded-md" alt="Preview">`;
        } else {
            preview.innerHTML = '<span class="text-sm">No image</span>';
        }
    });
}
previewImage('photo', 'PhotoPreview');
previewImage('flag', 'FlagPreview');
previewImage('logo', 'logoPreview');