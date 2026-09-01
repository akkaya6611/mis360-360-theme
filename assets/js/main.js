
const themeToggles = document.querySelectorAll('.mis360-360-theme-toggle');
const sunIcons = document.querySelectorAll('.mis360-360-sun-icon');
const moonIcons = document.querySelectorAll('.mis360-360-moon-icon');
const dynamicText = document.querySelector('.mis360-360-dynamic-text');
const avatars = document.querySelectorAll('.mis360-360-avatar');
const tooltip = document.getElementById('tooltip');
const techIcons = document.querySelectorAll('.mis360-360-tech-icon');

const heroStatNumbers = document.querySelectorAll('.mis360-360-hero-stat-number');

let isDarkMode = localStorage.getItem('mis360-360-theme') === 'dark';

function initTheme() {
    if (isDarkMode) {
        document.body.classList.add('mis360-360-dark');
        if (sunIcons.length > 0) {
            sunIcons.forEach(icon => icon.style.display = 'none');
        }
        if (moonIcons.length > 0) {
            moonIcons.forEach(icon => icon.style.display = 'block');
        }
    }
}

function toggleTheme() {
    isDarkMode = !isDarkMode;
    document.body.classList.toggle('mis360-360-dark');
    
    if (isDarkMode) {
        if (sunIcons.length > 0) {
            sunIcons.forEach(icon => icon.style.display = 'none');
        }
        if (moonIcons.length > 0) {
            moonIcons.forEach(icon => icon.style.display = 'block');
        }
        localStorage.setItem('mis360-360-theme', 'dark');
    } else {
        if (sunIcons.length > 0) {
            sunIcons.forEach(icon => icon.style.display = 'block');
        }
        if (moonIcons.length > 0) {
            moonIcons.forEach(icon => icon.style.display = 'none');
        }
        localStorage.setItem('mis360-360-theme', 'light');
    }
}

if (themeToggles.length > 0) {
    themeToggles.forEach(toggle => {
        toggle.addEventListener('click', toggleTheme);
    });
}

initTheme();

if (dynamicText) {
    const words = JSON.parse(dynamicText.dataset.words);
    let currentIndex = 0;
    
    function changeWord() {
        const currentWord = dynamicText.querySelector('.mis360-360-word-active');
        
        currentWord.style.opacity = '0';
        currentWord.style.transform = 'translateY(-20px)';
        
        setTimeout(() => {
            currentIndex = (currentIndex + 1) % words.length;
            currentWord.textContent = words[currentIndex];
            
            currentWord.style.opacity = '1';
            currentWord.style.transform = 'translateY(0)';
        }, 300);
    }
    
    const wordElement = dynamicText.querySelector('.mis360-360-word-active');
    if (wordElement) {
        wordElement.style.transition = 'all 0.3s ease';
        wordElement.style.display = 'inline-block';
    }
    
    setInterval(changeWord, 2500);
}

if (avatars.length > 0 && tooltip) {
    avatars.forEach(avatar => {
        avatar.addEventListener('mouseenter', (e) => {
            const rect = e.target.getBoundingClientRect();
            const name = e.target.dataset.name;
            const role = e.target.dataset.role;
            const img = e.target.querySelector('img');
            
            if (!img) return;
            
            const imgSrc = img.src;
            
            const tooltipName = tooltip.querySelector('.mis360-360-tooltip-name');
            const tooltipRole = tooltip.querySelector('.mis360-360-tooltip-role');
            const tooltipAvatar = tooltip.querySelector('.mis360-360-tooltip-avatar');
            
            if (tooltipName) tooltipName.textContent = name;
            if (tooltipRole) tooltipRole.textContent = role;
            if (tooltipAvatar) tooltipAvatar.src = imgSrc;
            
            tooltip.style.left = `${rect.left + rect.width / 2 - tooltip.offsetWidth / 2}px`;
            tooltip.style.top = `${rect.top - tooltip.offsetHeight - 10}px`;
            
            tooltip.classList.add('active');
        });
        
        avatar.addEventListener('mouseleave', () => {
            tooltip.classList.remove('active');
        });
    });
}

