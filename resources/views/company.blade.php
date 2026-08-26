@php
    $page = app()->isLocale('en')
        ? [
            'eyebrow' => 'About HCE',
            'title' => 'Technology expertise grounded in service.',
            'description' => 'A Congolese technology company helping organisations operate, secure and modernise their digital environments.',
            'primary_cta' => 'Talk to our team',
            'secondary_cta' => 'Explore our solutions',
            'trust_label' => 'Your trusted MSP partner',
            'established' => 'Year of launch',
            'metrics' => [['24/7', 'Monitoring & support'], ['1,500+', 'User workstations'], ['30+', 'Websites delivered'], ['DRC', 'National coverage']],
            'story_eyebrow' => 'Our identity',
            'story_title' => 'Built to raise the standard of IT service.',
            'story' => 'Hightech Computing Evolution provides managed IT services, technology solutions and professional training. HCE was created to deliver reliable service aligned with international standards and the realities of organisations in the DRC.',
            'manifesto' => 'Technology creates value when it is reliable, understandable and truly useful to the people who depend on it.',
            'mission_title' => 'Our mission',
            'mission' => 'Deliver professional IT services while building the digital capabilities of users and technical teams.',
            'vision_title' => 'Our ambition',
            'vision' => 'Become the preferred technology and professional training partner for organisations and individuals in the DRC.',
            'method_eyebrow' => 'Our operating model',
            'method_title' => 'From business need to controlled operation.',
            'method_description' => 'A clear delivery framework keeps every project aligned, documented and ready to evolve.',
            'steps' => [
                ['01', 'Understand', 'Clarify priorities, constraints, risks and the expected business outcome.'],
                ['02', 'Design', 'Build the right architecture and a realistic implementation roadmap.'],
                ['03', 'Deploy', 'Execute methodically, document decisions and transfer knowledge.'],
                ['04', 'Support', 'Monitor performance, assist users and continuously improve the solution.'],
            ],
            'values_eyebrow' => 'Our principles',
            'values_title' => 'A demanding standard, applied every day.',
            'values_description' => 'The principles that guide our decisions, our delivery and every client relationship.',
            'values' => [
                ['01', 'Commitment', 'We take ownership of outcomes, not just tasks.', 'shield'],
                ['02', 'Clarity', 'We make technology understandable and decisions transparent.', 'business'],
                ['03', 'Excellence', 'We document, test and continuously improve our work.', 'check'],
            ],
            'sectors_title' => 'Experience across demanding environments.',
            'sectors' => ['Corporate', 'Public institutions', 'Banking & finance', 'Industry', 'Logistics', 'Residential & commercial'],
            'team_eyebrow' => 'Leadership',
            'team_title' => 'A leadership team close to the field.',
            'team_description' => 'Strategic vision and sound management, anchored in the realities of our clients.',
            'team_label' => 'HCE Leadership',
            'team' => [
                ['team/orden-badibanga.jpg', 'Orden BADIBANGA', 'General Manager'],
                ['team/ruth-hokiel.png', 'Ruth HOKIEL', 'Financial Manager'],
            ],
        ]
        : [
            'eyebrow' => 'À propos de HCE',
            'title' => 'L’expertise technologique, avec le sens du service.',
            'description' => 'Une entreprise technologique congolaise qui aide les organisations à exploiter, sécuriser et moderniser leur environnement numérique.',
            'primary_cta' => 'Parler à notre équipe',
            'secondary_cta' => 'Explorer nos solutions',
            'trust_label' => 'Votre partenaire MSP de confiance',
            'established' => 'Année de lancement',
            'metrics' => [['24/7', 'Supervision & support'], ['1 500+', 'Postes utilisateurs'], ['30+', 'Sites web réalisés'], ['RDC', 'Couverture nationale']],
            'story_eyebrow' => 'Notre identité',
            'story_title' => 'Élever le standard du service IT.',
            'story' => 'Hightech Computing Evolution fournit des services IT managés, des solutions technologiques et des formations professionnelles. HCE a été créée pour offrir un service fiable, aligné sur les standards internationaux et les réalités des organisations en RDC.',
            'manifesto' => 'La technologie crée de la valeur lorsqu’elle est fiable, compréhensible et réellement utile à celles et ceux qui en dépendent.',
            'mission_title' => 'Notre mission',
            'mission' => 'Fournir des services IT professionnels tout en renforçant les compétences numériques des utilisateurs et des équipes techniques.',
            'vision_title' => 'Notre ambition',
            'vision' => 'Devenir le partenaire technologique et de formation privilégié des organisations et particuliers en RDC.',
            'method_eyebrow' => 'Notre méthode',
            'method_title' => 'Du besoin métier à une exploitation maîtrisée.',
            'method_description' => 'Un cadre d’intervention clair pour garder chaque projet aligné, documenté et prêt à évoluer.',
            'steps' => [
                ['01', 'Comprendre', 'Clarifier les priorités, les contraintes, les risques et le résultat métier attendu.'],
                ['02', 'Concevoir', 'Construire l’architecture adaptée et une feuille de route réaliste.'],
                ['03', 'Déployer', 'Exécuter avec méthode, documenter les décisions et transférer les compétences.'],
                ['04', 'Accompagner', 'Superviser la performance, assister les utilisateurs et améliorer la solution.'],
            ],
            'values_eyebrow' => 'Nos principes',
            'values_title' => 'Un même niveau d’exigence, chaque jour.',
            'values_description' => 'Les principes qui guident nos décisions, nos interventions et chaque relation client.',
            'values' => [
                ['01', 'Engagement', 'Nous assumons les résultats, pas seulement les tâches.', 'shield'],
                ['02', 'Clarté', 'Nous rendons la technologie compréhensible et les décisions transparentes.', 'business'],
                ['03', 'Excellence', 'Nous documentons, testons et améliorons continuellement notre travail.', 'check'],
            ],
            'sectors_title' => 'Une expérience adaptée aux environnements exigeants.',
            'sectors' => ['Entreprises', 'Institutions publiques', 'Banque & finance', 'Industrie', 'Logistique', 'Résidentiel & commercial'],
            'team_eyebrow' => 'Direction',
            'team_title' => 'Une direction proche du terrain.',
            'team_description' => 'Une vision stratégique et une gestion rigoureuse, ancrées dans les réalités de nos clients.',
            'team_label' => 'Direction HCE',
            'team' => [
                ['team/orden-badibanga.jpg', 'Orden BADIBANGA', 'Directeur général'],
                ['team/ruth-hokiel.png', 'Ruth HOKIEL', 'Financial Manager'],
            ],
        ];
