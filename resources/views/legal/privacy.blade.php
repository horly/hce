@php
    $page = app()->isLocale('en')
        ? ['eyebrow' => 'Data protection', 'title' => 'Privacy policy', 'description' => 'How HCE collects, uses and protects personal information.', 'sections' => [
            ['1. Data controller', 'Hightech Computing Evolution (HCE), located at 107 Rue de la Victoire, La CONCEM Building, first floor, Kasa-Vubu, Kinshasa, is responsible for data processed through this website. Landmark: Rond-Point Kimpwanza. Contact: contact@hce.cd.'],
            ['2. Data collected', 'The contact form may collect your name, organisation, email address, phone number, enquiry topic and message. Technical logs required for security may also be recorded.'],
            ['3. Purposes', 'We use this information to answer enquiries, prepare commercial relationships, protect the website from abuse and meet applicable legal obligations.'],
            ['4. Retention', 'Unsuccessful enquiries are kept for no longer than 24 months. Data related to a contract follows applicable accounting, tax and legal retention periods.'],
            ['5. Security and recipients', 'Access is limited to authorised HCE personnel and necessary technical providers under confidentiality obligations. Appropriate access control, backup and monitoring measures are applied.'],
            ['6. Your rights', 'Under applicable law in the Democratic Republic of the Congo, including the Digital Code, you may request access, correction, deletion, restriction or object to certain processing by writing to contact@hce.cd.'],
        ]]
        : ['eyebrow' => 'Protection des données', 'title' => 'Politique de confidentialité', 'description' => 'Comment HCE collecte, utilise et protège les informations personnelles.', 'sections' => [
            ['1. Responsable du traitement', 'Hightech Computing Evolution (HCE), située au 107, rue de la Victoire, Immeuble La CONCEM, 1er niveau, Kasa-Vubu, Kinshasa, est responsable des données traitées via ce site. Réf. : Rond-Point Kimpwanza. Contact : contact@hce.cd.'],
            ['2. Données collectées', 'Le formulaire peut recueillir vos nom, organisation, e-mail, téléphone, objet et message. Des journaux techniques nécessaires à la sécurité peuvent également être enregistrés.'],
            ['3. Finalités', 'Ces informations servent à répondre aux demandes, préparer une relation commerciale, protéger le site contre les abus et respecter les obligations applicables.'],
            ['4. Conservation', 'Les demandes sans suite sont conservées au maximum 24 mois. Les données liées à un contrat suivent les durées comptables, fiscales et légales applicables.'],
            ['5. Sécurité et destinataires', 'L’accès est limité au personnel HCE habilité et aux prestataires techniques nécessaires soumis à confidentialité. Des mesures de contrôle d’accès, sauvegarde et supervision sont appliquées.'],
            ['6. Vos droits', 'Selon le droit applicable en République démocratique du Congo, notamment le Code du numérique, vous pouvez demander l’accès, la rectification, l’effacement, la limitation ou vous opposer à certains traitements via contact@hce.cd.'],
        ]];
@endphp

<x-layouts.app :title="$page['title']" :description="$page['description']">
    <x-page-hero :eyebrow="$page['eyebrow']" :title="$page['title']" :description="$page['description']" />
    <section class="section-spacing bg-white"><div class="container-shell max-w-4xl"><article class="legal-content" data-reveal>@foreach ($page['sections'] as [$title, $text])<h2>{{ $title }}</h2><p>{{ $text }}</p>@endforeach</article></div></section>
</x-layouts.app>