if (techIcons.length > 0) {
    techIcons.forEach(icon => {
        icon.addEventListener('mouseenter', (e) => {
            const techName = e.currentTarget.dataset.tooltip;
            if (!techName) return;
            
            const miniTooltip = document.createElement('div');
            miniTooltip.className = 'mis360-360-mini-tooltip';
            miniTooltip.textContent = techName;
            miniTooltip.style.cssText = `
                position: absolute;
                background: var(--mis360-360-primary);
                color: var(--mis360-360-secondary);
                padding: 0.25rem 0.5rem;
                border-radius: 4px;
                font-size: 0.75rem;
                white-space: nowrap;
                top: -30px;
                left: 50%;
                transform: translateX(-50%);
                pointer-events: none;
                z-index: 1000;
            `;
            
            e.currentTarget.appendChild(miniTooltip);
        });
        
        icon.addEventListener('mouseleave', (e) => {
            const miniTooltip = e.currentTarget.querySelector('.mis360-360-mini-tooltip');
            if (miniTooltip) {
                miniTooltip.remove();
            }
        });
    });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href && href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

let lastScroll = 0;
const header = document.querySelector('.mis360-360-header');

if (header) {
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = 'none';
        }
        
        if (currentScroll > lastScroll && currentScroll > 500) {
            header.style.transform = 'translateY(-100%)';
        } else {
            header.style.transform = 'translateY(0)';
        }
        
        lastScroll = currentScroll;
    });
}

(function() {
    const notificationBtn = document.getElementById('notificationBtn');
    const notificationPanel = document.getElementById('notificationPanel');
    const notificationClose = document.getElementById('notificationClose');
    const notificationClear = document.getElementById('notificationClear');
    const notificationContent = document.getElementById('notificationContent');
    const notificationBadge = document.getElementById('notificationBadge');
    
    if (!notificationBtn || !notificationPanel) {
        return;
    }
    
    const notificationStorageKey = 'mis360_360_read_notifications';
    
    function getReadNotifications() {
        try {
            const stored = localStorage.getItem(notificationStorageKey);
            return stored ? JSON.parse(stored) : [];
        } catch (e) {
            return [];
        }
    }
    
    function setReadNotifications(ids) {
        try {
            localStorage.setItem(notificationStorageKey, JSON.stringify(ids));
        } catch (e) {
            console.error('Failed to save read notifications:', e);
        }
    }
    
    function markAsRead(notificationId) {
        const readNotifications = getReadNotifications();
        if (!readNotifications.includes(notificationId)) {
            readNotifications.push(notificationId);
            setReadNotifications(readNotifications);
        }
        updateNotificationDisplay();
    }
    
    function markAllAsRead() {
        const notificationItems = document.querySelectorAll('.mis360-360-notification-item');
        const allIds = Array.from(notificationItems).map(item => item.dataset.notificationId);
        setReadNotifications(allIds);
        updateNotificationDisplay();
    }
    
    function updateNotificationDisplay() {
        if (!notificationContent || !notificationBadge) {
            return;
        }
        
        const readNotifications = getReadNotifications();
        const notificationItems = document.querySelectorAll('.mis360-360-notification-item');
        let unreadCount = 0;
        
        notificationItems.forEach(item => {
            const notificationId = item.dataset.notificationId;
            if (readNotifications.includes(notificationId)) {
                item.classList.add('mis360-360-notification-read');
                item.style.display = 'none';
            } else {
                item.classList.remove('mis360-360-notification-read');
                item.style.display = '';
                unreadCount++;
            }
        });
        
        if (notificationBadge) {
            if (unreadCount > 0) {
                notificationBadge.textContent = unreadCount;
            } else {
                notificationBadge.style.display = 'none';
            }
        }
        
        const emptyState = notificationContent.querySelector('.mis360-360-notification-empty');
        if (unreadCount === 0 && notificationItems.length > 0) {
            if (!emptyState) {
                const emptyDiv = document.createElement('div');
                emptyDiv.className = 'mis360-360-notification-empty';
                emptyDiv.innerHTML = '<i class="fas fa-check-circle"></i><p>Tüm bildirimler okundu</p>';
                notificationContent.appendChild(emptyDiv);
            }
        } else if (emptyState && unreadCount > 0) {
            emptyState.remove();
        }
    }
    
    if (notificationContent) {
        notificationContent.addEventListener('click', function(e) {
            const notificationItem = e.target.closest('.mis360-360-notification-item');
            if (notificationItem && !notificationItem.classList.contains('mis360-360-notification-read')) {
                const notificationId = notificationItem.dataset.notificationId;
                markAsRead(notificationId);
            }
        });
    }
    
    if (notificationClear) {
        notificationClear.addEventListener('click', function() {
            markAllAsRead();
        });
    }
    
    notificationBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        
        if (notificationPanel && window.innerWidth > 768) {
            const btnRect = notificationBtn.getBoundingClientRect();
            const panelWidth = 380;
            const spaceOnRight = window.innerWidth - btnRect.right;
            
            if (spaceOnRight < panelWidth + 20) {
                notificationPanel.style.right = 'auto';
                notificationPanel.style.left = `${Math.max(10, btnRect.left - panelWidth)}px`;
            } else {
                notificationPanel.style.left = 'auto';
                notificationPanel.style.right = `${Math.max(10, window.innerWidth - btnRect.right)}px`;
            }
        }
        
        notificationPanel.classList.toggle('active');
    });
    
    if (notificationClose) {
        notificationClose.addEventListener('click', () => {
            notificationPanel.classList.remove('active');
        });
    }
    
    document.addEventListener('click', (e) => {
        if (notificationPanel && notificationPanel.classList.contains('active')) {
            if (!notificationPanel.contains(e.target) && !notificationBtn.contains(e.target)) {
                notificationPanel.classList.remove('active');
            }
        }
    });
    
    notificationPanel.addEventListener('click', (e) => {
        e.stopPropagation();
    });
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && notificationPanel.classList.contains('active')) {
            notificationPanel.classList.remove('active');
        }
    });
    
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', updateNotificationDisplay);
    } else {
        updateNotificationDisplay();
    }
})();

