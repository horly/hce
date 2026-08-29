@php
    $page = app()->isLocale('en')
        ? [
            'eyebrow' => 'Project gallery',
            'title' => 'Our work, right where it happens.',
            'description' => 'Training sessions, infrastructure deployments and electronic security installations: discover HCE teams and solutions in action.',
            'browse' => 'Browse the gallery',
            'contact' => 'Discuss your project',
            'photos' => 'photos',
            'areas' => 'areas of expertise',
            'open' => 'Open photo',
            'close' => 'Close gallery',
            'previous' => 'Previous photo',
            'next' => 'Next photo',
            'position' => 'Photo :current of :total',
            'categories' => [
                [
                    'id' => 'academy',
                    'number' => '01',
                    'title' => 'HCE Academy & skills transfer',
                    'description' => 'Practical training sessions designed around real equipment, real-world scenarios and direct support from HCE specialists.',
                    'photos' => [
                        ['academy-atelier-groupe.jpg', '2020', 'Practical workshop participants', 'Group photo at the end of an HCE practical workshop.'],
                        ['academy-atelier-pratique.jpg', '2020', 'Hands-on computer workshop', 'Participants working on laptops during a practical HCE session.'],
                        ['academy-reseau-01.jpg', '2021', 'Network training support', 'HCE specialists supporting participants during a network training session.'],
                        ['academy-reseau-02.jpg', '2021', 'Collaborative learning session', 'Participants working together on laptops during technical training.'],
                        ['academy-reseau-03.jpg', '2021', 'Network configuration exercises', 'Practical exercises around network configuration and infrastructure.'],
                        ['academy-reseau-04.jpg', '2021', 'Guided technical workshop', 'An HCE specialist guiding participants through a technical exercise.'],
                        ['academy-reseau-05.jpg', '2021', 'Infrastructure lab', 'Participants learning through an infrastructure lab and live demonstration.'],
                        ['academy-reseau-06.jpg', '2021', 'Individual technical support', 'Personalized support during a hands-on HCE Academy workshop.'],
                        ['academy-numerique-01.jpg', '2026', 'Digital tools training', 'Participants after a practical session on digital and audiovisual tools.'],
                        ['academy-numerique-02.jpg', '2026', 'Interactive learning', 'Training session using an interactive display and practical demonstrations.'],
                    ],
                ],
                [
                    'id' => 'infrastructure',
                    'number' => '02',
                    'title' => 'Infrastructure & networks',
                    'description' => 'On-site deployment, structured cabling, wireless links and equipment integration carried out by HCE technical teams.',
                    'photos' => [
                        ['infrastructure-equipe.jpg', '2026', 'Deployment team', 'HCE technical team equipped for an on-site infrastructure deployment.'],
                        ['infrastructure-installation.jpg', '2026', 'On-site equipment installation', 'Technician installing and securing technical equipment on site.'],
                        ['infrastructure-fibre.jpg', '2026', 'Fibre-optic cabling', 'Fibre-optic cabling and termination work inside a network cabinet.'],
                        ['infrastructure-radio.jpg', '2026', 'Wireless link deployment', 'Outdoor wireless antenna installed to provide a point-to-point connection.'],
                        ['infrastructure-baie.jpg', '2026', 'Network rack integration', 'Servers, routers and switches integrated into a professional network rack.'],
                    ],
                ],
                [
                    'id' => 'security',
                    'number' => '03',
                    'title' => 'Electronic security',
                    'description' => 'Camera installation, system commissioning and video-surveillance configuration for better site visibility and control.',
                    'photos' => [
                        ['security-camera.jpg', '2026', 'Camera installation', 'HCE technician installing an outdoor electronic security camera.'],
                        ['security-installation.jpg', '2026', 'On-site finishing work', 'Technician completing an electronic security installation on site.'],
                        ['security-configuration-01.jpg', '2026', 'Video-surveillance configuration', 'Technical configuration and verification of a video-surveillance system.'],
                        ['security-configuration-02.jpg', '2026', 'System commissioning', 'HCE technician commissioning and testing a video-surveillance installation.'],
                    ],
                ],
            ],
        ]
        : [
            'eyebrow' => 'Annexes projets',
            'title' => 'Nos réalisations, au plus près du terrain.',
            'description' => 'Formations, déploiements d’infrastructures et installations de sécurité électronique : découvrez les équipes et les solutions HCE en action.',
            'browse' => 'Parcourir la galerie',
            'contact' => 'Discuter de votre projet',
            'photos' => 'photos',
            'areas' => 'domaines d’expertise',
            'open' => 'Ouvrir la photo',
            'close' => 'Fermer la galerie',
            'previous' => 'Photo précédente',
            'next' => 'Photo suivante',
            'position' => 'Photo :current sur :total',
            'categories' => [
                [
                    'id' => 'academy',
                    'number' => '01',
                    'title' => 'HCE Academy & transfert de compétences',
                    'description' => 'Des formations pratiques construites autour d’équipements réels, de cas concrets et d’un accompagnement direct par les spécialistes HCE.',
                    'photos' => [
                        ['academy-atelier-groupe.jpg', '2020', 'Participants à un atelier pratique', 'Photo de groupe à l’issue d’un atelier pratique organisé par HCE.'],
                        ['academy-atelier-pratique.jpg', '2020', 'Atelier informatique pratique', 'Participants travaillant sur leurs ordinateurs pendant une session pratique HCE.'],
                        ['academy-reseau-01.jpg', '2021', 'Accompagnement en formation réseau', 'Des spécialistes HCE accompagnent les participants pendant une formation réseau.'],
                        ['academy-reseau-02.jpg', '2021', 'Session d’apprentissage collaboratif', 'Des participants travaillent ensemble sur leurs ordinateurs pendant une formation technique.'],
                        ['academy-reseau-03.jpg', '2021', 'Exercices de configuration réseau', 'Exercices pratiques consacrés à la configuration réseau et aux infrastructures.'],
                        ['academy-reseau-04.jpg', '2021', 'Atelier technique guidé', 'Un spécialiste HCE guide les participants pendant un exercice technique.'],
                        ['academy-reseau-05.jpg', '2021', 'Laboratoire infrastructure', 'Apprentissage pratique autour d’un laboratoire infrastructure et d’une démonstration.'],
                        ['academy-reseau-06.jpg', '2021', 'Assistance technique personnalisée', 'Accompagnement personnalisé pendant un atelier pratique HCE Academy.'],
                        ['academy-numerique-01.jpg', '2026', 'Formation aux outils numériques', 'Participantes à l’issue d’une session pratique sur les outils numériques et audiovisuels.'],
                        ['academy-numerique-02.jpg', '2026', 'Apprentissage interactif', 'Session de formation utilisant un écran interactif et des démonstrations pratiques.'],
                    ],
                ],
                [
                    'id' => 'infrastructure',
                    'number' => '02',
                    'title' => 'Infrastructures & réseaux',
                    'description' => 'Déploiement sur site, câblage structuré, liaisons sans fil et intégration d’équipements réalisés par les équipes techniques HCE.',
                    'photos' => [
                        ['infrastructure-equipe.jpg', '2026', 'Équipe de déploiement', 'Équipe technique HCE équipée pour une intervention d’infrastructure sur site.'],
                        ['infrastructure-installation.jpg', '2026', 'Installation d’équipements sur site', 'Technicien installant et fixant des équipements techniques sur site.'],
                        ['infrastructure-fibre.jpg', '2026', 'Câblage en fibre optique', 'Travaux de câblage et de terminaison en fibre optique dans une baie réseau.'],
                        ['infrastructure-radio.jpg', '2026', 'Déploiement d’une liaison sans fil', 'Antenne extérieure installée pour établir une liaison point à point.'],
                        ['infrastructure-baie.jpg', '2026', 'Intégration d’une baie réseau', 'Serveurs, routeurs et commutateurs intégrés dans une baie réseau professionnelle.'],
                    ],
                ],
                [
                    'id' => 'security',
                    'number' => '03',
                    'title' => 'Sécurité électronique',
                    'description' => 'Installation de caméras, mise en service et configuration de vidéosurveillance pour améliorer la visibilité et le contrôle des sites.',
                    'photos' => [
                        ['security-camera.jpg', '2026', 'Installation d’une caméra', 'Technicien HCE installant une caméra extérieure de sécurité électronique.'],
                        ['security-installation.jpg', '2026', 'Finitions techniques sur site', 'Technicien réalisant les finitions d’une installation de sécurité électronique.'],
                        ['security-configuration-01.jpg', '2026', 'Configuration de la vidéosurveillance', 'Configuration technique et vérification d’un système de vidéosurveillance.'],
                        ['security-configuration-02.jpg', '2026', 'Mise en service du système', 'Technicienne HCE mettant en service et testant une installation de vidéosurveillance.'],
                    ],
                ],
            ],
        ];
