<x-layouts.public>
@include('partials.public-header')
    <main>

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-white">
        <div class="mx-auto max-w-[1440px] px-5 pb-16 pt-16 sm:px-8 sm:pb-20 sm:pt-20 lg:px-12 lg:pb-28 lg:pt-24">

            <div class="grid items-center gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16">

                {{-- COPY --}}
                <div class="relative z-10">

                    <div class="inline-flex items-center gap-2 rounded-full bg-gia-soft px-3.5 py-2 text-xs font-semibold text-gia-blue">
                        <span class="h-2 w-2 rounded-full bg-gia-orange"></span>
                        {{ __('home.hero.eyebrow') }}
                    </div>

                    <h1 class="mt-7 max-w-3xl font-display text-[2.8rem] font-semibold leading-[1.05] tracking-[-0.04em] text-gia-navy sm:text-6xl lg:text-[4.6rem]">
                        {{ __('home.hero.title') }}
                    </h1>

                    <p class="mt-7 max-w-xl text-base leading-7 text-gia-navy/60 sm:text-lg sm:leading-8">
                        {{ __('home.hero.description') }}
                    </p>

                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">

                        <a
                            href="https://app.gastronomia.ai"
                            class="inline-flex items-center justify-center rounded-xl bg-gia-orange px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-md"
                        >
                            {{ __('home.hero.primary_cta') }}

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                class="ml-2 h-4 w-4"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
                            </svg>
                        </a>

                        <a
                            href="#product"
                            class="inline-flex items-center justify-center rounded-xl border border-gia-navy/10 bg-white px-6 py-3.5 text-sm font-semibold text-gia-navy transition hover:bg-gia-soft"
                        >
                            {{ __('home.hero.secondary_cta') }}
                        </a>

                    </div>

                    <p class="mt-4 text-xs text-gia-navy/40">
                        {{ __('home.hero.note') }}
                    </p>

                </div>

                {{-- PRODUCT VISUAL --}}
<div class="relative lg:pl-8">

    {{-- Soft brand glow --}}
    <div class="absolute -right-16 -top-16 h-72 w-72 rounded-full bg-gia-sky/20 blur-3xl"></div>
    <div class="absolute -bottom-20 left-8 h-64 w-64 rounded-full bg-gia-peach/25 blur-3xl"></div>

    <div class="relative mx-auto h-[520px] max-w-[620px] sm:h-[620px]">

        {{-- BACK LEFT --}}
        <div class="absolute left-0 top-20 hidden w-[34%] -rotate-6 overflow-hidden rounded-[2rem] border border-gia-navy/10 bg-white shadow-[0_25px_70px_rgba(23,52,71,0.12)] sm:block">
            <img
                src="{{ asset('images/product/planning.jpg') }}"
                alt="GastronomIA planning"
                class="block h-auto w-full"
            >
        </div>

        {{-- BACK RIGHT --}}
        <div class="absolute right-0 top-24 hidden w-[34%] rotate-6 overflow-hidden rounded-[2rem] border border-gia-navy/10 bg-white shadow-[0_25px_70px_rgba(23,52,71,0.12)] sm:block">
            <img
                src="{{ asset('images/product/team.jpg') }}"
                alt="GastronomIA team management"
                class="block h-auto w-full"
            >
        </div>

        {{-- MAIN SCREEN --}}
        <div class="absolute left-1/2 top-0 z-20 w-[58%] -translate-x-1/2 overflow-hidden rounded-[2.25rem] border border-gia-navy/10 bg-white shadow-[0_35px_90px_rgba(23,52,71,0.18)] sm:w-[48%]">
            <img
                src="{{ asset('images/product/home.jpg') }}"
                alt="GastronomIA application"
                class="block h-auto w-full"
            >
        </div>

        {{-- MOBILE FALLBACK --}}
        <div class="absolute inset-x-0 bottom-0 top-0 flex items-center justify-center sm:hidden">
            <div class="w-[72%] overflow-hidden rounded-[2rem] border border-gia-navy/10 bg-white shadow-[0_30px_80px_rgba(23,52,71,0.16)]">
                <img
                    src="{{ asset('images/product/home.jpg') }}"
                    alt="GastronomIA application"
                    class="block h-auto w-full"
                >
            </div>
        </div>

    </div>

