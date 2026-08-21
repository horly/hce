@php
    $page = app()->isLocale('en')
        ? ['eyebrow' => 'Transparency', 'title' => 'Cookie policy', 'description' => 'HCE uses only the mechanisms required for website operation and security.', 'sections' => [
            ['1. What is a cookie?', 'A cookie is a small file stored by a website. It can support functionality, remember a preference or, with consent, measure an audience.'],
            ['2. What HCE uses', 'The contact form uses a secure session to prevent fraudulent submissions. Your privacy banner choice is stored locally in your browser.'],
            ['3. Analytics and advertising', 'HCE currently uses no advertising cookie or third-party audience analytics. Optional tools would remain disabled until consent is given.'],
            ['4. Managing preferences', 'You can delete local data or block cookies in your browser settings. Blocking strictly necessary cookies may prevent secure form submission.'],
        ]]
        : ['eyebrow' => 'Transparence', 'title' => 'Politique de cookies', 'description' => 'HCE utilise uniquement les mécanismes nécessaires au fonctionnement et à la sécurité du site.', 'sections' => [
            ['1. Qu’est-ce qu’un cookie ?', 'Un cookie est un petit fichier enregistré par un site. Il peut assurer une fonction, mémoriser une préférence ou, avec consentement, mesurer une audience.'],
            ['2. Ce que HCE utilise', 'Le formulaire utilise une session sécurisée contre les soumissions frauduleuses. Votre choix sur le bandeau de confidentialité est mémorisé localement.'],
            ['3. Audience et publicité', 'HCE n’utilise actuellement ni cookie publicitaire ni outil tiers de mesure d’audience. Tout outil optionnel resterait désactivé avant consentement.'],
            ['4. Gérer les préférences', 'Vous pouvez supprimer les données locales ou bloquer les cookies dans votre navigateur. Le blocage des cookies nécessaires peut empêcher l’envoi sécurisé du formulaire.'],
        ]];
@endphp

<x-layouts.app :title="$page['title']" :description="$page['description']">
    <x-page-hero :eyebrow="$page['eyebrow']" :title="$page['title']" :description="$page['description']" />
    <section class="section-spacing bg-white"><div class="container-shell max-w-4xl"><article class="legal-content" data-reveal>@foreach ($page['sections'] as [$title, $text])<h2>{{ $title }}</h2><p>{{ $text }}</p>@endforeach</article></div></section>
</x-layouts.app>
