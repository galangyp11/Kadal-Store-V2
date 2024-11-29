<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kadal Store</title>
</head>
<body class="bg-gray-100 lg:container">
    @include('components.navbar')
    <div class="w-full h-auto flex justify-center items-center gap-1 mb-2 -mt-2">
        <a href="{{route('home')}}">
        <img src="../img/icon_home.png" alt="homebread" class="w-[1em] h-[1em] lg:cursor-pointer" srcset="">
        </a>
        <p>></p>
        <p class="font-semibold text-sm lg:cursor-pointer hover:text-[#70BE1F]">{{$apl->apl_name}}</p> 
    </div>
    
    <div class="w-full h-auto min-h-screen flex justify-center lg:px-0 px-4 mb-4">
        <div class="lg:w-[55em] w-full h-auto lg:grid lg:grid-cols-6 flex flex-col gap-4">
            <div class="col-span-2 w-full h-fit rounded-lg shadow-[0px_0px_1px_1px_#F1F1F1] bg-white flex flex-col justify-center items-center lg:sticky lg:top-[6rem] gap-4 p-4">
                <div class="bg-gray-300 rounded-lg w-[250px] h-[8em]"></div>
                <div class="flex lg:justify-start justify-center gap-4 w-full">
                    <div class="w-[5em] h-[5em] bg-gray-300 rounded-lg"></div>
                    <p>{{$apl->apl_name}}</p>
                </div>
                <p class="font-semibold text-sm text-gray-600">Cara Top Up :</p>
                <ol class="w-[250px] text-sm text-gray-600 list-decimal px-4">
                    <li>Masukkan Id dan Server akun game kamu</li>
                    <li>Pilih jumlah diamond yang kamu inginkan</li>
                    <li>Pilih metode pembayaran</li>
                    <li>Masukan email untuk bukti pesanan dan riwayat pesanan</li>
                    <li>Konfirmasi pembelian kemudian melakukan pembayaran</li>
                    <li>Top Up telah selesai yeay</li>
                </ol>
            </div>

            <div class="col-span-4 w-full h-fit rounded-lg shadow-[0px_0px_1px_1px_#F1F1F1] bg-white p-4">
                <form action="" class="flex flex-col justify-center items-center w-full h-fit gap-7 mb-7" method="POST">
                @csrf
                <div class="w-full h-auto flex gap-4 lg:items-center">
                    <div class="rounded-full bg-[#63B619] flex justify-center items-center w-6 h-6 p-1">
                        <p class="font-semibold text-white">1</p>
                    </div>
                    <div class="w-full h-auto flex lg:flex-row flex-col gap-4">
                        <div class="flex items-center gap-4">
                            <p class="lg:w-fit w-12">ID</p>
                            <input type="text" placeholder="12345678" class="bg-gray-100 rounded-md w-[13em] h-fit shadow-[0px_0px_1px_1px_#F1F1F1] focus:outline-gray-400 px-2 py-1" >
                        </div>
                        <div class="flex items-center gap-4">
                            <p class="lg:w-fit w-12">Server</p>
                            <input type="text" placeholder="1234" class="bg-gray-100 rounded-md w-[8em] h-fit shadow-[0px_0px_1px_1px_#F1F1F1] focus:outline-gray-400 px-2 py-1" >
                        </div>
                    </div>
                </div>

                <div class="w-full h-auto flex flex-col gap-3">
                    <div class="flex gap-4 items-center w-full h-auto">
                        <div class="rounded-full bg-[#63B619] flex justify-center items-center w-6 h-6 p-1">
                            <p class="font-semibold text-white">2</p>
                        </div>
                        <p>Pilih Diamond :</p>
                    </div>

                    <div class="w-full h-auto grid md:grid-cols-3 grid-cols-2 gap-3">
                        <div class="col-span-1 w-full h-auto">
                            <input type="radio" id="11" class="hidden peer" name="diamond" value="11" {{ old('diamond') == '11' ? 'checked' : '' }}>
                            <label for="11" class="w-full h-16 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.97] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex justify-center items-center gap-2"> 
                                <img src="../img/icon_diamond.png" alt="diamond" class="w-[1.5em] h-[1.5em]" srcset="">
                                <p class="font-semibold">11 Diamonds</p> 
                            </label>
                        </div>
                        <div class="col-span-1 w-full h-auto">
                            <input type="radio" id="23" class="hidden peer" name="diamond" value="23" {{ old('diamond') == '23' ? 'checked' : '' }}>
                            <label for="23" class="w-full h-16 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.97] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex justify-center items-center gap-2"> 
                                <img src="../img/icon_diamond.png" alt="diamond" class="w-[1.5em] h-[1.5em]" srcset="">
                                <p class="font-semibold">23 Diamonds</p> 
                            </label>
                        </div>
                        <div class="col-span-1 w-full h-auto">
                            <input type="radio" id="37" class="hidden peer" name="diamond" value="37" {{ old('diamond') == '37' ? 'checked' : '' }}>
                            <label for="37" class="w-full h-16 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.97] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex justify-center items-center gap-2"> 
                                <img src="../img/icon_diamond.png" alt="diamond" class="w-[1.5em] h-[1.5em]" srcset="">
                                <p class="font-semibold">37 Diamonds</p> 
                            </label>
                        </div>
                        <div class="col-span-1 w-full h-auto">
                            <input type="radio" id="50" class="hidden peer" name="diamond" value="50" {{ old('diamond') == '50' ? 'checked' : '' }}>
                            <label for="50" class="w-full h-16 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.97] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex justify-center items-center gap-2"> 
                                <img src="../img/icon_diamond.png" alt="diamond" class="w-[1.5em] h-[1.5em]" srcset="">
                                <p class="font-semibold">50 Diamonds</p> 
                            </label>
                        </div>
                        <div class="col-span-1 w-full h-auto">
                            <input type="radio" id="77" class="hidden peer" name="diamond" value="77" {{ old('diamond') == '77' ? 'checked' : '' }}>
                            <label for="77" class="w-full h-16 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.97] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex justify-center items-center gap-2"> 
                                <img src="../img/icon_diamond.png" alt="diamond" class="w-[1.5em] h-[1.5em]" srcset="">
                                <p class="font-semibold">77 Diamonds</p> 
                            </label>
                        </div>
                        <div class="col-span-1 w-full h-auto">
                            <input type="radio" id="100" class="hidden peer" name="diamond" value="100" {{ old('diamond') == '100' ? 'checked' : '' }}>
                            <label for="100" class="w-full h-16 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.97] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex justify-center items-center gap-2"> 
                                <img src="../img/icon_diamond.png" alt="diamond" class="w-[1.5em] h-[1.5em]" srcset="">
                                <p class="font-semibold">100 Diamonds</p> 
                            </label>
                        </div>
                    </div>
                </div>

                <div class="w-full h-auto flex flex-col gap-3">
                    <div class="flex gap-4 items-center w-full h-auto">
                        <div class="rounded-full bg-[#63B619] flex justify-center items-center w-6 h-6 p-1">
                            <p class="font-semibold text-white">3</p>
                        </div>
                        <p>Pilih Metode Pembayaran :</p>
                    </div>
                    <div class="w-full h-auto flex flex-col gap-3">
                        @foreach ( $payments as $payment )
                        <div class="w-full h-auto ">
                            <input type="radio" id={{$payment->payment_name}} class="hidden peer" name="payment" value={{$payment->payment_name}} {{ old('payment') == '$payment->payment_name' ? 'checked' : '' }}>
                            <label for={{$payment->payment_name}} class="w-full h-14 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.98] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex items-center gap-4 px-6">
                                <img src={{$payment->payment_icon}} alt="payment bca" class="w-auto h-[1.5em]" srcset="">
                                <p class="font-semibold">{{$payment->payment_name}}</p> 
                            </label>
                        </div>
                        @endforeach
                        {{-- <div class="w-full h-auto ">
                            <input type="radio" id="bca" class="hidden peer" name="payment" value="bca" {{ old('payment') == 'bca' ? 'checked' : '' }}>
                            <label for="bca" class="w-full h-14 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.98] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex items-center gap-4 px-6">
                                <img src="../img/icon_bca.png" alt="payment bca" class="w-auto h-[1.5em]" srcset="">
                                <p class="font-semibold">BCA</p> 
                            </label>
                        </div>
                        <div class="w-full h-auto ">
                            <input type="radio" id="dana" class="hidden peer" name="payment" value="dana" {{ old('payment') == 'dana' ? 'checked' : '' }}>
                            <label for="dana" class="w-full h-14 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.98] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex items-center gap-4 px-6">
                                <img src="../img/icon_dana.png" alt="payment dana" class="w-auto h-[1.5em]" srcset="">
                                <p class="font-semibold">DANA</p> 
                            </label>
                        </div>
                        <div class="w-full h-auto ">
                            <input type="radio" id="qris" class="hidden peer" name="payment" value="qris" {{ old('payment') == 'qris' ? 'checked' : '' }}>
                            <label for="qris" class="w-full h-14 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.98] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex items-center gap-4 px-6">
                                <img src="../img/icon_qris.png" alt="payment qris" class="w-auto h-[1.5em]" srcset="">
                                <p class="font-semibold">QRIS</p> 
                            </label>
                        </div>
                        <div class="w-full h-auto ">
                            <input type="radio" id="gopay" class="hidden peer" name="payment" value="gopay" {{ old('payment') == 'gopay' ? 'checked' : '' }}>
                            <label for="gopay" class="w-full h-14 shadow-[0px_1px_0px_2px_#F1F1F1] lg:cursor-pointer active:brightness-[.97] active:scale-[.98] transition ease-in-out hover:shadow-[0px_0px_1px_1px_#63B619] peer-checked:shadow-[0px_0px_0px_1px_#63B619] bg-white rounded-lg flex items-center gap-4 px-6">
                                <img src="../img/icon_gopay.png" alt="payment gopay" class="w-auto h-[1.5em]" srcset="">
                                <p class="font-semibold">GoPay</p> 
                            </label>
                        </div> --}}
                    </div>
                </div>

                <div class="w-full h-auto flex flex-col gap-3">
                    <div class="flex gap-4 items-center w-full h-auto">
                        <div class="rounded-full bg-[#63B619] flex justify-center items-center w-6 h-6 p-1">
                            <p class="font-semibold text-white">4</p>
                        </div>
                       
                        <div class="flex items-center w-full gap-4">
                            <p>Email</p>
                            <input type="text" placeholder="xyz@gmail.com" class="bg-gray-100 rounded-md w-full h-fit shadow-[0px_0px_1px_1px_#F1F1F1] focus:outline-gray-400 px-2 py-1" >
                        </div>
                    </div>
                </div>
                </form>
                @livewire('modal-pesan')
            </div>
        </div>
    </div>
   @include('components.footer')
</body>
</html>
