// assets/js/script.js

document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const navbar = document.getElementById('main-navbar');

    // Fungsi untuk membuka/menutup menu mobile
    function toggleMenu() {
        const isOpen = !mobileMenuOverlay.classList.contains('hidden');
        
        if (isOpen) {
            // Tutup menu
            mobileMenuOverlay.classList.add('opacity-0');
            setTimeout(() => {
                mobileMenuOverlay.classList.add('hidden');
            }, 300); // Sesuaikan dengan durasi transisi CSS
            document.body.style.overflow = 'auto'; // Aktifkan scroll kembali
        } else {
            // Buka menu
            mobileMenuOverlay.classList.remove('hidden');
            // Sedikit delay agar transisi opacity berjalan
            setTimeout(() => {
                 mobileMenuOverlay.classList.remove('opacity-0');
            }, 10);
            document.body.style.overflow = 'hidden'; // Matikan scroll body saat menu terbuka
        }
    }

    if (mobileMenuButton && mobileMenuOverlay && mobileMenuClose) {
        mobileMenuButton.addEventListener('click', toggleMenu);
        mobileMenuClose.addEventListener('click', toggleMenu);
    }

    // Efek Navbar saat di-scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white/80', 'backdrop-blur-lg', 'shadow-sm');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-white/80', 'backdrop-blur-lg', 'shadow-sm');
        }
    });
});
