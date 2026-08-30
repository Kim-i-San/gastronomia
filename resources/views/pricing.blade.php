<x-layouts.public
    :title="__('pricing.meta.title')"
    :description="__('pricing.meta.description')"
>
    @include('partials.public-header')

    <main>
        {{-- HERO --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-5 pb-14 pt-16 text-center sm:px-8 sm:pb-18 sm:pt-20 lg:pt-24">
                <div class="flex justify-center">
    <div class="inline-flex items-center gap-2.5 rounded-full bg-gia-soft px-4 py-2">
        <span class="h-2 w-2 rounded-full bg-gia-orange"></span>

        <span class="text-sm font-semibold text-gia-blue">
            {{ __('pricing.hero.eyebrow') }}
        </span>
    </div>
</div>

                <h1 class="mx-auto mt-5 max-w-4xl font-display text-4xl font-semibold leading-[1.08] tracking-[-0.04em] text-gia-navy sm:text-6xl">
                    {{ __('pricing.hero.title') }}
                </h1>

                <p class="mx-auto mt-7 max-w-2xl text-base leading-7 text-gia-navy/55 sm:text-lg sm:leading-8">
                    {{ __('pricing.hero.description') }}
                </p>

                <div class="mt-7 flex flex-wrap justify-center gap-x-6 gap-y-2 text-sm font-semibold text-gia-navy/55">
                    <span class="inline-flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-gia-peach/40 text-gia-orange">✓</span>
                        {{ __('pricing.hero.trial') }}
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-gia-peach/40 text-gia-orange">✓</span>
                        {{ __('pricing.hero.card') }}
                    </span>
                </div>
            </div>
        </section>

        {{-- HOME PLANS --}}
        <section class="border-t border-gia-navy/5 bg-gia-soft">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-24">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="text-sm font-semibold text-gia-orange">{{ __('pricing.home.eyebrow') }}</p>
                    <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                        {{ __('pricing.home.title') }}
                    </h2>
                    <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-gia-navy/55">
                        {{ __('pricing.home.description') }}
                    </p>
                </div>

                <div class="mx-auto mt-12 grid max-w-[860px] gap-6 md:grid-cols-2">
                    @foreach (['freemium', 'lite'] as $plan)
                        <div class="flex flex-col rounded-[2rem] border border-gia-navy/10 bg-white p-7 shadow-sm sm:p-8">
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-gia-orange">
                                {{ __('pricing.plans.'.$plan.'.name') }}
                            </p>

                            <div class="mt-5 flex items-end gap-2">
                                <span class="font-display text-4xl font-semibold tracking-[-0.04em] text-gia-navy">
                                    {{ __('pricing.plans.'.$plan.'.price') }}
                                </span>
                                <span class="pb-1 text-sm text-gia-navy/45">
                                    {{ __('pricing.plans.'.$plan.'.period') }}
                                </span>
                            </div>

                            <ul class="mt-8 flex-1 space-y-3">
                                @foreach (__('pricing.plans.'.$plan.'.features') as $feature)
                                    <li class="flex gap-3 text-sm leading-6 text-gia-navy/65">
                                        <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-gia-peach/35 text-xs font-bold text-gia-orange">✓</span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <a href="https://app.gastronomia.ai"
                               class="mt-8 inline-flex items-center justify-center rounded-xl border border-gia-navy/10 bg-gia-soft px-5 py-3 text-sm font-semibold text-gia-navy transition hover:border-gia-orange/30 hover:text-gia-orange">
                                {{ __('pricing.plans.'.$plan.'.cta') }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- PRO PLANS --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="text-sm font-semibold text-gia-orange">{{ __('pricing.pro.eyebrow') }}</p>
                    <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.03em] text-gia-navy sm:text-5xl">
                        {{ __('pricing.pro.title') }}
                    </h2>
                    <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-gia-navy/55">
                        {{ __('pricing.pro.description') }}
                    </p>
                </div>

                <div class="mt-14 grid gap-6 lg:grid-cols-3">
                    @foreach (['basic', 'advanced', 'premium'] as $plan)
                        @php $featured = $plan === 'advanced'; @endphp

                        <div class="relative flex flex-col rounded-[2rem] border p-7 sm:p-8
                            {{ $featured
                                ? 'border-gia-orange bg-gia-navy shadow-[0_28px_70px_rgba(23,52,71,0.18)]'
                                : 'border-gia-navy/10 bg-gia-soft'
                            }}">

                            @if ($featured)
                                <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-gia-orange px-4 py-1.5 text-xs font-bold text-white shadow-sm">
                                    {{ __('pricing.pro.recommended') }}
                                </span>
                            @endif

                            <p class="text-xs font-bold uppercase tracking-[0.16em] {{ $featured ? 'text-gia-orange' : 'text-gia-blue' }}">
                                {{ __('pricing.plans.'.$plan.'.name') }}
                            </p>

                            <div class="mt-5 flex items-end gap-2">
                                <span class="font-display text-4xl font-semibold tracking-[-0.04em] {{ $featured ? 'text-white' : 'text-gia-navy' }}">
                                    {{ __('pricing.plans.'.$plan.'.monthly') }}
                                </span>
                                <span class="pb-1 text-sm {{ $featured ? 'text-white/50' : 'text-gia-navy/45' }}">
                                    {{ __('pricing.month') }}
                                </span>
                            </div>

                            <div class="mt-4 rounded-xl px-4 py-3 {{ $featured ? 'bg-white/7' : 'bg-white' }}">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="text-sm font-bold {{ $featured ? 'text-white' : 'text-gia-navy' }}">
                                        {{ __('pricing.plans.'.$plan.'.yearly') }}
                                    </span>
                                    <span class="rounded-full bg-gia-orange/15 px-2.5 py-1 text-[11px] font-bold text-gia-orange">
                                        {{ __('pricing.save') }}
                                    </span>
                                </div>
                            </div>

                            <ul class="mt-8 flex-1 space-y-3">
                                @foreach (__('pricing.plans.'.$plan.'.features') as $feature)
                                    <li class="flex gap-3 text-sm leading-6 {{ $featured ? 'text-white/70' : 'text-gia-navy/65' }}">
                                        <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-gia-orange/15 text-xs font-bold text-gia-orange">✓</span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <a href="https://app.gastronomia.ai"
                               class="mt-8 inline-flex items-center justify-center rounded-xl px-5 py-3 text-sm font-semibold transition
                               {{ $featured
                                   ? 'bg-gia-orange text-white hover:opacity-90'
                                   : 'bg-gia-navy text-white hover:opacity-90'
                               }}">
                                {{ __('pricing.plans.'.$plan.'.cta') }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- TERMS --}}
        <section class="bg-gia-soft">
            <div class="mx-auto max-w-[900px] px-5 py-14 sm:px-8">
                <div class="rounded-[1.75rem] border border-gia-navy/10 bg-white p-6 sm:p-8">
                    <h2 class="font-display text-lg font-semibold text-gia-navy">{{ __('pricing.terms.title') }}</h2>
                    <p class="mt-3 text-sm leading-6 text-gia-navy/55">{{ __('pricing.terms.text') }}</p>
                </div>
            </div>
        </section>

        {{-- CTA --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 sm:py-28">
                <div class="rounded-[2.5rem] bg-gia-navy px-6 py-14 text-center sm:px-10 sm:py-16">
                    <p class="text-sm font-semibold text-gia-orange">{{ __('pricing.cta.eyebrow') }}</p>
                    <h2 class="mx-auto mt-4 max-w-3xl font-display text-3xl font-semibold tracking-[-0.03em] text-white sm:text-5xl">
                        {{ __('pricing.cta.title') }}
                    </h2>
                    <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/60">{{ __('pricing.cta.description') }}</p>
                    <a href="https://app.gastronomia.ai"
                       class="mt-8 inline-flex items-center justify-center rounded-xl bg-gia-orange px-6 py-3 text-sm font-semibold text-white transition hover:opacity-90">
                        {{ __('pricing.cta.button') }}
                    </a>
                    <p class="mt-4 text-xs text-white/40">{{ __('pricing.cta.note') }}</p>
                </div>
            </div>
        </section>
    </main>

    @include('partials.public-footer')
</x-layouts.public>
