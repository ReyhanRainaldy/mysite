<section id="about" class="py-24 relative bg-[#050709]/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Title -->
        <div class="text-center space-y-3 mb-16 gsap-reveal">
            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-4 py-1.5 rounded-full border border-cyan-500/20">Profil Singkat</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold font-heading text-slate-100">
                Tentang <span class="text-gradient">Reyhan Rainaldy</span>
            </h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Visual Card Column (5 Cols) -->
            <div class="lg:col-span-5 gsap-reveal">
                <div class="glass-card rounded-3xl p-6 border border-cyan-500/20 relative group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[4/5] bg-slate-900">
                        <img src="{{ asset($personal['avatar_alt']) }}" alt="{{ $personal['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0A0E1A] via-transparent to-transparent opacity-80"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6 p-4 rounded-xl glass-card backdrop-blur-md border border-cyan-500/30">
                            <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider">Lulusan Sistem Informasi</p>
                            <p class="text-lg font-bold text-slate-100 font-heading">Universitas Negeri Surabaya</p>
                            <p class="text-xs text-cyan-400 mt-1">GPA 3.81 / 4.00 (Sangat Memuaskan)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content & Highlights Column (7 Cols) -->
            <div class="lg:col-span-7 space-y-8 gsap-reveal">
                
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold font-heading text-slate-100">
                        Menghubungkan <span class="text-cyan-400">Analisis Data</span> dan <span class="text-cyan-400">Desain Digital</span> yang Berdampak.
                    </h3>
                    <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                        {{ $personal['bio_narrative'] }}
                    </p>
                </div>

                <!-- 3 Highlight Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                    @foreach($personal['highlights'] as $highlight)
                        <div class="glass-card p-5 rounded-2xl border border-slate-800 hover:border-cyan-500/40 transition-all">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 mb-3">
                                <i data-lucide="{{ $highlight['icon'] }}" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-slate-100 text-base mb-1 font-heading">{{ $highlight['title'] }}</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">{{ $highlight['desc'] }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Personal Info Quick Table -->
                <div class="glass-card rounded-2xl p-6 border border-slate-800/90 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                    <div class="flex items-center gap-3">
                        <i data-lucide="graduation-cap" class="w-5 h-5 text-cyan-400"></i>
                        <div>
                            <span class="text-xs text-slate-400 block">Pendidikan:</span>
                            <span class="font-semibold text-slate-200">S1 Sistem Informasi - UNESA</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-cyan-400"></i>
                        <div>
                            <span class="text-xs text-slate-400 block">Domisili:</span>
                            <span class="font-semibold text-slate-200">{{ $personal['location'] }}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <i data-lucide="award" class="w-5 h-5 text-cyan-400"></i>
                        <div>
                            <span class="text-xs text-slate-400 block">IPK Terakhir:</span>
                            <span class="font-semibold text-cyan-400">3.81 / 4.00</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <i data-lucide="globe-2" class="w-5 h-5 text-cyan-400"></i>
                        <div>
                            <span class="text-xs text-slate-400 block">Bahasa:</span>
                            <span class="font-semibold text-slate-200">Indonesia (Native), English (Intermediate)</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
