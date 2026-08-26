@props([
    'title' => 'Solutions IT & services managés',
    'description' => 'HCE accompagne les entreprises en RDC avec des services IT managés, des infrastructures fiables, la cybersécurité et des formations professionnelles.',
])

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $description }}">
        <meta name="theme-color" content="#032d6b">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $title }} | HCE">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:image" content="{{ asset('images/hce-hero-operations.png') }}">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="alternate" hreflang="fr" href="{{ route(request()->route()->getName(), ['locale' => 'fr']) }}">
        <link rel="alternate" hreflang="en" href="{{ route(request()->route()->getName(), ['locale' => 'en']) }}">

        <title>{{ $title }} | HCE</title>

        <link rel="icon" href="{{ asset('images/hce-logo-transparent.png') }}" type="image/png">
        <link rel="preload" href="{{ asset('images/hce-logo-transparent.png') }}" as="image" fetchpriority="high">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800|plus-jakarta-sans:500,600,700" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-slate-900 antialiased">
        <div class="page-loader" data-page-loader role="status" aria-live="polite" aria-label="{{ __('site.loader.label') }}">
            <div class="page-loader-glow page-loader-glow-blue" aria-hidden="true"></div>
            <div class="page-loader-glow page-loader-glow-orange" aria-hidden="true"></div>
            <div class="page-loader-content">
                <div class="page-loader-logo-shell" aria-hidden="true">
                    <span class="page-loader-orbit"></span>
                    <img class="page-loader-logo" src="{{ asset('images/hce-logo-transparent.png') }}" alt="" width="2048" height="768" fetchpriority="high">
                </div>
                <div class="page-loader-progress" aria-hidden="true"><span></span></div>
                <p>{{ __('site.loader.label') }}</p>
            </div>
        </div>

        <div class="scroll-progress" data-scroll-progress aria-hidden="true"></div>

        <header class="site-header fixed inset-x-0 top-3 z-50" data-site-header>
            <div class="header-bar container-shell flex h-20 items-center justify-between gap-5 px-4 lg:h-20 lg:px-5">
                <a href="{{ route('home') }}" class="brand-mark shrink-0" aria-label="HCE, accueil">
                    <img src="{{ asset('images/hce-logo-transparent.png') }}" alt="HCE — Hightech Computing Evolution">
                </a>

                <nav class="hidden items-center gap-0.5 xl:flex" aria-label="Navigation principale">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">{{ __('site.nav.home') }}</x-nav-link>
                    <x-nav-link :href="route('company')" :active="request()->routeIs('company')">{{ __('site.nav.company') }}</x-nav-link>
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services', 'electronic-security')">{{ __('site.nav.solutions') }}</x-nav-link>
                    <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">{{ __('site.nav.projects') }}</x-nav-link>
                    <x-nav-link :href="route('training')" :active="request()->routeIs('training')">{{ __('site.nav.academy') }}</x-nav-link>
                    <x-nav-link :href="route('resources')" :active="request()->routeIs('resources')">{{ __('site.nav.resources') }}</x-nav-link>
                </nav>

                <div class="hidden items-center gap-4 xl:flex">
                    <a href="tel:+243816391233" class="header-phone">
                        <span class="size-2 rounded-full bg-emerald-400 shadow-[0_0_0_5px_rgb(52_211_153_/_0.12)]"></span>
                        +243 816 391 233
                    </a>
                    <a href="{{ route(request()->route()->getName(), ['locale' => app()->isLocale('fr') ? 'en' : 'fr']) }}" class="language-switch" hreflang="{{ app()->isLocale('fr') ? 'en' : 'fr' }}" aria-label="{{ __('site.language.name') }}">
                        {{ __('site.language.label') }}
                    </a>
                    <a href="{{ route('contact') }}" class="button-primary">{{ __('site.nav.expert') }}</a>
                </div>

                <button type="button" class="mobile-menu-button xl:hidden" data-menu-toggle aria-expanded="false" aria-controls="mobile-navigation">
                    <span class="sr-only">Ouvrir le menu</span>
                    <span></span><span></span><span></span>
                </button>
            </div>

            <div id="mobile-navigation" class="mobile-navigation xl:hidden" data-mobile-menu hidden>
                <nav class="container-shell flex flex-col gap-1 py-5" aria-label="Navigation mobile">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" mobile>{{ __('site.nav.home') }}</x-nav-link>
                    <x-nav-link :href="route('company')" :active="request()->routeIs('company')" mobile>{{ __('site.nav.company') }}</x-nav-link>
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services', 'electronic-security')" mobile>{{ __('site.nav.solutions') }}</x-nav-link>
                    <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')" mobile>{{ __('site.nav.projects') }}</x-nav-link>
                    <x-nav-link :href="route('training')" :active="request()->routeIs('training')" mobile>{{ __('site.nav.academy') }}</x-nav-link>
                    <x-nav-link :href="route('resources')" :active="request()->routeIs('resources')" mobile>{{ __('site.nav.resources') }}</x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" mobile>{{ __('site.nav.contact') }}</x-nav-link>
                    <a href="{{ route(request()->route()->getName(), ['locale' => app()->isLocale('fr') ? 'en' : 'fr']) }}" class="mt-2 rounded-xl border border-white/15 px-4 py-3 text-center text-sm font-extrabold text-white">{{ __('site.language.name') }}</a>
                    <a href="tel:+243816391233" class="mt-4 flex items-center justify-between rounded-xl bg-blue-600 px-5 py-4 font-bold text-white">
                        <span>{{ __('site.nav.call') }}</span>
                        <span>+243 816 391 233</span>
                    </a>
                </nav>
            </div>
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer class="site-footer text-white">
            <div class="container-shell grid gap-12 pb-14 pt-16 md:grid-cols-2 lg:grid-cols-[1.35fr_.7fr_.85fr_.8fr] lg:pt-20">
                <div class="max-w-sm">
                    <a href="{{ route('home') }}" class="brand-mark brand-mark-footer" aria-label="HCE, accueil">
                        <img src="{{ asset('images/hce-logo-transparent.png') }}" alt="HCE">
                    </a>
                    <p class="mt-6 text-sm leading-7 text-slate-300">{{ __('site.footer.description') }}</p>
                    <div class="mt-6 flex items-center gap-2" aria-label="Réseaux sociaux HCE">
                        <a class="social-link" href="https://www.facebook.com/HCE" target="_blank" rel="noopener noreferrer" aria-label="HCE sur Facebook"><x-icon name="facebook" class="size-5" /></a>
                        <a class="social-link" href="https://www.linkedin.com/company/hightech-computing-evolution/?viewAsMember=true" target="_blank" rel="noopener noreferrer" aria-label="HCE sur LinkedIn"><x-icon name="linkedin" class="size-5" /></a>
                        <a class="social-link" href="https://www.instagram.com/hce.cd/" target="_blank" rel="noopener noreferrer" aria-label="HCE sur Instagram"><x-icon name="instagram" class="size-5" /></a>
                        <a class="social-link" href="https://www.youtube.com/@HCE" target="_blank" rel="noopener noreferrer" aria-label="HCE sur YouTube"><x-icon name="youtube" class="size-5" /></a>
                    </div>
                </div>

                <div>
                    <p class="footer-title">{{ __('site.footer.discover') }}</p>
                    <div class="mt-5 flex flex-col gap-3 text-sm text-slate-300">
                        <a class="footer-link" href="{{ route('company') }}">{{ __('site.nav.company') }}</a>
                        <a class="footer-link" href="{{ route('projects') }}">{{ __('site.nav.projects') }}</a>
                        <a class="footer-link" href="{{ route('training') }}">HCE {{ __('site.nav.academy') }}</a>
                        <a class="footer-link" href="{{ route('resources') }}">{{ __('site.nav.resources') }}</a>
                    </div>
                </div>

                <div>
                    <p class="footer-title">{{ __('site.footer.expertise') }}</p>
                    <div class="mt-5 flex flex-col gap-3 text-sm text-slate-300">
                        <a class="footer-link" href="{{ route('services') }}#managed">{{ __('site.footer.managed') }}</a>
                        <a class="footer-link" href="{{ route('services') }}#infrastructure">{{ __('site.footer.infrastructure') }}</a>
                        <a class="footer-link" href="{{ route('services') }}#security">{{ __('site.footer.cybersecurity') }}</a>
                        <a class="footer-link" href="{{ route('electronic-security') }}">{{ __('site.footer.electronic') }}</a>
                        <a class="footer-link" href="{{ route('services') }}#business">{{ __('site.footer.business') }}</a>
                    </div>
                </div>

                <div>
                    <p class="footer-title">{{ __('site.footer.contact') }}</p>
                    <address class="mt-5 flex flex-col gap-3 text-sm not-italic leading-6 text-slate-300">
                        <span>107, rue de la Victoire, Kasa-Vubu<br>Imm. La CONCEM, 1er niveau<br>Réf. : Rond-Point Kimpwanza</span>
                        <a class="footer-link" href="tel:+243816391233">+243 816 391 233</a>
                        <a class="footer-link" href="mailto:contact@hce.cd">contact@hce.cd</a>
                        <a class="footer-link" href="mailto:support@hce.cd">support@hce.cd</a>
                    </address>
                </div>
            </div>

            <div class="border-t border-white/10">
                <div class="container-shell flex flex-col gap-4 py-6 text-xs text-slate-400 lg:flex-row lg:items-center lg:justify-between">
                    <p>© {{ now()->year }} Hightech Computing Evolution. {{ __('site.footer.rights') }}</p>
                    <div class="flex flex-wrap gap-x-5 gap-y-2">
                        <a class="footer-link" href="{{ route('privacy') }}">{{ __('site.footer.privacy') }}</a>
                        <a class="footer-link" href="{{ route('cookies') }}">{{ __('site.footer.cookies') }}</a>
                        <a class="footer-link" href="{{ route('legal-notice') }}">{{ __('site.footer.legal') }}</a>
                    </div>
                </div>
            </div>
        </footer>

        <div class="cookie-banner" data-cookie-banner hidden role="dialog" aria-labelledby="cookie-title" aria-describedby="cookie-description">
            <div class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                <x-icon name="cookie" class="size-6" />
            </div>
            <div class="min-w-0 flex-1">
                <strong id="cookie-title" class="font-display text-sm text-hce-navy">{{ __('site.cookie.title') }}</strong>
                <p id="cookie-description" class="mt-1 text-xs leading-5 text-slate-600">{{ __('site.cookie.description') }} <a href="{{ route('cookies') }}" class="font-bold text-blue-600">{{ __('site.cookie.more') }}</a>.</p>
            </div>
            <div class="flex shrink-0 gap-2">
                <button type="button" class="cookie-button-secondary" data-cookie-choice="refused">{{ __('site.cookie.refuse') }}</button>
                <button type="button" class="cookie-button-primary" data-cookie-choice="accepted">{{ __('site.cookie.accept') }}</button>
            </div>
        </div>

        <a href="#top" class="back-to-top" data-back-to-top aria-label="Retour en haut">
            <x-icon name="arrow-up" class="size-5" />
        </a>
    </body>
</html>
