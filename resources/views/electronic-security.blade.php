@php
    $page = app()->isLocale('en')
        ? ['eyebrow' => 'Electronic security', 'title' => 'See. Control. Respond.', 'description' => 'An integrated ecosystem that protects people, assets and sites without multiplying consoles or blind spots.', 'cta' => 'Request a security assessment', 'solutions' => '360° protection', 'solutions_title' => 'Security designed as one system.', 'items' => [
            ['camera', 'IP video surveillance', 'High-definition cameras, night vision, video analytics and secure recording.'],
            ['access', 'Access control', 'Cards, biometrics, security gates and centralised permissions.'],
            ['bell', 'Intrusion alarm', 'Perimeter detection, instant alerts and automated scenarios.'],
            ['fire', 'Fire detection', 'Early detection, signalling and integration with evacuation procedures.'],
            ['clock', 'Time & attendance', 'Reliable attendance monitoring connected to HR processes.'],
            ['managed', 'Central monitoring', 'One clear interface for devices, events and history.'],
        ]]
        : ['eyebrow' => 'Sécurité électronique', 'title' => 'Voir. Contrôler. Réagir.', 'description' => 'Un écosystème intégré qui protège les personnes, les actifs et les sites sans multiplier les consoles ni les angles morts.', 'cta' => 'Demander une étude de sécurité', 'solutions' => 'Protection 360°', 'solutions_title' => 'La sécurité conçue comme un système.', 'items' => [
            ['camera', 'Vidéosurveillance IP', 'Caméras haute définition, vision nocturne, analyse vidéo et enregistrement sécurisé.'],
            ['access', 'Contrôle d’accès', 'Badges, biométrie, sas et gestion centralisée des droits.'],
            ['bell', 'Alarme intrusion', 'Détection périmétrique, alertes instantanées et scénarios automatisés.'],
            ['fire', 'Détection incendie', 'Détection précoce, signalisation et intégration aux procédures d’évacuation.'],
            ['clock', 'Pointage & présence', 'Suivi fiable des présences connecté aux processus RH.'],
            ['managed', 'Supervision centralisée', 'Une interface claire pour les équipements, événements et historiques.'],
        ]];
@endphp

<x-layouts.app :title="$page['eyebrow']" :description="$page['description']">
    <section id="top" class="relative min-h-[680px] overflow-hidden bg-hce-navy pt-28 text-white"><img class="absolute inset-0 size-full object-cover" src="{{ asset('images/hce-security-campus.png') }}" alt="" fetchpriority="high"><div class="hero-overlay absolute inset-0"></div><div class="hero-grid absolute inset-0"></div><div class="container-shell relative flex min-h-[580px] items-center py-20"><div class="max-w-3xl" data-reveal><p class="eyebrow text-orange-300">{{ $page['eyebrow'] }}</p><h1 class="hero-title mt-5">{{ $page['title'] }}</h1><p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">{{ $page['description'] }}</p><a href="{{ route('contact') }}" class="button-primary button-large mt-8">{{ $page['cta'] }}<x-icon name="arrow-right" class="size-5" /></a></div></div></section>
    <section class="section-spacing bg-white"><div class="container-shell"><x-section-heading :eyebrow="$page['solutions']" :title="$page['solutions_title']" /><div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($page['items'] as [$icon, $title, $text])<article class="service-card" data-reveal><span class="service-icon"><x-icon :name="$icon" class="size-7" /></span><h2 class="mt-7 font-display text-lg font-semibold text-hce-navy">{{ $title }}</h2><p class="mt-3 text-sm leading-7 text-slate-600">{{ $text }}</p></article>@endforeach
    </div></div></section>
</x-layouts.app>
