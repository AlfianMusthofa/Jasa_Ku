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
                            <img src="{{ asset('storage/' . session('userImage')) }}" alt=""
                                class="w-[60px] h-[60px] rounded-full">
                        </div>
                        <div class="col">
                            <p class="text-[16px]">{{ session('username') }}</p>
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
                <img src="{{ asset('storage/' . $project['image']) }}" alt="" class="mt-[20px] w-[539px] h-[359px]">

                {{-- Project Desc --}}
                <div class="mt-[20px]">
                    <p class="text-[16px] font-medium">About this project</p>
                    <p class="text-[15px] mt-[5px] text-gray-400 pb-[20px] border-b">{{ $project['project_description'] }}
                    </p>
                </div>
                <div class="pt-[20px]">
                    <p class="text-[14px] font-medium">Category</p>
                    <p class="text-gray-400">{{ $project['industry'] }}</p>
                </div>

                {{-- Detail --}}
                <div class="mt-[20px] border p-[10px]">
                    <div class="pb-[15px] border-b">
                        <div class="row">
                            <div>
                                <p class="text-[16px] text-[#777981]">From</p>
                                <p class="font-medium text-[14px]">{{ session('userCountry') }}</p>
                            </div>
                            <div class="mt-[10px]">
                                <p class="text-[16px] text-[#777981]">Languages</p>
                                <p class="font-medium text-[14px]">{{ session('userLanguages') }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-[10px]">
                                <p class="text-[16px] text-[#777981]">Member since</p>
                                <p class="font-medium text-[14px]">2024</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-[14px] pt-[15px] text-[#adaeb2]">{{ session('userDescription') }}</p>
                    </div>
                </div>
            </div>
            {{-- Kanan --}}
            <div class="col w-[500px]">
                <div class="mb-[10px]">
                    <a href="/projectEdit/{{ $project['_id'] }}"><img src="{{ asset('assets/icons/pen.png') }}"
                            alt="" class="w-[25px]"></a>
                </div>
                <div class="buyBox p-[10px]">
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
                    <a href="#">
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
@endsection
