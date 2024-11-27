<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kadal Store</title>
</head>
<body class="bg-gray-50 lg:container">
    @include('components.navbar')
    <div class="w-full h-auto min-h-screen flex justify-center">
        <div class="w-[55em] h-auto grid grid-cols-6 gap-4">
            <div class="col-span-2 w-full h-fit rounded-lg shadow-[0px_0px_1px_1px_#F1F1F1] bg-white flex flex-col justify-center items-center sticky top-20 gap-4 p-4">
                <div class="bg-gray-300 rounded-lg w-full h-[8em]"></div>
                <div class="flex justify-start gap-4 w-full">
                    <div class="w-[5em] h-[5em] bg-gray-300 rounded-lg"></div>
                    <p>{{$apl->apl_name}}</p>
                </div>
                <p class="font-semibold text-sm text-gray-600">Cara Top Up :</p>
                <ol class="text-sm text-gray-600 list-decimal mx-4">
                    <li>Masukkan Id dan Server akun game kamu</li>
                    <li>Pilih jumlah diamond yang kamu inginkan</li>
                    <li>Pilih metode pembayaran</li>
                    <li>Konfirmasi pembelian kemudian melakukan pembayaran</li>
                    <li>Top Up telah selesai yeay</li>
                </ol>
            </div>
            <div class="col-span-4 w-full h-fit rounded-lg shadow-[0px_0px_1px_1px_#F1F1F1] bg-white flex flex-col justify-center items-center gap-4 p-4">
                <div class="w-full h-auto flex gap-4 items-center">
                    <div class="rounded-full bg-[#63B619] flex justify-center items-center w-6 h-6 p-1">
                        <p class="font-semibold text-white">1</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <p>ID</p>
                        <input type="text" placeholder="12345678" class="bg-gray-100 rounded-md w-[13em] shadow-[0px_0px_1px_1px_#F1F1F1] focus:outline-gray-400 p-1" >
                    </div>
                    <div class="flex items-center gap-4">
                        <p>Server</p>
                        <input type="text" placeholder="1234" class="bg-gray-100 rounded-md w-[6em] shadow-[0px_0px_1px_1px_#F1F1F1] focus:outline-gray-400 p-1" >
                    </div>
                </div>

                <div class="w-full h-auto">
                    <div class="flex gap-4 items-center w-full h-auto">
                        <div class="rounded-full bg-[#63B619] flex justify-center items-center w-6 h-6 p-1">
                            <p class="font-semibold text-white">2</p>
                        </div>
                        <p>Pilih Diamond</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @include('components.footer')
</body>
</html>
