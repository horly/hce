@php
    $page = app()->isLocale('en')
        ? ['eyebrow' => 'Legal information', 'title' => 'Legal notice', 'description' => 'Information about the publisher, content and use of the HCE website.', 'sections' => [
            ['1. Website publisher', 'Hightech Computing Evolution (HCE), 107 Rue de la Victoire, La CONCEM Building, first floor, Kasa-Vubu, Kinshasa, DRC. Landmark: Rond-Point Kimpwanza. Phone: +243 816 391 233. Email: contact@hce.cd. Publication is managed by HCE General Management.'],
            ['2. Intellectual property', 'The website structure, text, graphics, photographs, marks and logos are protected. Reproduction or use requires prior written authorisation from HCE unless otherwise permitted by law.'],
            ['3. Information and availability', 'HCE works to keep information accurate and the website available but cannot guarantee permanent accuracy or uninterrupted access. Website content does not replace a technical assessment or contract.'],
            ['4. External links', 'HCE does not control third-party websites and is not responsible for their content, availability or privacy practices.'],
            ['5. Applicable law', 'This website is governed by the law of the Democratic Republic of the Congo. The parties will seek an amicable resolution before approaching competent courts.'],
        ]]
        : ['eyebrow' => 'Informations légales', 'title' => 'Mentions légales', 'description' => 'Informations relatives à l’éditeur, au contenu et à l’utilisation du site HCE.', 'sections' => [
            ['1. Éditeur du site', 'Hightech Computing Evolution (HCE), 107, rue de la Victoire, Immeuble La CONCEM, 1er niveau, Kasa-Vubu, Kinshasa, RDC. Réf. : Rond-Point Kimpwanza. Téléphone : +243 816 391 233. E-mail : contact@hce.cd. La publication est assurée par la Direction générale de HCE.'],
            ['2. Propriété intellectuelle', 'La structure, les textes, graphismes, photographies, marques et logos sont protégés. Toute reproduction ou exploitation nécessite l’autorisation écrite de HCE, sauf disposition légale contraire.'],
            ['3. Informations et disponibilité', 'HCE veille à la qualité des informations et à la disponibilité du site sans pouvoir en garantir l’exactitude permanente ni l’accès ininterrompu. Le contenu ne remplace pas une étude technique ou un contrat.'],
            ['4. Liens externes', 'HCE ne contrôle pas les sites tiers et n’est pas responsable de leur contenu, disponibilité ou pratiques de confidentialité.'],
            ['5. Droit applicable', 'Le site est soumis au droit de la République démocratique du Congo. Une résolution amiable sera recherchée avant la saisine des juridictions compétentes.'],
        ]];
@endphp

<x-layouts.app :title="$page['title']" :description="$page['description']">
    <x-page-hero :eyebrow="$page['eyebrow']" :title="$page['title']" :description="$page['description']" />
    <section class="section-spacing bg-white"><div class="container-shell max-w-4xl"><article class="legal-content" data-reveal>@foreach ($page['sections'] as [$title, $text])<h2>{{ $title }}</h2><p>{{ $text }}</p>@endforeach</article></div></section>
</x-layouts.app>
