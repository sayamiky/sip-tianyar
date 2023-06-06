<section id="about" class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] bg-[#f3f4fe]">
    <div class="container">
        <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="items-center justify-between overflow-hidden border lg:flex">
                        <div
                            class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[7]">
                            <span class="inline-block px-5 py-2 mb-5 text-sm font-medium text-white rounded bg-primary">
                                {{ $village->description['name'] }}
                            </span>
                            <p class="text-base leading-relaxed text-justify text-body-color mb-9">
                                {!! $village->description['description'] !!}
                            </p>
                        </div>
                        <div class="text-center">
                            <div class="relative z-10 inline-block">
                                <img src="{{ asset('assets/web/images/about/about-image.svg') }}" alt="image"
                                    class="mx-auto lg:ml-auto" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
