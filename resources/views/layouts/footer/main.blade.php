<footer class="bg-black text-white text-sm pt-[100px] fade-anim">
  <x-container class="py-16">
    <!-- First Row: Logo Left, Social Right -->
    <div class="flex flex-col lg:flex-row justify-between items-end gap-10 pb-14" data-fade="up">
      <!-- Logo -->
      <div>
        <img src="/images/logo.png" alt="Kubik Construction" class="mb-6 max-w-[180px]">
      </div>

      <!-- Social -->
      <div class="lg:text-right">
        <p class="uppercase text-gray-400 mb-3">Stay in touch</p>
        <div class="flex gap-4 text-xl lg:justify-end">
          <a href="#" class="hover:text-[#c38a42] transition-all"><i class="fi fi-brands-facebook"></i></a>
          <a href="#" class="hover:text-[#c38a42] transition-all"><i class="fi fi-brands-twitter"></i></a>
          <a href="#" class="hover:text-[#c38a42] transition-all"><i class="fi fi-brands-instagram"></i></a>
          <a href="#" class="hover:text-[#c38a42] transition-all"><i class="fi fi-brands-youtube"></i></a>
        </div>
      </div>
    </div>

    <!-- Second Row: Info and Newsletter -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Visit Us -->
      <div class="space-y-1 text-xs" data-fade="up">
        <p class="uppercase text-gray-400">Visit us</p>
        <p>Kubik Construction, 72<br>First Avenue, Acton<br>London, W3 7JW</p>
      </div>

      <!-- Call Us -->
      <div data-fade="up" data-delay="0.1">
        <p class="uppercase text-gray-400 mb-1">Call us</p>
        <p class="text-base">020 3903 9410</p>
      </div>

      <!-- Mail Us -->
      <div data-fade="up" data-delay="0.2">
        <p class="uppercase text-gray-400 mb-1">Mail us</p>
        <p class="text-base">info@kubikconstruction.co.uk</p>
      </div>

      <!-- Newsletter -->
      <div data-fade="up" data-delay="0.3">
        <p class="uppercase text-white/60 mb-2 text-sm tracking-wide">Insights from inside the Kubik</p>
        <form class="flex flex-col gap-3 mt-2 w-full max-w-sm">
          <input 
            type="email" 
            placeholder="Write Your Email" 
            class="w-full bg-transparent border border-white/40 text-white placeholder-white/50 px-4 py-2 text-sm outline-none focus:border-white transition-all duration-300"
          />
          <button 
            type="submit" 
            class="bg-[#8B5E2E] text-white text-sm py-2 transition-all duration-300 hover:bg-[#a8762c]">
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </x-container>

  @include('layouts.footer.copyright')
</footer>
