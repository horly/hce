@props(['href', 'active' => false, 'mobile' => false])

<a href="{{ $href }}" @class([
    'nav-link',
    'nav-link-active' => $active,
    'nav-link-mobile' => $mobile,
]) aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