</div>

            </div>
        </div>
    </section>


    {{-- PRODUCT OVERVIEW --}}
<section id="product" class="border-t border-gia-navy/5 bg-gia-soft">
    <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

        {{-- INTRO --}}
        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-semibold text-gia-orange">
                {{ __('home.overview.eyebrow') }}
            </p>

            <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                {{ __('home.overview.title') }}
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                {{ __('home.overview.description') }}
            </p>

        </div>


        {{-- CONNECTED WORKFLOW --}}
        <div class="mt-14 rounded-[2rem] border border-gia-navy/10 bg-white p-5 shadow-sm sm:mt-16 sm:p-8 lg:p-10">

            <div class="grid grid-cols-2 gap-3 sm:grid-cols-5 sm:gap-0">

                {{-- RECIPES --}}
                <div class="relative flex flex-col items-center py-5 text-center">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gia-sky/20 text-gia-blue">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v16H6.5A2.5 2.5 0 0 0 4 21.5v-16Z"/>
                            <path stroke-linecap="round" d="M4 18.5A2.5 2.5 0 0 1 6.5 16H20"/>
                        </svg>
                    </div>

                    <span class="mt-4 text-sm font-semibold text-gia-navy">
                        {{ __('home.overview.recipes') }}
                    </span>

                    <div class="absolute right-0 top-1/2 hidden h-px w-1/2 bg-gia-navy/10 sm:block"></div>
                </div>


                {{-- MENUS --}}
                <div class="relative flex flex-col items-center py-5 text-center">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gia-peach/30 text-gia-orange">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4 6h16M4 12h16M4 18h10"/>
                        </svg>
                    </div>

                    <span class="mt-4 text-sm font-semibold text-gia-navy">
                        {{ __('home.overview.menus') }}
                    </span>

                    <div class="absolute left-0 top-1/2 hidden h-px w-1/2 bg-gia-navy/10 sm:block"></div>
                    <div class="absolute right-0 top-1/2 hidden h-px w-1/2 bg-gia-navy/10 sm:block"></div>
                </div>


                {{-- PLANNING --}}
                <div class="relative col-span-2 flex flex-col items-center py-5 text-center sm:col-span-1">

                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gia-orange text-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             class="h-7 w-7">
                            <rect x="3" y="5" width="18" height="16" rx="2"/>
                            <path stroke-linecap="round" d="M8 3v4M16 3v4M3 10h18"/>
                        </svg>
                    </div>

                    <span class="mt-4 text-sm font-semibold text-gia-navy">
                        {{ __('home.overview.planning') }}
                    </span>

                    <div class="absolute left-0 top-1/2 hidden h-px w-1/2 bg-gia-navy/10 sm:block"></div>
                    <div class="absolute right-0 top-1/2 hidden h-px w-1/2 bg-gia-navy/10 sm:block"></div>
                </div>


                {{-- TEAM --}}
                <div class="relative flex flex-col items-center py-5 text-center">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gia-sky/20 text-gia-blue">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path stroke-linecap="round" d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>

                    <span class="mt-4 text-sm font-semibold text-gia-navy">
                        {{ __('home.overview.team') }}
                    </span>

                    <div class="absolute left-0 top-1/2 hidden h-px w-1/2 bg-gia-navy/10 sm:block"></div>
                    <div class="absolute right-0 top-1/2 hidden h-px w-1/2 bg-gia-navy/10 sm:block"></div>
                </div>


                {{-- ORDERS --}}
                <div class="relative flex flex-col items-center py-5 text-center">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gia-peach/30 text-gia-orange">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             class="h-6 w-6">
                            <circle cx="9" cy="20" r="1"/>
                            <circle cx="19" cy="20" r="1"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 4h2l2.5 11h10.5l2-7H7"/>
                        </svg>
                    </div>

                    <span class="mt-4 text-sm font-semibold text-gia-navy">
                        {{ __('home.overview.orders') }}
                    </span>

                    <div class="absolute left-0 top-1/2 hidden h-px w-1/2 bg-gia-navy/10 sm:block"></div>
                </div>

            </div>

        </div>

    </div>
