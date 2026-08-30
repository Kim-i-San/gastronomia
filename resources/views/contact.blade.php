<x-layouts.public
    :title="__('contact.meta.title')"
    :description="__('contact.meta.description')"
>
    @include('partials.public-header')

    <main>

        {{-- HERO --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-5 pb-16 pt-16 text-center sm:px-8 sm:pb-20 sm:pt-20 lg:pb-24 lg:pt-24">

                <div class="flex justify-center">
                    <div class="inline-flex items-center gap-2.5 rounded-full bg-gia-soft px-4 py-2">
                        <span class="h-2 w-2 rounded-full bg-gia-orange"></span>
                        <span class="text-sm font-semibold text-gia-blue">
                            {{ __('contact.hero.eyebrow') }}
                        </span>
                    </div>
                </div>

                <h1 class="mx-auto mt-5 max-w-4xl font-display text-4xl font-semibold leading-[1.08] tracking-[-0.04em] text-gia-navy sm:text-6xl">
                    {{ __('contact.hero.title') }}
                </h1>

                <p class="mx-auto mt-7 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                    {{ __('contact.hero.description') }}
                </p>

            </div>
        </section>


        {{-- CONTACT CARDS --}}
        <section class="border-t border-gia-navy/5 bg-gia-soft">
            <div class="mx-auto max-w-[1100px] px-5 py-20 sm:px-8 sm:py-24">

                <div class="grid gap-6 md:grid-cols-2">

                    {{-- CONTACT --}}
                    <div class="rounded-[2rem] border border-gia-navy/10 bg-white p-7 shadow-sm sm:p-10">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gia-peach/30 text-gia-orange">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.8"
                                 class="h-5 w-5">
                                <rect x="3" y="5" width="18" height="14" rx="2"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="m3 7 9 6 9-6"/>
                            </svg>
                        </div>

                        <p class="mt-7 text-xs font-bold uppercase tracking-[0.16em] text-gia-orange">
                            {{ __('contact.cards.contact.eyebrow') }}
                        </p>

                        <h2 class="mt-4 font-display text-2xl font-semibold tracking-[-0.02em] text-gia-navy">
                            {{ __('contact.cards.contact.title') }}
                        </h2>

                        <p class="mt-4 max-w-md text-sm leading-7 text-gia-navy/55">
                            {{ __('contact.cards.contact.description') }}
                        </p>

                        <a
                            href="mailto:support@gastronomia.ai"
                            class="mt-8 inline-flex items-center justify-center rounded-xl bg-gia-navy px-5 py-3 text-sm font-semibold text-white transition hover:opacity-90"
                        >
                            support@gastronomia.ai
                        </a>

                    </div>


                    {{-- COMPANY --}}
                    <div class="rounded-[2rem] border border-gia-navy/10 bg-white p-7 shadow-sm sm:p-10">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gia-peach/30 text-gia-orange">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.8"
                                 class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"/>
                                <path stroke-linecap="round" d="M16 9h2a2 2 0 0 1 2 2v10"/>
                                <path stroke-linecap="round" d="M8 7h4M8 11h4M8 15h4"/>
                                <path stroke-linecap="round" d="M2 21h20"/>
                            </svg>
                        </div>

                        <p class="mt-7 text-xs font-bold uppercase tracking-[0.16em] text-gia-orange">
                            {{ __('contact.cards.company.eyebrow') }}
                        </p>

                        <h2 class="mt-4 font-display text-2xl font-semibold tracking-[-0.02em] text-gia-navy">
                            GastronomIA Tech Sàrl
                        </h2>

                        <address class="mt-4 not-italic text-sm leading-8 text-gia-navy/55">
                            Chemin de la Charrière 9<br>
                            2056 Dombresson<br>
                            {{ __('contact.cards.company.country') }}
                        </address>

                    </div>

                </div>

            </div>
        </section>

    </main>

    @include('partials.public-footer')
</x-layouts.public>
