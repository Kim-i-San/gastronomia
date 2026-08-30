@php
    $locale = app()->getLocale();

    $segments = request()->segments();

    // Remove current locale from URL segments.
    if (! empty($segments) && in_array($segments[0], ['en', 'fr', 'de', 'it'])) {
        array_shift($segments);
    }

    $localizedPath = implode('/', $segments);
@endphp

<header class="sticky top-0 z-50 border-b border-gia-navy/10 bg-white/95 backdrop-blur">
    <div class="mx-auto flex h-[84px] max-w-[1440px] items-center justify-between px-5 sm:px-8 lg:px-12">

        {{-- LOGO --}}
        <a
            href="{{ route('home', ['locale' => $locale]) }}"
            class="flex shrink-0 items-center"
            aria-label="GastronomIA"
        >
            <img
                src="{{ asset('images/branding/gastronomia-icon.png') }}"
                alt="GastronomIA"
                class="h-12 w-12 object-contain"
            >
        </a>


        {{-- DESKTOP NAV --}}
        {{-- DESKTOP NAV --}}
<nav class="hidden items-center gap-8 lg:flex">

    <a
        href="{{ route('home', ['locale' => $locale]) }}"
        class="text-sm font-semibold text-gia-navy/65 transition hover:text-gia-navy"
    >
        {{ __('common.nav.home') }}
    </a>

    <a
        href="{{ route('product', ['locale' => $locale]) }}"
        class="text-sm font-semibold text-gia-navy/65 transition hover:text-gia-navy"
    >
        {{ __('common.nav.product') }}
    </a>

    <a
        href="{{ url('/'.$locale.'/pricing') }}"
        class="text-sm font-semibold text-gia-navy/65 transition hover:text-gia-navy"
    >
        {{ __('common.nav.pricing') }}
    </a>

    <a
        href="{{ url('/'.$locale.'/contact') }}"
        class="text-sm font-semibold text-gia-navy/65 transition hover:text-gia-navy"
    >
        {{ __('common.nav.contact') }}
    </a>

    <a
        href="{{ url('/'.$locale.'/legal') }}"
        class="text-sm font-semibold text-gia-navy/65 transition hover:text-gia-navy"
    >
        {{ __('common.nav.legal') }}
    </a>

</nav>


        {{-- DESKTOP ACTIONS --}}
        <div class="hidden items-center gap-3 lg:flex">

            {{-- LANGUAGE --}}
            <details class="relative">

                <summary
                    class="flex cursor-pointer list-none items-center gap-2 rounded-xl border border-gia-navy/10 px-3 py-2 text-sm font-semibold text-gia-navy [&::-webkit-details-marker]:hidden"
                >
                    {{ strtoupper($locale) }}

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        class="h-4 w-4"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m6 9 6 6 6-6"
                        />
                    </svg>
                </summary>

                <div class="absolute right-0 mt-2 w-24 overflow-hidden rounded-xl border border-gia-navy/10 bg-white shadow-lg">

                    @foreach (['en', 'fr', 'de', 'it'] as $switchLocale)

                        <a
                            href="{{ url('/'.$switchLocale.($localizedPath ? '/'.$localizedPath : '')) }}"
                            class="block px-4 py-2.5 text-sm font-semibold transition
                                {{ $locale === $switchLocale
                                    ? 'bg-gia-soft text-gia-orange'
                                    : 'text-gia-navy/70 hover:bg-gia-soft hover:text-gia-navy'
                                }}"
                        >
                            {{ strtoupper($switchLocale) }}
                        </a>

                    @endforeach

                </div>

            </details>


            {{-- LOGIN --}}
            <a
                href="https://app.gastronomia.ai/login"
                class="px-3 py-2 text-sm font-semibold text-gia-navy/70 transition hover:text-gia-navy"
            >
                {{ __('common.actions.login') }}
            </a>


            {{-- CTA --}}
            <a
                href="https://app.gastronomia.ai"
                class="rounded-xl bg-gia-orange px-5 py-2.5 text-sm font-semibold text-white transition hover:opacity-90"
            >
                {{ __('common.actions.start') }}
            </a>

        </div>


        {{-- MOBILE MENU --}}
        <details class="relative lg:hidden">

            <summary
                class="flex h-11 w-11 cursor-pointer list-none items-center justify-center rounded-xl border border-gia-navy/10 bg-white text-gia-navy [&::-webkit-details-marker]:hidden"
                aria-label="Menu"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 7h16M4 12h16M4 17h16"
                    />
                </svg>
            </summary>


            <div class="fixed left-0 right-0 top-[84px] border-t border-gia-navy/10 bg-white shadow-xl">

                <div class="px-5 pb-6 pt-3 sm:px-8">

                    <nav class="flex flex-col">

    <a
        href="{{ route('home', ['locale' => $locale]) }}"
        class="border-b border-gia-navy/10 py-4 text-sm font-semibold text-gia-navy/75"
    >
        {{ __('common.nav.home') }}
    </a>

    <a
        href="{{ route('product', ['locale' => $locale]) }}"
        class="border-b border-gia-navy/10 py-4 text-sm font-semibold text-gia-navy/75"
    >
        {{ __('common.nav.product') }}
    </a>

    <a
        href="{{ url('/'.$locale.'/pricing') }}"
        class="border-b border-gia-navy/10 py-4 text-sm font-semibold text-gia-navy/75"
    >
        {{ __('common.nav.pricing') }}
    </a>

    <a
        href="{{ url('/'.$locale.'/contact') }}"
        class="border-b border-gia-navy/10 py-4 text-sm font-semibold text-gia-navy/75"
    >
        {{ __('common.nav.contact') }}
    </a>

    <a
        href="{{ url('/'.$locale.'/legal') }}"
        class="py-4 text-sm font-semibold text-gia-navy/75"
    >
        {{ __('common.nav.legal') }}
    </a>

</nav>


                    {{-- MOBILE LANGUAGES --}}
                    <div class="mt-5 flex gap-2">

                        @foreach (['en', 'fr', 'de', 'it'] as $switchLocale)

                            <a
                                href="{{ url('/'.$switchLocale.($localizedPath ? '/'.$localizedPath : '')) }}"
                                class="rounded-xl px-3 py-2 text-sm font-semibold
                                    {{ $locale === $switchLocale
                                        ? 'bg-gia-orange text-white'
                                        : 'bg-gia-soft text-gia-navy/65'
                                    }}"
                            >
                                {{ strtoupper($switchLocale) }}
                            </a>

                        @endforeach

                    </div>


                    <div class="mt-5 grid grid-cols-2 gap-3">

                        <a
                            href="#"
                            class="inline-flex items-center justify-center rounded-xl border border-gia-navy/10 px-4 py-3 text-sm font-semibold text-gia-navy"
                        >
                            {{ __('common.actions.login') }}
                        </a>

                        <a
                            href="#"
                            class="inline-flex items-center justify-center rounded-xl bg-gia-orange px-4 py-3 text-center text-sm font-semibold text-white"
                        >
                            {{ __('common.actions.start') }}
                        </a>

                    </div>

                </div>

            </div>

        </details>

    </div>
</header>