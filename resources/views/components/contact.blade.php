<section id="contact" class="py-24 relative bg-[#050709]/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center space-y-3 mb-16 gsap-reveal">
            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-4 py-1.5 rounded-full border border-cyan-500/20">Mari Berkolaborasi</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold font-heading text-slate-100">
                Hubungi <span class="text-gradient">Saya</span>
            </h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 max-w-6xl mx-auto items-start">
            
            <!-- Left Form Column (7 Cols) -->
            <div class="lg:col-span-7 gsap-reveal" x-data="{ 
                submitting: false, 
                submitted: false,
                submitForm() {
                    this.submitting = true;
                    setTimeout(() => {
                        this.submitting = false;
                        this.submitted = true;
                    }, 1200);
                }
            }">
                <div class="glass-card rounded-3xl p-8 border border-slate-800 space-y-6">
                    
                    <div class="space-y-2">
                        <h3 class="text-2xl font-bold text-slate-100 font-heading">Kirim Pesan Langsung</h3>
                        <p class="text-sm text-slate-400">Apakah Anda memiliki proyek, tawaran kerja, atau sekadar ingin berdiskusi? Isi form di bawah ini.</p>
                    </div>

                    <div x-show="submitted" class="p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm font-semibold flex items-center gap-3" x-cloak>
                        <i data-lucide="check-circle-2" class="w-5 h-5"></i>
                        <span>Pesan Anda telah berhasil disiapkan! Terima kasih telah menghubungi.</span>
                    </div>

                    <form @submit.prevent="submitForm()" x-show="!submitted" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="text-xs font-semibold uppercase tracking-wider text-slate-300">Nama Lengkap</label>
                                <input type="text" required placeholder="Nama Anda" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700/80 text-slate-100 text-sm focus:outline-none focus:border-cyan-400 transition-colors">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-xs font-semibold uppercase tracking-wider text-slate-300">Email Anda</label>
                                <input type="email" required placeholder="email@domain.com" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700/80 text-slate-100 text-sm focus:outline-none focus:border-cyan-400 transition-colors">
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-semibold uppercase tracking-wider text-slate-300">Subjek</label>
                            <input type="text" required placeholder="Subjek Diskusi / Proyek" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700/80 text-slate-100 text-sm focus:outline-none focus:border-cyan-400 transition-colors">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-semibold uppercase tracking-wider text-slate-300">Pesan</label>
                            <textarea rows="5" required placeholder="Tuliskan detail pesan Anda di sini..." class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700/80 text-slate-100 text-sm focus:outline-none focus:border-cyan-400 transition-colors resize-none"></textarea>
                        </div>

                        <button type="submit" :disabled="submitting" class="w-full btn-glow py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 font-bold text-base flex items-center justify-center gap-2 transition-all">
                            <span x-show="!submitting">Kirim Pesan</span>
                            <span x-show="submitting" x-cloak class="flex items-center gap-2">
                                <i data-lucide="loader-2" class="w-5 h-5 animate-spin"></i>
                                Mengirim...
                            </span>
                        </button>
                    </form>

                </div>
            </div>

            <!-- Right Info Column (5 Cols) -->
            <div class="lg:col-span-5 space-y-6 gsap-reveal">
                
                <div class="glass-card rounded-3xl p-8 border border-slate-800 space-y-6">
                    <h3 class="text-xl font-bold text-slate-100 font-heading">Informasi Kontak</h3>

                    <div class="space-y-5">
                        <a href="mailto:{{ $personal['email'] }}" class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center group-hover:scale-110 group-hover:bg-cyan-500/20 transition-all">
                                <i data-lucide="mail" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <span class="text-xs text-slate-400 block font-medium">Email Direct</span>
                                <span class="text-sm font-bold text-slate-200 group-hover:text-cyan-400 transition-colors">{{ $personal['email'] }}</span>
                            </div>
                        </a>

                        <a href="https://wa.me/6281235276894" target="_blank" class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center group-hover:scale-110 group-hover:bg-emerald-500/20 transition-all">
                                <i data-lucide="phone" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <span class="text-xs text-slate-400 block font-medium">Telepon / WhatsApp</span>
                                <span class="text-sm font-bold text-slate-200 group-hover:text-emerald-400 transition-colors">{{ $personal['phone'] }}</span>
                            </div>
                        </a>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-400 flex items-center justify-center">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <span class="text-xs text-slate-400 block font-medium">Lokasi</span>
                                <span class="text-sm font-bold text-slate-200">{{ $personal['location'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-800 space-y-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Jejaring Sosial:</span>
                        <div class="flex items-center gap-3">
                            <a href="{{ $personal['github'] }}" target="_blank" class="flex-1 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 hover:text-cyan-400 hover:border-cyan-500/40 text-xs font-bold flex items-center justify-center gap-2 transition-all">
                                <i data-lucide="github" class="w-4 h-4"></i>
                                GitHub
                            </a>
                            <a href="{{ $personal['linkedin'] }}" target="_blank" class="flex-1 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 hover:text-cyan-400 hover:border-cyan-500/40 text-xs font-bold flex items-center justify-center gap-2 transition-all">
                                <i data-lucide="linkedin" class="w-4 h-4"></i>
                                LinkedIn
                            </a>
                            <a href="{{ $personal['instagram'] }}" target="_blank" class="flex-1 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 hover:text-cyan-400 hover:border-cyan-500/40 text-xs font-bold flex items-center justify-center gap-2 transition-all">
                                <i data-lucide="instagram" class="w-4 h-4"></i>
                                Instagram
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
