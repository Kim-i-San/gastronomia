<x-layouts.public
    :title="__('faq.meta.title')"
    :description="__('faq.meta.description')"
>
    @include('partials.public-header')

    <main>

        {{-- HERO --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[1200px] px-6 pb-12 pt-16 text-center lg:px-8 lg:pb-16 lg:pt-24">

                <div class="flex justify-center">
                    <div class="inline-flex items-center gap-2.5 rounded-full bg-gia-soft px-4 py-2">
                        <span class="h-2 w-2 rounded-full bg-gia-orange"></span>
                        <span class="text-sm font-semibold text-gia-blue">
                            {{ __('faq.hero.eyebrow') }}
                        </span>
                    </div>
                </div>

                <h1 class="mx-auto mt-6 max-w-3xl font-display text-4xl font-semibold tracking-tight text-gia-navy sm:text-5xl lg:text-6xl">
                    {{ __('faq.hero.title') }}
                </h1>

                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gia-indigo/70">
                    {{ __('faq.hero.description') }}
                </p>


                {{-- SEARCH --}}
                <div class="mx-auto mt-10 max-w-2xl">

                    <div class="relative">
                        <svg
                            class="pointer-events-none absolute left-5 top-1/2 h-5 w-5 -translate-y-1/2 text-gia-navy/35"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                            />
                        </svg>

                        <input
                            id="faq-search"
                            type="search"
                            placeholder="{{ __('faq.search.placeholder') }}"
                            autocomplete="off"
                            class="w-full rounded-2xl border border-gia-navy/10 bg-white py-4 pl-14 pr-5 text-base text-gia-navy shadow-sm outline-none transition placeholder:text-gia-navy/35 focus:border-gia-blue/50 focus:ring-4 focus:ring-gia-blue/10"
                        >
                    </div>

                </div>

            </div>
        </section>


        {{-- FAQ --}}
        <section class="bg-gia-soft">
            <div class="mx-auto max-w-[1000px] px-6 py-16 lg:px-8 lg:py-24">

                <div id="faq-container" class="space-y-14">

                    @foreach (__('faq.categories') as $category)

                        <section class="faq-category">

                            <div class="mb-6">
                                <h2 class="font-display text-2xl font-semibold text-gia-navy sm:text-3xl">
                                    {{ $category['title'] }}
                                </h2>

                                @if (!empty($category['description']))
                                    <p class="mt-2 text-sm leading-6 text-gia-navy/50">
                                        {{ $category['description'] }}
                                    </p>
                                @endif
                            </div>


                            <div class="space-y-3">

                                @foreach ($category['questions'] as $question)

                                    <details
                                        class="faq-item group overflow-hidden rounded-2xl border border-gia-navy/10 bg-white shadow-sm"
                                        data-search="{{ strtolower(strip_tags($question['question'].' '.$question['answer'])) }}"
                                    >

                                        <summary class="flex cursor-pointer list-none items-center justify-between gap-6 px-6 py-5 sm:px-7">

                                            <span class="font-display text-base font-semibold leading-6 text-gia-navy sm:text-lg">
                                                {{ $question['question'] }}
                                            </span>

                                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-gia-soft text-gia-navy transition group-open:rotate-45 group-open:bg-gia-peach/40 group-open:text-gia-orange">

                                                <svg
                                                    class="h-4 w-4"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 5v14M5 12h14"
                                                    />
                                                </svg>

                                            </span>

                                        </summary>


                                        <div class="border-t border-gia-navy/10 px-6 py-6 sm:px-7">

                                            <div class="max-w-none text-[15px] leading-7 text-gia-navy/65">
                                                {!! $question['answer'] !!}
                                            </div>

                                        </div>

                                    </details>

                                @endforeach

                            </div>

                        </section>

                    @endforeach

                </div>


                {{-- NO RESULTS --}}
                <div
                    id="faq-no-results"
                    class="hidden rounded-[2rem] bg-white px-6 py-12 text-center shadow-sm"
                >
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gia-soft">

                        <svg
                            class="h-6 w-6 text-gia-blue"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                            />
                        </svg>

                    </div>

                    <h3 class="mt-5 font-display text-xl font-semibold text-gia-navy">
                        {{ __('faq.search.no_results_title') }}
                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-gia-navy/50">
                        {{ __('faq.search.no_results_text') }}
                    </p>

                    <a
                        href="{{ url('/'.app()->getLocale().'/contact') }}"
                        class="mt-6 inline-flex items-center justify-center rounded-full bg-gia-orange px-6 py-3 text-sm font-semibold text-white transition hover:opacity-90"
                    >
                        {{ __('faq.search.contact') }}
                    </a>
                </div>

            </div>
        </section>


        {{-- CONTACT CTA --}}
        <section class="bg-white px-6 py-16 lg:px-8 lg:py-24">

            <div class="mx-auto max-w-[1000px] overflow-hidden rounded-[2rem] bg-gia-navy px-6 py-12 text-center sm:px-12 lg:py-16">

                <h2 class="font-display text-3xl font-semibold tracking-tight text-white">
                    {{ __('faq.cta.title') }}
                </h2>

                <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-white/65">
                    {{ __('faq.cta.description') }}
                </p>

                <a
                    href="{{ url('/'.app()->getLocale().'/contact') }}"
                    class="mt-7 inline-flex items-center justify-center rounded-full bg-gia-orange px-7 py-3.5 text-sm font-semibold text-white transition hover:opacity-90"
                >
                    {{ __('faq.cta.button') }}
                </a>

            </div>

        </section>

    </main>

    @include('partials.public-footer')


    {{-- FAQ SEARCH --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const searchInput = document.getElementById('faq-search');
            const categories = document.querySelectorAll('.faq-category');
            const noResults = document.getElementById('faq-no-results');

            if (!searchInput) {
                return;
            }

            const normalize = (value) => {
                return value
                    .toLowerCase()
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '')
                    .trim();
            };

            searchInput.addEventListener('input', () => {

                const query = normalize(searchInput.value);

                let totalVisible = 0;

                categories.forEach(category => {

                    const items = category.querySelectorAll('.faq-item');
                    let categoryVisible = 0;

                    items.forEach(item => {

                        const searchableText = normalize(item.dataset.search || '');
                        const matches = query === '' || searchableText.includes(query);

                        item.classList.toggle('hidden', !matches);

                        if (matches) {
                            categoryVisible++;
                            totalVisible++;
                        }

                    });

                    category.classList.toggle('hidden', categoryVisible === 0);

                });

                noResults.classList.toggle('hidden', totalVisible !== 0);

            });

        });
    </script>

</x-layouts.public>