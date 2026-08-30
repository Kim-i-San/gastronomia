<x-layouts.public
    :title="__('legal.meta.title')"
    :description="__('legal.meta.description')"
>
    @include('partials.public-header')

    <main>
        {{-- HERO --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-5 pb-16 pt-16 text-center sm:px-8 sm:pb-20 sm:pt-20 lg:pb-24 lg:pt-24">
                <div class="flex justify-center">
                    <div class="inline-flex items-center gap-2.5 rounded-full bg-gia-soft px-4 py-2">
                        <span class="h-2 w-2 rounded-full bg-gia-orange"></span>
                        <span class="text-sm font-semibold text-gia-blue">{{ __('legal.hero.eyebrow') }}</span>
                    </div>
                </div>

                <h1 class="mx-auto mt-5 max-w-4xl font-display text-4xl font-semibold leading-[1.08] tracking-[-0.04em] text-gia-navy sm:text-6xl">
                    {{ __('legal.hero.title') }}
                </h1>

                <p class="mx-auto mt-7 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                    {{ __('legal.hero.description') }}
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-3">
                    <a href="#privacy" class="rounded-xl border border-gia-navy/10 bg-white px-4 py-2.5 text-sm font-semibold text-gia-navy/70 transition hover:border-gia-orange/30 hover:text-gia-orange">
                        {{ __('legal.nav.privacy') }}
                    </a>
                    <a href="#terms" class="rounded-xl border border-gia-navy/10 bg-white px-4 py-2.5 text-sm font-semibold text-gia-navy/70 transition hover:border-gia-orange/30 hover:text-gia-orange">
                        {{ __('legal.nav.terms') }}
                    </a>
                </div>
            </div>
        </section>

        {{-- LEGAL CONTENT --}}
        <section class="border-t border-gia-navy/5 bg-gia-soft">
            <div class="mx-auto max-w-[1000px] space-y-8 px-5 py-20 sm:px-8 sm:py-24">

                {{-- PRIVACY --}}
                <article id="privacy" class="scroll-mt-28 rounded-[2rem] border border-gia-navy/10 bg-white p-6 shadow-sm sm:p-10">
                    <div class="flex items-start gap-4">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gia-peach/30 text-gia-orange">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.6 2.9 8.8 7 10 4.1-1.2 7-5.4 7-10V6l-7-3Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.14em] text-gia-blue">{{ __('legal.privacy.eyebrow') }}</p>
                            <h2 class="mt-1 font-display text-2xl font-semibold tracking-[-0.02em] text-gia-navy sm:text-3xl">{{ __('legal.privacy.title') }}</h2>
                        </div>
                    </div>

                    <div class="mt-8 space-y-7 text-sm leading-7 text-gia-navy/65">
                        @foreach(__('legal.privacy.sections') as $section)
                            <section>
                                <h3 class="font-display text-base font-semibold text-gia-navy">{{ $section['title'] }}</h3>
                                @foreach($section['paragraphs'] as $paragraph)
                                    <p class="mt-2">{{ $paragraph }}</p>
                                @endforeach
                            </section>
                        @endforeach
                    </div>
                </article>

                {{-- TERMS --}}
                <article id="terms" class="scroll-mt-28 rounded-[2rem] border border-gia-navy/10 bg-white p-6 shadow-sm sm:p-10">
                    <div class="flex items-start gap-4">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gia-peach/30 text-gia-orange">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h8l4 4v14H7z"/>
                                <path stroke-linecap="round" d="M15 3v5h5M10 12h6M10 16h6"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.14em] text-gia-blue">{{ __('legal.terms.eyebrow') }}</p>
                            <h2 class="mt-1 font-display text-2xl font-semibold tracking-[-0.02em] text-gia-navy sm:text-3xl">{{ __('legal.terms.title') }}</h2>
                        </div>
                    </div>

                    <div class="mt-8 space-y-7 text-sm leading-7 text-gia-navy/65">
                        @foreach(__('legal.terms.sections') as $section)
                            <section>
                                <h3 class="font-display text-base font-semibold text-gia-navy">{{ $section['title'] }}</h3>
                                @foreach($section['paragraphs'] as $paragraph)
                                    <p class="mt-2">{{ $paragraph }}</p>
                                @endforeach
                            </section>
                        @endforeach
                    </div>
                </article>

            </div>
        </section>
    </main>

    @include('partials.public-footer')
</x-layouts.public>
