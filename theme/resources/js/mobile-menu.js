export function initMobileMenu() {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('menu-open-icon');
    const closeIcon = document.getElementById('menu-close-icon');

    if (menuButton && mobileMenu) {
        function closeMenu() {
            mobileMenu.classList.add('hidden');
            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

            menuButton.setAttribute('aria-expanded', 'false');
        }

        menuButton.addEventListener('click', () => {
            const isOpen = menuButton.getAttribute('aria-expanded') === 'true';

            mobileMenu.classList.toggle('hidden', isOpen);
            openIcon.classList.toggle('hidden', !isOpen);
            closeIcon.classList.toggle('hidden', isOpen);

            menuButton.setAttribute('aria-expanded', String(!isOpen));
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1309) {
                closeMenu();
            }
        });
    }
}