import './bootstrap';

import Alpine from 'alpinejs';

import { gsap } from "gsap";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const headings = document.querySelectorAll('h1, h2, h3');
    const buttons = document.querySelectorAll('button, .btn, input[type="button"], input[type="submit"]');
    const decorativeCircles = document.querySelectorAll('.decorative-circle');

    gsap.from(headings, {
        duration: 0.8,
        opacity: 0,
        y: -20,
        stagger: 0.2,
        ease: 'power3.out'
    });

    gsap.from(buttons, {
        duration: 0.8,
        opacity: 0,
        scale: 0.5, // Mulai dari skala kecil
        stagger: 0.1,
        ease: 'back.out(1.7)', // Efek zoom yang lebih menarik
        delay: 0.2
    });

    // GSAP for button hover and click effects
    buttons.forEach(button => {
        gsap.set(button, { transformOrigin: "center center" });

        button.addEventListener('mouseenter', () => {
            gsap.to(button, { scale: 1.05, duration: 0.3, ease: "power2.out" });
        });

        button.addEventListener('mouseleave', () => {
            gsap.to(button, { scale: 1, duration: 0.3, ease: "power2.out" });
        });

        button.addEventListener('mousedown', () => {
            gsap.to(button, { scale: 0.95, duration: 0.15, ease: "power2.out" });
        });

        button.addEventListener('mouseup', () => {
            gsap.to(button, { scale: 1.05, duration: 0.15, ease: "power2.out" }); // Return to hover state
        });
    });

    gsap.fromTo(decorativeCircles, 
        { opacity: 0, scale: 0.8 },
        {
            duration: 1.5,
            opacity: 1,
            scale: 1,
            stagger: 0.3,
            ease: 'elastic.out(1, 0.75)',
            onComplete: () => {
                gsap.to(decorativeCircles, {
                    y: "-=20",
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut",
                    duration: 3,
                    stagger: {
                        each: 0.5,
                        from: "random"
                    }
                });
            }
        }
    );
});
