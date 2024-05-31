document.getElementById('openModal').addEventListener('click', function() {
    document.getElementById('modals').style.display = 'block';
});

document.getElementById('openContactsModal').addEventListener('click', function() {
    document.getElementById('modalsContacts').style.display = 'block';
});

document.getElementById('openModalFooter').addEventListener('click', function() {
    console.log('openModalFooter');
    document.getElementById('modalsFooter').style.display = 'block';
});

document.getElementById('modals').addEventListener('click', function(event) {
    if (event.target === this) {
        document.getElementById('modals').style.display = 'none';
    }
});

document.getElementById('modalsContacts').addEventListener('click', function(event) {
    if (event.target === this) {
        document.getElementById('modalsContacts').style.display = 'none';
    }
});

document.getElementById('modalsFooter').addEventListener('click', function(event) {
    if (event.target === this) {
        document.getElementById('modalsFooter').style.display = 'none';
    }
});

// window.addEventListener('click', function(event) {
//     if (event.target == document.getElementById('modals')) {
//         document.getElementById('modals').style.display = 'none';
//     }
// });
