@props(['eyebrow', 'title', 'description'])

<section id="top" class="page-hero relative overflow-hidden bg-hce-navy pb-20 pt-40 text-white lg:pb-24 lg:pt-44">
    <div class="hero-grid absolute inset-0"></div>
    <div class="page-hero-glow absolute -right-40 -top-40 size-[38rem] rounded-full"></div>
    <div class="container-shell relative">
        <p class="eyebrow text-orange-300" data-reveal>{{ $eyebrow }}</p>
        <h1 class="mt-5 max-w-4xl font-display text-3xl font-semibold leading-[1.12] tracking-[-0.045em] sm:text-4xl lg:text-[3.25rem]" data-reveal>{{ $title }}</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-slate-300 lg:text-lg" data-reveal>{{ $description }}</p>
        @if ($slot->isNotEmpty())
            <div class="mt-9" data-reveal>{{ $slot }}</div>
        @endif
    </div>
</section>
