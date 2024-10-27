@extends('layouts.main')

@section('container')
    @include('components.navbar2')
    <div class="bg-[#f7f7f7]">
        <div class="container mx-auto py-[10px]">
            <div class="flex gap-[20px]">
                {{-- Left --}}
                <div class="flex flex-col gap-[10px] w-[600px]">
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
                        <p class="text-[13px] mt-[10px] text-justify"> Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. A aliquam nesciunt nostrum dolore amet id delectus enim. Tenetur totam harum dolorem ullam
                            optio, voluptatem placeat ipsum modi cupiditate magni ipsam. AYO AYO GANY*** ****</p>
                    </div>

                    {{-- Languages --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Languages</p>
                        <div class="text-[13px] mt-[10px]">
                            <p>Indonesian</p>
                        </div>
                    </div>

                    {{-- Skills --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Skills</p>
                        <div class="text-[13px] mt-[10px] flex gap-[5px]">
                            <p class="border p-[6px] rounded-md">Web Development</p>
                            <p class="border p-[6px] rounded-md">3D Student</p>
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
                <div class="col border w-full">
                    <h1>Hlwo owrl</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="footer container mx-auto my-[20px]">
        <div class="row grid grid-cols-5 gap-[10px]">
            <div class="col flex flex-col gap-[10px]">
                <p class="text-[15px] font-semibold mb-[7px]">Categories</p>
                <a href="#">Graphics & Design</a>
                <a href="#">Digital Marketing</a>
                <a href="#">Writing & Translation</a>
                <a href="#">Video & Animation</a>
                <a href="#">Music & Audio</a>
                <a href="#">Programming & Tech</a>
                <a href="#">Data</a>
                <a href="#">Business</a>
                <a href="#">Photography</a>
            </div>
            <div class="col flex flex-col gap-[10px]">
                <p class="text-[15px] font-semibold mb-[7px]">About</p>
                <a href="#">Careers</a>
                <a href="#">Press & Newss</a>
                <a href="#">Partnerships</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Intelectual Property Claims</a>
                <a href="#">Investor Relations</a>
            </div>
            <div class="col flex flex-col gap-[10px]">
                <p class="text-[15px] font-semibold mb-[7px]">Support & Education</p>
                <a href="#">Help & Support</a>
                <a href="#">Trust & Safety</a>
                <a href="#">Quality Guide</a>
                <a href="#">Selling on JasaKu</a>
                <a href="#">Buying on JasaKu</a>
                <a href="#">JasaKu Guide</a>
                <a href="#">Learn</a>
            </div>
            <div class="col flex flex-col gap-[10px]">
                <p class="text-[15px] font-semibold mb-[7px]">Community</p>
                <a href="#">Success Stories</a>
                <a href="#">Community Hub</a>
                <a href="#">Forus</a>
                <a href="#">Events</a>
                <a href="#">Blog</a>
                <a href="#">Creators</a>
                <a href="#">Affiliates</a>
                <a href="#">Podcast</a>
                <a href="#">Invite a friend</a>
                <a href="#">Become a seller</a>
                <a href="#">Community Standars</a>
            </div>
            <div class="col flex flex-col gap-[10px]">
                <p class="text-[15px] font-semibold mb-[7px]">Business Solution</p>
                <a href="#">JasaKu Pro</a>
                <a href="#">Jasaku Certified</a>
                <a href="#">Become an Agency</a>
                <a href="#">JasaKu Enterprise</a>
                <a href="#">ClearVoice</a>
                <a href="#">Creators</a>
                <a href="#">Creative Talent</a>
                <a href="#">Contact Sales</a>
            </div>
        </div>
    </div>
@endsection
