<section id="skills" class="py-24 relative bg-[#050709]/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center space-y-3 mb-16 gsap-reveal">
            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-4 py-1.5 rounded-full border border-cyan-500/20">Kompetensi & Software</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold font-heading text-slate-100">
                Skills & <span class="text-gradient">Tools</span>
            </h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mx-auto"></div>
        </div>

        <!-- Alpine.js Tab Switcher Component -->
        <div x-data="{ activeTab: 'tools' }" class="max-w-5xl mx-auto gsap-reveal">
            
            <!-- Tab Buttons Container -->
            <div class="flex items-center justify-center gap-3 p-1.5 rounded-2xl glass-card border border-slate-800 mb-12 max-w-md mx-auto">
                <button @click="activeTab = 'tools'" 
                        :class="activeTab === 'tools' ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 font-bold shadow-lg shadow-cyan-500/20' : 'text-slate-400 hover:text-slate-200 font-medium'"
                        class="flex-1 py-2.5 rounded-xl text-sm transition-all duration-300 flex items-center justify-center gap-2">
                    <i data-lucide="wrench" class="w-4 h-4"></i>
                    <span>Tools</span>
                </button>

                <button @click="activeTab = 'hard'" 
                        :class="activeTab === 'hard' ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 font-bold shadow-lg shadow-cyan-500/20' : 'text-slate-400 hover:text-slate-200 font-medium'"
                        class="flex-1 py-2.5 rounded-xl text-sm transition-all duration-300 flex items-center justify-center gap-2">
                    <i data-lucide="code" class="w-4 h-4"></i>
                    <span>Hard Skills</span>
                </button>

                <button @click="activeTab = 'soft'" 
                        :class="activeTab === 'soft' ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 font-bold shadow-lg shadow-cyan-500/20' : 'text-slate-400 hover:text-slate-200 font-medium'"
                        class="flex-1 py-2.5 rounded-xl text-sm transition-all duration-300 flex items-center justify-center gap-2">
                    <i data-lucide="heart-handshake" class="w-4 h-4"></i>
                    <span>Soft Skills</span>
                </button>
            </div>

            <!-- Tab 1: Tools Grid -->
            <div x-show="activeTab === 'tools'" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                @foreach($skills['tools'] as $tool)
                    <div class="glass-card p-5 rounded-2xl border border-slate-800/80 hover:border-cyan-500/40 flex items-center gap-4 group transition-all">
                        <div class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-700/80 flex items-center justify-center text-cyan-400 group-hover:scale-110 group-hover:bg-cyan-500/10 transition-all">
                            <i data-lucide="{{ $tool['icon'] }}" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-100 text-sm font-heading group-hover:text-cyan-400 transition-colors">{{ $tool['name'] }}</h4>
                            <p class="text-xs text-slate-400">{{ $tool['category'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tab 2: Hard Skills Progress Bars -->
            <div x-show="activeTab === 'hard'" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="space-y-6 glass-card p-8 rounded-3xl border border-slate-800" x-cloak>
                @foreach($skills['hard_skills'] as $hs)
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="font-bold text-slate-200 font-heading">{{ $hs['name'] }}</span>
                            <span class="text-xs font-semibold text-cyan-400">{{ $hs['level'] }}%</span>
                        </div>
                        <div class="w-full h-3 rounded-full bg-slate-900 overflow-hidden p-0.5 border border-slate-800">
                            <div class="h-full rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 transition-all duration-1000" style="width: {{ $hs['level'] }}%;"></div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tab 3: Soft Skills Badges Grid -->
            <div x-show="activeTab === 'soft'" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="grid grid-cols-2 sm:grid-cols-4 gap-4" x-cloak>
                @foreach($skills['soft_skills'] as $ss)
                    <div class="glass-card p-5 rounded-2xl border border-slate-800 hover:border-cyan-400/40 text-center flex flex-col items-center justify-center gap-2 group">
                        <div class="w-10 h-10 rounded-full bg-cyan-500/10 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm font-bold text-slate-200 font-heading group-hover:text-cyan-400 transition-colors">{{ $ss }}</span>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</section>
