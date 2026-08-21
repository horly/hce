@php
    $page = app()->isLocale('en')
        ? [
            'eyebrow' => 'HCE Academy',
            'title' => 'Turn knowledge into operational capability.',
            'description' => 'Practical training programmes designed to strengthen technical, digital and business skills across your organisation.',
            'primary_cta' => 'Build a training plan',
            'secondary_cta' => 'Explore the programmes',
            'kicker' => 'Professional training · Kinshasa, DRC',
            'hero_badge' => 'Skills built for the field',
            'metrics' => [['100%', 'Practice-oriented'], ['06', 'Areas of expertise'], ['03', 'Learning formats'], ['Custom', 'Programmes available']],
            'catalogue' => 'Training programmes',
            'catalogue_title' => 'Skills that can be applied from day one.',
            'catalogue_description' => 'Focused programmes combining essential concepts, guided practice and realistic professional scenarios.',
            'items' => [
                ['network', 'Networks & systems', 'Network fundamentals, administration, virtualisation and troubleshooting.', ['Networks', 'Systems', 'Virtualisation']],
                ['shield', 'Cybersecurity', 'Digital hygiene, risk awareness, endpoint and infrastructure protection.', ['Awareness', 'Risk', 'Protection']],
                ['business', 'Odoo & Sage', 'Business process management, accounting, sales, inventory and reporting.', ['ERP', 'Accounting', 'Reporting']],
                ['code', 'Web development', 'Modern foundations for building and maintaining effective web solutions.', ['Web', 'Applications', 'Maintenance']],
                ['managed', 'IT support', 'User assistance, incident management and professional support practices.', ['Support', 'Incidents', 'Users']],
                ['training', 'Digital literacy', 'Productivity tools, collaboration and responsible use of digital services.', ['Productivity', 'Collaboration', 'Best practices']],
            ],
            'approach_eyebrow' => 'Learning by doing',
            'approach_title' => 'Training designed around real work.',
            'approach_description' => 'Participants work through concrete cases, professional tools and guided exercises that make each concept immediately useful.',
            'benefits' => [
                ['Hands-on practice', 'Exercises and scenarios inspired by real operational environments.'],
                ['Progressive learning', 'A structured path from essential concepts to confident execution.'],
                ['Role-based content', 'Examples adapted to technical teams, users and business functions.'],
                ['Expert guidance', 'Clear explanations, feedback and practical recommendations.'],
            ],
            'path_eyebrow' => 'Your learning journey',
            'path_title' => 'A clear path from need to mastery.',
            'path_description' => 'Every programme follows a simple framework to keep objectives, practice and outcomes aligned.',
            'path' => [
                ['01', 'Assess', 'Identify current skills, priority gaps and expected outcomes.'],
                ['02', 'Design', 'Select the modules, level, format and exercises that fit the audience.'],
                ['03', 'Practise', 'Learn through demonstrations, guided labs and professional scenarios.'],
                ['04', 'Validate', 'Measure progress and define the next development priorities.'],
            ],
            'formats_eyebrow' => 'Learning formats',
            'formats_title' => 'A format for every objective.',
            'formats_description' => 'Choose the delivery model that best fits your teams, operations and learning priorities.',
            'formats' => [
                ['01', 'In-company', 'Training delivered within your organisation and tailored to your environment.', 'Your workplace'],
                ['02', 'Classroom', 'Structured sessions with guided exercises and direct interaction.', 'HCE Academy'],
                ['03', 'Custom programme', 'A curriculum designed around your roles, tools and performance goals.', 'Made to measure'],
            ],
            'cta_eyebrow' => 'Develop your teams',
            'cta_title' => 'Build the skills your organisation needs next.',
            'cta_description' => 'Tell us about your audience and objectives. HCE Academy will propose a practical learning path.',
            'cta_button' => 'Discuss your training needs',
        ]
        : [
            'eyebrow' => 'HCE Academy',
            'title' => 'Transformer les connaissances en capacités opérationnelles.',
            'description' => 'Des formations pratiques conçues pour renforcer les compétences techniques, numériques et métiers dans votre organisation.',
            'primary_cta' => 'Construire un plan de formation',
            'secondary_cta' => 'Explorer les programmes',
            'kicker' => 'Formation professionnelle · Kinshasa, RDC',
            'hero_badge' => 'Des compétences conçues pour le terrain',
            'metrics' => [['100%', 'Orienté pratique'], ['06', 'Domaines d’expertise'], ['03', 'Formats pédagogiques'], ['Sur mesure', 'Programmes disponibles']],
            'catalogue' => 'Programmes de formation',
            'catalogue_title' => 'Des compétences applicables dès le premier jour.',
            'catalogue_description' => 'Des programmes ciblés qui associent notions essentielles, pratique guidée et mises en situation professionnelles.',
            'items' => [
                ['network', 'Réseaux & systèmes', 'Fondamentaux réseau, administration, virtualisation et diagnostic.', ['Réseaux', 'Systèmes', 'Virtualisation']],
                ['shield', 'Cybersécurité', 'Hygiène numérique, sensibilisation aux risques et protection des infrastructures.', ['Sensibilisation', 'Risques', 'Protection']],
                ['business', 'Odoo & Sage', 'Processus métiers, comptabilité, ventes, stocks et reporting.', ['ERP', 'Comptabilité', 'Reporting']],
                ['code', 'Développement web', 'Fondations modernes pour concevoir et maintenir des solutions web efficaces.', ['Web', 'Applications', 'Maintenance']],
                ['managed', 'Support IT', 'Assistance utilisateurs, gestion des incidents et pratiques professionnelles.', ['Support', 'Incidents', 'Utilisateurs']],
                ['training', 'Culture numérique', 'Outils de productivité, collaboration et usage responsable du numérique.', ['Productivité', 'Collaboration', 'Bonnes pratiques']],
            ],
            'approach_eyebrow' => 'Apprendre par la pratique',
            'approach_title' => 'Des formations conçues autour du travail réel.',
            'approach_description' => 'Les participants avancent sur des cas concrets, des outils professionnels et des exercices guidés qui rendent chaque notion immédiatement utile.',
            'benefits' => [
                ['Pratique intensive', 'Des exercices et scénarios inspirés des environnements opérationnels.'],
                ['Progression structurée', 'Un parcours clair, des fondamentaux jusqu’à une exécution autonome.'],
                ['Contenu adapté aux rôles', 'Des exemples pensés pour les équipes techniques, utilisateurs et métiers.'],
                ['Encadrement expert', 'Des explications claires, des retours et des recommandations pratiques.'],
            ],
            'path_eyebrow' => 'Votre parcours',
            'path_title' => 'Un chemin clair, du besoin à la maîtrise.',
            'path_description' => 'Chaque programme suit un cadre simple pour aligner objectifs, pratique et résultats.',
            'path' => [
                ['01', 'Évaluer', 'Identifier le niveau actuel, les écarts prioritaires et les résultats attendus.'],
                ['02', 'Concevoir', 'Choisir les modules, le niveau, le format et les exercices adaptés au public.'],
                ['03', 'Pratiquer', 'Apprendre grâce aux démonstrations, ateliers guidés et scénarios professionnels.'],
                ['04', 'Valider', 'Mesurer la progression et définir les prochaines priorités de développement.'],
            ],
            'formats_eyebrow' => 'Formats pédagogiques',
            'formats_title' => 'Un format pour chaque objectif.',
            'formats_description' => 'Choisissez le mode d’apprentissage le mieux adapté à vos équipes, vos opérations et vos priorités.',
            'formats' => [
                ['01', 'En entreprise', 'Une formation livrée dans votre organisation et adaptée à votre environnement.', 'Dans vos locaux'],
                ['02', 'En salle', 'Des sessions structurées avec exercices guidés et interaction directe.', 'HCE Academy'],
                ['03', 'Programme sur mesure', 'Un parcours conçu autour de vos métiers, outils et objectifs de performance.', 'À la carte'],
            ],
            'cta_eyebrow' => 'Faire grandir vos équipes',
            'cta_title' => 'Construisez les compétences dont votre organisation aura besoin.',
            'cta_description' => 'Parlez-nous de votre public et de vos objectifs. HCE Academy vous proposera un parcours pratique.',
            'cta_button' => 'Échanger sur votre besoin',
        ];
