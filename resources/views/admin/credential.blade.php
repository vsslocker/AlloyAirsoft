@extends('layouts.base')

@section('content')
    <main class="grow">
        <div class="w-full flex justify-center">
            <h1 class="text-4xl sm:text-6xl text-center md:text-left">
                {{ __('Change your credential') }}
            </h1>
        </div>
    
        <div class="w-full sm:w-[80%] md:w-[70%] lg:w-[50%] mx-auto justify-center xl:w-full pb-10 grid grid-cols-1 xl:grid-cols-2 xl:grid-rows-1 2xl:grid-cols-3 2xl:grid-rows-1 gap-6">
            <x-admin.block class="p-6 h-min">
                <h3>
                    {{ __('Contact information') }}
                </h3>
                <form action="{{ route('contactInformation') }}" method="POST" class="flex flex-col mt-10 gap-y-4 sm:gap-y-6 items-center">
                    @csrf
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Phone') }}
                        </p>
                        <x-admin.input value="{{ $phone }}" name="phone" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" required />
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Email') }}
                        </p>
                        <x-admin.input value="{{ $email }}" name="email" type="email" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" required />
                    </div>
                    <x-elems.button class="py-2 mt-4 sm:mt-0 sm:py-3 w-full" value="Save" />
                </form>
            </x-admin.block>
    
            <x-admin.block class="p-6 h-min row-span-1 xl:row-span-3 2xl:row-span-1">
                <h3>
                    {{ __('Player information') }}
                </h3>
                <form action="{{ route('playerInformation') }}" method="POST" class="flex flex-col mt-10 gap-y-4 sm:gap-y-6 items-center">
                    @csrf
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Name') }}
                        </p>
                        <x-admin.input name="name" value="{{ $admin->name }}" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" />
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Surname') }}
                        </p>
                        <x-admin.input name="surname" value="{{ $admin->surname }}" type="text" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" />
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Callsign') }}
                        </p>
                        <x-admin.input name="callsign" value="{{ $admin->callsign }}" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" />
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Email') }}
                        </p>
                        <x-admin.input name="emailPlayer" value="{{ $admin->emailPlayer }}" type="email" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" />
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Phone') }}
                        </p>
                        <x-admin.input name="phone" value="{{ $admin->phone }}" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" />
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Team') }}
                        </p>
                        <select name="team_id" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] px-5 py-3 box-border rounded-xl ring-2 ring-subwhite bg-card_bg font-medium text-white text-[1.1rem] appearance-none focus:outline-none">
                            @for ($i = 0; $i < $teams_count; $i++)
                                @if ($teams[$i]->id == $admin->team_id)
                                    <option selected value="{{ $teams[$i]->id }}">{{ $teams[$i]->name }}</option>
                                @else
                                    <option value="{{ $teams[$i]->id }}">{{ $teams[$i]->name }}</option>
                                @endif
                            @endfor
                        </select>
                    </div>
                    <x-elems.button class="py-2 mt-4 sm:mt-0 sm:py-3 w-full" value="Save" />
                </form>
            </x-admin.block>
    
            <x-admin.block class="p-6 h-min">
                <h3>
                    {{ __('Admin information') }}
                </h3>
                <form action="{{ route('adminInformation') }}" method="POST" class="flex flex-col mt-10 gap-y-4 sm:gap-y-6 items-center" novalidate>
                    @csrf
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Email') }}
                        </p>
                        <x-admin.input value="{{ $email }}" name="email" class="text" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" />
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center w-full justify-between">
                        <p class="mb-2 sm:mb-0 sm:mr-10">
                            {{ __('Password') }}
                        </p>
                        <x-admin.input name="passwordNew" type="password" class="w-full sm:w-[70%] lg:w-[70%] 2xl:w-[70%] bg-transparent" />
                    </div>
                    <div class="flex flex-col items-left w-full">
                        <p class="mb-2 sm:hidden">
                            {{ __('Old password') }}
                        </p>
                        <x-admin.input type="password" class="w-full bg-transparent sm:hidden"/>
                        <x-admin.input name="passwordOld" type="password" placeholder="Old password" class="placeholder:text-subwhite placeholder:text-base placeholder:font-normal placeholder:tracking-wide hidden sm:block w-full bg-transparent"/>
                    </div>
                    <x-elems.button class="py-2 mt-4 sm:mt-0 sm:py-3 w-full" value="Save" />
                </form>
            </x-admin.block>
        </div>
    </main>
@endsection
