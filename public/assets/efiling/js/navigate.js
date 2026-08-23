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

    // Handle submenu for "File Income Tax Forms"
    var fileIncomeTaxLink = document.querySelector('.fileIncomeTaxLink');
    var fileIncomeTaxSubmenu = document.querySelector('.fileIncomeTaxSubmenu');

    fileIncomeTaxLink.addEventListener('click', function (event) {
        event.stopPropagation();
        event.preventDefault(); 
        toggleSubMenu(fileIncomeTaxSubmenu);
    });

    function toggleSubMenu(submenu) {
        submenu.style.display = (submenu.style.display === 'flex') ? 'none' : 'flex';
    }

    function closeSubmenu(submenu) {
        submenu.style.display = 'none';
    }
});