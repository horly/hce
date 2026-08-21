@props(['name'])

<svg {{ $attributes->merge(['class' => 'size-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @switch($name)
        @case('managed')
            <path d="M4 6.5A2.5 2.5 0 0 1 6.5 4h11A2.5 2.5 0 0 1 20 6.5v3A2.5 2.5 0 0 1 17.5 12h-11A2.5 2.5 0 0 1 4 9.5z"/><path d="M4 14.5A2.5 2.5 0 0 1 6.5 12h11a2.5 2.5 0 0 1 2.5 2.5v3a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 4 17.5z"/><path d="M8 8h.01M8 16h.01M12 8h4M12 16h4"/>
            @break
        @case('network')
            <rect x="3" y="3" width="6" height="5" rx="1"/><rect x="15" y="16" width="6" height="5" rx="1"/><rect x="3" y="16" width="6" height="5" rx="1"/><path d="M6 8v4h12v4M6 12v4M12 12V8"/><circle cx="12" cy="5" r="2"/>
            @break
        @case('shield')
            <path d="M12 3 4.5 6v5.5c0 4.6 3 7.8 7.5 9.5 4.5-1.7 7.5-4.9 7.5-9.5V6z"/><path d="m9 12 2 2 4-4"/>
            @break
        @case('camera')
            <path d="M14.5 7 16 5h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3l1.5 2z"/><circle cx="12" cy="13" r="4"/>
            @break
        @case('access')
            <rect x="4" y="3" width="12" height="18" rx="2"/><path d="M8 7h4M8 11h4M19 8v8M16 12h6"/>
            @break
        @case('phone')
            <path d="M8.5 4.5 10 8l-2 1.5a15 15 0 0 0 6.5 6.5l1.5-2 3.5 1.5v3a2 2 0 0 1-2 2A14 14 0 0 1 3.5 6.5a2 2 0 0 1 2-2z"/>
            @break
        @case('fire')
            <path d="M13 3s1 3-1 5c-1.5 1.5-2 2.5-1 4 1-1 2-2 3-1 1.8 1.8 2 6-2 9-5 0-8-2.6-7.5-6.5C5 9.5 8 8 8 5c3 1.5 3 4 3 4 2-2 2-4 2-6z"/>
            @break
        @case('bell')
            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"/>
            @break
        @case('tools')
            <path d="M14.7 6.3a4 4 0 0 0-5-5L12 3.6 9.6 6 7.3 3.7a4 4 0 0 0 5 5l7 7a2 2 0 0 1-2.8 2.8l-7-7"/><path d="m5 14-3 3 3 3 3-3"/>
            @break
        @case('audit')
            <path d="M9 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4"/><path d="m9 15 3-3 2 2 6-6"/><path d="M15 8h5v5"/>
            @break
        @case('business')
            <rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v16M12 13h5M12 16h3"/>
            @break
        @case('code')
            <path d="m8 9-4 3 4 3M16 9l4 3-4 3M14 5l-4 14"/>
            @break
        @case('training')
            <path d="m3 10 9-5 9 5-9 5z"/><path d="M7 12.5V17c3 2 7 2 10 0v-4.5M21 10v6"/>
            @break
        @case('check')
            <path d="m5 12 4 4L19 6"/>
            @break
        @case('arrow-right')
            <path d="M5 12h14M13 6l6 6-6 6"/>
            @break
        @case('arrow-up')
            <path d="m6 11 6-6 6 6M12 5v14"/>
            @break
        @case('download')
            <path d="M12 3v12M7 10l5 5 5-5M5 21h14"/>
            @break
        @case('location')
            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0z"/><circle cx="12" cy="10" r="2.5"/>
            @break
        @case('mail')
            <rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>
            @break
        @case('clock')
            <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>
            @break
        @case('chevron-left')
            <path d="m15 18-6-6 6-6"/>
            @break
        @case('chevron-right')
            <path d="m9 18 6-6-6-6"/>
            @break
        @case('facebook')
            <path d="M14 8h3V4h-3c-3 0-5 2-5 5v3H6v4h3v5h4v-5h3l1-4h-4V9c0-.7.3-1 1-1z"/>
            @break
        @case('linkedin')
            <path d="M6 9v11M6 5v.01M10 20V9M10 14c0-2.8 2-5 4.5-5S19 10.7 19 14v6M3.5 9h5M3.5 20h5"/>
            @break
        @case('instagram')
            <rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><path d="M17.5 6.5h.01"/>
            @break
        @case('youtube')
            <path d="M21 12s0-3.5-.5-5c-.3-1-1-1.7-2-2C17 4.5 12 4.5 12 4.5s-5 0-6.5.5c-1 .3-1.7 1-2 2C3 8.5 3 12 3 12s0 3.5.5 5c.3 1 1 1.7 2 2 1.5.5 6.5.5 6.5.5s5 0 6.5-.5c1-.3 1.7-1 2-2 .5-1.5.5-5 .5-5z"/><path d="m10 9 5 3-5 3z"/>
            @break
        @case('cookie')
            <path d="M20.5 13.5A8.5 8.5 0 1 1 10.5 3c-.5 2.5 1 4 3 4 .2 2.3 2 3.5 4.5 3-.1 1.5.8 2.7 2.5 3.5z"/><path d="M8 11h.01M11 16h.01M7 17h.01"/>
            @break
    @endswitch
</svg>
