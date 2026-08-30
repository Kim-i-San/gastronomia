<x-layouts.public
    :title="__('aligro.meta.title')"
    :description="__('aligro.meta.description')"
>
    @include('partials.public-header')

    <main>

        {{-- HERO --}}
        <section class="relative overflow-hidden bg-white">
            <div class="mx-auto max-w-[1200px] px-6 pb-16 pt-16 lg:px-8 lg:pb-24 lg:pt-24">

                <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

                    <div>
                        <div class="mb-6 inline-flex items-center gap-2.5 rounded-full bg-gia-soft px-4 py-2">
                            <span class="h-2 w-2 rounded-full bg-gia-orange"></span>
                            <span class="text-sm font-semibold text-gia-blue">
                                {{ __('aligro.hero.eyebrow') }}
                            </span>
                        </div>

                        <h1 class="max-w-2xl font-display text-4xl font-semibold leading-tight tracking-tight text-gia-navy sm:text-5xl lg:text-6xl">
                            {{ __('aligro.hero.title') }}
                        </h1>

                        <p class="mt-6 max-w-xl text-lg leading-8 text-gia-indigo/80">
                            {{ __('aligro.hero.description') }}
                        </p>
                    </div>

                    <div class="flex justify-center lg:justify-end">
                        <div class="w-full max-w-[520px] overflow-hidden rounded-[2rem] bg-gia-soft p-6 shadow-sm">
                            <img
                                src="{{ asset('images/partners/AligroXGIA.png') }}"
                                alt="ALIGRO x GastronomIA"
                                class="h-auto w-full object-contain"
                            >
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- OFFER --}}
        <section class="bg-gia-soft">
            <div class="mx-auto max-w-[1200px] px-6 py-16 lg:px-8 lg:py-24">

                <div class="mx-auto max-w-3xl text-center">
                    <span class="font-display text-sm font-semibold uppercase tracking-[0.18em] text-gia-orange">
                        {{ __('aligro.offer.eyebrow') }}
                    </span>

                    <h2 class="mt-4 font-display text-3xl font-semibold tracking-tight text-gia-navy sm:text-4xl">
                        {{ __('aligro.offer.title') }}
                    </h2>

                    <p class="mt-5 text-lg leading-8 text-gia-indigo/80">
                        {{ __('aligro.offer.description') }}
                    </p>
                </div>

                <div class="mx-auto mt-12 grid max-w-4xl gap-6 md:grid-cols-2">

                    {{-- 50% --}}
                    <div class="rounded-[2rem] bg-gia-navy p-8 text-white shadow-sm lg:p-10">
                        <div class="font-display text-6xl font-semibold tracking-tight">
                            -50%
                        </div>

                        <h3 class="mt-5 font-display text-2xl font-semibold">
                            {{ __('aligro.offer.discount_title') }}
                        </h3>

                        <p class="mt-4 leading-7 text-white/75">
                            {{ __('aligro.offer.discount_text') }}
                        </p>
                    </div>

                    {{-- 30 DAYS --}}
                    <div class="rounded-[2rem] bg-white p-8 shadow-sm lg:p-10">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gia-peach/40">
                            <svg class="h-7 w-7 text-gia-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M20 12v8H4v-8m16 0H4m16 0h1V8h-5.5M4 12H3V8h5.5m3.5 12V8m0 0H8.5A2.5 2.5 0 1 1 12 4.5V8Zm0 0h3.5A2.5 2.5 0 1 0 12 4.5V8Z"/>
                            </svg>
                        </div>

                        <h3 class="mt-6 font-display text-2xl font-semibold text-gia-navy">
                            {{ __('aligro.offer.trial_title') }}
                        </h3>

                        <p class="mt-4 leading-7 text-gia-indigo/80">
                            {{ __('aligro.offer.trial_text') }}
                        </p>
                    </div>

                </div>

            </div>
        </section>


        {{-- HOW IT WORKS --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-6 py-16 lg:px-8 lg:py-24">

                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="font-display text-3xl font-semibold tracking-tight text-gia-navy sm:text-4xl">
                        {{ __('aligro.how.title') }}
                    </h2>

                    <p class="mt-5 text-lg leading-8 text-gia-indigo/80">
                        {{ __('aligro.how.description') }}
                    </p>
                </div>

                <div class="mx-auto mt-12 grid max-w-5xl gap-6 lg:grid-cols-2">

                    {{-- IOS --}}
                    <div class="rounded-[2rem] border border-gia-sky/25 bg-white p-8 shadow-sm lg:p-10">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gia-soft">
                            <svg class="h-7 w-7 text-gia-navy" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.79 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.53 4.09ZM12.03 7.25C11.88 5.02 13.69 3.18 15.77 3c.29 2.58-2.34 4.5-3.74 4.25Z"/>
                            </svg>
                        </div>

                        <h3 class="mt-6 font-display text-2xl font-semibold text-gia-navy">
                            {{ __('aligro.ios.title') }}
                        </h3>

                        <p class="mt-4 leading-7 text-gia-indigo/80">
                            {{ __('aligro.ios.text') }}
                        </p>

                        <p class="mt-4 font-semibold text-gia-navy">
                            {{ __('aligro.ios.no_code') }}
                        </p>

                    </div>


                    {{-- WEB + ANDROID --}}
                    <div class="rounded-[2rem] border border-gia-sky/25 bg-white p-8 shadow-sm lg:p-10">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gia-soft">
                            <svg class="h-7 w-7 text-gia-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0c2 0 3.5-4.03 3.5-9S14 3 12 3 8.5 7.03 8.5 12 10 21 12 21ZM3.6 9h16.8M3.6 15h16.8"/>
                            </svg>
                        </div>

                        <h3 class="mt-6 font-display text-2xl font-semibold text-gia-navy">
                            {{ __('aligro.web.title') }}
                        </h3>

                        <p class="mt-4 leading-7 text-gia-indigo/80">
                            {{ __('aligro.web.text') }}
                        </p>

                        <div class="mt-7 inline-flex rounded-2xl border-2 border-dashed border-gia-orange/60 bg-gia-peach/20 px-6 py-4">
                            <span class="font-display text-2xl font-semibold tracking-[0.12em] text-gia-navy">
                                ALIGRO50
                            </span>
                        </div>

                    </div>

                </div>

            </div>
        </section>


        {{-- CTA --}}
        <section class="px-6 pb-20 lg:px-8 lg:pb-28">
            <div class="mx-auto max-w-[1200px] overflow-hidden rounded-[2rem] bg-gia-navy px-6 py-12 text-center sm:px-12 lg:py-16">

                <h2 class="font-display text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    {{ __('aligro.cta.title') }}
                </h2>

                <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-white/70">
                    {{ __('aligro.cta.description') }}
                </p>

                <a
                    href="https://app.gastronomia.ai"
                    class="mt-8 inline-flex items-center justify-center rounded-full bg-gia-orange px-7 py-3.5 text-sm font-semibold text-white transition hover:opacity-90"
                >
                    {{ __('aligro.cta.button') }}
                </a>

                <p class="mt-6 text-sm text-white/50">
                    {{ __('aligro.cta.note') }}
                </p>

            </div>
        </section>

    </main>

    @include('partials.public-footer')
</x-layouts.public>