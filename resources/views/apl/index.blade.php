<div class="w-full h-auto flex justify-center items-center">
    <div class="lg:w-[55em] h-auto min-h-80 grid grid-cols-4 gap-4">
        @foreach ($apls as $apl)
        <div class="col-span-1 w-full h-fit flex justify-center items-center">
            <a href="{{route('apl.viewapl', $apl)}}">
                <div class="lg:cursor-pointer group w-fit h-fit p-2 rounded-lg flex flex-col items-center gap-2">
                    <img src={{$apl->apl_icon}} class="rounded-lg w-[5em] h-[5em] hover:scale-[1.03] active:scale-[.97] transition ease-in-out" alt="">
                    <p class="text-[#00371E] text-center group-hover:text-[#65B71A]">{{$apl->apl_name}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>    

