import Alpine from 'alpinejs';
import Typed from 'typed.js';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { createIcons, icons } from 'lucide';

gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Lucide Icons
    createIcons({ icons });

    // 2. Custom Cursor Follower
    const cursor = document.getElementById('custom-cursor');
    if (cursor) {
        window.addEventListener('mousemove', (e) => {
            cursor.style.left = `${e.clientX}px`;
            cursor.style.top = `${e.clientY}px`;
        });

        const hoverables = document.querySelectorAll('a, button, input, textarea, .glass-card, [role="button"]');
        hoverables.forEach((el) => {
            el.addEventListener('mouseenter', () => cursor.classList.add('hovering'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('hovering'));
        });
    }

    // 3. Typed.js for Hero Roles
    const typedElement = document.getElementById('typed-roles');
    if (typedElement) {
        const rolesData = JSON.parse(typedElement.getAttribute('data-roles') || '[]');
        if (rolesData.length > 0) {
            new Typed('#typed-roles', {
                strings: rolesData,
                typeSpeed: 60,
                backSpeed: 40,
                backDelay: 2000,
                loop: true,
                showCursor: true,
                cursorChar: '|'
            });
        }
    }

    // 4. GSAP Animations & Reveal
    // Reveal Hero elements
    gsap.from('.hero-stagger', {
        opacity: 0,
        y: 40,
        duration: 1,
        stagger: 0.15,
        ease: 'power3.out',
        delay: 0.8
    });

    // GSAP ScrollTrigger for section headers and cards
    gsap.utils.toArray('.gsap-reveal').forEach((el) => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            },
            opacity: 0,
            y: 35,
            duration: 0.8,
            ease: 'power2.out'
        });
    });

    // 5. Stat Counter Animation
    const counters = document.querySelectorAll('.counter-val');
    counters.forEach((counter) => {
        const target = parseFloat(counter.getAttribute('data-target') || '0');
        const isDecimal = target % 1 !== 0;

        ScrollTrigger.create({
            trigger: counter,
            start: 'top 90%',
            onEnter: () => {
                let obj = { val: 0 };
                gsap.to(obj, {
                    val: target,
                    duration: 2,
                    ease: 'power1.out',
                    onUpdate: () => {
                        counter.innerText = isDecimal ? obj.val.toFixed(2) : Math.floor(obj.val);
                    }
                });
            }
        });
    });

    // 6. Preloader Dismissal
    const preloader = document.getElementById('preloader');
    if (preloader) {
        setTimeout(() => {
            preloader.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => preloader.remove(), 600);
        }, 700);
    }
});