@endphp

<x-layouts.app :title="$page['eyebrow']" :description="$page['description']">
    <x-page-hero :eyebrow="$page['eyebrow']" :title="$page['title']" :description="$page['description']">
        <div class="flex flex-wrap gap-3">
            <a href="#academy" class="button-primary button-large">{{ $page['browse'] }}<x-icon name="arrow-right" class="size-5 rotate-90" /></a>
            <a href="{{ route('contact') }}" class="button-secondary button-large">{{ $page['contact'] }}</a>
        </div>
    </x-page-hero>

    <section class="border-b border-slate-200 bg-slate-50">
        <div class="container-shell grid gap-px overflow-hidden rounded-b-2xl border-x border-b border-slate-200 bg-slate-200 sm:grid-cols-2">
            <div class="flex items-center gap-4 bg-white px-6 py-5 lg:px-8">
                <strong class="font-display text-3xl text-hce-navy">19</strong>
                <span class="text-sm font-semibold text-slate-500">{{ $page['photos'] }}</span>
            </div>
            <div class="flex items-center gap-4 bg-white px-6 py-5 lg:px-8">
                <strong class="font-display text-3xl text-hce-navy">03</strong>
                <span class="text-sm font-semibold text-slate-500">{{ $page['areas'] }}</span>
            </div>
        </div>
    </section>

    <div class="bg-white">
        @foreach ($page['categories'] as $category)
            <section id="{{ $category['id'] }}" class="section-spacing scroll-mt-28 border-b border-slate-100 last:border-b-0">
                <div class="container-shell">
                    <div class="grid gap-6 border-b border-slate-200 pb-10 lg:grid-cols-[7rem_1fr_1fr] lg:items-end" data-reveal>
                        <span class="font-display text-5xl font-semibold tracking-[-.05em] text-blue-100">{{ $category['number'] }}</span>
                        <div>
                            <p class="eyebrow">{{ str_pad(count($category['photos']), 2, '0', STR_PAD_LEFT) }} {{ $page['photos'] }}</p>
                            <h2 class="mt-4 font-display text-2xl font-semibold tracking-[-.035em] text-hce-navy sm:text-3xl">{{ $category['title'] }}</h2>
                        </div>
                        <p class="max-w-xl text-sm leading-7 text-slate-600 lg:justify-self-end">{{ $category['description'] }}</p>
                    </div>

                    <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($category['photos'] as [$image, $year, $title, $alt])
                            <button
                                type="button"
                                class="group overflow-hidden rounded-2xl border border-slate-200 bg-white text-left shadow-[0_12px_35px_rgb(15_23_42_/_0.06)] transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-[0_24px_55px_rgb(15_23_42_/_0.13)] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-blue-200"
                                data-gallery-item
                                data-image-src="{{ asset('images/annexes/'.$image) }}"
                                data-image-alt="{{ $alt }}"
                                data-image-caption="{{ $title }}"
                                aria-label="{{ $page['open'] }} : {{ $title }}"
                                data-reveal
                            >
                                <span class="block aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img class="size-full object-cover transition duration-700 group-hover:scale-105" src="{{ asset('images/annexes/'.$image) }}" alt="{{ $alt }}" loading="lazy" decoding="async">
                                </span>
                                <span class="flex items-center justify-between gap-4 px-5 py-4">
                                    <span>
                                        <span class="block text-[.65rem] font-extrabold uppercase tracking-[.13em] text-blue-600">{{ $year }}</span>
                                        <span class="mt-1.5 block font-display text-sm font-semibold leading-6 text-hce-navy">{{ $title }}</span>
                                    </span>
                                    <span class="flex size-9 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition group-hover:bg-hce-orange group-hover:text-hce-navy" aria-hidden="true">
                                        <x-icon name="arrow-right" class="size-4 -rotate-45" />
                                    </span>
                                </span>
                            </button>
                        @endforeach
                    </div>
                </div>
            </section>
        @endforeach
    </div>

    <div
        class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-950/95 p-4 backdrop-blur-sm sm:p-8"
        data-gallery-dialog
        data-position-template="{{ $page['position'] }}"
        role="dialog"
        aria-modal="true"
        aria-labelledby="gallery-dialog-title"
        hidden
    >
        <button type="button" class="absolute right-4 top-4 z-10 flex size-11 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white transition hover:bg-white/20 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-white/30 sm:right-7 sm:top-7" data-gallery-close aria-label="{{ $page['close'] }}">
            <x-icon name="x" class="size-6" />
        </button>

        <button type="button" class="absolute left-3 top-1/2 z-10 flex size-11 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-slate-950/60 text-white transition hover:bg-blue-600 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-white/30 sm:left-7 sm:size-12" data-gallery-previous aria-label="{{ $page['previous'] }}">
            <x-icon name="chevron-left" class="size-6" />
        </button>

        <figure class="flex max-h-full max-w-[min(92vw,80rem)] flex-col items-center gap-4">
            <img class="max-h-[76vh] max-w-full rounded-xl object-contain shadow-2xl" data-gallery-image src="" alt="">
            <figcaption class="text-center text-white">
                <p class="text-[.65rem] font-extrabold uppercase tracking-[.14em] text-blue-300" data-gallery-position></p>
                <h2 id="gallery-dialog-title" class="mt-2 font-display text-base font-semibold sm:text-lg" data-gallery-caption></h2>
            </figcaption>
        </figure>

        <button type="button" class="absolute right-3 top-1/2 z-10 flex size-11 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-slate-950/60 text-white transition hover:bg-blue-600 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-white/30 sm:right-7 sm:size-12" data-gallery-next aria-label="{{ $page['next'] }}">
            <x-icon name="chevron-right" class="size-6" />
        </button>
    </div>
</x-layouts.app>