const gridBg = document.querySelector('.mis360-360-grid-bg');
if (gridBg) {
    window.addEventListener('mousemove', (e) => {
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;
        
        gridBg.style.transform = `translate(${x * 20}px, ${y * 20}px)`;
    });
}

document.querySelectorAll('.mis360-360-btn').forEach(button => {
    button.addEventListener('click', function(e) {
        const ripple = document.createElement('span');
        ripple.className = 'mis360-360-ripple';
        
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            left: ${x}px;
            top: ${y}px;
            pointer-events: none;
            transform: scale(0);
            animation: mis360-360-ripple-animation 0.6s ease-out;
        `;
        
        this.style.position = 'relative';
        this.style.overflow = 'hidden';
        this.appendChild(ripple);
        
        setTimeout(() => ripple.remove(), 600);
    });
});

const rippleStyle = document.createElement('style');
rippleStyle.textContent = `
    @keyframes mis360-360-ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(rippleStyle);

const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const animateOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('mis360-360-animated');
            
            if (entry.target.classList.contains('mis360-360-hero-title')) {
                entry.target.style.animation = 'mis360-360-fadeInUp 1s ease forwards';
            } else if (entry.target.classList.contains('mis360-360-hero-description')) {
                entry.target.style.animation = 'mis360-360-fadeIn 1s ease 0.3s forwards';
            } else if (entry.target.classList.contains('mis360-360-hero-actions')) {
                entry.target.style.animation = 'mis360-360-fadeInUp 1s ease 0.5s forwards';
            }
        }
    });
}, observerOptions);

document.querySelectorAll('.mis360-360-hero-title, .mis360-360-hero-description, .mis360-360-hero-actions').forEach(el => {
    animateOnScroll.observe(el);
});

const animationStyles = document.createElement('style');
animationStyles.textContent = `
    @keyframes mis360-360-fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes mis360-360-fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .mis360-360-hero-title,
    .mis360-360-hero-description,
    .mis360-360-hero-actions {
        opacity: 0;
    }
`;
document.head.appendChild(animationStyles);

function initMobileMenu() {
    const mobileMenuBtn = document.querySelector('.mis360-360-mobile-menu-btn');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const mobileCloseBtn = document.getElementById('mobileCloseBtn');
    
    if (mobileMenuBtn && mobileSidebar && mobileOverlay && mobileCloseBtn) {
        function openMobileMenu() {
            mobileSidebar.classList.add('active');
            mobileOverlay.classList.add('active');
            mobileMenuBtn.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            mobileSidebar.classList.remove('active');
            mobileOverlay.classList.remove('active');
            mobileMenuBtn.classList.remove('active');
            document.body.style.overflow = '';
            
            const accordionItems = mobileSidebar.querySelectorAll('.mobile-nav-item-has-submenu');
            accordionItems.forEach(item => {
                item.classList.remove('active');
                const link = item.querySelector('.mobile-nav-link');
                if (link) link.setAttribute('aria-expanded', 'false');
            });
        }
        
        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            openMobileMenu();
        });
        
        mobileCloseBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            closeMobileMenu();
        });
        
        mobileOverlay.addEventListener('click', () => {
            closeMobileMenu();
        });
        
        const mobileNav = mobileSidebar.querySelector('.mobile-nav');
        if (mobileNav) {
            const submenuToggles = mobileNav.querySelectorAll('.mobile-submenu-toggle');
            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const navItem = toggle.closest('.mobile-nav-item-has-submenu');
                    if (navItem) {
                        const isActive = navItem.classList.contains('active');
                        
                        const allNavItems = mobileNav.querySelectorAll('.mobile-nav-item-has-submenu');
                        allNavItems.forEach(item => {
                            item.classList.remove('active');
                            const link = item.querySelector('.mobile-nav-link');
                            if (link) link.setAttribute('aria-expanded', 'false');
                        });
                        
                        if (!isActive) {
                            navItem.classList.add('active');
                            toggle.setAttribute('aria-expanded', 'true');
                        } else {
                            toggle.setAttribute('aria-expanded', 'false');
                        }
                    }
                });
            });
        }
        
        const regularLinks = mobileNav.querySelectorAll('.mobile-nav-link:not(.mobile-submenu-toggle)');
        regularLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (href === '#' || href === '') {
                    e.preventDefault();
                } else {
                    closeMobileMenu();
                }
            });
        });
        
        const submenuLinks = mobileNav.querySelectorAll('.mobile-submenu a');
        submenuLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (href === '#') {
                    e.preventDefault();
                } else {
                    closeMobileMenu();
                }
            });
        });
        
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if (mobileSidebar.classList.contains('active')) {
                    const activeNavItem = mobileSidebar.querySelector('.mobile-nav-item-has-submenu.active');
                    if (activeNavItem) {
                        activeNavItem.classList.remove('active');
                        const link = activeNavItem.querySelector('.mobile-nav-link');
                        if (link) link.setAttribute('aria-expanded', 'false');
                    } else {
                        closeMobileMenu();
                    }
                }
            }
        });
        
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768 && mobileSidebar.classList.contains('active')) {
                closeMobileMenu();
            }
        });
    }
}


