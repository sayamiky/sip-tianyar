<section id="features" class="pt-20 lg:pt-[120px] pb-8 lg:pb-[70px]">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="mb-12 lg:mb-20 max-w-[620px]">
                    <h2
                        class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                        Wisata Desa
                    </h2>
                    <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                        Ada banyak wisata yang ada di desa Bugbug, berikut Top Desa Wisata Bugbug.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach ($destination as $item)
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-12 bg-white group wow fadeInUp" data-wow-delay=".1s">
                    <div
                        class=" w-[70px] h-[70px] flex items-center justify-center bg-primary rounded-2xl mb-8 relative z-10">
                        <span
                            class="w-[70px] h-[70px] flex items-center justify-center bg-primary bg-opacity-20 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white icon icon-tabler icon-tabler-map-pins" width="35" height="35" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10.828 9.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z"></path>
                                <path d="M8 7l0 .01"></path>
                                <path d="M18.828 17.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z"></path>
                                <path d="M16 15l0 .01"></path>
                             </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-dark">
                        {{ $item->name }}
                    </h4>
                    <p class="mb-8 text-body-color lg:mb-11">
                        {!! substr ($item->description, 0, 50)  !!}
                    </p>
                    <a href="javascript:void(0)" class="text-base font-medium text-body-color hover:text-primary">
                        Selengkapnya
                    </a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
