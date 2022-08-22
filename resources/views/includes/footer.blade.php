<footer class="pb-10 mt-20">
    <div>
        <div class="h-[2px] mt-10 mb-10 w-full bg-[#242424]"></div>
        <div class="flex flex-row justify-between">
            <div class="flex flex-col">
                <x-text.subtitle class="text-white font-normal">
                    {{ __('Contacts') }}
                </x-text.subtitle>
                <p class="text-subwhite font-light leading-none pt-6
                phone:text-sm
                tablet:text-sm
                tablet-xl:text-sm
                laptop:text-base
                desktop:text-base
                desktop-xl:text-[1rem]
                ">
                    glebka@gmail.com
                </p>
                <p class="text-subwhite font-light leading-none pt-2
                phone:text-sm
                tablet:text-sm
                tablet-xl:text-sm
                laptop:text-base
                desktop:text-base
                desktop-xl:text-[1rem]
                ">
                +1 245 586 54 13
                </p>
            </div>
            <div class="w-[50%] flex flex-col items-end">
                <x-text.subtitle class="text-white font-normal">
                    {{ __('Subscribe to our updates') }}
                </x-text.subtitle>
                <form action="{{ route('save_email') }}" method="POST" class="w-full flex flex-col h-full justify-end">
                    @csrf
                    <div class="flex flex-col items-end relative">
                        <div class="flex flex-row
                            desktop-xl:w-[400px]
                            desktop:w-[350px]
                            laptop:w-[300px]
                            tablet-xl:w-[300px]
                            tablet:w-[300px]
                            phone:w-[100%]
                            zero:w-[100%]">
                            <input type="email" name="email" placeholder="Email" class="bg-transparent border-b-2 w-full focus:outline-none text-white pb-1">
                            <input type="submit" class="bg-transparent border-b-2 focus:outline-none text-white pb-2 w-min cursor-pointer" value="→">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
