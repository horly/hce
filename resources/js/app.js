import './bootstrap';

document.documentElement.classList.add('js');

const header = document.querySelector('[data-site-header]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileMenu = document.querySelector('[data-mobile-menu]');
const backToTop = document.querySelector('[data-back-to-top]');
const scrollProgress = document.querySelector('[data-scroll-progress]');

const updateScrollState = () => {
    const isScrolled = window.scrollY > 24;

    header?.setAttribute('data-scrolled', String(isScrolled));
    backToTop?.setAttribute('data-visible', String(window.scrollY > 640));

    if (scrollProgress) {
        const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = scrollableHeight > 0 ? Math.min(window.scrollY / scrollableHeight, 1) : 0;
        scrollProgress.style.width = `${progress * 100}%`;
    }
};

const closeMobileMenu = () => {
    if (!header || !menuToggle || !mobileMenu) {
        return;
    }

    header.setAttribute('data-menu-open', 'false');
    menuToggle.setAttribute('aria-expanded', 'false');
    mobileMenu.hidden = true;
    document.body.classList.remove('overflow-hidden');
};

menuToggle?.addEventListener('click', () => {
    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

    if (isOpen) {
        closeMobileMenu();
        return;
    }

    header?.setAttribute('data-menu-open', 'true');
    menuToggle.setAttribute('aria-expanded', 'true');
    mobileMenu.hidden = false;
    document.body.classList.add('overflow-hidden');
});

mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMobileMenu));

window.addEventListener('scroll', updateScrollState, { passive: true });
window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024) {
        closeMobileMenu();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeMobileMenu();
    }
});
updateScrollState();

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

document.querySelectorAll('[data-carousel]').forEach((carousel) => {
    const slides = [...carousel.querySelectorAll('[data-carousel-slide]')];
    const dots = [...carousel.querySelectorAll('[data-carousel-dot]')];
    const previousButton = carousel.querySelector('[data-carousel-previous]');
    const nextButton = carousel.querySelector('[data-carousel-next]');
    let currentIndex = 0;
    let autoplayTimer;

    const showSlide = (nextIndex) => {
        currentIndex = (nextIndex + slides.length) % slides.length;

        slides.forEach((slide, index) => {
            const isActive = index === currentIndex;
            slide.classList.toggle('is-active', isActive);
            slide.setAttribute('aria-hidden', String(!isActive));
        });

        dots.forEach((dot, index) => {
            const isActive = index === currentIndex;
            dot.classList.toggle('is-active', isActive);
            dot.setAttribute('aria-selected', String(isActive));
        });
    };

    const stopAutoplay = () => window.clearInterval(autoplayTimer);
    const startAutoplay = () => {
        stopAutoplay();

        if (!prefersReducedMotion && slides.length > 1) {
            autoplayTimer = window.setInterval(() => showSlide(currentIndex + 1), 7000);
        }
    };

    previousButton?.addEventListener('click', () => {
        showSlide(currentIndex - 1);
        startAutoplay();
    });
    nextButton?.addEventListener('click', () => {
        showSlide(currentIndex + 1);
        startAutoplay();
    });
    dots.forEach((dot, index) => dot.addEventListener('click', () => {
        showSlide(index);
        startAutoplay();
    }));
    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);
    carousel.addEventListener('focusin', stopAutoplay);
    carousel.addEventListener('focusout', startAutoplay);
    carousel.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
            showSlide(currentIndex - 1);
        }

        if (event.key === 'ArrowRight') {
            showSlide(currentIndex + 1);
        }
    });

    startAutoplay();
});

const revealElements = document.querySelectorAll('[data-reveal]');

if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            entry.target.setAttribute('data-revealed', 'true');
            observer.unobserve(entry.target);
        });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

    revealElements.forEach((element) => revealObserver.observe(element));
} else {
    revealElements.forEach((element) => element.setAttribute('data-revealed', 'true'));
}

const projectCarousel = document.querySelector('[data-project-carousel]');
const projectTrack = document.querySelector('[data-project-track]');
const projectSlides = projectTrack ? [...projectTrack.children] : [];
const projectPrevious = document.querySelector('[data-project-previous]');
const projectNext = document.querySelector('[data-project-next]');
let projectIndex = 0;

const updateProjectCarousel = () => {
    if (!projectCarousel || !projectTrack || projectSlides.length === 0) {
        return;
    }

    const slideWidth = projectSlides[0].getBoundingClientRect().width;
    const gap = Number.parseFloat(window.getComputedStyle(projectTrack).gap) || 0;
    const visibleSlides = Math.max(1, Math.floor((projectCarousel.clientWidth + gap) / (slideWidth + gap)));
    const maxIndex = Math.max(0, projectSlides.length - visibleSlides);

    projectIndex = Math.min(Math.max(projectIndex, 0), maxIndex);
    projectTrack.style.transform = `translateX(-${projectIndex * (slideWidth + gap)}px)`;
    projectPrevious?.toggleAttribute('disabled', projectIndex === 0);
    projectNext?.toggleAttribute('disabled', projectIndex === maxIndex);
};

projectPrevious?.addEventListener('click', () => {
    projectIndex -= 1;
    updateProjectCarousel();
});
projectNext?.addEventListener('click', () => {
    projectIndex += 1;
    updateProjectCarousel();
});
window.addEventListener('resize', updateProjectCarousel);
updateProjectCarousel();

const cookieBanner = document.querySelector('[data-cookie-banner]');
const cookieChoiceKey = 'hce-cookie-choice';
let storedCookieChoice = null;

try {
    storedCookieChoice = window.localStorage.getItem(cookieChoiceKey);
} catch {
    storedCookieChoice = null;
}

if (cookieBanner && !storedCookieChoice) {
    cookieBanner.hidden = false;
}

document.querySelectorAll('[data-cookie-choice]').forEach((button) => {
    button.addEventListener('click', () => {
        try {
            window.localStorage.setItem(cookieChoiceKey, button.dataset.cookieChoice);
        } catch {
            // The preference remains valid for the current page when storage is unavailable.
        }

        cookieBanner?.setAttribute('hidden', '');
    });
});

const serviceFilters = document.querySelectorAll('[data-service-filter]');
const serviceCards = document.querySelectorAll('[data-service-card]');

serviceFilters.forEach((filterButton) => {
    filterButton.addEventListener('click', () => {
        const selectedCategory = filterButton.dataset.serviceFilter;

        serviceFilters.forEach((button) => button.classList.toggle('service-filter-active', button === filterButton));

        serviceCards.forEach((card) => {
            const isVisible = selectedCategory === 'all' || card.dataset.category === selectedCategory;
            card.setAttribute('data-filter-hidden', String(!isVisible));
        });
    });
});

const contactForm = document.querySelector('[data-contact-form]');

contactForm?.addEventListener('submit', () => {
    const submitButton = contactForm.querySelector('[data-submit-button]');

    if (!submitButton) {
        return;
    }

    submitButton.disabled = true;
    submitButton.classList.add('opacity-70', 'cursor-wait');
    submitButton.querySelector('span').textContent = submitButton.dataset.sendingLabel ?? 'Sending…';
});
