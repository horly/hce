@php
    $page = app()->isLocale('en')
        ? ['eyebrow' => 'Projects', 'title' => 'Practical solutions. Measurable impact.', 'description' => 'Every engagement turns a business reality into a reliable, documented and sustainable solution.', 'cta' => 'Discuss your project', 'items' => [
            ['hce-infrastructure-engineer.png', 'Multi-site infrastructure', 'A network foundation ready for growth.', 'A consistent architecture that strengthens availability and simplifies daily operations.'],
            ['hce-security-campus.png', 'Electronic security', 'A unified view of sites and access.', 'Integrated video, access control and alerts to reduce blind spots and speed up response.'],
            ['hce-business-transformation.png', 'Business transformation', 'Better decisions through reliable data.', 'Structured processes and management tools for stronger visibility and collaboration.'],
            ['hce-connected-city.png', 'Operational continuity', 'Connectivity that brings teams together.', 'A secure foundation that keeps applications and multi-site operations available.'],
        ]]
        : ['eyebrow' => 'Réalisations', 'title' => 'Des solutions concrètes. Un impact mesurable.', 'description' => 'Chaque mission transforme une réalité métier en solution fiable, documentée et durable.', 'cta' => 'Discuter de votre projet', 'items' => [
            ['hce-infrastructure-engineer.png', 'Infrastructure multi-site', 'Une fondation réseau prête pour la croissance.', 'Une architecture cohérente qui renforce la disponibilité et simplifie l’exploitation quotidienne.'],
            ['hce-security-campus.png', 'Sécurité électronique', 'Une vision unifiée des sites et des accès.', 'Vidéo, contrôle d’accès et alertes intégrés pour réduire les angles morts et accélérer la réaction.'],
            ['hce-business-transformation.png', 'Transformation métier', 'De meilleures décisions grâce aux données.', 'Des processus structurés et des outils de gestion pour gagner en visibilité et en collaboration.'],
            ['hce-connected-city.png', 'Continuité opérationnelle', 'Une connectivité qui rapproche les équipes.', 'Un socle sécurisé qui maintient les applications et opérations multi-sites disponibles.'],
        ]];
@endphp

<x-layouts.app :title="$page['eyebrow']" :description="$page['description']">
    <x-page-hero :eyebrow="$page['eyebrow']" :title="$page['title']" :description="$page['description']">
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('contact') }}" class="button-primary button-large">{{ $page['cta'] }}<x-icon name="arrow-right" class="size-5" /></a>
            <a href="{{ route('annexes') }}" class="button-secondary button-large">{{ __('site.nav.annexes') }}<x-icon name="arrow-right" class="size-5" /></a>
        </div>
    </x-page-hero>
    <section class="section-spacing bg-white"><div class="container-shell space-y-20">
        @foreach ($page['items'] as $index => [$image, $category, $title, $description])
            <article class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
                <div class="{{ $index % 2 ? 'lg:order-2' : '' }}" data-reveal><div class="project-detail-image"><img src="{{ asset('images/'.$image) }}" alt="{{ $title }}" loading="lazy"></div></div>
                <div class="{{ $index % 2 ? 'lg:order-1' : '' }}" data-reveal><p class="eyebrow">{{ $category }}</p><h2 class="mt-4 font-display text-2xl font-semibold tracking-tight text-hce-navy">{{ $title }}</h2><p class="mt-5 text-base leading-8 text-slate-600">{{ $description }}</p><a href="{{ route('contact') }}" class="text-link mt-7">{{ $page['cta'] }}<x-icon name="arrow-right" class="size-5" /></a></div>
            </article>
        @endforeach
    </div></section>
</x-layouts.app>
