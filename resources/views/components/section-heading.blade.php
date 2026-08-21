@props(['eyebrow', 'title', 'align' => 'left', 'light' => false])

<div @class(['max-w-3xl', 'mx-auto text-center' => $align === 'center']) data-reveal>
    <p @class(['eyebrow', 'text-orange-300' => $light])>{{ $eyebrow }}</p>
    <h2 @class(['section-title mt-4', 'text-white' => $light, 'text-hce-navy' => ! $light])>{{ $title }}</h2>
    @if ($slot->isNotEmpty())
        <div @class(['mt-5 text-base leading-8 lg:text-lg', 'text-slate-300' => $light, 'text-slate-600' => ! $light])>
            {{ $slot }}
        </div>
    @endif
</div>
