<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasa Nusantara - Layanan Katering Premium</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            background-color: #FAFAF8;
            color: #2C302E;
            font-family: 'Outfit', sans-serif;
        }
        h1, h2, h3, h4, h5, h6, .font-serif-custom {
            font-family: 'Merriweather', serif;
        }
        .text-accent {
            color: #C17F59;
        }
        .bg-accent {
            background-color: #C17F59;
        }
        .border-accent {
            border-color: #C17F59;
        }
        .glass-nav {
            background: rgba(250, 250, 248, 0.85);
            backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden selection:bg-accent selection:text-white">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-nav border-b border-gray-200/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-white transform group-hover:rotate-12 transition-transform">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg>
                </div>
                <span class="font-serif-custom font-bold text-xl tracking-tight text-gray-900">Rasa Nusantara</span>
            </a>

            <div class="hidden md:flex gap-8 text-sm font-medium text-gray-600">
                <a href="#profil" class="hover:text-accent transition-colors">Profil Kami</a>
                <a href="#paket" class="hover:text-accent transition-colors">Pilihan Paket</a>
                <a href="#galeri" class="hover:text-accent transition-colors">Galeri Momen</a>
                <a href="#faq" class="hover:text-accent transition-colors">Tanya Jawab</a>
            </div>

            <a href="/dashboard" class="hidden md:inline-flex px-5 py-2 rounded-full border border-gray-300 hover:border-accent hover:text-accent text-sm font-medium transition-all">
                Dasbor Admin
            </a>
        </div>
    </nav>

    <!-- Profil / Hero Section -->
    <section id="profil" class="pt-32 pb-20 lg:pt-48 lg:pb-32 px-6 max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-8 z-10 relative">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-50 border border-orange-100 text-accent text-xs font-semibold tracking-wide">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
                </span>
                Katering Terbaik di Kotamu
            </div>
            
            <h1 class="text-5xl lg:text-6xl font-bold leading-tight text-gray-900">
                Sajikan Cita Rasa <br>
                <span class="italic text-accent font-light">Nusantara</span> di Setiap Acara.
            </h1>
            
            <p class="text-gray-600 text-lg max-w-lg leading-relaxed">
                Menghadirkan kelezatan resep warisan leluhur dengan bahan segar berkualitas. Jadikan setiap momen perayaan Anda tak terlupakan bersama sajian istimewa dari kami.
            </p>
            
            <div class="flex gap-4">
                <a href="#paket" class="px-8 py-3 bg-gray-900 text-white rounded-full font-medium hover:bg-accent transition-colors shadow-lg shadow-gray-900/20">
                    Lihat Menu
                </a>
                <a href="#testimoni" class="px-8 py-3 bg-white text-gray-900 border border-gray-200 rounded-full font-medium hover:border-gray-900 transition-colors">
                    Kata Klien
                </a>
            </div>
        </div>
        
        <div class="relative">
            <!-- Staggered Image Grid for Hero instead of single circle -->
            <div class="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=600&q=80" alt="Food 1" class="rounded-3xl rounded-tr-none w-full h-64 object-cover shadow-xl transform translate-y-8">
                <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?auto=format&fit=crop&w=600&q=80" alt="Food 2" class="rounded-3xl rounded-bl-none w-full h-64 object-cover shadow-xl">
            </div>
            <!-- Decorative blur -->
            <div class="absolute -inset-4 bg-accent/20 blur-3xl -z-10 rounded-full opacity-50"></div>
        </div>
    </section>

    <!-- Paket Section -->
    <section id="paket" class="py-24 bg-white" x-data="{ tab: 'unggulan' }">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
                <h2 class="text-4xl font-bold text-gray-900">Pilihan Paket <span class="italic text-accent">Istimewa</span></h2>
                <p class="text-gray-500">Beragam pilihan menu otentik yang disesuaikan dengan kebutuhan dan skala acara Anda.</p>
            </div>

            <!-- Custom Tabs -->
            <div class="flex justify-center gap-4 mb-12">
                <button @click="tab = 'unggulan'" :class="tab === 'unggulan' ? 'bg-gray-900 text-white' : 'bg-gray-50 text-gray-600 hover:bg-gray-100'" class="px-6 py-2 rounded-full font-medium transition-all">Menu Unggulan</button>
                <button @click="tab = 'prasmanan'" :class="tab === 'prasmanan' ? 'bg-gray-900 text-white' : 'bg-gray-50 text-gray-600 hover:bg-gray-100'" class="px-6 py-2 rounded-full font-medium transition-all">Prasmanan</button>
                <button @click="tab = 'nasibox'" :class="tab === 'nasibox' ? 'bg-gray-900 text-white' : 'bg-gray-50 text-gray-600 hover:bg-gray-100'" class="px-6 py-2 rounded-full font-medium transition-all">Nasi Box</button>
            </div>

            <!-- Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div x-show="tab === 'unggulan' || tab === 'prasmanan'" class="group bg-gray-50 rounded-3xl overflow-hidden border border-gray-100 hover:shadow-2xl hover:shadow-accent/10 transition-all duration-500">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541832676-9b763b0239ab?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Tumpeng Megah">
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-accent">Premium</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2">Tumpeng Megah</h3>
                        <p class="text-gray-500 text-sm mb-6 line-clamp-2">Sajian tumpeng kuning lengkap dengan ayam bakar, perkedel, sambal goreng ati, dan aneka sayuran segar.</p>
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wider mb-1">Mulai dari</p>
                                <p class="text-xl font-bold text-gray-900">Rp 45.000<span class="text-sm font-normal text-gray-500">/porsi</span></p>
                            </div>
                            <button class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center group-hover:bg-accent group-hover:text-white transition-colors group-hover:border-accent">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div x-show="tab === 'unggulan' || tab === 'nasibox'" class="group bg-gray-50 rounded-3xl overflow-hidden border border-gray-100 hover:shadow-2xl hover:shadow-accent/10 transition-all duration-500">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1626082895617-2c6ad3dfdfb9?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Box Spesial">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2">Box Spesial Rempah</h3>
                        <p class="text-gray-500 text-sm mb-6 line-clamp-2">Nasi wangi daun jeruk dengan empal gepuk, tempe orek, dan sambal terasi khas Nusantara.</p>
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wider mb-1">Mulai dari</p>
                                <p class="text-xl font-bold text-gray-900">Rp 32.000<span class="text-sm font-normal text-gray-500">/box</span></p>
                            </div>
                            <button class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center group-hover:bg-accent group-hover:text-white transition-colors group-hover:border-accent">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div x-show="tab === 'unggulan' || tab === 'prasmanan'" class="group bg-gray-50 rounded-3xl overflow-hidden border border-gray-100 hover:shadow-2xl hover:shadow-accent/10 transition-all duration-500">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Prasmanan Mewah">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2">Prasmanan Mewah</h3>
                        <p class="text-gray-500 text-sm mb-6 line-clamp-2">Pilihan 5 lauk utama, hidangan penutup, buah segar, dan layanan set-up dekorasi meja penuh.</p>
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wider mb-1">Mulai dari</p>
                                <p class="text-xl font-bold text-gray-900">Rp 85.000<span class="text-sm font-normal text-gray-500">/pax</span></p>
                            </div>
                            <button class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center group-hover:bg-accent group-hover:text-white transition-colors group-hover:border-accent">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri & Testimoni Section (Combined distinct layout) -->
    <section id="galeri" class="py-24 bg-gray-900 text-white relative overflow-hidden">
        <!-- Abstract pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCI+PGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==')]"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Galeri Collage (Masonry-ish) -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4 mt-8">
                        <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=500&q=80" class="rounded-2xl w-full h-48 object-cover shadow-lg hover:opacity-90 transition-opacity">
                        <img src="https://images.unsplash.com/photo-1505236858219-8359eb29e329?auto=format&fit=crop&w=500&q=80" class="rounded-2xl w-full h-64 object-cover shadow-lg hover:opacity-90 transition-opacity">
                    </div>
                    <div class="space-y-4">
                        <img src="https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=500&q=80" class="rounded-2xl w-full h-64 object-cover shadow-lg hover:opacity-90 transition-opacity">
                        <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=500&q=80" class="rounded-2xl w-full h-48 object-cover shadow-lg hover:opacity-90 transition-opacity">
                    </div>
                </div>

                <!-- Testimoni Block -->
                <div id="testimoni" class="space-y-8" x-data="{ activeTesti: 0, testimonials: [
                    { text: 'Luar biasa! Rasa makanannya sangat autentik dan penyajiannya sangat rapi. Tamu undangan di acara pernikahan kami sangat puas.', author: 'Keluarga Bpk. Wijaya', event: 'Resepsi Pernikahan' },
                    { text: 'Tumpengnya cantik sekali, dan yang paling penting rasanya juara. Nasi kuningnya pulen dan bumbunya pas.', author: 'Ibu Sarah', event: 'Syukuran Kantor' }
                ]}">
                    <h2 class="text-4xl font-bold font-serif-custom">Cerita di Balik Rasa</h2>
                    <p class="text-gray-400">Menjadi bagian dari hari bahagia Anda adalah kebanggaan kami.</p>
                    
                    <div class="bg-white/10 backdrop-blur border border-white/20 p-8 rounded-3xl relative">
                        <svg class="w-10 h-10 text-accent/50 absolute top-6 left-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                        
                        <div class="relative z-10 pl-4 mt-6">
                            <p class="text-lg italic font-serif-custom mb-6" x-text="testimonials[activeTesti].text"></p>
                            <div>
                                <p class="font-bold text-accent" x-text="testimonials[activeTesti].author"></p>
                                <p class="text-xs text-gray-400 uppercase tracking-widest mt-1" x-text="testimonials[activeTesti].event"></p>
                            </div>
                        </div>

                        <!-- Mini controls -->
                        <div class="flex gap-2 mt-8 justify-end">
                            <button @click="activeTesti = (activeTesti === 0) ? testimonials.length - 1 : activeTesti - 1" class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/20 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            </button>
                            <button @click="activeTesti = (activeTesti + 1) % testimonials.length" class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/20 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-[#FAFAF8]" x-data="{ active: null }">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold font-serif-custom text-gray-900 mb-4">Pertanyaan Umum</h2>
                <p class="text-gray-500">Temukan jawaban cepat untuk pertanyaan seputar layanan kami.</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm hover:shadow-md">
                    <button @click="active = active === 1 ? null : 1" class="w-full px-6 py-5 flex justify-between items-center bg-white">
                        <span class="font-medium text-lg text-gray-900 text-left">Berapa porsi minimal pemesanan?</span>
                        <span class="text-accent transform transition-transform" :class="active === 1 ? 'rotate-180' : ''">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <div class="px-6 pb-6 text-gray-500 leading-relaxed">
                            Minimal pemesanan bervariasi. Untuk Nasi Box minimal 20 porsi, sedangkan untuk Prasmanan minimal 50 porsi. Silakan diskusikan kebutuhan Anda dengan tim kami.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm hover:shadow-md">
                    <button @click="active = active === 2 ? null : 2" class="w-full px-6 py-5 flex justify-between items-center bg-white">
                        <span class="font-medium text-lg text-gray-900 text-left">Apakah menyediakan alat makan dan pramusaji?</span>
                        <span class="text-accent transform transition-transform" :class="active === 2 ? 'rotate-180' : ''">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <div class="px-6 pb-6 text-gray-500 leading-relaxed">
                            Tentu. Untuk paket Prasmanan, kami sudah mencakup peminjaman meja, alat makan (piring, sendok, garpu), dekorasi standar meja buffet, serta pramusaji yang akan standby selama acara.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm hover:shadow-md">
                    <button @click="active = active === 3 ? null : 3" class="w-full px-6 py-5 flex justify-between items-center bg-white">
                        <span class="font-medium text-lg text-gray-900 text-left">Berapa lama waktu maksimal untuk memesan?</span>
                        <span class="text-accent transform transition-transform" :class="active === 3 ? 'rotate-180' : ''">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <div class="px-6 pb-6 text-gray-500 leading-relaxed">
                            Kami merekomendasikan pemesanan paling lambat H-7 untuk acara besar dan H-3 untuk pesanan Nasi Box reguler agar kami dapat menyiapkan bahan terbaik.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="https://wa.me/123456789" class="inline-flex items-center gap-2 text-accent font-medium hover:text-gray-900 transition-colors">
                    Hubungi Customer Service
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="font-serif-custom text-white text-xl mb-4">Rasa Nusantara</h3>
            <p class="text-sm mb-6">Membawa tradisi dalam setiap sajian. Katering terpercaya untuk momen terbaik Anda.</p>
            <p class="text-xs text-gray-600">&copy; 2026 Rasa Nusantara Katering. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
