@php
    $services = trans('site.services');
    $methodSteps = app()->isLocale('en')
        ? [['Frame', 'We clarify goals, constraints and risks.'], ['Design', 'We define a clear architecture and deployment plan.'], ['Deploy', 'Our teams install, test, document and train.'], ['Support', 'We monitor performance and continuously improve.']]
        : [['Cadrer', 'Nous clarifions les objectifs, les contraintes et les risques.'], ['Concevoir', 'Nous proposons une architecture lisible et un plan de déploiement.'], ['Déployer', 'Nos équipes installent, testent, documentent et forment.'], ['Accompagner', 'Nous suivons les performances et faisons évoluer la solution.']];
@endphp

<x-layouts.app :title="$services['meta_title']" :description="$services['meta_description']">
    <x-page-hero :eyebrow="$services['eyebrow']" :title="$services['title']" :description="$services['description']">
        <a href="#catalogue" class="button-primary button-large">{{ $services['catalogue_cta'] }}<x-icon name="arrow-right" class="size-5 rotate-90" /></a>
    </x-page-hero>

    <section id="catalogue" class="section-spacing bg-slate-50">
        <div class="container-shell">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <x-section-heading :eyebrow="$services['catalogue_eyebrow']" :title="$services['catalogue_title']">{{ $services['catalogue_description'] }}</x-section-heading>
                <div class="service-filters" aria-label="Service filters" data-reveal>
                    <button class="service-filter-active" type="button" data-service-filter="all">{{ $services['filters']['all'] }}</button>
                    <button type="button" data-service-filter="it">{{ $services['filters']['it'] }}</button>
                    <button type="button" data-service-filter="security">{{ $services['filters']['security'] }}</button>
                    <button type="button" data-service-filter="business">{{ $services['filters']['business'] }}</button>
                </div>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3" data-service-grid>
                @foreach ($services['items'] as $index => [$icon, $title, $category, $description, $features])
                    <article @if ($index === 0) id="infrastructure" @elseif ($index === 1) id="managed" @elseif ($index === 2) id="security" @elseif ($index === 5) id="electronic" @elseif ($index === 9) id="business" @endif class="catalogue-card" data-service-card data-category="{{ $category }}" data-reveal>
                        <div class="flex items-start justify-between gap-4"><span class="service-icon"><x-icon :name="$icon" class="size-7" /></span><span class="service-category">{{ $services['filters'][$category] }}</span></div>
                        <h2 class="mt-7 font-display text-lg font-semibold text-hce-navy">{{ $title }}</h2>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $description }}</p>
                        <ul class="mt-6 space-y-3 border-t border-slate-100 pt-6">
                            @foreach ($features as $feature)
                                <li class="flex items-center gap-3 text-sm font-semibold text-slate-700"><x-icon name="check" class="size-4 text-blue-600" />{{ $feature }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-spacing bg-white">
        <div class="container-shell grid items-center gap-14 lg:grid-cols-2 lg:gap-20">
            <div class="image-frame aspect-[4/3]" data-reveal><img class="size-full object-cover" src="{{ asset('images/hce-infrastructure-engineer.png') }}" alt="" loading="lazy"></div>
            <div>
                <x-section-heading :eyebrow="app()->isLocale('en') ? 'Our method' : 'Notre méthode'" :title="app()->isLocale('en') ? 'From understanding to measurable results.' : 'De la compréhension au résultat.'">
                    {{ app()->isLocale('en') ? 'Technology only creates value when it is properly framed, documented and adopted.' : 'La technologie ne crée de la valeur que lorsqu’elle est bien cadrée, documentée et adoptée.' }}
                </x-section-heading>
                <ol class="mt-9 space-y-6">
                    @foreach ($methodSteps as $step => [$title, $description])
                        <li class="process-step" data-reveal><span>{{ str_pad($step + 1, 2, '0', STR_PAD_LEFT) }}</span><div><h3>{{ $title }}</h3><p>{{ $description }}</p></div></li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="section-spacing bg-blue-50">
        <div class="container-shell">
            <div class="cta-panel" data-reveal>
                <div><p class="eyebrow text-orange-300">{{ app()->isLocale('en') ? 'Need an assessment?' : 'Besoin d’un diagnostic ?' }}</p><h2 class="mt-4 max-w-2xl font-display text-2xl font-semibold text-white sm:text-3xl">{{ app()->isLocale('en') ? 'Let’s start by understanding your environment.' : 'Commençons par comprendre votre environnement.' }}</h2></div>
                <a href="{{ route('contact') }}" class="button-primary button-large shrink-0">{{ app()->isLocale('en') ? 'Talk to an expert' : 'Demander un échange' }}<x-icon name="arrow-right" class="size-5" /></a>
            </div>
        </div>
    </section>
</x-layouts.app>