</section>

{{-- RECIPES & AI --}}
<section class="bg-white">
    <div class="mx-auto grid max-w-[1200px] items-center gap-14 px-5 py-20 sm:px-8 sm:py-28 lg:grid-cols-2 lg:gap-20">

        {{-- PRODUCT VISUAL --}}
<div class="relative">

    <div class="absolute -left-16 top-12 h-64 w-64 rounded-full bg-gia-sky/20 blur-3xl"></div>
    <div class="absolute -bottom-12 right-10 h-48 w-48 rounded-full bg-gia-peach/25 blur-3xl"></div>

    <div class="relative mx-auto h-[560px] max-w-[540px]">

        {{-- GENERATION SCREEN --}}
        <div class="absolute left-0 top-16 w-[58%] -rotate-3 overflow-hidden rounded-[1.8rem] border border-gia-navy/10 bg-white shadow-[0_25px_70px_rgba(23,52,71,0.12)]">
            <img
                src="{{ asset('images/product/recipe-gen.jpg') }}"
                alt="GastronomIA AI recipe generation"
                class="block h-auto w-full"
            >
        </div>

        {{-- FINISHED RECIPE --}}
        <div class="absolute right-0 top-0 z-20 w-[62%] rotate-2 overflow-hidden rounded-[2rem] border border-gia-navy/10 bg-white shadow-[0_35px_90px_rgba(23,52,71,0.18)]">
            <img
                src="{{ asset('images/product/recipe.jpg') }}"
                alt="GastronomIA recipe"
                class="block h-auto w-full"
            >
        </div>


    </div>

</div>


        {{-- COPY --}}
        <div>

            <p class="text-sm font-semibold text-gia-orange">
                {{ __('home.recipes.eyebrow') }}
            </p>

            <h2 class="mt-4 max-w-xl font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                {{ __('home.recipes.title') }}
            </h2>

            <p class="mt-6 max-w-xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                {{ __('home.recipes.description') }}
            </p>


            <div class="mt-8 space-y-4">

                @foreach ([
                    __('home.recipes.feature_1'),
                    __('home.recipes.feature_2'),
                    __('home.recipes.feature_3'),
                    __('home.recipes.feature_4'),
                ] as $feature)

                    <div class="flex items-start gap-3">

                        <div class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-gia-peach/35 text-gia-orange">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.2"
                                class="h-3.5 w-3.5"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                            </svg>
                        </div>

                        <span class="text-sm font-medium leading-6 text-gia-navy/75">
                            {{ $feature }}
                        </span>

                    </div>

                @endforeach

            </div>

        </div>

    </div>
</section>

{{-- PLANNING & TEAM --}}
<section class="bg-gia-soft">
    <div class="mx-auto grid max-w-[1200px] items-center gap-14 px-5 py-20 sm:px-8 sm:py-28 lg:grid-cols-2 lg:gap-20">

        {{-- COPY --}}
        <div>

            <p class="text-sm font-semibold text-gia-orange">
                {{ __('home.operations.eyebrow') }}
            </p>

            <h2 class="mt-4 max-w-xl font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                {{ __('home.operations.title') }}
            </h2>

            <p class="mt-6 max-w-xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                {{ __('home.operations.description') }}
            </p>

            <div class="mt-8 space-y-4">

                @foreach ([
                    __('home.operations.feature_1'),
                    __('home.operations.feature_2'),
                    __('home.operations.feature_3'),
                    __('home.operations.feature_4'),
                ] as $feature)

                    <div class="flex items-start gap-3">

                        <div class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-gia-peach/35 text-gia-orange">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.2"
                                class="h-3.5 w-3.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m5 12 4 4L19 6"
                                />
                            </svg>
                        </div>

                        <span class="text-sm font-medium leading-6 text-gia-navy/75">
                            {{ $feature }}
                        </span>

                    </div>

                @endforeach

            </div>

        </div>


        {{-- PRODUCT VISUAL --}}
