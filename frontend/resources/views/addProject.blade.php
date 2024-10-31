@extends('layouts.main')

@section('container')
    @include('components.navbar2')
    <div class="w-full flex justify-center items-center bg-[#f7f7f7]">
        <form method="post" action="/saveProduct" class="w-[777px] my-[10px] flex flex-col gap-[15px]"
            enctype="multipart/form-data">

            @csrf

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

                {{-- product Industry --}}
                <div class="row flex gap-[15px] items-center">
                    <div class="col">
                        <div class="w-[242px]">
                            <p class="text-[14px] mb-[3px] font-medium">Project Industry</p>
                            <p class="text-[13px]">Choose the category and sub-category most suitable for your Project.</p>
                        </div>
                    </div>
                    <input type="text" name="industry" id="industry" class="border text-[14px] p-[5px]">
                </div>

                {{-- Project Duration --}}
                <div class="row flex gap-[15px] items-center">
                    <div class="col w-[242px]">
                        <p class="text-[14px] font-medium">Project Duration</p>
                    </div>
                    <input type="text" name="duration" id="duration" class="border text-[14px] p-[5px]">
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
                <input type="file" name="image" id="image">
            </div>

            <input type="hidden" name="user_id" value="{{ session('id') }}">
            <input type="hidden" name="phoneNumber" value="{{ session('phoneNumber') }}">

            <div>
                <button type="submit"
                    class="float-right text-[15px] px-[30px] py-[6px] bg-blue-400 rounded-[3px]">Save</button>
            </div>
        </form>
    </div>
@endsection
