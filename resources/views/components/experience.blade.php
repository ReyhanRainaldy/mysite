<section id="experience" class="py-24 relative bg-[#050709]/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center space-y-3 mb-16 gsap-reveal">
            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-4 py-1.5 rounded-full border border-cyan-500/20">Karir & Magang</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold font-heading text-slate-100">
                Pengalaman <span class="text-gradient">Profesional</span>
            </h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mx-auto"></div>
        </div>

        <!-- Experience Cards Container -->
        <div class="space-y-8 max-w-5xl mx-auto">
            
            @foreach($experience as $index => $exp)
                <div x-data="{ expanded: true }" class="glass-card rounded-3xl p-6 sm:p-8 border border-slate-800 hover:border-cyan-500/30 transition-all gsap-reveal">
                    
                    <div class="flex flex-wrap items-start justify-between gap-4">
                        <div class="space-y-1">
                            <div class="flex items-center gap-3 flex-wrap">
                                <h3 class="text-2xl font-bold text-slate-100 font-heading">{{ $exp['company'] }}</h3>
                                <span class="px-3 py-1 rounded-full text-xs font-semibold bg-cyan-500/10 text-cyan-300 border border-cyan-500/20">
                                    {{ $exp['type'] }}
                                </span>
                            </div>
                            <p class="text-lg font-semibold text-gradient">{{ $exp['role'] }}</p>
                        </div>

                        <div class="text-right">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-cyan-400 bg-slate-900/90 px-3 py-1.5 rounded-xl border border-slate-800">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                {{ $exp['period'] }}
                            </span>
                            <p class="text-xs text-slate-400 mt-1 flex items-center justify-end gap-1">
                                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-slate-500"></i>
                                {{ $exp['location'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Toggle Accordion Trigger -->
                    <button @click="expanded = !expanded" class="mt-6 w-full flex items-center justify-between py-2 border-t border-slate-800/80 text-xs font-semibold uppercase tracking-wider text-slate-400 hover:text-cyan-400 transition-colors">
                        <span>Tanggung Jawab & Pencapaian Utama</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300" :class="expanded ? 'rotate-180 text-cyan-400' : ''"></i>
                    </button>

                    <!-- Responsibilities Bullet List -->
                    <div x-show="expanded" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="mt-4 space-y-3 pl-2">
                        @foreach($exp['responsibilities'] as $resp)
                            <div class="flex items-start gap-3">
                                <div class="w-1.5 h-1.5 rounded-full bg-cyan-400 mt-2 shrink-0 shadow-sm shadow-cyan-400"></div>
                                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">{{ $resp }}</p>
                            </div>
                        @endforeach
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>
