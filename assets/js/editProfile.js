let editProf = document.querySelector('.editProf');
let editProfModal = document.querySelector('.editProfileModal');
let shaodowBlast = document.querySelector('.eprofile .shadowOver')
let cancel3 = document.querySelector('.cancel3');
editProf.addEventListener('click', function () {
    editProfModal.style.display = 'block';
    shaodowBlast.style.display = 'block';
});

cancel3.addEventListener('click', function () {
    editProfModal.style.display = 'none';
    shaodowBlast.style.display = 'none';
});