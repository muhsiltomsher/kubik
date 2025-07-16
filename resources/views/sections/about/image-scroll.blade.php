<section class="relative bg-black overflow-hidden py-12 border-b border-gray-800">
    <x-container class="w-full overflow-x-hidden px-0">
        <div id="scrollGallery" class="flex space-x-6 w-max will-change-transform">
            @foreach ([ '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg' ] as $img)
                <img src="{{ asset('images/about/' . $img) }}"
                     alt="Kubik Office Image"
                     class="h-80 w-auto object-cover rounded-lg shadow-lg shrink-0" />
            @endforeach
        </div>
    </x-container>
</section>
