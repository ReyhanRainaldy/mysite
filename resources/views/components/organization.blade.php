<section id="organization" class="py-16 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="max-w-5xl mx-auto gsap-reveal">
            <div class="glass-card rounded-3xl p-8 border border-slate-800 bg-gradient-to-r from-[#0F172A]/80 via-[#0A0E1A] to-[#0F172A]/80">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="p-2 rounded-xl bg-purple-500/10 text-purple-400 border border-purple-500/20">
                                <i data-lucide="users" class="w-5 h-5"></i>
                            </span>
                            <span class="text-xs font-bold uppercase tracking-widest text-purple-400">Pengalaman Organisasi</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-100 font-heading">
                            HIMTI Ameliorer — <span class="text-cyan-400">Safety Department</span>
                        </h3>
                        <p class="text-xs text-slate-400">Jun 2023 – Jan 2024 | Himpunan Mahasiswa Teknik Informatika UNESA</p>
                    </div>

                    <div class="space-y-2 md:max-w-md">
                        @foreach($organization[0]['details'] as $detail)
                            <div class="flex items-start gap-2 text-sm text-slate-300">
                                <i data-lucide="shield-check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                                <span>{{ $detail }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
