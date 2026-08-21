@php($contact = trans('site.contact'))

<x-layouts.app title="Contact" :description="$contact['meta_description']">
    <x-page-hero :eyebrow="$contact['page_eyebrow']" :title="$contact['page_title']" :description="$contact['page_description']" />

    <section class="section-spacing bg-slate-50">
        <div class="container-shell grid gap-8 lg:grid-cols-[.72fr_1.28fr] lg:gap-12">
            <aside class="space-y-5">
                <div class="contact-intro-card" data-reveal>
                    <p class="eyebrow text-orange-300">{{ $contact['details'] }}</p>
                    <h2 class="mt-4 font-display text-2xl font-semibold text-white">{{ $contact['stay_connected'] }}</h2>
                    <p class="mt-4 text-sm leading-7 text-slate-300">{{ $contact['support_note'] }}</p>
                </div>

                <div class="mini-map overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm" data-reveal>
                    <iframe title="HCE — Commune de Kasa-Vubu, Kinshasa" src="https://www.google.com/maps?q=-4.338174%2C15.304587&z=18&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=-4.338174%2C15.304587" class="flex items-start gap-3 p-4" target="_blank" rel="noreferrer">
                        <span class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-600"><x-icon name="location" class="size-5" /></span>
                        <span><small class="block text-[.65rem] font-extrabold uppercase tracking-wider text-slate-400">{{ $contact['office'] }}</small><strong class="mt-1 block text-sm text-hce-navy">107, rue de la Victoire<br>Commune de Kasa-Vubu · Imm. La CONCEM, 1er niveau<br>Réf. : Rond-Point Kimpwanza</strong></span>
                    </a>
                </div>

                <a href="tel:+243816391233" class="contact-detail-card" data-reveal><span><x-icon name="phone" class="size-6" /></span><div><small>{{ $contact['phone'] }}</small><strong>+243 816 391 233</strong></div></a>
                <a href="mailto:contact@hce.cd" class="contact-detail-card" data-reveal><span><x-icon name="mail" class="size-6" /></span><div><small>{{ $contact['projects_email'] }}</small><strong>contact@hce.cd</strong></div></a>
                <a href="mailto:support@hce.cd" class="contact-detail-card" data-reveal><span><x-icon name="clock" class="size-6" /></span><div><small>{{ $contact['support_email'] }}</small><strong>support@hce.cd</strong></div></a>
            </aside>

            <x-contact-form form-id="contact-page" />
        </div>
    </section>
</x-layouts.app>