<div class="relative">

    <div class="absolute -right-16 top-10 h-64 w-64 rounded-full bg-gia-sky/20 blur-3xl"></div>
    <div class="absolute -bottom-10 left-8 h-52 w-52 rounded-full bg-gia-peach/25 blur-3xl"></div>

    <div class="relative mx-auto h-[560px] max-w-[540px]">

        {{-- TEAM PLANNING — BACK --}}
        <div class="absolute left-0 top-16 w-[58%] -rotate-3 overflow-hidden rounded-[1.8rem] border border-gia-navy/10 bg-white shadow-[0_25px_70px_rgba(23,52,71,0.12)]">
            <img
                src="{{ asset('images/product/team-planning.jpg') }}"
                alt="GastronomIA team planning"
                class="block h-auto w-full"
            >
        </div>

        {{-- TEAM — FRONT --}}
        <div class="absolute right-0 top-0 z-20 w-[62%] rotate-2 overflow-hidden rounded-[2rem] border border-gia-navy/10 bg-white shadow-[0_35px_90px_rgba(23,52,71,0.18)]">
            <img
                src="{{ asset('images/product/team.jpg') }}"
                alt="GastronomIA team management"
                class="block h-auto w-full"
            >
        </div>

    </div>

</div>
</section>

{{-- AND MUCH MORE --}}
<section class="bg-white">
    <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

        {{-- INTRO --}}
        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-semibold text-gia-orange">
                {{ __('home.more.eyebrow') }}
            </p>

            <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                {{ __('home.more.title') }}
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                {{ __('home.more.description') }}
            </p>

        </div>


        {{-- FEATURES --}}
        <div class="mt-14 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

            {{-- MENUS --}}
            <div class="rounded-[1.5rem] border border-gia-navy/10 bg-gia-soft p-6">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-gia-blue shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8"
                         class="h-5 w-5">
                        <path stroke-linecap="round" d="M6 6h12M6 12h12M6 18h8"/>
                    </svg>
                </div>

                <h3 class="mt-5 font-display text-lg font-semibold text-gia-navy">
                    {{ __('home.more.menus') }}
                </h3>

                <p class="mt-2 text-sm leading-6 text-gia-navy/55">
                    {{ __('home.more.menus_text') }}
                </p>

            </div>


            {{-- ORDERS --}}
            <div class="rounded-[1.5rem] border border-gia-navy/10 bg-gia-soft p-6">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-gia-orange shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8"
                         class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 4h2l2.5 11h10.5l2-7H7"/>
                        <circle cx="9" cy="20" r="1"/>
                        <circle cx="19" cy="20" r="1"/>
                    </svg>
                </div>

                <h3 class="mt-5 font-display text-lg font-semibold text-gia-navy">
                    {{ __('home.more.orders') }}
                </h3>

                <p class="mt-2 text-sm leading-6 text-gia-navy/55">
                    {{ __('home.more.orders_text') }}
                </p>

            </div>


            {{-- TIME --}}
            <div class="rounded-[1.5rem] border border-gia-navy/10 bg-gia-soft p-6">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-gia-blue shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8"
                         class="h-5 w-5">
                        <circle cx="12" cy="12" r="9"/>
                        <path stroke-linecap="round" d="M12 7v5l3 2"/>
                    </svg>
                </div>

                <h3 class="mt-5 font-display text-lg font-semibold text-gia-navy">
                    {{ __('home.more.time') }}
                </h3>

                <p class="mt-2 text-sm leading-6 text-gia-navy/55">
                    {{ __('home.more.time_text') }}
                </p>

            </div>


            {{-- TASKS --}}
            <div class="rounded-[1.5rem] border border-gia-navy/10 bg-gia-soft p-6">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-gia-orange shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8"
                         class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m5 12 3 3 5-6"/>
                        <path stroke-linecap="round"
                              d="M13 6h6M13 12h6M13 18h6M5 18h3"/>
                    </svg>
                </div>

                <h3 class="mt-5 font-display text-lg font-semibold text-gia-navy">
                    {{ __('home.more.tasks') }}
                </h3>

                <p class="mt-2 text-sm leading-6 text-gia-navy/55">
                    {{ __('home.more.tasks_text') }}
                </p>

            </div>

        </div>


        {{-- CTA --}}
        <div class="mt-10 text-center">

            <a
                href="{{ url('/'.app()->getLocale().'/product') }}"
                class="inline-flex items-center gap-2 rounded-xl border border-gia-navy/10 bg-white px-6 py-3.5 text-sm font-semibold text-gia-navy shadow-sm transition hover:-translate-y-0.5 hover:shadow-md"
            >
                {{ __('home.more.cta') }}

                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6"/>
                </svg>
            </a>

        </div>

    </div>
