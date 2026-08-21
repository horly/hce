<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(StoreContactRequest $request): RedirectResponse
    {
        $contact = Arr::except($request->validated(), ['website']);

        Mail::to(config('hce.contact_recipient'))->send(new ContactMessage($contact));

        return back()->with(
            'contact_success',
            app()->isLocale('en')
                ? 'Thank you for your trust. Our team will get back to you shortly.'
                : 'Merci pour votre confiance. Notre équipe reviendra vers vous dans les meilleurs délais.',
        );
    }
}