@endphp

<x-layouts.app :title="$page['eyebrow']" :description="$page['description']">
    <section id="top" class="academy-hero overflow-hidden bg-hce-navy text-white">
        <div class="academy-hero-grid" aria-hidden="true"></div>
        <div class="academy-hero-glow" aria-hidden="true"></div>
        <div class="container-shell relative grid min-h-[700px] items-center gap-14 pb-20 pt-40 lg:grid-cols-[1fr_.92fr] lg:gap-20 lg:pb-24 lg:pt-44">
            <div class="max-w-3xl">
                <div class="hero-kicker" data-reveal><span class="size-2 rounded-full bg-orange-400 shadow-[0_0_0_6px_rgba(249,115,22,.14)]"></span>{{ $page['kicker'] }}</div>
                <p class="eyebrow mt-8 text-blue-300" data-reveal>{{ $page['eyebrow'] }}</p>
                <h1 class="mt-5 max-w-3xl font-display text-3xl font-semibold leading-[1.1] tracking-[-.045em] sm:text-4xl lg:text-[3.15rem]" data-reveal>{{ $page['title'] }}</h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-300 lg:text-lg" data-reveal>{{ $page['description'] }}</p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row" data-reveal>
                    <a href="{{ route('contact', ['objet' => 'formation']) }}" class="button-primary button-large">{{ $page['primary_cta'] }}<x-icon name="arrow-right" class="size-5" /></a>
                    <a href="#programmes" class="button-secondary button-large">{{ $page['secondary_cta'] }}</a>
                </div>
            </div>
            <div class="academy-hero-visual" data-reveal>
                <img src="{{ asset('images/hce-training-workshop.png') }}" alt="{{ app()->isLocale('en') ? 'Professional training at HCE Academy' : 'Formation professionnelle à HCE Academy' }}">
                <div class="academy-hero-shade" aria-hidden="true"></div>
                <div class="academy-hero-badge"><span><x-icon name="training" class="size-5" /></span><div><small>HCE Academy</small><strong>{{ $page['hero_badge'] }}</strong></div></div>
                <div class="academy-hero-caption"><span>Learn</span><span>Practise</span><span>Perform</span></div>
            </div>
        </div>
        <div class="container-shell relative -mb-px">
            <div class="academy-metric-strip">
                @foreach ($page['metrics'] as [$value, $label])
                    <div class="academy-metric-item"><strong>{{ $value }}</strong><span>{{ $label }}</span></div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="programmes" class="academy-catalogue-section section-spacing overflow-hidden bg-slate-50">
        <div class="container-shell relative">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_.65fr] lg:gap-16">
                <x-section-heading :eyebrow="$page['catalogue']" :title="$page['catalogue_title']">{{ $page['catalogue_description'] }}</x-section-heading>
                <div class="academy-catalogue-note" data-reveal><span>06</span><div><strong>{{ app()->isLocale('en') ? 'Learning areas' : 'Domaines de formation' }}</strong><p>{{ app()->isLocale('en') ? 'Technical, business and digital skills.' : 'Compétences techniques, métiers et numériques.' }}</p></div></div>
            </div>
            <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($page['items'] as $itemIndex => [$icon, $title, $description, $skills])
                    <article class="academy-program-card group" data-reveal>
                        <div class="academy-program-head"><span class="academy-program-icon"><x-icon :name="$icon" class="size-6" /></span><span class="academy-program-number">{{ str_pad($itemIndex + 1, 2, '0', STR_PAD_LEFT) }}</span></div>
                        <div class="academy-program-body"><span>{{ app()->isLocale('en') ? 'Professional programme' : 'Programme professionnel' }}</span><h2>{{ $title }}</h2><p>{{ $description }}</p><div class="academy-skill-list">@foreach ($skills as $skill)<span>{{ $skill }}</span>@endforeach</div></div>
                        <a href="{{ route('contact', ['objet' => 'formation']) }}" class="academy-program-footer"><span>{{ app()->isLocale('en') ? 'Request this programme' : 'Demander ce programme' }}</span><span><x-icon name="arrow-right" class="size-4" /></span></a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-spacing overflow-hidden bg-white">
        <div class="container-shell grid items-center gap-14 lg:grid-cols-[.95fr_1.05fr] lg:gap-20">
            <div class="academy-approach-visual" data-reveal><img src="{{ asset('images/hce-business-transformation.png') }}" alt="{{ app()->isLocale('en') ? 'Collaborative professional learning' : 'Apprentissage professionnel collaboratif' }}" loading="lazy"><div class="academy-approach-overlay"></div><div class="academy-approach-label"><span>100%</span><p>{{ app()->isLocale('en') ? 'Focused on practical application' : 'Centré sur la mise en pratique' }}</p></div></div>
            <div>
                <p class="eyebrow" data-reveal>{{ $page['approach_eyebrow'] }}</p>
                <h2 class="section-title mt-4 text-hce-navy" data-reveal>{{ $page['approach_title'] }}</h2>
                <p class="mt-6 text-base leading-8 text-slate-600" data-reveal>{{ $page['approach_description'] }}</p>
                <div class="mt-8 grid gap-3 sm:grid-cols-2">
                    @foreach ($page['benefits'] as [$title, $description])
                        <div class="academy-benefit" data-reveal><span><x-icon name="check" class="size-4" /></span><div><strong>{{ $title }}</strong><p>{{ $description }}</p></div></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="academy-path-section section-spacing overflow-hidden bg-hce-navy text-white">
        <div class="hero-grid absolute inset-0 opacity-50" aria-hidden="true"></div>
        <div class="container-shell relative">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_.7fr] lg:gap-16">
                <div><p class="eyebrow text-orange-300" data-reveal>{{ $page['path_eyebrow'] }}</p><h2 class="section-title mt-4 max-w-2xl text-white" data-reveal>{{ $page['path_title'] }}</h2></div>
                <p class="text-sm leading-7 text-slate-300" data-reveal>{{ $page['path_description'] }}</p>
            </div>
            <div class="academy-path-grid mt-12">
                @foreach ($page['path'] as [$number, $title, $description])
                    <article class="academy-path-card" data-reveal><div><span>{{ $number }}</span><x-icon name="arrow-right" class="size-4" /></div><h3>{{ $title }}</h3><p>{{ $description }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="academy-formats-section section-spacing overflow-hidden bg-white">
        <div class="container-shell">
            <x-section-heading :eyebrow="$page['formats_eyebrow']" :title="$page['formats_title']">{{ $page['formats_description'] }}</x-section-heading>
            <div class="mt-12 grid gap-5 lg:grid-cols-3">
                @foreach ($page['formats'] as [$number, $title, $description, $location])
                    <article class="academy-format-card" data-reveal><div class="academy-format-top"><span>{{ $number }}</span><small>{{ $location }}</small></div><div class="academy-format-icon"><x-icon name="training" class="size-6" /></div><h2>{{ $title }}</h2><p>{{ $description }}</p><a href="{{ route('contact', ['objet' => 'formation']) }}">{{ app()->isLocale('en') ? 'Choose this format' : 'Choisir ce format' }}<x-icon name="arrow-right" class="size-4" /></a></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="pb-8 pt-2">
        <div class="container-shell"><div class="cta-panel" data-reveal><div class="relative z-10 max-w-2xl"><p class="eyebrow text-orange-300">{{ $page['cta_eyebrow'] }}</p><h2 class="mt-4 font-display text-2xl font-semibold tracking-[-.035em] text-white sm:text-3xl">{{ $page['cta_title'] }}</h2><p class="mt-4 text-sm leading-7 text-slate-300">{{ $page['cta_description'] }}</p></div><a href="{{ route('contact', ['objet' => 'formation']) }}" class="button-primary button-large relative z-10 shrink-0">{{ $page['cta_button'] }}<x-icon name="arrow-right" class="size-5" /></a></div></div>
    </section>
</x-layouts.app>
