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
                    {{-- <input type="text" name="industry" id="industry" class="border text-[14px] p-[5px]"> --}}
                    <div class="w-full">
                        <button type="button" class="text-[13px] border w-[300px] text-start pl-[10px] py-[7px]"
                            id="industryBtn">Select
                            industry</button>
                        <ul class="absolute bg-white mt-[5px] border z-[1] max-h-[102px] overflow-y-auto hidden"
                            id="industryList">
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Teks Translation">
                                Teks Translation</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Video & Animation">
                                Video & Animation</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Graphic & Desain">
                                Graphic & Desain</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Finance">
                                Finance</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Programming & Tech">
                                Programming & Tech</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Music & Audio">
                                Music & Audio</li>
                        </ul>
                        <input type="hidden" name="industry" id="industry">
                    </div>
                </div>

                {{-- Project Duration --}}
                <div class="row flex gap-[15px] items-center">
                    <div class="col w-[242px]">
                        <p class="text-[14px] font-medium">Project Duration</p>
                    </div>
                    {{-- <input type="text" name="duration" id="duration" class="border text-[14px] p-[5px]"> --}}
                    <div class="mt-[10px] relative">
                        <button class="text-[13px] border py-[7px] px-[50px] bg-white" id="durationBtn"
                            type="button">Select
                            duration</button>
                        <ul class="absolute border w-full mt-[5px] bg-white hidden" id="durationList">
                            <li class="text-[13px] pl-[10px] py-[5px] cursor-pointer hover:bg-slate-300 bg-white"
                                data-value="1-7 days">
                                1-7 days</li>
                            <li class="text-[13px] pl-[10px] py-[5px] cursor-pointer hover:bg-slate-300 bg-white"
                                data-value="2 weeks">
                                2 weeks</li>
                            <li class="text-[13px] pl-[10px] py-[5px] cursor-pointer hover:bg-slate-300 bg-white"
                                data-value="3 weeks">
                                3 weeks</li>
                            <li class="text-[13px] pl-[10px] py-[5px] cursor-pointer hover:bg-slate-300 bg-white"
                                data-value="1 month">
                                1 month</li>
                        </ul>
                    </div>
                    <input type="hidden" name="duration" id="duration">
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
            <input type="hidden" name="user_username" value="{{ session('username') }}">
            <input type="hidden" name="user_description" value="{{ session('userDescription') }}">
            <input type="hidden" name="user_languages" value="{{ session('userLanguages') }}">
            <input type="hidden" name="user_location" value="Indonesia">
            <input type="hidden" name="user_memberSince" value="2024">

            <div>
                <button type="submit"
                    class="float-right text-[15px] px-[30px] py-[6px] bg-blue-400 rounded-[3px]">Save</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const durationBtn1 = document.getElementById('durationBtn')
            const durationList = document.getElementById('durationList')
            const selectedDuration = document.getElementById('duration')
            const industryBtn = document.getElementById('industryBtn')
            const industryList = document.getElementById('industryList')
            const selectedIndustry = document.getElementById('industry')

            durationBtn1.addEventListener('click', () => {
                durationList.classList.toggle('hidden')
            })

            document.querySelectorAll('#durationList li').forEach(item => {
                item.addEventListener('click', () => {
                    const durationValue = item.getAttribute('data-value');
                    durationBtn1.textContent = durationValue
                    selectedDuration.value = durationValue;
                    durationList.classList.add('hidden')
                })
            })

            industryBtn.addEventListener('click', () => {
                industryList.classList.toggle('hidden')
            })

            document.querySelectorAll('#industryList li').forEach(item => {
                item.addEventListener('click', () => {
                    const industryValue = item.getAttribute('data-value');
                    industryBtn.textContent = industryValue
                    selectedIndustry.value = industryValue;
                    industryList.classList.add('hidden')
                })
            })
        })
    </script>
@endsection
