document.addEventListener('DOMContentLoaded', function () {
    var dropDown = document.querySelector('.dropDown');
    var submenu = document.querySelector('.submenu');

    dropDown.addEventListener('click', function (event) {
    event.stopPropagation();
    toggleSubMenu(submenu);
    });

    // Close submenu if the user clicks outside of it
    document.addEventListener('click', function () {
    closeSubmenu(submenu);
    });

    function toggleSubMenu(submenu) {
    submenu.style.display = (submenu.style.display === 'flex') ? 'none' : 'flex';
    }

    function closeSubmenu(submenu) {
    submenu.style.display = 'none';
    }
});