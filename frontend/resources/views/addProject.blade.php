@extends('layouts.main')

@section('container')
    @include('components.navbar2')
    <div class="w-full flex justify-center items-center bg-[#f7f7f7]">
        <form class="w-[777px] my-[10px] flex flex-col gap-[15px]">

            {{-- Overview --}}
            <div class="row flex flex-col gap-[24px] border p-[10px] bg-white">
                <div class="flex items-center gap-[10px]">
                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#1dbf73] text-white">
                        <p>1</p>
                    </div>
                    <p class="text-[14px] font-medium">Overview</p>
                </div>
                <div class="row flex gap-[15px]">
                    <div class="col">
                        <div class="w-[242px]">
                            <p class="text-[14px] mb-[3px] font-medium">Project Title</p>
                            <p class="text-[13px]">As your Gig storefront, your title is the most important place to include
                                keywords that buyers would likely use to search for a service like yours.</p>
                        </div>
                    </div>
                    <textarea name="projectTitle" id="" cols="30" rows="3" maxlength="80"
                        class="border p-[5px] text-[14px] w-full" placeholder="I will do.."></textarea>
                </div>

                {{-- product Category --}}
                <div class="row flex gap-[15px] items-center">
                    <div class="col">
                        <div class="w-[242px]">
                            <p class="text-[14px] mb-[3px] font-medium">Project Industry</p>
                            <p class="text-[13px]">Choose the category and sub-category most suitable for your Project.</p>
                        </div>
                    </div>
                </div>

                {{-- Project Duration --}}
                <div class="row flex gap-[15px] items-center">
                    <div class="col w-[242px]">
                        <p class="text-[14px] font-medium">Project Duration</p>
                    </div>
                    <button class="text-[13px] border p-[7px] rounded-md w-[150px]" id="durationProjectBtn">Select
                        duration</button>
                </div>

                {{-- Pricing --}}
                <div class="row flex items-center gap-[15px]">
                    <div class="col w-[242px]">
                        <p class="text-[14px] font-medium">Price</p>
                    </div>
                    <input type="number" name="price" id="price" class="border text-[14px] p-[5px]">
                </div>
            </div>

            {{-- Description --}}
            <div class="border p-[10px] flex flex-col gap-[24px] bg-white">
                <div class="flex items-center gap-[10px]">
                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#1dbf73] text-white">
                        <p>2</p>
                    </div>
                    <p class="text-[14px] font-medium">Description</p>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="text-[14px] font-medium">Briefly Describe Your Project</p>
                    <textarea name="description" id="" cols="30" rows="10" class="border p-[5px] text-[14px] w-full"
                        maxlength="1200"></textarea>
                </div>
            </div>

            {{-- Images --}}
            <div class="border p-[10px] flex flex-col gap-[24px] bg-white">
                <div class="flex items-center gap-[10px]">
                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#1dbf73] text-white">
                        <p>3</p>
                    </div>
                    <p class="text-[14px] font-medium">Images</p>
                </div>
                <div class="row flex gap-[10px]">
                    <div class="col border w-[150px]">
                        <img src="{{ asset('assets/banner.jpg') }}" alt="">
                    </div>
                    <div class="projectImage border w-[150px] flex justify-center items-center flex-col text-[12px] gap-[5px] cursor-pointer"
                        id="projectImage">
                        <img src="{{ asset('assets/icons/plus.png') }}" alt="" class="w-[20px]">
                        <p>Add image</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
