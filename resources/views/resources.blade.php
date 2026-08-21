@php
    $page = app()->isLocale('en')
        ? ['eyebrow' => 'Resource centre', 'title' => 'Understand today. Decide better tomorrow.', 'description' => 'Practical guidance for smarter IT, security and transformation decisions.', 'download' => 'Download the HCE presentation', 'request' => 'Request this guide', 'items' => [
            ['hce-infrastructure-engineer.png', 'Infrastructure guide', '7 signs that your network needs modernising', 'Availability, performance, Wi-Fi coverage and documentation: the signals to monitor.'],
            ['hce-security-campus.png', 'Security checklist', 'How to prepare for an electronic security audit', 'The zones, access points, procedures and data to review before selecting equipment.'],
            ['hce-business-transformation.png', 'Digital transformation', 'Deliver an ERP project without leaving teams behind', 'A progressive approach to scope needs, involve business teams and drive adoption.'],
        ]]
        : ['eyebrow' => 'Centre de ressources', 'title' => 'Comprendre aujourd’hui. Décider mieux demain.', 'description' => 'Des repères pratiques pour mieux décider en matière d’IT, de sécurité et de transformation.', 'download' => 'Télécharger la présentation HCE', 'request' => 'Demander ce guide', 'items' => [
            ['hce-infrastructure-engineer.png', 'Guide infrastructure', '7 signaux qu’il est temps de moderniser votre réseau', 'Disponibilité, performance, couverture Wi-Fi et documentation : les indicateurs à surveiller.'],
            ['hce-security-campus.png', 'Checklist sécurité', 'Préparer un audit de sécurité électronique', 'Les zones, accès, procédures et données à examiner avant de choisir les équipements.'],
            ['hce-business-transformation.png', 'Transformation numérique', 'Réussir un projet ERP sans perdre vos équipes en route', 'Une méthode progressive pour cadrer les besoins, mobiliser les métiers et faciliter l’adoption.'],
        ]];
@endphp

<x-layouts.app :title="$page['eyebrow']" :description="$page['description']">
    <x-page-hero :eyebrow="$page['eyebrow']" :title="$page['title']" :description="$page['description']"><a href="{{ asset('documents/presentation-hce-2026.pdf') }}" class="button-primary button-large" download>{{ $page['download'] }}<x-icon name="download" class="size-5" /></a></x-page-hero>
    <section class="section-spacing bg-slate-50"><div class="container-shell"><div class="grid gap-6 lg:grid-cols-3">
        @foreach ($page['items'] as [$image, $category, $title, $text])
            <article class="resource-card" data-reveal><img src="{{ asset('images/'.$image) }}" alt="" loading="lazy"><div class="p-7"><p class="eyebrow">{{ $category }}</p><h2 class="mt-3 font-display text-lg font-semibold leading-7 text-hce-navy">{{ $title }}</h2><p class="mt-3 text-sm leading-7 text-slate-600">{{ $text }}</p><a href="{{ route('contact') }}" class="text-link mt-6 text-sm">{{ $page['request'] }}<x-icon name="arrow-right" class="size-4" /></a></div></article>
        @endforeach
    </div></div></section>
</x-layouts.app>
