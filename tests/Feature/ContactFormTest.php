<?php

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

it('queues a valid contact request', function () {
    Mail::fake();

    $this->post(route('contact.store', ['locale' => 'fr']), [
        'name' => 'Patrick Ilunga',
        'company' => 'Exemple RDC',
        'email' => 'patrick@example.cd',
        'phone' => '+243 000 000 000',
        'subject' => 'Projet IT',
        'message' => 'Nous souhaitons moderniser notre infrastructure réseau à Kinshasa.',
        'website' => '',
    ])->assertRedirect()
        ->assertSessionHas('contact_success');

    Mail::assertQueued(ContactMessage::class, function (ContactMessage $mail): bool {
        return $mail->contact['email'] === 'patrick@example.cd'
            && $mail->hasTo('contact@hce.cd');
    });
});

it('rejects an incomplete contact request', function () {
    $this->from(route('contact', ['locale' => 'fr']))
        ->post(route('contact.store', ['locale' => 'fr']), [
            'name' => '',
            'email' => 'invalid-email',
            'subject' => 'Unknown',
            'message' => 'Trop court',
        ])
        ->assertRedirect(route('contact', ['locale' => 'fr']))
        ->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
});
