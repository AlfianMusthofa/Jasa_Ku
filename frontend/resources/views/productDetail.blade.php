@extends('layouts.main')

@section('container')
    @include('components.navbar2')
    <div class="mb-[50px]">
        <div class="container mx-auto flex gap-[100px] mt-[20px]">
            {{-- Left --}}
            <div class="col w-[700px]">
                {{-- Overview --}}
                <div class="flex flex-col gap-[10px]">
                    <p class="text-[25px] font-medium">{{ $project['project_name'] }}</p>
                    <div class="row flex gap-[10px] items-center">
                        <div class="col">
                            <img src="{{ asset('storage/' . $project['user_image']) }}" alt=""
                                class="w-[60px] h-[60px] rounded-full">
                        </div>
                        <div class="col">
                            <p class="text-[16px]">{{ $project['user_username'] }}</p>
                            <div class="row flex gap-[5px] items-center">
                                <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[15px]">
                                <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[15px]">
                                <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[15px]">
                                <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[15px]">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Image --}}
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="{{ asset('storage/' . $project['image']) }}" alt=""
                            class="image1 mt-[20px] w-[683px] h-[359px]">
                    </div>
                    <div class="mySlides fade">
                        <img src="{{ asset('storage/' . $project['image2']) }}" alt=""
                            class="image2 w-[683px] h-[359px] mt-[20px]">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                {{-- Project Desc --}}
                <div class="mt-[20px]">
                    <p class="text-[16px] font-medium">About this project</p>
                    <p class="text-[14px] mt-[5px] text-[#6b6480] pb-[20px] border-b">{{ $project['project_description'] }}
                    </p>
                </div>
                <div class="pt-[20px]">
                    <p class="text-[14px] font-medium">Category</p>
                    <p class="text-[#6b6480]">{{ $project['industry'] }}</p>
                </div>

                {{-- Detail --}}
                <div class="mt-[20px] border p-[10px]">
                    <div class="pb-[15px] border-b">
                        <div class="row">
                            <div>
                                <p class="text-[15px] text-[#777981]">From</p>
                                <p class="font-medium text-[14px]">{{ $project['user_location'] }}</p>
                            </div>
                            <div class="mt-[10px]">
                                <p class="text-[15px] text-[#777981]">Languages</p>
                                <p class="font-medium text-[14px]">{{ $project['user_languages'][0] }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-[10px]">
                                <p class="text-[15px] text-[#777981]">Member since</p>
                                <p class="font-medium text-[14px]">2024</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-[14px] pt-[15px] text-[#6b6480]">{{ $project['user_description'] }}</p>
                    </div>
                </div>
            </div>
            {{-- Kanan --}}
            <div class="col w-[500px]">
                <div class="buyBox p-[10px] border shadow-md sticky top-[20px]">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-[14px] font-medium">Basic</p>
                            <p class="text-[#adaeb2] text-[15px]">{{ $project['industry'] }}</p>
                        </div>
                        <div>
                            <p>Rp.{{ $project['project_cost'] }}</p>
                        </div>
                    </div>
                    <div class="row mt-[12px] flex items-center gap-[8px]">
                        <img src="{{ asset('assets/icons/clock.png') }}" alt="" class="w-[14px]">
                        <p class="text-[13px] font-semibold">{{ $project['project_duration'] }}</p>
                    </div>
                    <a
                        href="https://wa.me/{{ $project['phoneNumber'] }}?text={{ urlencode('Hi, I want order "' . $project['project_name'] . '"') }}">
                        <div
                            class="orderBtn mt-[20px] text-[14px] p-[7px] flex gap-[7px] items-center justify-center font-medium rounded-[4px]">
                            <img src="{{ asset('assets/icons/whatsapp.png') }}" alt="" class="w-[20px] h-[20px]">
                            <p>Order by WhatsApp</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
@endsection
