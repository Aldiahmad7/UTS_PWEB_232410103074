document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    if (!menuBtn || !menu) return;

    menuBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        menu.classList.toggle('hidden');
    });

    document.addEventListener('click', function(e) {
        if (!menu.classList.contains('hidden') &&
            !menu.contains(e.target) &&
            !menuBtn.contains(e.target)) {
            menu.classList.add('hidden');
        }
    });

    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) menu.classList.add('hidden');
    });
});
