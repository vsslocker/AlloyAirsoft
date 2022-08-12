<x-text.title class="text-center my-10">
    {{ __('Registration') }}
</x-text.title>
<form action="{{ route('store_players', $game->id) }}" method="post" class="w-[80%] m-auto">
    @csrf
    <div class="flex flex-row justify-center">
        <div class="flex flex-col mr-[30px] w-[643px] h-[302px]">
            <x-input type="text" name="name" id="input_first_name"/>
            <label for="input_first_name" id="label_input_first_name" class="text-[#707070] text-[20px] absolute pl-5 mt-6 ease-out duration-200">{{ __('First Name') }}</label>
            <x-input type="text" name="surname" id="input_second_name"/>
            <label for="input_second_name" id="label_input_second_name" class="text-[#707070] text-[20px] absolute pl-5 mt-[117px] ease-out duration-200">{{ __('Second Name') }}</label>
            <x-input type="text" name="call" id="input_call"/>
            <label for="input_call" id="label_input_call" class="text-[#707070] text-[20px] absolute pl-5 mt-[214px] ease-out duration-200">{{ __('Call') }}</label>
        </div>
        <div class="flex flex-col w-[643px] h-[302px]">
            <x-input type="email" name="email" id="input_email"/>
            <label for="input_email" class="text-[#707070] text-[20px] absolute pl-5 mt-6 ease-out duration-200" id="label_input_email">{{ __('Email') }}</label>
            <x-input type="text" name="phone" id="input_phone"/>
            <label for="input_phone" id="label_input_phone" class="text-[#707070] text-[20px] absolute pl-5 mt-[117px] ease-out duration-200">{{ __('Phone') }}</label>
            <select name="team" class=" h-[75px] mb-[20px] rounded-2xl ring-2 ring-[#707070] bg-[#111111] focus:outline-none text-[#FFFFFF] text-[20px] pl-5 pt-4" id="input_team">
                <option selected disabled></option>
                @for ($i = 0; $i < $teams_count; $i++)
                    <option value="{{ $i+1 }}">{{ $teams[$i]->name }}</option>
                @endfor
            </select>
            <label for="input_team" id="label_input_team" class="text-[#707070] text-[20px] absolute pl-5 mt-[214px] ease-out duration-200">{{ __('Team') }}</label>
        </div>
    </div>
    <input id="submit" type="submit" value="Play" class="w-full py-4 px-6 text-[#111111] text-[2rem] font-semibold rounded-2xl bg-[#02DF8F] cursor-pointer ease duration-[.2s] hover:ring-2 hover:ring-[#02DF8F] hover:bg-transparent hover:text-white">
</form>