</section>

{{-- VIDEO PRESENTATION --}}
<section class="bg-gia-soft">
    <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

        {{-- INTRO --}}
        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-semibold text-gia-orange">
                {{ __('home.video.eyebrow') }}
            </p>

            <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                {{ __('home.video.title') }}
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                {{ __('home.video.description') }}
            </p>

        </div>


        {{-- VIDEO --}}
<div class="relative mx-auto mt-14 max-w-[1000px]">

    {{-- Background glow --}}
    <div class="absolute -left-12 top-12 h-64 w-64 rounded-full bg-gia-sky/20 blur-3xl"></div>
    <div class="absolute -bottom-12 right-0 h-64 w-64 rounded-full bg-gia-peach/25 blur-3xl"></div>

    <div class="relative overflow-hidden rounded-[2rem] border border-gia-navy/10 bg-white p-2 shadow-[0_30px_90px_rgba(23,52,71,0.12)]">

        <div
            class="relative aspect-video overflow-hidden rounded-[1.6rem] bg-gia-navy"
            data-video-player
            data-video-id="VPDQZh_plq4"
        >

            {{-- COVER --}}
            <button
                type="button"
                data-video-play
                class="group absolute inset-0 z-10 h-full w-full"
                aria-label="{{ __('home.video.play') }}"
            >
                <div class="absolute inset-0 bg-gradient-to-br from-gia-indigo to-gia-navy"></div>

<div class="absolute inset-0 flex items-center justify-center opacity-[0.08]">
    <img
        src="{{ asset('images/branding/gastronomia-icon.png') }}"
        alt=""
        class="w-[38%] max-w-[300px]"
    >
</div>
                {{-- Overlay --}}
                <div class="absolute inset-0 bg-gia-navy/25 transition duration-300 group-hover:bg-gia-navy/35"></div>

                {{-- PLAY --}}
                <div class="absolute inset-0 flex flex-col items-center justify-center gap-4">

                    <span class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-gia-orange shadow-xl transition duration-300 group-hover:scale-110">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="ml-1 h-7 w-7"
                        >
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </span>

                    <span class="rounded-full bg-gia-navy/70 px-4 py-2 text-sm font-semibold text-white backdrop-blur-sm">
                        {{ __('home.video.play') }}
                    </span>

                </div>

            </button>

        </div>

    </div>

</div>

    </div>
</section>

