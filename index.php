<?php 
$pageTitle = "Beranda";
include 'includes/header.php'; 
?>

<main>
    <section class="relative min-h-[90vh] flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop" alt="Background pendidikan" class="w-full h-full object-cover object-center scale-105">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/80 to-secondary/40"></div>
            <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/noise.png')]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-2xl animate-fade-in-up">
                <div class="inline-flex items-center gap-2 py-1.5 px-4 rounded-full bg-white/10 text-white backdrop-blur-md border border-white/20 text-sm font-medium mb-6">
                    <span class="animate-pulse">✨</span> Pendaftaran 2025 Dibuka
                </div>
                
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight leading-none text-white mb-8">
                    Buka <span class="text-primary inline-block relative">Celah Cahaya<svg class="absolute -bottom-3 left-0 w-full text-primary" height="12" viewBox="0 0 200 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 9C35.5 3 160 3 198 9" stroke="currentColor" stroke-width="4" stroke-linecap="round" opacity="0.4"/></svg></span><br>
                    Masa Depanmu.
                </h1>
                
                <p class="text-xl text-slate-300 mb-10 leading-relaxed max-w-xl">
                    Solusi pendidikan kesetaraan modern (Paket A, B, C) dan keterampilan kerja bagi Anda yang menginginkan fleksibilitas dan kualitas.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="kontak.php" class="px-8 py-4 bg-primary text-white rounded-full font-bold text-lg hover:bg-primary-dark transition shadow-lg shadow-primary/30 hover:-translate-y-1 text-center">
                        Mulai Belajar Sekarang
                    </a>
                    <a href="program.php" class="px-8 py-4 bg-white/10 text-white backdrop-blur-sm border border-white/30 rounded-full font-bold text-lg hover:bg-white/20 transition hover:-translate-y-1 text-center">
                        Lihat Program Kami
                    </a>
                </div>

                <div class="mt-12 pt-8 border-t border-white/10 flex items-center gap-8 text-white/80">
                    <div>
                        <p class="text-3xl font-bold text-white">500+</p>
                        <p class="text-sm">Lulusan Berhasil</p>
                    </div>
                    <div class="h-8 w-px bg-white/20"></div>
                    <div>
                        <p class="text-3xl font-bold text-white">Terakreditasi</p>
                        <p class="text-sm">Resmi Kemendikbud</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-primary-light/30 relative">
         <div class="absolute top-0 right-0 -z-10 translate-x-1/3 -translate-y-1/3 w-[500px] h-[500px] bg-primary/20 rounded-full blur-3xl mix-blend-multiply"></div>
         
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">Pendidikan yang Menyesuaikan Gaya Hidup Modern Anda.</h2>
                <p class="text-secondary-muted text-lg">Kami membuang kekakuan sekolah konvensional dan menggantinya dengan fleksibilitas yang berfokus pada hasil.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                
                <div class="md:col-span-2 bg-primary text-white p-10 rounded-[2.5rem] shadow-xl shadow-primary/20 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group">
                    <div class="absolute right-0 bottom-0 opacity-10 -mr-16 -mb-16 transition-transform group-hover:scale-110 duration-500">
                        <svg width="300" height="300" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                    </div>
                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div>
                            <div class="h-16 w-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center mb-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <h3 class="text-3xl font-bold mb-4">Waktu Belajar Sangat Fleksibel</h3>
                            <p class="text-white/90 text-lg max-w-lg leading-relaxed">
                                Lupakan jadwal kaku dari jam 7 pagi sampai 3 sore. Di Celah Cahaya, Anda mengatur sendiri ritme belajar di sela-sela pekerjaan atau kesibukan keluarga. Platform kami siap 24/7.
                            </p>
                        </div>
                        <a href="program.php" class="inline-flex items-center gap-2 font-bold mt-12 hover:gap-4 transition-all">Pelajari Metodenya <span class="text-xl">→</span></a>
                    </div>
                </div>
                
                <div class="glass p-10 rounded-[2.5rem] hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between group hover:border-primary/50">
                    <div>
                        <div class="h-14 w-14 bg-secondary/5 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary/10 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary group-hover:text-primary transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Ijazah Resmi Negara</h3>
                        <p class="text-secondary-muted leading-relaxed">
                            Lulusan berhak menerima ijazah kesetaraan yang diakui penuh oleh negara untuk melamar kerja (PNS/Swasta) atau kuliah.
                        </p>
                    </div>
                </div>

                <div class="glass p-10 rounded-[2.5rem] hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between group hover:border-primary/50">
                    <div>
                        <div class="h-14 w-14 bg-secondary/5 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary/10 transition-colors">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary group-hover:text-primary transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Keterampilan Siap Kerja</h3>
                        <p class="text-secondary-muted leading-relaxed">
                            Kami membekali Anda dengan *hard skills* (komputer, digital marketing) dan *soft skills* yang dicari industri saat ini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-secondary z-0">
             <div class="absolute inset-0 opacity-[0.1] bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        </div>
        <div class="max-w-5xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-8 leading-tight">Jangan Biarkan Usia atau Kesibukan Menghalangi Masa Depanmu.</h2>
            <p class="text-slate-300 text-xl mb-12 max-w-3xl mx-auto">Konsultasi gratis sekarang untuk menemukan jalur pendidikan yang paling pas untuk situasi Anda saat ini.</p>
            <a href="kontak.php" class="inline-flex items-center gap-3 px-10 py-5 bg-primary text-white rounded-full font-bold text-xl hover:bg-primary-dark transition shadow-xl shadow-primary/20 hover:scale-105 duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                Hubungi Kami via WhatsApp
            </a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
