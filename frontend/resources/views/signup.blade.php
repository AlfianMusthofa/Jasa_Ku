@extends('layouts.main')

@section('container')
    <div class="bg-[#E9F1FA] w-[100%] h-[100vh] flex justify-center items-center">
        <div class="border bg-[#00ABE4] p-[16px] shadow-md rounded-tl-[10px] rounded-br-[10px]">
            <h1 class="text-center font-semibold text-white text-[18px] mb-[8px]">Sign Up</h1>
            <form action="/signup" method="post" class="flex flex-col gap-[8px] w-[330px]">
                @csrf
                <label for="username" class="text-[12px] text-white">Username</label>
                <input type="text" name="username" id="username"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px] outline-none" required autofocus>
                <label for="password" class="text-[12px] text-white">Password</label>
                <input type="password" name="password" id="password"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px] outline-none" required>
                <label for="date" class="text-[12px] text-white">Date Born</label>
                <input type="date" name="date" id="date"
                    class="p-[7px] rounded-tl-[7px] rounded-br-[7px] required text-[14px]">
                <label for="phonenumber" class="text-[12px] text-white">No.Hp</label>
                <input type="number" name="phonenumber" id="phonenumber"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px] outline-none" required>
                <label for="gender" class="text-[12px] text-white">Gender</label>
                <div class="flex justify-between items-center mb-[10px]">
                    <div class="bg-white text-[#00ABE4] text-[14px] px-[50px] py-[6px] font-medium cursor-pointer rounded-tl-[5px] rounded-br-[5px]"
                        id="gender1">
                        <p>Laki-laki</p>
                    </div>
                    <div class="bg-white text-[#00ABE4] text-[14px] px-[40px] py-[6px] font-medium cursor-pointer rounded-tl-[5px] rounded-br-[5px]"
                        id="gender2">
                        <p>Perempuan</p>
                    </div>
                </div>
                <input type="hidden" name="gender" value="" id="selectedGender">
                <button type="submit"
                    class="text-[13px] py-[9px] font-bold bg-white text-[#00ABE4] rounded-tl-[7px] rounded-br-[7px]">Sign
                    Up</button>
            </form>
            <p class="text-[11px] mt-5 text-center text-white">Have an account ? <a href="/loginPage"
                    class="font-semibold">Sign
                    In</a>
            </p>
        </div>
    </div>
@endsection
