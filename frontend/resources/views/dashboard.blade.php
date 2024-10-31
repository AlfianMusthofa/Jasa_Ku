@extends('layouts.main')

@section('container')
    @include('components.navbar2')
    <div class="bg-[#f7f7f7]">
        <div class="container mx-auto py-[10px]">
            <div class="flex gap-[10px]">
                {{-- Left --}}
                <div class="flex flex-col gap-[10px] w-[500px]">
                    {{-- Profile --}}
                    <div class="col bg-white">
                        <div class="border flex flex-col justify-center items-center p-[15px]">
                            <img src="assets/icons/user.png" alt="" class="border w-[150px] rounded-full">
                            <div class="flex items-center text-[17px] my-[20px]">
                                <p>@</p>
                                <p>{{ session('username') }}</p>
                            </div>
                            <div class=" flex flex-col w-full gap-[8px] text-[14px]">
                                <div class="row">
                                    <div class="col flex justify-between items-center">
                                        <p>From</p>
                                        <p>Indonesia</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col flex justify-between items-center">
                                        <p>Member since</p>
                                        <p>2024</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#"
                                class="text-[13px] border w-full text-center py-[8px] mt-[15px] rounded-md hover:bg-[#00ABE4] hover:text-white">Preview
                                JasaKu
                                Profile</a>
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Description</p>
                        @if (session('userDescription'))
                            <p class="text-[13px] mt-[10px] text-justify">{{ session('userDescription') }}</p>
                        @else
                            <p class="text-[13px] text-gray-400 mt-[10px] italic">No description available. Please add your
                                description in
                                your profile.</p>
                        @endif
                    </div>

                    {{-- Languages --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Languages</p>
                        <div class="text-[13px] mt-[10px]">
                            @if (session('userLanguages') && count(session('userLanguages')) > 0)
                                @foreach (session('userLanguages') as $language)
                                    <p>{{ $language }}</p>
                                @endforeach
                            @else
                                <p class="text-[13px] text-gray-400 italic">No languages available. Please add your
                                    languages in
                                    your profile.</p>
                            @endif
                        </div>
                    </div>

                    {{-- Skills --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Skills</p>
                        <div class="text-[13px] mt-[10px] flex gap-[5px] flex-wrap">
                            @if (session('userSkills') && count(session('userSkills')) > 0)
                                @foreach (session('userSkills') as $skill)
                                    <p class="border p-[6px] rounded-md">{{ $skill }}</p>
                                @endforeach
                            @else
                                <p class="text-[13px] text-gray-400 italic">No skills added. Please add your skills in
                                    your profile.</p>
                            @endif
                        </div>
                    </div>

                    {{-- Certification --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Certification</p>
                        <div class="text-[13px] mt-[10px] flex flex-col gap-[10px]">
                            <div>
                                <p class="font-medium">Intern Web Development</p>
                                <div class="flex gap-[5px] text-[12px]">
                                    <p>Google</p>
                                    <p>2015</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="text-[13px] border text-center py-[4px] hover:bg-[#00ABE4] hover:text-white">Edit
                        preferences</a>
                </div>

                {{-- Right --}}
                <div class="gigs col w-full">
                    <div class="row grid grid-cols-2 gap-[10px]">
                        <a href="/dashboard/productPage">
                            <div class="gig col border flex gap-[5px] flex-col bg-white p-[7px]">
                                <div class="row flex gap-[10px] items-center">
                                    <img src="assets/card.jpg" alt="">
                                    <p class="text-[14px] font-medium">I will edit your youtube & shorts videos</p>
                                </div>
                                <div class="row">
                                    <p class="text-[12px] line-clamp-3 mt-[3px] text-gray-400">Lorem ipsum dolor sit amet
                                        consectetur,
                                        adipisicing
                                        elit. Sint, asperiores. Aut harum, maiores, praesentium sunt itaque voluptate
                                        tenetur, expedita neque repellat deserunt natus magni illo vitae! Dolorem aspernatur
                                        veniam incidunt?</p>
                                </div>
                                <div class="flex items-center gap-2 text-[12px] font-medium mt-[5px]">
                                    <p>Starting at</p>
                                    <p>Rp.100.000</p>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard/addProductPage">
                            <div class="addGigs h-full flex flex-col gap-[10px] justify-center items-center bg-white">
                                <img src="assets/icons/plus.png" alt="">
                                <h1 class="text-[12px]">Add new Project</h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
