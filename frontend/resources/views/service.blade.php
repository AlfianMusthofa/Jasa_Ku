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
    <div class="border">
        <div class=" container mx-auto flex justify-between items-center py-[20px]">
            <a href="#">JasaKu</a>
            <div class="navlink flex items-center gap-[18px]">
                <a href="#"><img src="assets/icons/history.png" alt=""></a>
                <a href="#"><img src="assets/icons/messenger.png" alt=""></a>
                <a href="#"><img src="assets/icons/user.png" alt=""></a>
            </div>
        </div>
    </div>
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
@endsection
