import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Bubble Menu
    const menuBubble = document.querySelector('.menu-bubble');
    const bubbleMenuItems = document.querySelector('.bubble-menu-items');

    if (menuBubble && bubbleMenuItems) {
        menuBubble.addEventListener('click', () => {
            menuBubble.classList.toggle('active');
        });
    }

    // Parallax Effect for Hero Section
    const heroSection = document.getElementById('hero');
    const parallaxElements = {
        slow: document.querySelectorAll('.parallax-slow'),
        medium: document.querySelectorAll('.parallax-medium'),
        fast: document.querySelectorAll('.parallax-fast'),
        content: document.querySelector('.parallax-content'),
        infographic: document.querySelector('.parallax-infographic')
    };

    let ticking = false;

    function updateParallax() {
        if (!heroSection) return;

        const rect = heroSection.getBoundingClientRect();
        const scrollProgress = Math.max(0, Math.min(1, (window.innerHeight - rect.top) / window.innerHeight));
        
        // Parallax for background blobs
        parallaxElements.slow.forEach(el => {
            if (el) {
                const speed = 0.3;
                const yPos = -(rect.top * speed);
                el.style.transform = `translateY(${yPos}px)`;
            }
        });

        parallaxElements.medium.forEach(el => {
            if (el) {
                const speed = 0.5;
                const yPos = -(rect.top * speed);
                el.style.transform = `translateY(${yPos}px)`;
            }
        });

        parallaxElements.fast.forEach(el => {
            if (el) {
                const speed = 0.7;
                const yPos = -(rect.top * speed);
                el.style.transform = `translateY(${yPos}px)`;
            }
        });

        // Parallax for content
        if (parallaxElements.content) {
            const contentSpeed = 0.2;
            const contentYPos = -(rect.top * contentSpeed);
            parallaxElements.content.style.transform = `translateY(${contentYPos}px)`;
            // Opacity removed - content should stay fully visible
        }

        // Parallax for infographic
        if (parallaxElements.infographic) {
            const infographicSpeed = 0.4;
            const infographicYPos = -(rect.top * infographicSpeed);
            const infographicScale = 1 - scrollProgress * 0.15;
            parallaxElements.infographic.style.transform = `translateY(${infographicYPos}px) scale(${infographicScale})`;
            parallaxElements.infographic.style.opacity = 1 - scrollProgress * 0.2;
        }

        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);
    updateParallax();

    // Intersection Observer for animations
    const observerOptions = {
        root: null,
        rootMargin: '200px 0px 200px 0px', // Trigger 200px before element enters viewport and 200px after it leaves
        threshold: 0.01 // Trigger when even 1% is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('.stage-item, .animate-on-scroll').forEach(item => {
        observer.observe(item);
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offset = 0; // No offset needed with sidebar nav
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
