<section id="portfolio" class="py-24 relative" x-data="{ 
    filter: 'all', 
    modalOpen: false, 
    activeProject: null,
    currentImgIndex: 0,
    openModal(project) {
        this.activeProject = project;
        this.currentImgIndex = 0;
        this.modalOpen = true;
        document.body.classList.add('overflow-hidden');
    },
    closeModal() {
        this.modalOpen = false;
        document.body.classList.remove('overflow-hidden');
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center space-y-3 mb-12 gsap-reveal">
            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-4 py-1.5 rounded-full border border-cyan-500/20">Karya & Proyek Terpilih</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold font-heading text-slate-100">
                Portofolio <span class="text-gradient">Proyek</span>
            </h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mx-auto"></div>
        </div>

        <!-- Filter Tab Buttons -->
        <div class="flex items-center justify-center flex-wrap gap-3 mb-12 gsap-reveal">
            <button @click="filter = 'all'" 
                    :class="filter === 'all' ? 'bg-cyan-500 text-slate-950 font-bold shadow-lg shadow-cyan-500/25 scale-105' : 'bg-slate-900/90 text-slate-400 border border-slate-800 hover:text-slate-200'"
                    class="px-5 py-2.5 rounded-xl text-sm font-medium transition-all duration-300">
                Semua Proyek ({{ count($projects) }})
            </button>

            <button @click="filter = 'ui-ux'" 
                    :class="filter === 'ui-ux' ? 'bg-cyan-500 text-slate-950 font-bold shadow-lg shadow-cyan-500/25 scale-105' : 'bg-slate-900/90 text-slate-400 border border-slate-800 hover:text-slate-200'"
                    class="px-5 py-2.5 rounded-xl text-sm font-medium transition-all duration-300">
                UI/UX Design (4)
            </button>

            <button @click="filter = 'web-dev'" 
                    :class="filter === 'web-dev' ? 'bg-cyan-500 text-slate-950 font-bold shadow-lg shadow-cyan-500/25 scale-105' : 'bg-slate-900/90 text-slate-400 border border-slate-800 hover:text-slate-200'"
                    class="px-5 py-2.5 rounded-xl text-sm font-medium transition-all duration-300">
                Pemrograman Web (2)
            </button>

            <button @click="filter = 'machine-learning'" 
                    :class="filter === 'machine-learning' ? 'bg-cyan-500 text-slate-950 font-bold shadow-lg shadow-cyan-500/25 scale-105' : 'bg-slate-900/90 text-slate-400 border border-slate-800 hover:text-slate-200'"
                    class="px-5 py-2.5 rounded-xl text-sm font-medium transition-all duration-300">
                Machine Learning (6)
            </button>
        </div>

        <!-- Projects Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @foreach($projects as $proj)
                <div x-show="filter === 'all' || filter === '{{ $proj['category'] }}'"
                     x-transition:enter="transition ease-out duration-400"
                     x-transition:enter-start="opacity-0 scale-90"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="glass-card rounded-3xl overflow-hidden border border-slate-800 flex flex-col justify-between group hover:border-cyan-500/40 transition-all gsap-reveal">
                    
                    <!-- Card Header / Image Thumbnail -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img src="{{ asset($proj['images'][0]) }}" alt="{{ $proj['title'] }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0A0E1A] via-transparent to-transparent opacity-80"></div>
                        
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-slate-950/80 backdrop-blur-md text-cyan-400 border border-cyan-500/30">
                                {{ $proj['category_name'] }}
                            </span>
                        </div>

                        <!-- Image Count Indicator -->
                        <div class="absolute top-4 right-4">
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-slate-950/80 text-slate-300 flex items-center gap-1">
                                <i data-lucide="images" class="w-3.5 h-3.5 text-cyan-400"></i>
                                {{ count($proj['images']) }} Slide
                            </span>
                        </div>
                    </div>

                    <!-- Card Body Content -->
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <span class="text-xs font-medium text-slate-400 block">{{ $proj['period'] }}</span>
                            <h3 class="text-xl font-bold text-slate-100 font-heading group-hover:text-cyan-400 transition-colors line-clamp-2">
                                {{ $proj['title'] }}
                            </h3>
                            <p class="text-slate-300 text-sm line-clamp-3 leading-relaxed">
                                {{ $proj['summary'] }}
                            </p>
                        </div>

                        <!-- Tech Stack Badges -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            @foreach(array_slice($proj['tags'], 0, 4) as $tag)
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-medium bg-slate-900 text-slate-300 border border-slate-800">
                                    {{ $tag }}
                                </span>
                            @endforeach
                            @if(count($proj['tags']) > 4)
                                <span class="px-2 py-0.5 rounded-md text-[11px] font-medium bg-slate-900 text-cyan-400">
                                    +{{ count($proj['tags']) - 4 }}
                                </span>
                            @endif
                        </div>

                        <!-- Modal Trigger Button -->
                        <button @click='openModal(@json($proj))' class="w-full mt-4 py-3 rounded-xl bg-cyan-500/10 hover:bg-cyan-500/20 border border-cyan-400/30 text-cyan-400 font-bold text-sm flex items-center justify-center gap-2 transition-all">
                            <span>Lihat Detail Proyek</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>

                </div>
            @endforeach

        </div>

        <!-- Alpine.js Project Detail Modal -->
        <div x-show="modalOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-[9999] flex items-center justify-center p-4 sm:p-6 lg:p-8 bg-slate-950/80 backdrop-blur-xl" x-cloak>
            
            <div @click.away="closeModal()" 
                 x-show="modalOpen"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                 class="glass-card max-w-4xl w-full max-h-[90vh] rounded-3xl border border-cyan-500/30 overflow-y-auto p-6 sm:p-8 relative space-y-6 shadow-2xl">
                
                <!-- Close Modal Button -->
                <button @click="closeModal()" class="absolute top-6 right-6 p-2.5 rounded-full bg-slate-900 text-slate-400 hover:text-white hover:bg-slate-800 transition-all border border-slate-700">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>

                <template x-if="activeProject">
                    <div class="space-y-6">
                        
                        <!-- Modal Title & Header -->
                        <div class="pr-12 space-y-2">
                            <div class="flex items-center gap-3 flex-wrap">
                                <span class="px-3 py-1 rounded-full text-xs font-bold bg-cyan-500/10 text-cyan-400 border border-cyan-500/30" x-text="activeProject.category_name"></span>
                                <span class="text-xs text-slate-400 font-medium" x-text="activeProject.period"></span>
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-100 font-heading" x-text="activeProject.title"></h2>
                            <p class="text-sm font-semibold text-cyan-400">Peran: <span x-text="activeProject.role"></span></p>
                        </div>

                        <!-- Image Carousel Slider -->
                        <div class="space-y-3">
                            <div class="relative rounded-2xl overflow-hidden aspect-[16/9] bg-slate-950 border border-slate-800">
                                <img :src="activeProject.images[currentImgIndex]" :alt="activeProject.title" class="w-full h-full object-contain bg-slate-950">
                                
                                <!-- Slider Controls -->
                                <template x-if="activeProject.images.length > 1">
                                    <div>
                                        <button @click="currentImgIndex = (currentImgIndex - 1 + activeProject.images.length) % activeProject.images.length" 
                                                class="absolute left-4 top-1/2 -translate-y-1/2 p-3 rounded-full bg-slate-950/80 text-white hover:bg-cyan-500 hover:text-slate-950 transition-all">
                                            <i data-lucide="chevron-left" class="w-5 h-5"></i>
                                        </button>
                                        <button @click="currentImgIndex = (currentImgIndex + 1) % activeProject.images.length" 
                                                class="absolute right-4 top-1/2 -translate-y-1/2 p-3 rounded-full bg-slate-950/80 text-white hover:bg-cyan-500 hover:text-slate-950 transition-all">
                                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                        </button>
                                    </div>
                                </template>
                            </div>

                            <!-- Carousel Thumbnails -->
                            <div class="flex items-center gap-2 overflow-x-auto pb-2" x-show="activeProject.images.length > 1">
                                <template x-for="(img, idx) in activeProject.images" :key="idx">
                                    <button @click="currentImgIndex = idx" 
                                            :class="currentImgIndex === idx ? 'border-2 border-cyan-400 scale-105' : 'opacity-60 hover:opacity-100'"
                                            class="w-20 h-14 rounded-lg overflow-hidden shrink-0 bg-slate-900 transition-all">
                                        <img :src="img" class="w-full h-full object-cover">
                                    </button>
                                </template>
                            </div>
                        </div>

                        <!-- Project Description Narrative -->
                        <div class="space-y-3">
                            <h4 class="text-lg font-bold text-slate-100 font-heading">Deskripsi Proyek</h4>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed" x-text="activeProject.description"></p>
                        </div>

                        <!-- Key Achievements / Highlights -->
                        <div class="space-y-3" x-show="activeProject.highlights && activeProject.highlights.length">
                            <h4 class="text-lg font-bold text-slate-100 font-heading">Poin Utama & Implementasi</h4>
                            <div class="space-y-2">
                                <template x-for="hl in activeProject.highlights" :key="hl">
                                    <div class="flex items-start gap-3 text-sm text-slate-300">
                                        <i data-lucide="check-circle" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                                        <span x-text="hl"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- Tech Stack Tags in Modal -->
                        <div class="space-y-2">
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider">Teknologi & Tools:</h4>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="tag in activeProject.tags" :key="tag">
                                    <span class="px-3 py-1 rounded-lg text-xs font-semibold bg-slate-900 text-cyan-300 border border-cyan-500/20" x-text="tag"></span>
                                </template>
                            </div>
                        </div>

                        <!-- Modal Footer Action -->
                        <div class="pt-4 border-t border-slate-800 flex justify-end">
                            <template x-if="activeProject.link && activeProject.link !== '#'">
                                <a :href="activeProject.link" target="_blank" class="btn-glow px-6 py-3 rounded-xl bg-cyan-500 text-slate-950 font-bold text-sm flex items-center gap-2">
                                    <span>Buka Tautan External</span>
                                    <i data-lucide="external-link" class="w-4 h-4"></i>
                                </a>
                            </template>
                        </div>

                    </div>
                </template>

            </div>

        </div>

    </div>
</section>