@endphp

<x-layouts.app :title="$page['eyebrow']" :description="$page['description']">
    <section id="top" class="company-hero overflow-hidden bg-hce-navy text-white">
        <div class="company-hero-grid" aria-hidden="true"></div>
        <div class="company-hero-glow" aria-hidden="true"></div>
        <div class="container-shell relative grid min-h-[700px] items-center gap-14 pb-20 pt-40 lg:grid-cols-[1fr_.9fr] lg:gap-20 lg:pb-24 lg:pt-44">
            <div class="max-w-3xl">
                <div class="hero-kicker" data-reveal><span class="size-2 rounded-full bg-orange-400 shadow-[0_0_0_6px_rgba(249,115,22,.14)]"></span>{{ $page['trust_label'] }}</div>
                <p class="eyebrow mt-8 text-blue-300" data-reveal>{{ $page['eyebrow'] }}</p>
                <h1 class="mt-5 max-w-3xl font-display text-3xl font-semibold leading-[1.1] tracking-[-.045em] sm:text-4xl lg:text-[3.15rem]" data-reveal>{{ $page['title'] }}</h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-300 lg:text-lg" data-reveal>{{ $page['description'] }}</p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row" data-reveal>
                    <a href="{{ route('contact') }}" class="button-primary button-large">{{ $page['primary_cta'] }}<x-icon name="arrow-right" class="size-5" /></a>
                    <a href="{{ route('services') }}" class="button-secondary button-large">{{ $page['secondary_cta'] }}</a>
                </div>
            </div>

            <div class="company-hero-visual" data-reveal>
                <img src="{{ asset('images/hce-hero-operations.png') }}" alt="{{ app()->isLocale('en') ? 'HCE technology operations team' : 'Équipe des opérations technologiques HCE' }}">
                <div class="company-hero-image-shade" aria-hidden="true"></div>
                <div class="company-established-badge"><span>2018</span><p>{{ $page['established'] }}</p></div>
                <div class="company-hero-signature"><span>HCE</span><p>Hightech Computing Evolution</p></div>
            </div>
        </div>

        <div class="container-shell relative -mb-px">
            <div class="company-metric-strip">
                @foreach ($page['metrics'] as [$value, $label])
                    <div class="company-metric-item"><strong>{{ $value }}</strong><span>{{ $label }}</span></div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-spacing bg-white">
        <div class="container-shell grid items-center gap-14 lg:grid-cols-[.92fr_1.08fr] lg:gap-20">
            <div class="relative" data-reveal>
                <div class="company-story-image"><img src="{{ asset('images/hce-infrastructure-engineer.png') }}" alt="{{ app()->isLocale('en') ? 'HCE infrastructure expertise' : 'Expertise infrastructure HCE' }}" loading="lazy"></div>
                <div class="company-story-stamp"><span>HCE</span><small>Kinshasa · RDC</small></div>
            </div>
            <div>
                <p class="eyebrow" data-reveal>{{ $page['story_eyebrow'] }}</p>
                <h2 class="section-title mt-4 text-hce-navy" data-reveal>{{ $page['story_title'] }}</h2>
                <p class="mt-6 text-base leading-8 text-slate-600" data-reveal>{{ $page['story'] }}</p>
                <blockquote class="company-manifesto mt-8" data-reveal>{{ $page['manifesto'] }}</blockquote>
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    @foreach ([['01', $page['mission_title'], $page['mission'], 'business'], ['02', $page['vision_title'], $page['vision'], 'shield']] as [$number, $title, $description, $icon])
                        <article class="company-purpose-card" data-reveal>
                            <div class="flex items-center justify-between"><span class="company-purpose-icon"><x-icon :name="$icon" class="size-5" /></span><span class="company-purpose-number">{{ $number }}</span></div>
                            <h3>{{ $title }}</h3><p>{{ $description }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="company-method-section section-spacing overflow-hidden text-white">
        <div class="hero-grid absolute inset-0 opacity-50" aria-hidden="true"></div>
        <div class="container-shell relative">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_.7fr] lg:gap-16">
                <div><p class="eyebrow text-orange-300" data-reveal>{{ $page['method_eyebrow'] }}</p><h2 class="section-title mt-4 max-w-2xl text-white" data-reveal>{{ $page['method_title'] }}</h2></div>
                <p class="text-sm leading-7 text-slate-300" data-reveal>{{ $page['method_description'] }}</p>
            </div>
            <div class="company-process-grid mt-12">
                @foreach ($page['steps'] as [$number, $title, $description])
                    <article class="company-process-card" data-reveal>
                        <div class="company-process-top"><span>{{ $number }}</span><x-icon name="arrow-right" class="size-4" /></div>
                        <h3>{{ $title }}</h3><p>{{ $description }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="company-values-section section-spacing overflow-hidden bg-slate-50">
        <div class="container-shell">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_.7fr] lg:gap-16">
                <x-section-heading :eyebrow="$page['values_eyebrow']" :title="$page['values_title']">{{ $page['values_description'] }}</x-section-heading>
                <div class="company-values-summary" data-reveal>
                    <span>03</span>
                    <div><strong>{{ app()->isLocale('en') ? 'Founding principles' : 'Principes fondateurs' }}</strong><p>{{ app()->isLocale('en') ? 'One consistent standard across every engagement.' : 'Une même exigence dans chaque intervention.' }}</p></div>
                </div>
            </div>
            <div class="mt-12 grid gap-5 md:grid-cols-3">
                @foreach ($page['values'] as [$number, $title, $description, $icon])
                    <article class="company-value-card" data-reveal>
                        <div class="company-value-head">
                            <span class="company-value-icon"><x-icon :name="$icon" class="size-5" /></span>
                            <span class="company-value-number">{{ $number }}</span>
                        </div>
                        <div class="company-value-body">
                            <span>{{ app()->isLocale('en') ? 'Principle' : 'Principe' }} {{ $number }}</span>
                            <h3>{{ $title }}</h3><p>{{ $description }}</p>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="company-sector-band mt-8" data-reveal>
                <div class="company-sector-intro"><p class="eyebrow text-orange-300">{{ app()->isLocale('en') ? 'Sectors' : 'Secteurs' }}</p><h3>{{ $page['sectors_title'] }}</h3><span>HCE · RDC</span></div>
                <div class="company-sector-grid">
                    @foreach ($page['sectors'] as $sectorIndex => $sector)
                        <div class="company-sector-item"><small>{{ str_pad($sectorIndex + 1, 2, '0', STR_PAD_LEFT) }}</small><strong>{{ $sector }}</strong></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="team-section section-spacing overflow-hidden bg-white">
        <div class="team-section-glow" aria-hidden="true"></div>
        <div class="container-shell relative">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_.72fr] lg:gap-16">
                <x-section-heading :eyebrow="$page['team_eyebrow']" :title="$page['team_title']">{{ $page['team_description'] }}</x-section-heading>
                <div class="team-leadership-note" data-reveal><span class="team-note-mark"><x-icon name="business" class="size-5" /></span><div><strong>{{ $page['team_label'] }}</strong><p>{{ app()->isLocale('en') ? 'Strategic direction · Financial stewardship' : 'Direction stratégique · Pilotage financier' }}</p></div></div>
            </div>
            <div class="team-grid mt-12">
                @foreach ($page['team'] as $teamIndex => [$image, $name, $role])
                    <article class="team-card group" data-reveal>
                        <div class="team-photo"><img src="{{ asset('images/'.$image) }}" alt="{{ $name }} — {{ $role }}" loading="lazy"><span class="team-photo-overlay" aria-hidden="true"></span><span class="team-member-number">{{ str_pad($teamIndex + 1, 2, '0', STR_PAD_LEFT) }}</span><span class="team-role-chip">{{ $role }}</span></div>
                        <div class="team-card-body"><div><p class="team-card-label">{{ $page['team_label'] }}</p><h3>{{ $name }}</h3></div><span class="team-card-monogram" aria-hidden="true">HCE</span></div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.app>
