@extends('layouts.main')

@section('container')
    <div class="bg-[#1B1F22]">
        <div class="container mx-auto text-[13px] bg-[#1B1F22] text-white py-[9px] flex justify-between items-center">
            <div>
                <p>Indonesia</p>
            </div>
            <div class="flex gap-[20px]">
                <a href="#">Tentang JasaKu</a>
                <a href="#">Mitra JasaKu</a>
                <a href="#">JasaKu Care</a>
                <a href="#">Edukasi Mitra</a>
            </div>
        </div>
    </div>
    @include('components.navbar2')
    <div class="hero border py-[20px]">
        <div class="banner container mx-auto">
            <div class="content flex flex-col w-[500px] gap-[20px]">
                <p class="text-center text-[35px] font-medium text-white">Find the right freelance<br>service, right away
                </p>
                <input type="search" name="" id="" class="p-[12px] text-[15px] rounded-md"
                    placeholder="Search for any service...">
            </div>
        </div>
    </div>
    <div class="categories py-[10px]">
        <div class="row container mx-auto grid grid-cols-8 gap-[10px]">
            <div class="col">
                <img src="assets/icons/cat (1).png" alt="">
                <p>Bussiness</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (2).png" alt="">
                <p>Consulting</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (3).png" alt="">
                <p>Digital Marketing</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (4).png" alt="">
                <p>Grapics and Design</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (5).png" alt="">
                <p>Music and Audio</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (6).png" alt="">
                <p>Programming and Tech</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (7).png" alt="">
                <p>Video and Animation</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (8).png" alt="">
                <p>Writing and Translation</p>
            </div>
        </div>
    </div>
    <div class="services mt-[30px]">
        <div class="container mx-auto">
            <p class="text-[20px] font-semibold">explore the best services</p>
        </div>
        <div class="row container mx-auto py-[14px] flex gap-[10px]">
            @foreach ($products as $product)
                <a href="/service/productDetail/{{ $product['_id'] }}">
                    <div class="box border w-[205px] rounded-[7px]">
                        <img src="{{ asset('storage/' . $product['image']) }}" alt=""
                            class="rounded-tr-[7px] rounded-tl-[7px] h-[135px] w-[203px]">
                        <div class="p-[7px] mt-[5px]">
                            <p class="text-[14px] font-medium line-clamp-2">{{ $product['project_name'] }}</p>
                            <p class="text-[12px] line-clamp-1 mt-[5px] text-gray-400">{{ $product['project_description'] }}
                            </p>
                            <p class="text-[13px] font-medium text-end mt-[5px]">From Rp.{{ $product['project_cost'] }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