{{-- TESTIMONIALS --}}
<section class="bg-white">
    <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

        {{-- INTRO --}}
        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-semibold text-gia-orange">
                {{ __('home.testimonials.eyebrow') }}
            </p>

            <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                {{ __('home.testimonials.title') }}
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                {{ __('home.testimonials.description') }}
            </p>

        </div>


        {{-- TESTIMONIAL CARDS --}}
        <div class="mt-14 grid gap-5 lg:grid-cols-2">

            @foreach (__('home.testimonials.items') as $testimonial)

                <article class="flex flex-col rounded-[1.75rem] border border-gia-navy/10 bg-gia-soft p-7 sm:p-8">

                    {{-- QUOTE MARK --}}
                    <div class="font-display text-5xl font-semibold leading-none text-gia-orange/35">
                        “
                    </div>

                    {{-- QUOTE --}}
                    <blockquote class="mt-3 flex-1 text-base leading-7 text-gia-navy/75">
                        {{ $testimonial['quote'] }}
                    </blockquote>


                    {{-- PERSON --}}
                    <div class="mt-8 flex items-center gap-4 border-t border-gia-navy/10 pt-6">

                        <img
                            src="{{ asset('images/testimonials/'.$testimonial['image']) }}"
                            alt="{{ $testimonial['name'] }}"
                            class="h-14 w-14 shrink-0 rounded-full object-cover"
                        >

                        <div>
                            <p class="font-display text-sm font-semibold text-gia-navy">
                                {{ $testimonial['name'] }}
                            </p>

                            <p class="mt-1 text-sm text-gia-navy/50">
                                {{ $testimonial['company'] }}
                            </p>
                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>
</section>

{{-- PRICING TEASER / FINAL CTA --}}
<section class="bg-gia-soft">
    <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

        <div class="relative overflow-hidden rounded-[2.5rem] bg-gia-navy px-6 py-14 text-center sm:px-12 sm:py-16 lg:px-20 lg:py-20">

            {{-- Decorative glows --}}
            <div class="absolute -left-24 -top-24 h-72 w-72 rounded-full bg-gia-blue/30 blur-3xl"></div>
            <div class="absolute -bottom-28 -right-16 h-72 w-72 rounded-full bg-gia-orange/20 blur-3xl"></div>

            <div class="relative mx-auto max-w-3xl">

                <p class="text-sm font-semibold text-gia-peach">
                    {{ __('home.pricing_teaser.eyebrow') }}
                </p>

                <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-white sm:text-5xl">
                    {{ __('home.pricing_teaser.title') }}
                </h2>

                <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-white/65 sm:text-lg sm:leading-8">
                    {{ __('home.pricing_teaser.description') }}
                </p>

                {{-- BENEFITS --}}
                <div class="mt-8 flex flex-col items-center justify-center gap-3 text-sm text-white/75 sm:flex-row sm:gap-6">

                    <div class="flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-gia-orange text-white">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                                class="h-3 w-3"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>

                        {{ __('home.pricing_teaser.trial') }}
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-gia-orange text-white">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                                class="h-3 w-3"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>

                        {{ __('home.pricing_teaser.no_card') }}
                    </div>

                </div>

                {{-- CTA --}}
                <div class="mt-10 flex flex-col justify-center gap-3 sm:flex-row">

                    <a
                        href="{{ url('/'.app()->getLocale().'/pricing') }}"
                        class="inline-flex items-center justify-center rounded-xl bg-gia-orange px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg"
                    >
                        {{ __('home.pricing_teaser.pricing_cta') }}

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            class="ml-2 h-4 w-4"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6"/>
                        </svg>
                    </a>

                    <a
                        href="#"
                        class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/10 px-6 py-3.5 text-sm font-semibold text-white backdrop-blur-sm transition hover:bg-white/15"
                    >
                        {{ __('home.pricing_teaser.start_cta') }}
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

</main>
@include('partials.public-footer')

</x-layouts.public>