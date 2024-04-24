<div class="flex gap-10 lg:gap-20 justify-between pt-2 mb-1 mx-4">

    {{-- menu button --}}
    <div class="flex items-center gap-4 flex-shirink-0">
        <button @click="sidebarOpen = !sidebarOpen"
            class="hover:bg-neutral-100 transition-colors rounded-full w-10 h-10 flex items-center justify-center p-2.5">
            <x-icon.menu />
        </button>

        {{-- logo --}}
        <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="h-10">
        </a>
    </div>

    {{-- search bar --}}
    <form class="flex justify-center flex-grow gap-4">

    </form>

    {{-- bottons right --}}
    <div class="flex flex-shrink-0 md:gap-2">
        <button class="hover:bg-neutral-100 transition-colors rounded-full flex items-center justify-center p-2.5">
            {{-- <x-icon.upload /> --}}
            <span class="text-sm">
                @if (date('H') > 00 || date('H') < 12)
                    {{ __('Bom dia, ') }}
                @elseif (date('H') > 12 || date('H') < 18)
                    {{ __('Boa tarde, ') }}
                @else
                    {{ __('Boa noite, ') }}
                @endif
                {{ Auth::user()->name ?? '' }}!
            </span>
        </button>
        <button
            class="hover:bg-neutral-100 transition-colors rounded-full w-10 h-10 flex items-center justify-center p-2.5">
            <x-icon.bell />
        </button>
        <button
            class="hover:bg-neutral-100 transition-colors rounded-full w-10 h-10 flex items-center justify-center p-2.5">
            <x-icon.user />
        </button>
    </div>

</div>
