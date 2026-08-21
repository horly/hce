@php
    $home = trans('site.home');
    $services = trans('site.services');
    $projectCards = app()->isLocale('en')
        ? [
            ['hce-infrastructure-engineer.png', 'Infrastructure', 'Network architecture & availability', 'Resilient, monitored environments designed for growth.'],
            ['hce-security-campus.png', 'Security', 'Site & access protection', 'One unified view of cameras, alarms and access points.'],
            ['hce-business-transformation.png', 'Business solutions', 'Operational transformation', 'Tools aligned with processes for better visibility and efficiency.'],
            ['hce-connected-city.png', 'Connectivity', 'Multi-site operations', 'A consistent network foundation for seamless collaboration.'],
        ]
        : [
            ['hce-infrastructure-engineer.png', 'Infrastructure', 'Architecture réseau & disponibilité', 'Des environnements résilients, supervisés et dimensionnés pour la croissance.'],
            ['hce-security-campus.png', 'Sécurité', 'Protection des sites & des accès', 'Une vision unifiée des caméras, alarmes et points d’accès.'],
            ['hce-business-transformation.png', 'Solutions métiers', 'Transformation des opérations', 'Des outils alignés sur les processus pour mieux piloter et collaborer.'],
            ['hce-connected-city.png', 'Connectivité', 'Opérations multi-sites', 'Un socle réseau cohérent pour collaborer sans frontière entre les sites.'],
        ];
    $technologies = [
        ['microsoft.svg', 'Microsoft'],
        ['cisco.svg', 'Cisco'],
        ['fortinet.svg', 'Fortinet'],
        ['vmware.svg', 'VMware'],
        ['odoo.svg', 'Odoo'],
        ['sage.svg', 'Sage'],
        ['ubuntu.svg', 'Ubuntu'],
        ['laravel.svg', 'Laravel'],
        ['mikrotik.svg', 'MikroTik'],
        ['ubiquiti.svg', 'Ubiquiti'],
        ['veeam.svg', 'Veeam'],
        ['proxmox.svg', 'Proxmox'],
        ['docker.svg', 'Docker'],
        ['linux.svg', 'Linux'],
        ['php.svg', 'PHP'],
        ['mysql.svg', 'MySQL'],
        ['postgresql.svg', 'PostgreSQL'],
        ['wordpress.svg', 'WordPress'],
        ['eset.svg', 'ESET'],
        ['yeastar.svg', 'Yeastar'],
    ];
    $teamMembers = [
        ['image' => 'team/orden-badibanga.jpg', ...$home['team_members'][0]],
        ['image' => 'team/ruth-hokiel.png', ...$home['team_members'][1]],
    ];
@endphp

