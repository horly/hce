@php
    $page = app()->isLocale('en')
        ? [
            'eyebrow' => 'HCE Academy', 'title' => 'Turn knowledge into operational capability.', 'description' => 'Practical training programmes designed to strengthen technical, digital and business skills.',
            'catalogue' => 'Training programmes', 'catalogue_title' => 'Skills that can be applied from day one.',
            'items' => [
                ['network', 'Networks & systems', 'Network fundamentals, administration, virtualisation and troubleshooting.'],
                ['shield', 'Cybersecurity', 'Digital hygiene, risk awareness, endpoint and infrastructure protection.'],
                ['business', 'Odoo & Sage', 'Business process management, accounting, sales, inventory and reporting.'],
                ['code', 'Web development', 'Modern foundations for building and maintaining effective web solutions.'],
                ['managed', 'IT support', 'User assistance, incident management and professional support practices.'],
                ['training', 'Digital literacy', 'Productivity tools, collaboration and responsible use of digital services.'],
            ],
            'formats_title' => 'A format for every objective.', 'formats' => [['01', 'In-company', 'Training delivered within your organisation and tailored to your environment.'], ['02', 'Classroom', 'Structured sessions with guided exercises and direct interaction.'], ['03', 'Custom programme', 'A curriculum designed around your roles, tools and performance goals.']],
            'cta' => 'Build a training plan',
        ]
        : [
            'eyebrow' => 'HCE Academy', 'title' => 'Transformer les connaissances en capacités opérationnelles.', 'description' => 'Des formations pratiques conçues pour renforcer les compétences techniques, numériques et métiers.',
            'catalogue' => 'Programmes de formation', 'catalogue_title' => 'Des compétences applicables dès le premier jour.',
            'items' => [
                ['network', 'Réseaux & systèmes', 'Fondamentaux réseau, administration, virtualisation et diagnostic.'],
                ['shield', 'Cybersécurité', 'Hygiène numérique, sensibilisation aux risques et protection des infrastructures.'],
                ['business', 'Odoo & Sage', 'Processus métiers, comptabilité, ventes, stocks et reporting.'],
                ['code', 'Développement web', 'Fondations modernes pour concevoir et maintenir des solutions web efficaces.'],
                ['managed', 'Support IT', 'Assistance utilisateurs, gestion des incidents et pratiques professionnelles.'],
                ['training', 'Culture numérique', 'Outils de productivité, collaboration et usage responsable du numérique.'],
            ],
            'formats_title' => 'Un format pour chaque objectif.', 'formats' => [['01', 'En entreprise', 'Une formation livrée dans votre organisation et adaptée à votre environnement.'], ['02', 'En salle', 'Des sessions structurées avec exercices guidés et interaction directe.'], ['03', 'Programme sur mesure', 'Un parcours conçu autour de vos métiers, outils et objectifs de performance.']],
            'cta' => 'Construire un plan de formation',
        ];
@endphp

<x-layouts.app :title="$page['eyebrow']" :description="$page['description']">
    <x-page-hero :eyebrow="$page['eyebrow']" :title="$page['title']" :description="$page['description']">
        <a href="{{ route('contact', ['objet' => 'formation']) }}" class="button-primary button-large">{{ $page['cta'] }}<x-icon name="arrow-right" class="size-5" /></a>
    </x-page-hero>

    <section class="section-spacing bg-slate-50">
        <div class="container-shell">
            <x-section-heading :eyebrow="$page['catalogue']" :title="$page['catalogue_title']" />
            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($page['items'] as [$icon, $title, $description])
                    <article class="training-card" data-reveal><span class="service-icon"><x-icon :name="$icon" class="size-7" /></span><h2>{{ $title }}</h2><p>{{ $description }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-spacing relative overflow-hidden bg-hce-navy text-white">
        <div class="hero-grid absolute inset-0"></div>
        <div class="container-shell relative">
            <x-section-heading :eyebrow="app()->isLocale('en') ? 'Learning formats' : 'Formats pédagogiques'" :title="$page['formats_title']" light />
            <div class="mt-12 grid gap-px overflow-hidden rounded-3xl border border-white/10 bg-white/10 md:grid-cols-3">
                @foreach ($page['formats'] as [$number, $title, $description])
                    <article class="format-card" data-reveal><span>{{ $number }}</span><h2>{{ $title }}</h2><p>{{ $description }}</p></article>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
