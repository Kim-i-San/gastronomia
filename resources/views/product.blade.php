<x-layouts.public
    :title="__('product.meta.title')"
    :description="__('product.meta.description')"
>

    @include('partials.public-header')

    <main>

        {{-- =========================================================
             HERO
        ========================================================== --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-5 pb-16 pt-16 text-center sm:px-8 sm:pb-20 sm:pt-20 lg:pb-24 lg:pt-24">

                <div class="flex justify-center">
    <div class="inline-flex items-center gap-2.5 rounded-full bg-gia-soft px-4 py-2">
        <span class="h-2 w-2 rounded-full bg-gia-orange"></span>

        <span class="text-sm font-semibold text-gia-blue">
            {{ __('product.hero.eyebrow') }}
        </span>
    </div>
</div>

                <h1 class="mx-auto mt-5 max-w-4xl font-display text-4xl font-semibold leading-[1.08] tracking-[-0.04em] text-gia-navy sm:text-6xl">
                    {{ __('product.hero.title') }}
                </h1>

                <p class="mx-auto mt-7 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                    {{ __('product.hero.description') }}
                </p>

                {{-- QUICK NAV --}}
                <div class="mt-9 flex flex-wrap justify-center gap-2.5">

                    @foreach ([
                        ['knowledge', 'knowledge'],
                        ['planning', 'planning'],
                        ['team', 'team'],
                        ['purchasing', 'purchasing'],
                        ['operations', 'operations'],
                        ['portal', 'portal'],
                    ] as [$anchor, $label])

                        <a
                            href="#{{ $anchor }}"
                            class="rounded-full border border-gia-navy/10 bg-white px-4 py-2 text-sm font-semibold text-gia-navy/60 transition hover:border-gia-orange/30 hover:text-gia-orange"
                        >
                            {{ __('product.nav.'.$label) }}
                        </a>

                    @endforeach

                </div>

            </div>
        </section>


        {{-- =========================================================
             01 — RECIPES, MENUS & KNOWLEDGE
        ========================================================== --}}
        <section id="knowledge" class="scroll-mt-28 border-t border-gia-navy/5 bg-gia-soft">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

                <div class="grid items-center gap-16 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20">

                    {{-- COPY --}}
                    <div>

                        <p class="text-sm font-semibold text-gia-orange">
                            {{ __('product.knowledge.eyebrow') }}
                        </p>

                        <h2 class="mt-4 font-display text-3xl font-semibold leading-tight tracking-[-0.03em] text-gia-navy sm:text-5xl">
                            {{ __('product.knowledge.title') }}
                        </h2>

                        <p class="mt-6 text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                            {{ __('product.knowledge.description') }}
                        </p>

                        <div class="mt-9 space-y-5">

                            @foreach ([
                                ['digitize_title', 'digitize_text'],
                                ['ai_title', 'ai_text'],
                                ['organize_title', 'organize_text'],
                                ['menus_title', 'menus_text'],
                                ['nutrition_title', 'nutrition_text'],
                            ] as [$title, $text])

                                <div class="flex gap-4">

                                    <div class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-gia-peach/35 text-gia-orange">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            class="h-4 w-4"
                                        >
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6"/>
                                        </svg>
                                    </div>

                                    <div>
                                        <h3 class="font-display text-base font-semibold text-gia-navy">
                                            {{ __('product.knowledge.'.$title) }}
                                        </h3>

                                        <p class="mt-1 text-sm leading-6 text-gia-navy/55">
                                            {{ __('product.knowledge.'.$text) }}
                                        </p>
                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>


                    {{-- VISUAL COMPOSITION --}}
                    <div class="space-y-5">

                        {{-- ROW 1 --}}
                        <div class="grid grid-cols-2 gap-5">

                            <div class="overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-white p-2 shadow-[0_20px_55px_rgba(23,52,71,0.10)]">
                                <img
                                    src="{{ asset('images/product/recipe-gen.jpg') }}"
                                    alt="GastronomIA AI recipe generation"
                                    class="block h-auto w-full rounded-[1.2rem]"
                                >
                            </div>

                            <div class="overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-white p-2 shadow-[0_20px_55px_rgba(23,52,71,0.10)]">
                                <img
                                    src="{{ asset('images/product/recipe.jpg') }}"
                                    alt="GastronomIA recipe management"
                                    class="block h-auto w-full rounded-[1.2rem]"
                                >
                            </div>

                        </div>

                        {{-- ROW 2 --}}
                        <div class="grid grid-cols-2 gap-5">

                            <div class="overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-white p-2 shadow-[0_20px_55px_rgba(23,52,71,0.10)]">
                                <img
                                    src="{{ asset('images/product/folders.jpg') }}"
                                    alt="GastronomIA recipe folders"
                                    class="block h-auto w-full rounded-[1.2rem]"
                                >
                            </div>

                            <div class="overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-white p-2 shadow-[0_20px_55px_rgba(23,52,71,0.10)]">
                                <img
                                    src="{{ asset('images/product/nutritional-values.jpg') }}"
                                    alt="GastronomIA nutritional values"
                                    class="block h-auto w-full rounded-[1.2rem]"
                                >
                            </div>

                        </div>

                    </div>
                </div>


                {{-- MENU CALLOUT --}}
                <div class="mx-auto mt-16 grid max-w-[1040px] items-center gap-8 rounded-[2rem] border border-gia-navy/10 bg-white p-6 sm:p-8 lg:grid-cols-[0.95fr_1.05fr] lg:p-10">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-gia-orange">
                            {{ __('product.knowledge.menu_label') }}
                        </p>

                        <h3 class="mt-3 font-display text-2xl font-semibold tracking-[-0.02em] text-gia-navy">
                            {{ __('product.knowledge.menu_callout_title') }}
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-gia-navy/55">
                            {{ __('product.knowledge.menu_callout_text') }}
                        </p>
                    </div>

                    <div class="mx-auto max-w-[390px] overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-gia-soft p-2">
                        <img
                            src="{{ asset('images/product/menu.jpg') }}"
                            alt="GastronomIA menus"
                            class="block h-auto w-full rounded-[1.15rem]"
                        >
                    </div>

                </div>

            </div>
        </section>


        {{-- =========================================================
             02 — PLANNING
        ========================================================== --}}
        <section id="planning" class="scroll-mt-28 bg-white">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

                <div class="mx-auto max-w-3xl text-center">

                    <p class="text-sm font-semibold text-gia-orange">
                        {{ __('product.planning.eyebrow') }}
                    </p>

                    <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                        {{ __('product.planning.title') }}
                    </h2>

                    <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                        {{ __('product.planning.description') }}
                    </p>

                </div>


                <div class="mx-auto mt-14 grid max-w-[1040px] gap-6 lg:grid-cols-2">

                    {{-- MENU PLANNING --}}
                    <div class="overflow-hidden rounded-[2rem] border border-gia-navy/10 bg-gia-soft">

                        <div class="p-7 sm:p-8">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gia-peach/40 text-gia-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                    <rect x="3" y="5" width="18" height="16" rx="2"/>
                                    <path stroke-linecap="round" d="M8 3v4M16 3v4M3 10h18"/>
                                </svg>
                            </div>

                            <h3 class="mt-5 font-display text-xl font-semibold text-gia-navy">
                                {{ __('product.planning.menu_title') }}
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-gia-navy/55">
                                {{ __('product.planning.menu_text') }}
                            </p>
                        </div>

                        <div class="px-4 pb-4">
                            <div class="mx-auto max-w-[380px] overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-white p-2 shadow-sm">
                                <img
                                    src="{{ asset('images/product/planning.jpg') }}"
                                    alt="GastronomIA menu planning"
                                    class="block h-auto w-full rounded-[1.15rem]"
                                >
                            </div>
                        </div>

                    </div>


                    {{-- STAFF PLANNING --}}
                    <div class="overflow-hidden rounded-[2rem] border border-gia-navy/10 bg-gia-soft">

                        <div class="p-7 sm:p-8">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gia-sky/25 text-gia-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path stroke-linecap="round" d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                </svg>
                            </div>

                            <h3 class="mt-5 font-display text-xl font-semibold text-gia-navy">
                                {{ __('product.planning.staff_title') }}
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-gia-navy/55">
                                {{ __('product.planning.staff_text') }}
                            </p>
                        </div>

                        <div class="px-4 pb-4">
                            <div class="mx-auto max-w-[380px] overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-white p-2 shadow-sm">
                                <img
                                    src="{{ asset('images/product/team-planning.jpg') }}"
                                    alt="GastronomIA staff planning"
                                    class="block h-auto w-full rounded-[1.15rem]"
                                >
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>


        {{-- =========================================================
             03 — SHARE WITH YOUR TEAM
        ========================================================== --}}
        <section id="team" class="scroll-mt-28 bg-gia-soft">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

                <div class="grid items-center gap-14 lg:grid-cols-[1.05fr_0.95fr] lg:gap-20">

                    {{-- VISUAL --}}
                    <div class="relative">

                        <div class="absolute -left-10 top-10 h-64 w-64 rounded-full bg-gia-sky/20 blur-3xl"></div>

                        <div class="relative mx-auto max-w-[420px] overflow-hidden rounded-[1.8rem] border border-gia-navy/10 bg-white p-2.5 shadow-[0_24px_60px_rgba(23,52,71,0.12)]">
                            <img
                                src="{{ asset('images/product/team.jpg') }}"
                                alt="GastronomIA team"
                                class="block h-auto w-full rounded-[1.5rem]"
                            >
                        </div>

                    </div>


                    {{-- COPY --}}
                    <div>

                        <p class="text-sm font-semibold text-gia-orange">
                            {{ __('product.team.eyebrow') }}
                        </p>

                        <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                            {{ __('product.team.title') }}
                        </h2>

                        <p class="mt-6 text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                            {{ __('product.team.description') }}
                        </p>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">

                            @foreach ([
                                ['planning_title', 'planning_text'],
                                ['menus_title', 'menus_text'],
                                ['recipes_title', 'recipes_text'],
                                ['information_title', 'information_text'],
                            ] as [$title, $text])

                                <div class="rounded-[1.4rem] border border-gia-navy/10 bg-white p-5">
                                    <div class="h-1.5 w-8 rounded-full bg-gia-orange"></div>

                                    <h3 class="mt-4 font-display text-sm font-semibold text-gia-navy">
                                        {{ __('product.team.'.$title) }}
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-gia-navy/50">
                                        {{ __('product.team.'.$text) }}
                                    </p>
                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>
        </section>


        {{-- =========================================================
             04 — SHOPPING LISTS & ORDERS
        ========================================================== --}}
        <section id="purchasing" class="scroll-mt-28 bg-white">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

                <div class="grid items-center gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20">

                    {{-- COPY --}}
                    <div>

                        <p class="text-sm font-semibold text-gia-orange">
                            {{ __('product.purchasing.eyebrow') }}
                        </p>

                        <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                            {{ __('product.purchasing.title') }}
                        </h2>

                        <p class="mt-6 text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                            {{ __('product.purchasing.description') }}
                        </p>


                        <div class="mt-9 space-y-6">

                            <div>
                                <h3 class="font-display text-base font-semibold text-gia-navy">
                                    {{ __('product.purchasing.list_title') }}
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-gia-navy/55">
                                    {{ __('product.purchasing.list_text') }}
                                </p>
                            </div>

                            <div class="h-px bg-gia-navy/10"></div>

                            <div>
                                <h3 class="font-display text-base font-semibold text-gia-navy">
                                    {{ __('product.purchasing.orders_title') }}
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-gia-navy/55">
                                    {{ __('product.purchasing.orders_text') }}
                                </p>
                            </div>

                            <div class="h-px bg-gia-navy/10"></div>

                            <div>
                                <h3 class="font-display text-base font-semibold text-gia-navy">
                                    {{ __('product.purchasing.suppliers_title') }}
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-gia-navy/55">
                                    {{ __('product.purchasing.suppliers_text') }}
                                </p>
                            </div>

                        </div>

                    </div>


                    {{-- VISUAL --}}
                    <div class="relative">

                        <div class="absolute -right-10 top-10 h-64 w-64 rounded-full bg-gia-peach/25 blur-3xl"></div>

                        <div class="relative mx-auto h-[460px] max-w-[470px] sm:h-[500px]">

                            <div class="absolute left-2 top-2 z-20 w-[64%] -rotate-1 overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-white p-1.5 shadow-[0_22px_55px_rgba(23,52,71,0.13)]">
                                <img
                                    src="{{ asset('images/product/shopping-list.jpg') }}"
                                    alt="GastronomIA shopping list"
                                    class="block h-auto w-full rounded-[1.35rem]"
                                >
                            </div>

                            <div class="absolute bottom-2 right-2 w-[64%] rotate-1 overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-white p-1.5 shadow-[0_22px_55px_rgba(23,52,71,0.12)]">
                                <img
                                    src="{{ asset('images/product/orders.jpg') }}"
                                    alt="GastronomIA supplier orders"
                                    class="block h-auto w-full rounded-[1.35rem]"
                                >
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>


        {{-- =========================================================
             05 — DAILY OPERATIONS
        ========================================================== --}}
        <section id="operations" class="scroll-mt-28 bg-gia-soft">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

                <div class="mx-auto max-w-3xl text-center">

                    <p class="text-sm font-semibold text-gia-orange">
                        {{ __('product.operations.eyebrow') }}
                    </p>

                    <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                        {{ __('product.operations.title') }}
                    </h2>

                    <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                        {{ __('product.operations.description') }}
                    </p>

                </div>


                <div class="mx-auto mt-14 grid max-w-[1040px] gap-6 lg:grid-cols-2">

                    {{-- TIMESHEET --}}
                    <div class="rounded-[2rem] border border-gia-navy/10 bg-white p-5 sm:p-6">

                        <div class="mx-auto max-w-[410px] overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-gia-soft p-2">
                            <img
                                src="{{ asset('images/product/timesheet.jpg') }}"
                                alt="GastronomIA timesheet"
                                class="block h-auto w-full rounded-[1.15rem]"
                            >
                        </div>

                        <div class="px-2 pb-2 pt-7">
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-gia-orange">
                                {{ __('product.operations.time_label') }}
                            </p>

                            <h3 class="mt-3 font-display text-xl font-semibold text-gia-navy">
                                {{ __('product.operations.time_title') }}
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-gia-navy/55">
                                {{ __('product.operations.time_text') }}
                            </p>
                        </div>

                    </div>


                    {{-- TASKS --}}
                    <div class="rounded-[2rem] border border-gia-navy/10 bg-white p-5 sm:p-6">

                        <div class="mx-auto max-w-[410px] overflow-hidden rounded-[1.5rem] border border-gia-navy/10 bg-gia-soft p-2">
                            <img
                                src="{{ asset('images/product/tasks.jpg') }}"
                                alt="GastronomIA tasks"
                                class="block h-auto w-full rounded-[1.15rem]"
                            >
                        </div>

                        <div class="px-2 pb-2 pt-7">
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-gia-orange">
                                {{ __('product.operations.tasks_label') }}
                            </p>

                            <h3 class="mt-3 font-display text-xl font-semibold text-gia-navy">
                                {{ __('product.operations.tasks_title') }}
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-gia-navy/55">
                                {{ __('product.operations.tasks_text') }}
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section>


        {{-- =========================================================
             06 — EMPLOYEE PORTAL
        ========================================================== --}}
        <section id="portal" class="scroll-mt-28 bg-white">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">

                <div class="overflow-hidden rounded-[2.5rem] bg-gia-navy">

                    <div class="grid items-center gap-12 px-6 py-10 sm:px-10 sm:py-14 lg:grid-cols-[1fr_1fr] lg:px-14 lg:py-16">

                        {{-- COPY --}}
                        <div>

                            <p class="text-sm font-semibold text-gia-orange">
                                {{ __('product.portal.eyebrow') }}
                            </p>

                            <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-white sm:text-5xl">
                                {{ __('product.portal.title') }}
                            </h2>

                            <p class="mt-6 text-base leading-7 text-white/65 sm:text-lg sm:leading-8">
                                {{ __('product.portal.description') }}
                            </p>

                            <div class="mt-8 grid gap-3 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">

                                @foreach ([
                                    'schedule',
                                    'clock',
                                    'menus',
                                    'recipes',
                                    'tasks',
                                    'leave',
                                ] as $item)

                                    <div class="flex items-center gap-3 rounded-xl bg-white/5 px-4 py-3">

                                        <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-gia-orange/15 text-gia-orange">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" class="h-3.5 w-3.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6"/>
                                            </svg>
                                        </div>

                                        <span class="text-sm font-semibold text-white/80">
                                            {{ __('product.portal.'.$item) }}
                                        </span>

                                    </div>

                                @endforeach

                            </div>

                        </div>


                        {{-- VISUAL --}}
                        <div class="relative">

                            <div class="absolute inset-10 rounded-full bg-gia-blue/30 blur-3xl"></div>

                            <div class="relative mx-auto max-w-[480px] overflow-hidden rounded-[1.8rem] border border-white/10 bg-white p-2.5 shadow-2xl">
                                <img
                                    src="{{ asset('images/product/staff-portal.jpg') }}"
                                    alt="GastronomIA employee portal"
                                    class="block h-auto w-full rounded-[1.5rem]"
                                >
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>


        {{-- =========================================================
             FINAL CTA
        ========================================================== --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-5 pb-20 sm:px-8 sm:pb-28">

                <div class="rounded-[2.5rem] border border-gia-navy/10 bg-gia-soft px-6 py-14 text-center sm:px-10 sm:py-16">

                    <p class="text-sm font-semibold text-gia-orange">
                        {{ __('product.cta.eyebrow') }}
                    </p>

                    <h2 class="mx-auto mt-4 max-w-3xl font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                        {{ __('product.cta.title') }}
                    </h2>

                    <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-gia-navy/55">
                        {{ __('product.cta.description') }}
                    </p>

                    <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                        <a
                            href="#"
                            class="inline-flex items-center justify-center rounded-xl bg-gia-orange px-6 py-3 text-sm font-semibold text-white transition hover:opacity-90"
                        >
                            {{ __('product.cta.start') }}
                        </a>

                        <a
                            href="{{ url('/'.app()->getLocale().'/pricing') }}"
                            class="inline-flex items-center justify-center rounded-xl border border-gia-navy/10 bg-white px-6 py-3 text-sm font-semibold text-gia-navy transition hover:border-gia-navy/20"
                        >
                            {{ __('product.cta.pricing') }}
                        </a>

                    </div>

                    <p class="mt-4 text-xs text-gia-navy/40">
                        {{ __('product.cta.note') }}
                    </p>

                </div>

            </div>
        </section>

    </main>

    @include('partials.public-footer')

</x-layouts.public>