<x-layouts.app :title="$home['meta_title']" :description="$home['meta_description']">
    <section id="top" class="hero-carousel relative min-h-[740px] overflow-hidden bg-hce-navy lg:min-h-[820px]" data-carousel aria-roledescription="carrousel" aria-label="Expertises HCE">
        @foreach ($home['slides'] as $index => $slide)
            <article class="hero-slide absolute inset-0 {{ $index === 0 ? 'is-active' : '' }}" data-carousel-slide aria-hidden="{{ $index === 0 ? 'false' : 'true' }}">
                <img class="absolute inset-0 size-full object-cover object-center" src="{{ asset('images/'.$slide['image']) }}" alt="" {{ $index === 0 ? 'fetchpriority=high' : 'loading=lazy' }}>
                <div class="hero-overlay absolute inset-0"></div>
                <div class="hero-grid absolute inset-0"></div>
                <div class="container-shell relative z-10 flex min-h-[740px] items-center pb-36 pt-32 lg:min-h-[820px] lg:pb-40">
                    <div class="max-w-3xl hero-slide-content">
                        <div class="hero-kicker"><span class="size-2 rounded-full bg-orange-400 shadow-[0_0_0_6px_rgba(249,115,22,.14)]"></span>{{ $slide['kicker'] }}</div>
                        <h1 class="hero-title mt-7">{!! $slide['title'] !!}</h1>
                        <p class="mt-6 max-w-2xl text-base leading-8 text-slate-200 sm:text-lg">{{ $slide['description'] }}</p>
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            <a href="{{ route('contact') }}" class="button-primary button-large">{{ $slide['primary'] }}<x-icon name="arrow-right" class="size-5" /></a>
                            <a href="{{ route($slide['route']) }}" class="button-secondary button-large">{{ $slide['secondary'] }}</a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

        <div class="absolute inset-x-0 bottom-0 z-20">
            <div class="container-shell">
                <div class="mb-4 flex items-center justify-between">
                    <div class="flex gap-2" role="tablist">
                        @foreach ($home['slides'] as $index => $slide)
                            <button type="button" class="carousel-dot {{ $index === 0 ? 'is-active' : '' }}" data-carousel-dot="{{ $index }}" aria-label="Slide {{ $index + 1 }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}"></button>
                        @endforeach
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="carousel-control" data-carousel-previous aria-label="Previous"><x-icon name="chevron-left" class="size-5" /></button>
                        <button type="button" class="carousel-control" data-carousel-next aria-label="Next"><x-icon name="chevron-right" class="size-5" /></button>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-px overflow-hidden rounded-t-2xl border-x border-t border-white/15 bg-white/10 backdrop-blur-xl md:grid-cols-4">
                    @foreach ($home['stats'] as [$value, $label])
                        <div class="hero-stat"><strong>{{ $value }}</strong><span>{{ $label }}</span></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="technology-section">
        <div>
            <p class="text-center text-[.68rem] font-extrabold uppercase tracking-[.2em] text-slate-400">{{ $home['technologies'] }}</p>
            <div class="technology-marquee mt-7" aria-label="{{ $home['technologies'] }}">
                <div class="technology-track">
                    @for ($cycle = 0; $cycle < 2; $cycle++)
                        <div class="technology-group" @if ($cycle === 1) aria-hidden="true" @endif>
                            @foreach ($technologies as [$logo, $name])
                                <div class="technology-logo" title="{{ $name }}"><img src="{{ asset('images/technologies/'.$logo) }}" alt="{{ $cycle === 0 ? $name : '' }}" loading="lazy"><span>{{ $name }}</span></div>
                            @endforeach
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacing bg-slate-50">
        <div class="container-shell">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <x-section-heading :eyebrow="$home['services_eyebrow']" :title="$home['services_title']">{{ $home['services_description'] }}</x-section-heading>
                <a href="{{ route('services') }}" class="text-link shrink-0" data-reveal>{{ $home['all_solutions'] }}<x-icon name="arrow-right" class="size-5" /></a>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach (array_slice($services['items'], 0, 6) as $serviceIndex => [$icon, $title, $category, $description, $features])
                    <a href="{{ $title === $services['items'][5][1] ? route('electronic-security') : route('services') }}" class="service-card service-card-premium group" data-reveal>
                        <span class="corporate-service-top">
                            <span class="service-icon"><x-icon :name="$icon" class="size-6" /></span>
                            <span class="service-category">{{ $services['filters'][$category] }}</span>
                            <span class="corporate-service-number">{{ str_pad($serviceIndex + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        </span>
                        <span class="corporate-service-body">
                            <span class="block font-display text-lg font-semibold text-hce-navy">{{ $title }}</span>
                            <span class="mt-3 block text-sm leading-7 text-slate-600">{{ $description }}</span>
                            <span class="corporate-service-features">
                                @foreach (array_slice($features, 0, 2) as $feature)
                                    <span><x-icon name="check" class="size-3.5" />{{ $feature }}</span>
                                @endforeach
                            </span>
                        </span>
                        <span class="corporate-service-footer">
                            <span>{{ $home['discover'] }}</span>
                            <span class="corporate-service-arrow"><x-icon name="arrow-right" class="size-4 transition group-hover:translate-x-0.5" /></span>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="corporate-projects-section section-spacing overflow-hidden">
        <div class="project-section-grid" aria-hidden="true"></div>
        <div class="container-shell relative">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_auto]">
                <x-section-heading :eyebrow="$home['projects_eyebrow']" :title="$home['projects_title']">{{ $home['projects_description'] }}</x-section-heading>
                <div class="project-nav-panel" data-reveal>
                    <span>{{ app()->isLocale('en') ? 'Selected projects' : 'Projets sélectionnés' }}</span>
                    <span class="project-nav-divider" aria-hidden="true"></span>
                    <button class="project-control" type="button" data-project-previous aria-label="{{ app()->isLocale('en') ? 'Previous project' : 'Projet précédent' }}"><x-icon name="chevron-left" class="size-5" /></button>
                    <button class="project-control" type="button" data-project-next aria-label="{{ app()->isLocale('en') ? 'Next project' : 'Projet suivant' }}"><x-icon name="chevron-right" class="size-5" /></button>
                </div>
            </div>
            <div class="project-carousel mt-12" data-project-carousel>
                <div class="project-track" data-project-track>
                    @foreach ($projectCards as $projectIndex => [$image, $category, $title, $description])
                        <article class="project-slide project-slide-corporate group">
                            <div class="project-image">
                                <img src="{{ asset('images/'.$image) }}" alt="{{ $title }}" loading="lazy">
                                <span class="project-image-overlay" aria-hidden="true"></span>
                                <span class="project-category-chip">{{ $category }}</span>
                                <span class="project-card-number">{{ str_pad($projectIndex + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <div class="corporate-project-body">
                                <h3 class="font-display text-lg font-semibold leading-snug text-hce-navy">{{ $title }}</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">{{ $description }}</p>
                                <a href="{{ route('projects') }}" class="corporate-project-footer">
                                    <span>{{ app()->isLocale('en') ? 'View case study' : 'Voir l’étude de cas' }}</span>
                                    <span class="corporate-project-arrow"><x-icon name="arrow-right" class="size-4 transition group-hover:translate-x-0.5" /></span>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
            <div class="project-section-footer" data-reveal>
                <p>{{ app()->isLocale('en') ? 'Infrastructure, security and digital transformation delivered with precision.' : 'Infrastructure, sécurité et transformation numérique réalisées avec précision.' }}</p>
                <a href="{{ route('projects') }}" class="text-link">{{ $home['all_projects'] }}<x-icon name="arrow-right" class="size-5" /></a>
            </div>
        </div>
    </section>

    <section class="section-spacing relative overflow-hidden bg-hce-navy text-white">
        <div class="hero-grid absolute inset-0 opacity-60"></div>
        <div class="container-shell relative grid items-center gap-14 lg:grid-cols-[.95fr_1.05fr] lg:gap-20">
            <div class="relative" data-reveal>
                <div class="image-frame aspect-[4/3]"><img class="size-full object-cover" src="{{ asset('images/hce-business-transformation.png') }}" alt="" loading="lazy"></div>
            </div>
            <div>
                <p class="eyebrow text-orange-300" data-reveal>{{ $home['difference_eyebrow'] }}</p>
                <h2 class="mt-5 font-display text-2xl font-semibold leading-tight tracking-[-.035em] sm:text-3xl" data-reveal>{{ $home['difference_title'] }}</h2>
                <p class="mt-6 text-base leading-8 text-slate-300" data-reveal>{{ $home['difference_description'] }}</p>
                <div class="mt-8 grid gap-4 sm:grid-cols-2" data-reveal>
                    @foreach (app()->isLocale('en') ? [['01', 'Proactive', 'Prevent issues before they slow operations.'], ['02', 'Pragmatic', 'Solve real needs without needless complexity.'], ['03', 'Available', 'Stay close and accountable at every step.'], ['04', 'Scalable', 'Grow the system with the organisation.']] : [['01', 'Proactif', 'Anticiper avant que l’incident ne freine les opérations.'], ['02', 'Pragmatique', 'Répondre au besoin sans complexité inutile.'], ['03', 'Disponible', 'Rester proche et responsable à chaque étape.'], ['04', 'Évolutif', 'Faire grandir le système avec l’organisation.']] as [$number, $title, $text])
                        <div class="dark-feature"><span>{{ $number }}</span><div><strong>{{ $title }}</strong><p>{{ $text }}</p></div></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="team-section section-spacing overflow-hidden bg-white">
        <div class="team-section-glow" aria-hidden="true"></div>
        <div class="container-shell relative">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_.72fr] lg:gap-16">
                <x-section-heading :eyebrow="$home['team_eyebrow']" :title="$home['team_title']">{{ $home['team_description'] }}</x-section-heading>
                <div class="team-leadership-note" data-reveal>
                    <span class="team-note-mark"><x-icon name="business" class="size-5" /></span>
                    <div>
                        <strong>{{ $home['team_label'] }}</strong>
                        <p>{{ app()->isLocale('en') ? 'Strategic direction · Financial stewardship' : 'Direction stratégique · Pilotage financier' }}</p>
                    </div>
                </div>
            </div>

            <div class="team-grid mt-12">
                @foreach ($teamMembers as $teamIndex => $member)
                    <article class="team-card group" data-reveal>
                        <div class="team-photo">
                            <img src="{{ asset('images/'.$member['image']) }}" alt="{{ $member['name'] }} — {{ $member['role'] }}" loading="lazy">
                            <span class="team-photo-overlay" aria-hidden="true"></span>
                            <span class="team-member-number">{{ str_pad($teamIndex + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="team-role-chip">{{ $member['role'] }}</span>
                        </div>
                        <div class="team-card-body">
                            <div>
                                <p class="team-card-label">{{ $home['team_label'] }}</p>
                                <h3>{{ $member['name'] }}</h3>
                            </div>
                            <span class="team-card-monogram" aria-hidden="true">HCE</span>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-spacing bg-slate-50">
        <div class="container-shell">
            <div class="mb-10 max-w-2xl">
                <p class="eyebrow">{{ $home['contact_eyebrow'] }}</p>
                <h2 class="section-title mt-4 text-hce-navy">{{ $home['contact_title'] }}</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">{{ $home['contact_description'] }}</p>
            </div>
            <div class="contact-home-shell">
                <div class="contact-home-map">
                    <iframe title="HCE — Commune de Kasa-Vubu, Kinshasa" src="https://www.google.com/maps?q=-4.338174%2C15.304587&z=18&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="contact-map-topbar">
                        <span><x-icon name="location" class="size-5" /></span>
                        <div><small>{{ app()->isLocale('en') ? 'Our headquarters' : 'Notre siège' }}</small><strong>HCE · Kinshasa</strong></div>
                    </div>
                    <div class="contact-map-marker" aria-label="Emplacement de HCE">
                        <span class="contact-map-marker-pin"><x-icon name="location" class="size-5" /></span>
                        <strong>HCE</strong>
                    </div>
                    <div class="contact-home-address">
                        <span class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-orange-400 text-hce-navy"><x-icon name="location" class="size-6" /></span>
                        <div class="min-w-0 flex-1"><strong>HCE Kinshasa</strong><p>107, rue de la Victoire<br>Commune de Kasa-Vubu · Imm. La CONCEM, 1er niveau<br>Réf. Rond-Point Kimpwanza</p><div class="contact-address-actions"><a href="tel:+243816391233">+243 816 391 233</a><a href="https://www.google.com/maps/dir/?api=1&destination=-4.338174%2C15.304587" target="_blank" rel="noopener">{{ app()->isLocale('en') ? 'Get directions' : 'Itinéraire' }}<x-icon name="arrow-right" class="size-3.5" /></a></div></div>
                    </div>
                </div>
                <x-contact-form compact form-id="home-contact" />
            </div>
        </div>
    </section>
</x-layouts.app>