function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

if (header) {
    const optimizedScroll = debounce(() => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = 'none';
        }
    }, 100);

    window.addEventListener('scroll', optimizedScroll);
}

function initDesktopNavigation() {
    const navLinks = document.querySelectorAll('.mis360-360-nav-link:not(.mis360-360-mobile-nav-link)');
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href === '#') {
                e.preventDefault();
            }
        });
    });
    
    const submenuLinks = document.querySelectorAll('.mis360-360-submenu a');
    submenuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href === '#') {
                e.preventDefault();
            }
        });
    });
    
    const socialLinks = document.querySelectorAll('.mis360-360-social-icon');
    socialLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href === '#') {
                e.preventDefault();
            }
        });
    });
}

function initMegamenu() {
    const megamenuTriggerBtn = document.getElementById('megamenuTriggerBtn');
    const megamenuPanel = document.getElementById('megamenuPanel');
    const megamenuWrapper = megamenuTriggerBtn?.closest('.mis360-360-megamenu-trigger-wrapper');
    
    if (!megamenuTriggerBtn || !megamenuPanel || !megamenuWrapper) {
        return;
    }
    
    function toggleMegamenu() {
        megamenuWrapper.classList.toggle('active');
    }
    
    megamenuTriggerBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleMegamenu();
    });
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && megamenuWrapper.classList.contains('active')) {
            megamenuWrapper.classList.remove('active');
        }
    });
    
    document.addEventListener('click', (e) => {
        if (megamenuWrapper.classList.contains('active')) {
            if (!megamenuWrapper.contains(e.target)) {
                megamenuWrapper.classList.remove('active');
            }
        }
    });
    
    megamenuPanel.addEventListener('click', (e) => {
        e.stopPropagation();
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initMobileMenu();
    initDesktopNavigation();
    initHeroVisual();
    initMegamenu();
    
    console.log('DijiNays theme initialized successfully! 🚀');
});

window.DijiNays = {
    toggleTheme,
    initMobileMenu,
    version: '1.0.0'
};




function drawFeatureLines() {
    const canvas = document.getElementById('featuresCanvas');
    if (!canvas || window.innerWidth <= 1024) return;
    
    const ctx = canvas.getContext('2d');
    const grid = document.querySelector('.mis360-360-features-grid');
    const centerBox = document.getElementById('centerBox');
    
    if (!grid || !centerBox) return;
    
    canvas.width = grid.offsetWidth;
    canvas.height = grid.offsetHeight;
    
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    const centerRect = centerBox.getBoundingClientRect();
    const gridRect = grid.getBoundingClientRect();
    const centerX = centerRect.left - gridRect.left + centerRect.width / 2;
    const centerY = centerRect.top - gridRect.top + centerRect.height / 2;
    
    const isDark = document.body.classList.contains('mis360-360-dark');
    ctx.strokeStyle = isDark ? 'rgba(255, 255, 255, 0.15)' : 'rgba(0, 0, 0, 0.15)';
    ctx.lineWidth = 1.5;
    
    const cards = grid.querySelectorAll('.mis360-360-feature-card');
    cards.forEach(card => {
        const cardRect = card.getBoundingClientRect();
        const isLeft = card.closest('.mis360-360-features-left');
        
        let cardX, cardY;
        
        if (isLeft) {
            cardX = cardRect.right - gridRect.left;
            cardY = cardRect.top - gridRect.top + cardRect.height / 2;
        } else {
            cardX = cardRect.left - gridRect.left;
            cardY = cardRect.top - gridRect.top + cardRect.height / 2;
        }
        
        ctx.beginPath();
        ctx.moveTo(cardX, cardY);
        ctx.lineTo(centerX, centerY);
        ctx.stroke();
    });
}

