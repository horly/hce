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
