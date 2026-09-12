<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'glass-nav py-3' : 'bg-transparent py-5'"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#home" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 p-[2px] shadow-lg shadow-cyan-500/20 group-hover:scale-105 transition-transform duration-300">
                    <div class="w-full h-full bg-[#0A0E1A] rounded-[10px] flex items-center justify-center">
                        <span class="font-heading font-extrabold text-cyan-400 text-lg">RR</span>
                    </div>
                </div>
                <span class="font-heading font-bold text-lg text-slate-100 group-hover:text-cyan-400 transition-colors">
                    Reyhan<span class="text-cyan-400">.</span>
                </span>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Home</a>
                <a href="#about" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">About</a>
                <a href="#education" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Education</a>
                <a href="#experience" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Experience</a>
                <a href="#skills" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Skills</a>
                <a href="#portfolio" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Portfolio</a>
                <a href="#contact" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Contact</a>
            </nav>

            <!-- Download CV Button -->
            <div class="hidden md:flex items-center gap-4">
                <a href="{{ asset($personal['cv_url']) }}" download class="btn-glow inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-cyan-500/10 hover:bg-cyan-500/20 border border-cyan-400/30 text-cyan-400 text-sm font-semibold transition-all">
                    <i data-lucide="download" class="w-4 h-4"></i>
                    <span>Download CV</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="md:hidden p-2 rounded-lg bg-slate-800/80 text-slate-300 hover:text-white focus:outline-none">
                <i x-show="!mobileMenuOpen" data-lucide="menu" class="w-6 h-6"></i>
                <i x-show="mobileMenuOpen" data-lucide="x" class="w-6 h-6" x-cloak></i>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden glass-card mx-4 mt-3 rounded-2xl p-6 border border-cyan-500/20" x-cloak>
        <div class="flex flex-col gap-4">
            <a @click="mobileMenuOpen = false" href="#home" class="text-base font-medium text-slate-200 hover:text-cyan-400 py-1">Home</a>
            <a @click="mobileMenuOpen = false" href="#about" class="text-base font-medium text-slate-200 hover:text-cyan-400 py-1">About</a>
            <a @click="mobileMenuOpen = false" href="#education" class="text-base font-medium text-slate-200 hover:text-cyan-400 py-1">Education</a>
            <a @click="mobileMenuOpen = false" href="#experience" class="text-base font-medium text-slate-200 hover:text-cyan-400 py-1">Experience</a>
            <a @click="mobileMenuOpen = false" href="#skills" class="text-base font-medium text-slate-200 hover:text-cyan-400 py-1">Skills</a>
            <a @click="mobileMenuOpen = false" href="#portfolio" class="text-base font-medium text-slate-200 hover:text-cyan-400 py-1">Portfolio</a>
            <a @click="mobileMenuOpen = false" href="#contact" class="text-base font-medium text-slate-200 hover:text-cyan-400 py-1">Contact</a>
            
            <div class="pt-2 border-t border-slate-700/60">
                <a href="{{ asset($personal['cv_url']) }}" download class="w-full btn-glow flex items-center justify-center gap-2 py-3 rounded-xl bg-cyan-500 text-slate-950 font-bold text-sm">
                    <i data-lucide="download" class="w-4 h-4"></i>
                    <span>Download CV</span>
                </a>
            </div>
        </div>
    </div>
</header>