function initFeatureLines() {
    drawFeatureLines();
    
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(drawFeatureLines, 100);
    });
}

window.addEventListener('load', () => {
    setTimeout(initFeatureLines, 100);
});


function initFAQAccordion() {
    const faqItems = document.querySelectorAll('.mis360-360-faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.mis360-360-faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
            });
            
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initFAQAccordion();
});


function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target;
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(start);
        }
    }, 16);
}

document.addEventListener('DOMContentLoaded', () => {
});


const scrollTopBtn = document.getElementById('scrollTopBtn');

if (scrollTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollTopBtn.classList.add('show');
        } else {
            scrollTopBtn.classList.remove('show');
        }
    });
    
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    const floatingCards = document.querySelectorAll('.mis360-360-floating-card');
    const interactiveDots = document.querySelectorAll('.mis360-360-dot');
    const visualMain = document.querySelector('.mis360-360-visual-main');
    
    floatingCards.forEach((card, index) => {
        card.addEventListener('mouseenter', () => {
            card.style.animationPlayState = 'paused';
            card.style.transform = 'translateY(-8px) scale(1.05)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.animationPlayState = 'running';
            card.style.transform = '';
        });
        
        card.addEventListener('click', () => {
            card.style.transform = 'translateY(-8px) scale(1.1)';
            setTimeout(() => {
                card.style.transform = '';
            }, 200);
        });
    });
    
    interactiveDots.forEach((dot, index) => {
        dot.addEventListener('mouseenter', () => {
            dot.style.transform = 'scale(1.5)';
            dot.style.boxShadow = '0 0 30px rgba(255, 107, 0, 0.8)';
        });
        
        dot.addEventListener('mouseleave', () => {
            dot.style.transform = '';
            dot.style.boxShadow = '';
        });
    });
    
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const visualSection = document.querySelector('.mis360-360-about-section');
        
        if (visualSection) {
            const rect = visualSection.getBoundingClientRect();
            const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
            
            if (isVisible) {
                const parallaxSpeed = 0.5;
                const yPos = -(scrolled * parallaxSpeed);
                
                floatingCards.forEach((card, index) => {
                    const speed = 0.1 + (index * 0.05);
                    card.style.transform = `translateY(${yPos * speed}px)`;
                });
                
                interactiveDots.forEach((dot, index) => {
                    const speed = 0.15 + (index * 0.03);
                    dot.style.transform = `translateY(${yPos * speed}px)`;
                });
            }
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
    
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                const cards = entry.target.querySelectorAll('.mis360-360-floating-card');
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 200);
                });
                
                const dots = entry.target.querySelectorAll('.mis360-360-dot');
                dots.forEach((dot, index) => {
                    setTimeout(() => {
                        dot.style.opacity = '1';
                        dot.style.transform = 'scale(1)';
                    }, index * 100 + 600);
                });
            }
        });
    }, observerOptions);
    
    if (visualMain) {
        observer.observe(visualMain);
    }
}

function initHeroVisual() {
}


function initLogosScroll() {
    const logosTrack = document.getElementById('logosTrack');
    if (!logosTrack) return;
    
    const logos = logosTrack.querySelectorAll('.mis360-360-logo-item');
    if (logos.length === 0) return;
    
    const clonedLogos = Array.from(logos).map(logo => logo.cloneNode(true));
    clonedLogos.forEach(clonedLogo => {
        logosTrack.appendChild(clonedLogo);
    });
    
    let scrollPosition = 0;
    const scrollSpeed = 0.5;
    const logoWidth = logos[0].offsetWidth;
    const totalWidth = logoWidth * logos.length;
    
    function animate() {
        scrollPosition -= scrollSpeed;
        
        if (Math.abs(scrollPosition) >= totalWidth) {
            scrollPosition = 0;
        }
        
        logosTrack.style.transform = `translateX(${scrollPosition}px)`;
        requestAnimationFrame(animate);
    }
    
    requestAnimationFrame(animate);
}

document.addEventListener('DOMContentLoaded', initLogosScroll);