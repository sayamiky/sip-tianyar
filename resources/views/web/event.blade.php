<x-app-layout>
    <x-navbar />
    <!-- ====== Banner Section Start -->
    <div class="relative z-10 pt-[120px] md:pt-[130px] lg:pt-[160px] pb-[100px] bg-primary overflow-hidden">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center">
                        <h1 class="text-4xl font-semibold text-white">Tradisi</h1>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute top-0 left-0 z-[-1]">
                <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04"
                        stroke-width="50" />
                    <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                    <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white"
                        stroke-opacity="0.08" stroke-width="12" />
                </svg>
            </span>
            <span class="absolute top-0 right-0 z-[-1]">
                <svg width="493" height="470" viewBox="0 0 493 470" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04"
                        stroke-width="50" />
                    <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04"
                        stroke-width="20" />
                    <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white"
                        stroke-opacity="0.06" stroke-width="13" />
                </svg>
            </span>
        </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== event Section Start -->
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                @foreach ($events as $event)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                            <div class="mb-8 overflow-hidden rounded">
                                <a href="/traditions/{{ $event->id }}" class="block">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="image"
                                        class="object-cover w-[500px] h-[250px] transition group-hover:scale-125 group-hover:rotate-6"
                                        style="
                                width: 500px;
                                height: 250px;
                            " />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary">
                                    {{ Carbon\Carbon::parse($event->created_at)->diffForHumans() }}
                                </span>
                                <h3>
                                    <a href="/traditions/{{ $event->id }}"
                                        class="inline-block mb-4 text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl text-dark hover:text-primary">
                                        {{ $event->name }}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color">
                                    {{ substr($event->description, 0, 50) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <x-footer />
</x-app-layout>
