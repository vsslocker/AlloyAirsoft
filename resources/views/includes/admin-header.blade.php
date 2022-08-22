<header class="pt-[2%]">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between">
            <div class="flex items-center w-[20%]">
                <x-text.link href="{{ route('index') }}" class="text-[1.2rem] text-subwhite font-normal hover:text-[2.5rem] hover:text-white ease-out duration-[.2s]">
                    {{ __('To site') }}
                </x-text.link>
            </div>
            <div class="flex items-end">
                <x-text.link href="{{ route('admin') }}" class="font-normal mr-4 hover:text-[2.5rem] ease-out duration-[.2s] {{ Route::is('admin') ? 'text-[2.5rem] font-normal hover:pb-0 text-white' : 'text-[1.2rem] pb-2 hover:pb-0 hover:text-white text-subwhite' }}">
                    {{ __('Control') }}
                </x-text.link>
                <x-text.link href="{{ route('players') }}" class="font-normal ml-4 hover:text-[2.5rem] ease-out duration-[.2s] {{ Route::is('players') ? 'text-[2.5rem] font-normal hover:pb-0 text-white' : 'text-[1.2rem] pb-2 hover:pb-0 hover:text-white text-subwhite' }}">
                    {{ __('Players') }}
                </x-text.link>
            </div>
            <div class="flex items-center w-[20%] justify-end">
                <x-text.link href="{{ route('logout') }}" class="text-[1.2rem] text-subwhite font-normal hover:text-[2.5rem] hover:text-white ease-out duration-[.2s]">
                    {{ __('Logout') }}
                </x-text.link>
            </div>
        </div>
        <div class="h-[2px] mt-3 w-full bg-[#242424]">
            
        </div>
    </div>
</header>
