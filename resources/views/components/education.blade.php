<section id="education" class="py-24 relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center space-y-3 mb-16 gsap-reveal">
            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-4 py-1.5 rounded-full border border-cyan-500/20">Rekam Akademik</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold font-heading text-slate-100">
                Riwayat <span class="text-gradient">Pendidikan</span>
            </h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mx-auto"></div>
        </div>

        <!-- Vertical Timeline Container -->
        <div class="relative border-l-2 border-slate-800 ml-4 sm:ml-32 space-y-12">
            
            @foreach($education as $index => $edu)
                <div class="relative pl-8 sm:pl-12 gsap-reveal">
                    
                    <!-- Timeline Node Badge / Icon -->
                    <div class="absolute -left-[17px] top-1.5 w-8 h-8 rounded-full bg-[#0A0E1A] border-2 border-cyan-400 flex items-center justify-center shadow-lg shadow-cyan-500/30">
                        <span class="w-2.5 h-2.5 rounded-full bg-cyan-400"></span>
                    </div>

                    <!-- Period Tag (Absolute Left on Desktop) -->
                    <div class="hidden sm:block absolute -left-36 top-1.5 w-28 text-right">
                        <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">{{ $edu['period'] }}</span>
                    </div>

                    <!-- Education Content Glass Card -->
                    <div class="glass-card rounded-2xl p-6 sm:p-8 border border-slate-800 hover:border-cyan-500/30 transition-all">
                        <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                            <span class="sm:hidden text-xs font-bold text-cyan-400 uppercase tracking-wider block">{{ $edu['period'] }}</span>
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-cyan-500/10 text-cyan-300 border border-cyan-500/20">
                                {{ $edu['badge'] }}
                            </span>
                            <span class="text-sm font-semibold text-emerald-400 bg-emerald-500/10 px-3 py-1 rounded-full border border-emerald-500/20">
                                {{ $edu['gpa'] }}
                            </span>
                        </div>

                        <h3 class="text-xl sm:text-2xl font-bold text-slate-100 font-heading">
                            {{ $edu['institution'] }}
                        </h3>
                        <p class="text-base font-semibold text-cyan-400 mt-1">
                            {{ $edu['degree'] }}
                        </p>
                        
                        <p class="text-sm text-slate-300 mt-3 leading-relaxed">
                            {{ $edu['details'] }}
                        </p>

                        <div class="mt-4 flex items-center gap-2 text-xs text-slate-400">
                            <i data-lucide="map-pin" class="w-4 h-4 text-cyan-400"></i>
                            <span>{{ $edu['location'] }}</span>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>
