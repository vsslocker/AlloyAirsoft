<input {{ $attributes->class(
    'w-full box-border text-white text-[1.1rem] pt-8 pb-3 px-5 lg:pt-4 lg:pb-0 h-16 font-medium rounded-xl ring-2 ring-subwhite
    focus:outline-none z-20'
)->merge([
    'autocapitalize' => 'none',
    'spellcheck' => 'false',
]) }}>