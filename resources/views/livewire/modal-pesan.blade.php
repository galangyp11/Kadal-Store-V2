<div class="w-full">
    @if ($isModalOpen)
        <div class="fixed top-0 left-0 w-full h-full bg-black/60 z-20 flex justify-center items-center">
            <div class="w-[21em] h-[23em] bg-white rounded-lg p-4 flex flex-col justify-center items-center">
                <div class="w-full h-auto flex justify-center items-center mb-6">
                    <p class="text-lg font-semibold">Konfirmasi Pesanan</p>
                </div>

                <div class="w-full h-auto flex flex-col justify-center items-center">
                    <div class="grid grid-cols-7">
                        <p class="col-span-3 ">Nickname</p>
                        <p class="col-span-1">:</p>
                        <p class="col-span-3">Vada Sultenfus</p>
                    </div>
                    <div class="grid grid-cols-7">
                        <p class="col-span-3 ">Nickname</p>
                        <p class="col-span-1">:</p>
                        <p class="col-span-3">Vada Sultenfus</p>
                    </div>
                    <div class="grid grid-cols-7">
                        <p class="col-span-3 ">Nickname</p>
                        <p class="col-span-1">:</p>
                        <p class="col-span-3">Vada Sultenfus</p>
                    </div>                 
                </div>

                <div class="w-full grid grid-cols-2 flex-1 items-end ">
                    <div class="col-span-1 pr-2">
                        <button wire:click="closeModal" class="bg-red-500 rounded-lg w-full active:brightness-[.97] active:scale-[.97] transition ease-in-out h-fit py-1 text-white font-semibold">Batal</button>
                    </div>
                    <div class="col-span-1 pl-2">
                        <button class="bg-[#63B619] active:brightness-[.97] active:scale-[.97] transition ease-in-out rounded-lg w-full h-fit py-1 text-white font-semibold">Bayar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="w-full h-auto flex justify-center items-center">
        <button wire:click="openModal" class="rounded-lg bg-[#63B619] w-full h-10 active:brightness-[.97] active:scale-[.97] transition ease-in-out text-white font-semibold hover:brightness-90">Pesan</button>
    </div>

</div>
