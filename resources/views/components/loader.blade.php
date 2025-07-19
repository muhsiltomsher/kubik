<div id="site-loader" class="fixed inset-0 z-[9999] bg-black text-white transition-opacity duration-700 flex items-center justify-center">
    <div class="relative flex flex-col items-center space-y-6">
        {{-- Logo Animation --}}
        <div class="relative w-[140px] h-[80px] flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/logo-k.svg') }}" alt="Logo K" class="absolute left-0 w-20 opacity-0 animate-logo-left" />
            <img src="{{ asset('images/logo-c.svg') }}" alt="Logo C" class="absolute right-0 w-16 opacity-0 animate-logo-right" />
        </div>

        {{-- Percentage Count --}}
        <p id="loading-count" class="text-[30px] font-extralight tracking-widest">0%</p>

        {{-- Smooth Loading Bar --}}
        <div class="w-48 h-[2px] bg-white/20 overflow-hidden relative">
            <div class="absolute left-0 top-0 h-full bg-[#81562A] animate-loader-fill"></div>
        </div>
    </div>
</div>
