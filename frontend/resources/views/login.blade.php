@extends('layouts.main')

@section('container')
    <div class="bg-[#E9F1FA] w-[100%] h-[100vh] flex justify-center items-center">
        <div class="bg-white p-[16px] shadow-md rounded-tl-[7px] rounded-br-[7px] w-[370px] flex flex-col">
            <p class="font-semibold text-[20px] text-center">Login</p>
            <p class="text-[13px] mt-[5px] text-center">Hey, Enter your details to get sign In<br>to your account</p>
            <form action="/login" method="post" class="flex flex-col gap-[8px] my-4">
                @csrf
                <label for="username" class="text-[12px]">Username</label>
                <input type="text" name="username" id="username"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px]" required autofocus>
                <label for="password" class="text-[12px]">Password</label>
                <input type="password" name="password" id="password"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px]" required>
                <div class="flex justify-between items-center my-2">
                    <div class="flex gap-[4px]">
                        <input type="checkbox" name="remember" id="remember">
                        <p class="font-medium text-[11px]">Remember Me</p>
                    </div>
                    <a href="#" class="text-[11px] font-medium">Forget Password ?</a>
                </div>
                <button type="submit"
                    class="text-[13px] border py-[9px] font-semibold bg-[#00ABE4] text-white rounded-tl-[7px] rounded-br-[7px]">Sign
                    In</button>
            </form>
            <p class="text-[11px] text-center font-medium">-- Or Sign In with --</p>
            <div class="flex justify-between mt-4">
                <a href="#"
                    class="flex gap-[5px] items-center font-medium border px-[17px] py-[7px] rounded-tl-[6px] rounded-br-[6px]">
                    <img src="assets/icons/search.png" alt="" class="w-[17px]">
                    <p class="text-[12px]">Google</p>
                </a>
                <a href="#"
                    class="flex gap-[5px] items-center font-medium border px-[17px] py-[7px] rounded-tl-[6px] rounded-br-[6px]">
                    <img src="assets/icons/facebook.png" alt="" class="w-[17px]">
                    <p class="text-[12px]">Facebook</p>
                </a>
                <a href="#"
                    class="flex gap-[5px] items-center font-medium border px-[17px] py-[7px] rounded-tl-[6px] rounded-br-[6px]">
                    <img src="assets/icons/apple-logo.png" alt="" class="w-[17px]">
                    <p class="text-[12px]">Apple ID</p>
                </a>
            </div>
            <p class="text-[11px] mt-5 text-center">Dont have an account ? <a href="/signup" class="font-semibold">Sign
                    Up</a>
            </p>
        </div>
    </div>
@endsection
