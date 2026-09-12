<section id="home" class="relative min-h-screen pt-28 pb-16 flex items-center justify-center overflow-hidden">
    <!-- Floating Background Mesh Gradient Blobs -->
    <div class="absolute top-1/4 left-1/10 w-96 h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none animate-float-slow"></div>
    <div class="absolute bottom-1/4 right-1/10 w-[30rem] h-[30rem] bg-blue-600/15 rounded-full blur-3xl pointer-events-none animate-float"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Text Content (7 Cols) -->
            <div class="lg:col-span-7 space-y-6 text-left">
                
                <!-- Greeting Badge -->
                <div class="hero-stagger inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900/80 border border-cyan-500/30 backdrop-blur-md shadow-lg shadow-cyan-500/10">
                    <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 animate-ping"></span>
                    <span class="text-sm font-semibold text-cyan-300 tracking-wide">{{ $personal['greeting'] }}</span>
                </div>

                <!-- Main Name Header -->
                <h1 class="hero-stagger text-4xl sm:text-6xl lg:text-7xl font-extrabold font-display tracking-tight leading-none text-slate-100">
                    {{ $personal['name'] }}
                </h1>

                <!-- Typed.js Role Subheader -->
                <div class="hero-stagger text-xl sm:text-3xl font-bold text-slate-300 flex items-center gap-3">
                    <span class="text-slate-400">Saya seorang</span>
                    <span id="typed-roles" data-roles='@json($personal["roles"])' class="text-gradient underline decoration-cyan-500/40 decoration-4"></span>
                </div>

                <!-- Brief Bio Summary -->
                <p class="hero-stagger text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl">
                    {{ $personal['bio_summary'] }}
                </p>

                <!-- Action Buttons -->
                <div class="hero-stagger flex flex-wrap items-center gap-4 pt-2">
                    <a href="#portfolio" class="btn-glow px-7 py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 font-bold text-base flex items-center gap-2 group">
                        <span>Lihat Portofolio</span>
                        <i data-lucide="arrow-down-right" class="w-5 h-5 group-hover:translate-x-1 group-hover:translate-y-1 transition-transform"></i>
                    </a>
                    <a href="#contact" class="px-7 py-3.5 rounded-xl bg-slate-900/80 border border-slate-700/80 hover:border-cyan-400/50 text-slate-200 hover:text-cyan-400 font-semibold text-base transition-all flex items-center gap-2">
                        <i data-lucide="mail" class="w-5 h-5"></i>
                        <span>Hubungi Saya</span>
                    </a>
                </div>

                <!-- Social Links -->
                <div class="hero-stagger flex items-center gap-4 pt-4 border-t border-slate-800/80 max-w-md">
                    <span class="text-xs uppercase tracking-widest text-slate-400 font-semibold">Hubungkan:</span>
                    <a href="{{ $personal['github'] }}" target="_blank" class="p-2.5 rounded-xl bg-slate-900/90 border border-slate-800 text-slate-300 hover:text-cyan-400 hover:border-cyan-500/40 hover:-translate-y-1 transition-all">
                        <i data-lucide="github" class="w-5 h-5"></i>
                    </a>
                    <a href="{{ $personal['linkedin'] }}" target="_blank" class="p-2.5 rounded-xl bg-slate-900/90 border border-slate-800 text-slate-300 hover:text-cyan-400 hover:border-cyan-500/40 hover:-translate-y-1 transition-all">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                    <a href="{{ $personal['instagram'] }}" target="_blank" class="p-2.5 rounded-xl bg-slate-900/90 border border-slate-800 text-slate-300 hover:text-cyan-400 hover:border-cyan-500/40 hover:-translate-y-1 transition-all">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                    <a href="mailto:{{ $personal['email'] }}" class="p-2.5 rounded-xl bg-slate-900/90 border border-slate-800 text-slate-300 hover:text-cyan-400 hover:border-cyan-500/40 hover:-translate-y-1 transition-all">
                        <i data-lucide="mail" class="w-5 h-5"></i>
                    </a>
                </div>

            </div>

            <!-- Right Avatar & Counter Card (5 Cols) -->
            <div class="lg:col-span-5 flex flex-col items-center justify-center relative">
                
                <!-- Rotating Gradient Avatar Frame -->
                <div class="hero-stagger relative group">
                    <div class="rotating-border-box p-1.5 shadow-2xl shadow-cyan-500/20">
                        <div class="w-64 h-64 sm:w-80 sm:h-80 rounded-full overflow-hidden bg-slate-950 relative">
                            <img src="{{ asset($personal['avatar']) }}" alt="{{ $personal['name'] }}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>

                    <!-- Floating Badge 1 -->
                    <div class="absolute -top-4 -right-4 glass-card px-4 py-2.5 rounded-2xl flex items-center gap-3 border border-cyan-500/30 animate-float shadow-xl">
                        <div class="w-9 h-9 rounded-xl bg-cyan-500/20 flex items-center justify-center text-cyan-400">
                            <i data-lucide="sparkles" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium">S1 Sistem Informasi</p>
                            <p class="text-sm font-bold text-slate-100">IPK 3.81 / 4.00</p>
                        </div>
                    </div>

                    <!-- Floating Badge 2 -->
                    <div class="absolute -bottom-6 -left-6 glass-card px-4 py-2.5 rounded-2xl flex items-center gap-3 border border-cyan-500/30 animate-float-slow shadow-xl">
                        <div class="w-9 h-9 rounded-xl bg-blue-500/20 flex items-center justify-center text-blue-400">
                            <i data-lucide="layout" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium">Spesialisasi</p>
                            <p class="text-sm font-bold text-slate-100">UI/UX & Analytics</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Animated Statistics Counters Bar -->
        <div class="mt-20 gsap-reveal glass-card rounded-3xl p-8 border border-slate-800/80 shadow-2xl grid grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($personal['stats'] as $stat)
                <div class="text-center space-y-1 relative">
                    <div class="text-3xl sm:text-4xl font-extrabold font-heading text-gradient flex items-center justify-center">
                        <span class="counter-val" data-target="{{ $stat['number'] }}">0</span>
                        <span>{{ $stat['suffix'] }}</span>
                    </div>
                    <p class="text-xs sm:text-sm font-medium text-slate-400 uppercase tracking-wider">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>

        <!-- Scroll Indicator Arrow -->
        <div class="mt-12 flex justify-center">
            <a href="#about" class="flex flex-col items-center gap-2 text-slate-400 hover:text-cyan-400 transition-colors animate-bounce">
                <span class="text-xs uppercase tracking-widest font-semibold">Scroll Down</span>
                <i data-lucide="chevron-down" class="w-5 h-5"></i>
            </a>
        </div>

    </div>
</section>
