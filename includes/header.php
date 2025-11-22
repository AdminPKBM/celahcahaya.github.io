<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>PKBM Celah Cahaya</title>
    <meta name="description" content="Pusat Kegiatan Belajar Masyarakat Celah Cahaya. Membuka masa depan melalui pendidikan kesetaraan berkualitas.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            DEFAULT: '#F59E0B', // Amber yang hangat
                            dark: '#B45309',
                            light: '#FFFBEB', // Sangat terang untuk background
                        },
                        secondary: {
                            DEFAULT: '#1E293B', // Slate yang lebih dalam
                            muted: '#64748B',
                        }
                    },
                    boxShadow: {
                        'glass': '0 4px 30px rgba(0, 0, 0, 0.1)',
                    },
                    // Menambahkan animasi kustom untuk kesan modern
                    animation: {
                        'fade-in-up': 'fadeInUp 0.5s ease-out',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            /* Utilitas untuk efek kaca */
            .glass {
                @apply bg-white/70 backdrop-blur-lg border border-white/20 shadow-glass;
            }
        }
        /* Perbaikan agar scroll tidak loncat saat menu dibuka */
        body.menu-open {
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-secondary selection:bg-primary/20">

<nav id="main-navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass rounded-full px-6 py-3 flex justify-between items-center">
            
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="flex items-center gap-2 font-extrabold text-xl tracking-tight group">
                    <span class="text-2xl group-hover:rotate-12 transition-transform duration-300">☀️</span>
                    <span>Celah<span class="text-primary">Cahaya</span></span>
                </a>
            </div>
            
            <div class="hidden md:flex md:items-center md:space-x-1 text-sm font-semibold text-secondary/80">
                <a href="index.php" class="px-4 py-2 rounded-full hover:text-primary hover:bg-primary-light transition">Beranda</a>
                <a href="program.php" class="px-4 py-2 rounded-full hover:text-primary hover:bg-primary-light transition">Program</a>
                <a href="#" class="px-4 py-2 rounded-full hover:text-primary hover:bg-primary-light transition">Tentang</a>
                <a href="#" class="px-4 py-2 rounded-full hover:text-primary hover:bg-primary-light transition">Berita</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="kontak.php" class="hidden md:inline-flex px-6 py-2.5 bg-primary text-white rounded-full font-bold text-sm hover:bg-primary-dark transition shadow-lg shadow-primary/20 hover:shadow-primary/40 hover:-translate-y-0.5 relative overflow-hidden group">
                    <span class="relative z-10">Daftar Sekarang</span>
                    <div class="absolute inset-0 h-full w-full bg-white/20 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                </a>

                <button id="mobile-menu-button" type="button" class="md:hidden inline-flex items-center justify-center p-2 rounded-full text-secondary hover:bg-slate-100 transition focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 8h16M4 16h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<div id="mobile-menu-overlay" class="fixed inset-0 z-[60] bg-white hidden opacity-0 transition-opacity duration-300">
    <div class="p-6 flex justify-between items-center">
         <a href="index.php" class="flex items-center gap-2 font-extrabold text-xl">
            <span>Celah<span class="text-primary">Cahaya</span></span>
        </a>
        <button id="mobile-menu-close" class="p-2 text-secondary hover:bg-slate-100 rounded-full transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="flex flex-col items-center justify-center h-[80vh] space-y-8 p-4">
        <a href="index.php" class="text-3xl font-bold text-secondary hover:text-primary transition">Beranda</a>
        <a href="program.php" class="text-3xl font-bold text-secondary hover:text-primary transition">Program</a>
        <a href="#" class="text-3xl font-bold text-secondary hover:text-primary transition">Tentang Kami</a>
        <a href="kontak.php" class="mt-8 px-8 py-4 bg-primary text-white text-xl rounded-full font-bold w-full max-w-xs text-center shadow-xl shadow-primary/30">Daftar Sekarang</a>
    </div>
</div>
