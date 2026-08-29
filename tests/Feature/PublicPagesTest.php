<?php

it('renders the french public website pages', function (string $route, string $content) {
    $this->get(route($route, ['locale' => 'fr']))
        ->assertSuccessful()
        ->assertSee($content);
})->with([
    'home' => ['home', 'La technologie qui fait'],
    'company' => ['company', 'L’expertise technologique'],
    'services' => ['services', 'Les services HCE'],
    'electronic security' => ['electronic-security', 'Voir. Contrôler. Réagir.'],
    'training' => ['training', 'Transformer les connaissances'],
    'projects' => ['projects', 'Des solutions concrètes'],
    'annexes' => ['annexes', 'Nos réalisations, au plus près du terrain'],
    'resources' => ['resources', 'Comprendre aujourd’hui'],
    'contact' => ['contact', 'Une question, un besoin'],
    'privacy' => ['privacy', 'Politique de confidentialité'],
    'cookies' => ['cookies', 'Politique de cookies'],
    'legal notice' => ['legal-notice', 'Mentions légales'],
]);

it('renders the english public website pages', function (string $route, string $content) {
    $this->get(route($route, ['locale' => 'en']))
        ->assertSuccessful()
        ->assertSee($content);
})->with([
    'home' => ['home', 'Technology that moves'],
    'company' => ['company', 'Technology expertise'],
    'services' => ['services', 'Every HCE service'],
    'electronic security' => ['electronic-security', 'See. Control. Respond.'],
    'training' => ['training', 'Turn knowledge'],
    'projects' => ['projects', 'Practical solutions'],
    'annexes' => ['annexes', 'Our work, right where it happens'],
    'resources' => ['resources', 'Understand today'],
    'contact' => ['contact', 'A question, a need'],
    'privacy' => ['privacy', 'Privacy policy'],
    'cookies' => ['cookies', 'Cookie policy'],
    'legal notice' => ['legal-notice', 'Legal notice'],
]);

it('switches between french and english while keeping the current page', function () {
    $this->get(route('services', ['locale' => 'fr']))
        ->assertSuccessful()
        ->assertSee(route('services', ['locale' => 'en']));

    $this->get(route('services', ['locale' => 'en']))
        ->assertSuccessful()
        ->assertSee(route('services', ['locale' => 'fr']));
});

it('shows the complete technology grid and the current office address', function () {
    $this->get(route('home', ['locale' => 'fr']))
        ->assertSuccessful()
        ->assertSee('Microsoft')
        ->assertSee('MikroTik')
        ->assertSee('Proxmox')
        ->assertSee('WordPress')
        ->assertSee('ESET')
        ->assertSee('Yeastar')
        ->assertSee('107, rue de la Victoire');
});

it('shows all project annex photographs', function () {
    $response = $this->get(route('annexes', ['locale' => 'fr']))
        ->assertSuccessful()
        ->assertSeeInOrder(['19', 'photos'])
        ->assertSee('academy-atelier-groupe.jpg')
        ->assertSee('security-configuration-02.jpg');

    expect(substr_count($response->getContent(), 'data-gallery-item'))
        ->toBe(19);
});

it('links visitors to the domain purchase portal', function (string $route, string $locale, string $label) {
    $this->get(route($route, ['locale' => $locale]))
        ->assertSuccessful()
        ->assertSee(config('hce.domain_portal_url'))
        ->assertSee($label);
})->with([
    'french home' => ['home', 'fr', 'Trouver mon domaine'],
    'english home' => ['home', 'en', 'Find my domain'],
    'french solutions' => ['services', 'fr', 'Choisir mon domaine'],
    'english solutions' => ['services', 'en', 'Choose my domain'],
]);
