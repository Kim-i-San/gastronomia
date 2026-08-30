<footer class="border-t border-gia-navy/10 bg-white">

    <div class="mx-auto max-w-[1200px] px-5 py-10 sm:px-8 sm:py-12">

        {{-- MAIN --}}
        <div class="flex flex-col gap-10 lg:flex-row lg:items-start lg:justify-between">

            {{-- BRAND --}}
            <div class="max-w-sm">

                <a
                    href="{{ url('/'.app()->getLocale()) }}"
                    class="inline-block"
                    aria-label="GastronomIA"
                >
                    <img
                        src="{{ asset('images/branding/gastronomia-logo.png') }}"
                        alt="GastronomIA"
                        class="h-auto w-[170px]"
                    >
                </a>

                <p class="mt-4 text-sm leading-6 text-gia-navy/50">
                    {{ __('common.footer.description') }}
                </p>

            </div>


            {{-- LINKS --}}
            <div class="grid grid-cols-2 gap-x-16 gap-y-8 sm:grid-cols-3 lg:gap-x-20">

                {{-- PRODUCT --}}
                <div>
                    <p class="font-display text-sm font-semibold text-gia-navy">
                        GastronomIA
                    </p>

                    <nav class="mt-4 flex flex-col gap-2.5">

                        <a
                            href="{{ url('/'.app()->getLocale().'/product') }}"
                            class="text-sm text-gia-navy/50 transition hover:text-gia-orange"
                        >
                            {{ __('common.footer.product') }}
                        </a>

                        <a
                            href="{{ url('/'.app()->getLocale().'/pricing') }}"
                            class="text-sm text-gia-navy/50 transition hover:text-gia-orange"
                        >
                            {{ __('common.footer.pricing') }}
                        </a>

                    </nav>
                </div>


                {{-- COMPANY --}}
                <div>
                    <p class="font-display text-sm font-semibold text-gia-navy">
                        {{ __('common.footer.contact') }}
                    </p>

                    <nav class="mt-4 flex flex-col gap-2.5">

                        <a
                            href="{{ url('/'.app()->getLocale().'/contact') }}"
                            class="text-sm text-gia-navy/50 transition hover:text-gia-orange"
                        >
                            {{ __('common.footer.contact') }}
                        </a>

                        <a
                            href="{{ url('/'.app()->getLocale().'/legal') }}"
                            class="text-sm text-gia-navy/50 transition hover:text-gia-orange"
                        >
                            {{ __('common.footer.legal') }}
                        </a>

                    </nav>
                </div>


                {{-- ACCOUNT --}}
                <div>
                    <p class="font-display text-sm font-semibold text-gia-navy">
                        {{ __('common.footer.login') }}
                    </p>

                    <nav class="mt-4 flex flex-col gap-2.5">

                        <a
                            href="https://app.gastronomia.ai/login"
                            class="text-sm text-gia-navy/50 transition hover:text-gia-orange"
                        >
                            {{ __('common.footer.login') }}
                        </a>

                    </nav>
                </div>

            </div>

        </div>


        {{-- BOTTOM --}}
        <div class="mt-10 flex flex-col gap-4 border-t border-gia-navy/10 pt-6 text-xs text-gia-navy/40 sm:flex-row sm:items-center sm:justify-between">

            <p>
                © {{ date('Y') }} Gastronomia Tech Sàrl. {{ __('common.footer.copyright') }}
            </p>

            <div class="flex items-center gap-4">

                @foreach (['en', 'fr', 'de', 'it'] as $locale)

                    <a
                        href="{{ url('/'.$locale) }}"
                        class="{{ app()->getLocale() === $locale
                            ? 'font-semibold text-gia-orange'
                            : 'transition hover:text-gia-navy'
                        }}"
                    >
                        {{ strtoupper($locale) }}
                    </a>

                @endforeach

            </div>

        </div>

    </div>

</footer>