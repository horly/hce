@php
    $page = app()->isLocale('en')
        ? [
            'eyebrow' => 'About HCE', 'title' => 'Technology expertise grounded in service.', 'description' => 'A Congolese company helping organisations operate, secure and modernise their digital environments.',
            'story_eyebrow' => 'Our story', 'story_title' => 'Built to raise the standard of IT service.', 'story' => 'Hightech Computing Evolution provides managed IT services, technology solutions and professional training. HCE was created to offer reliable service aligned with international standards and the realities of organisations in the DRC.',
            'mission_title' => 'Our mission', 'mission' => 'Deliver professional IT services while building the digital capabilities of users and technical teams.',
            'vision_title' => 'Our ambition', 'vision' => 'Become the preferred technology and professional training partner for organisations and individuals in the DRC.',
            'values_title' => 'How we work.', 'values' => [['01', 'Commitment', 'We take ownership of outcomes, not just tasks.'], ['02', 'Clarity', 'We make technology understandable and decisions transparent.'], ['03', 'Excellence', 'We document, test and continuously improve our work.']],
            'sectors' => ['Corporate', 'Public institutions', 'Banking & finance', 'Industry', 'Logistics', 'Residential & commercial'],
        ]
        : [
            'eyebrow' => 'À propos de HCE', 'title' => 'L’expertise technologique, avec le sens du service.', 'description' => 'Une entreprise congolaise qui aide les organisations à exploiter, sécuriser et moderniser leur environnement numérique.',
            'story_eyebrow' => 'Notre histoire', 'story_title' => 'Élever le standard du service IT.', 'story' => 'Hightech Computing Evolution fournit des services IT managés, des solutions technologiques et des formations professionnelles. HCE a été créée pour offrir un service fiable, aligné sur les standards internationaux et les réalités des organisations en RDC.',
            'mission_title' => 'Notre mission', 'mission' => 'Fournir des services IT professionnels tout en renforçant les compétences numériques des utilisateurs et des équipes techniques.',
            'vision_title' => 'Notre ambition', 'vision' => 'Devenir le partenaire technologique et de formation privilégié des organisations et particuliers en RDC.',
            'values_title' => 'Notre manière de travailler.', 'values' => [['01', 'Engagement', 'Nous assumons les résultats, pas seulement les tâches.'], ['02', 'Clarté', 'Nous rendons la technologie compréhensible et les décisions transparentes.'], ['03', 'Excellence', 'Nous documentons, testons et améliorons continuellement notre travail.']],
            'sectors' => ['Entreprises', 'Institutions publiques', 'Banque & finance', 'Industrie', 'Logistique', 'Résidentiel & commercial'],
        ];
@endphp

<x-layouts.app :title="$page['eyebrow']" :description="$page['description']">
    <x-page-hero :eyebrow="$page['eyebrow']" :title="$page['title']" :description="$page['description']" />

    <section class="section-spacing bg-white">
        <div class="container-shell grid items-center gap-14 lg:grid-cols-[1.05fr_.95fr] lg:gap-20">
            <div class="relative" data-reveal><div class="image-frame aspect-[4/3]"><img class="size-full object-cover" src="{{ asset('images/hce-hero-operations.png') }}" alt="" loading="lazy"></div></div>
            <div>
                <p class="eyebrow">{{ $page['story_eyebrow'] }}</p>
                <h2 class="section-title mt-4 text-hce-navy">{{ $page['story_title'] }}</h2>
                <p class="mt-6 text-base leading-8 text-slate-600">{{ $page['story'] }}</p>
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl bg-blue-50 p-6"><h3 class="font-display text-lg font-semibold text-hce-navy">{{ $page['mission_title'] }}</h3><p class="mt-3 text-sm leading-7 text-slate-600">{{ $page['mission'] }}</p></div>
                    <div class="rounded-2xl bg-orange-50 p-6"><h3 class="font-display text-lg font-semibold text-hce-navy">{{ $page['vision_title'] }}</h3><p class="mt-3 text-sm leading-7 text-slate-600">{{ $page['vision'] }}</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacing bg-slate-50">
        <div class="container-shell">
            <x-section-heading :eyebrow="app()->isLocale('en') ? 'Our principles' : 'Nos principes'" :title="$page['values_title']" />
            <div class="mt-12 grid gap-5 md:grid-cols-3">
                @foreach ($page['values'] as [$number, $title, $description])
                    <article class="value-card min-h-0" data-reveal><span class="value-number">{{ $number }}</span><h2 class="mt-10 font-display text-xl font-semibold text-hce-navy">{{ $title }}</h2><p class="mt-3 text-sm leading-7 text-slate-600">{{ $description }}</p></article>
                @endforeach
            </div>
            <div class="mt-14 flex flex-wrap gap-3" data-reveal>
                @foreach ($page['sectors'] as $sector)<span class="sector-pill">{{ $sector }}</span>@endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
