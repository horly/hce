@props(['compact' => false, 'formId' => 'contact'])

@php($contact = trans('site.contact'))

<div {{ $attributes->class(['contact-form-panel', 'contact-form-panel-compact' => $compact]) }} data-reveal>
    @if (session('contact_success'))
        <div class="success-alert" role="status">
            <span><x-icon name="check" class="size-5" /></span>
            <div><strong>{{ $contact['success'] }}</strong><p>{{ session('contact_success') }}</p></div>
        </div>
    @endif

    <div class="mb-8">
        <p class="eyebrow">{{ $contact['eyebrow'] }}</p>
        <h2 class="mt-3 font-display text-2xl font-semibold text-hce-navy sm:text-[1.75rem]">{{ $contact['title'] }}</h2>
        <p class="mt-3 text-sm leading-6 text-slate-600">{{ $contact['required'] }}</p>
    </div>

    <form action="{{ route('contact.store') }}" method="POST" class="grid gap-5 sm:grid-cols-2" data-contact-form>
        @csrf

        <div class="form-field">
            <label for="{{ $formId }}-name">{{ $contact['name'] }} <span>*</span></label>
            <input id="{{ $formId }}-name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required @class(['form-input', 'form-input-error' => $errors->has('name')])>
            @error('name')<p class="form-error">{{ $message }}</p>@enderror
        </div>

        <div class="form-field">
            <label for="{{ $formId }}-company">{{ $contact['company'] }}</label>
            <input id="{{ $formId }}-company" name="company" type="text" value="{{ old('company') }}" autocomplete="organization" @class(['form-input', 'form-input-error' => $errors->has('company')])>
            @error('company')<p class="form-error">{{ $message }}</p>@enderror
        </div>

        <div class="form-field">
            <label for="{{ $formId }}-email">{{ $contact['email'] }} <span>*</span></label>
            <input id="{{ $formId }}-email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required @class(['form-input', 'form-input-error' => $errors->has('email')])>
            @error('email')<p class="form-error">{{ $message }}</p>@enderror
        </div>

        <div class="form-field">
            <label for="{{ $formId }}-phone">{{ $contact['phone'] }}</label>
            <input id="{{ $formId }}-phone" name="phone" type="tel" value="{{ old('phone') }}" autocomplete="tel" @class(['form-input', 'form-input-error' => $errors->has('phone')])>
            @error('phone')<p class="form-error">{{ $message }}</p>@enderror
        </div>

        <div class="form-field sm:col-span-2">
            <label for="{{ $formId }}-subject">{{ $contact['subject'] }} <span>*</span></label>
            <select id="{{ $formId }}-subject" name="subject" required @class(['form-input', 'form-input-error' => $errors->has('subject')])>
                <option value="">{{ $contact['select'] }}</option>
                @foreach ($contact['subjects'] as $value => $label)
                    <option value="{{ $value }}" @selected(old('subject', request('objet') === 'formation' ? 'Formation' : '') === $value)>{{ $label }}</option>
                @endforeach
            </select>
            @error('subject')<p class="form-error">{{ $message }}</p>@enderror
        </div>

        <div class="form-field sm:col-span-2">
            <label for="{{ $formId }}-message">{{ $contact['message'] }} <span>*</span></label>
            <textarea id="{{ $formId }}-message" name="message" rows="{{ $compact ? 4 : 6 }}" required @class(['form-input resize-none', 'form-input-error' => $errors->has('message')]) placeholder="{{ $contact['placeholder'] }}">{{ old('message') }}</textarea>
            @error('message')<p class="form-error">{{ $message }}</p>@enderror
        </div>

        <div class="sr-only" aria-hidden="true">
            <label for="{{ $formId }}-website">Website</label>
            <input id="{{ $formId }}-website" name="website" type="text" value="" tabindex="-1" autocomplete="off">
        </div>

        <div class="flex flex-col gap-4 sm:col-span-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="max-w-md text-xs leading-5 text-slate-500">{{ $contact['privacy'] }}</p>
            <button type="submit" class="button-dark button-large shrink-0" data-submit-button data-sending-label="{{ $contact['sending'] }}">
                <span>{{ $contact['submit'] }}</span>
                <x-icon name="arrow-right" class="size-5" />
            </button>
        </div>
    </form>
</div>
