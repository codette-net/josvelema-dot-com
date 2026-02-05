import './bootstrap';
function setTheme(theme) {
    if (theme === 'dark') {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
}

function toggleTheme() {
    const isDark = document.documentElement.classList.contains('dark');
    setTheme(isDark ? 'light' : 'dark');
}

function initThemeButtons() {
    const btn1 = document.getElementById('themeToggle');
    const btn2 = document.getElementById('themeToggleMobile');

    if (btn1) btn1.addEventListener('click', toggleTheme);
    if (btn2) btn2.addEventListener('click', toggleTheme);

    // Optional: if user has NOT chosen a theme yet, follow OS changes live
    const mq = window.matchMedia?.('(prefers-color-scheme: dark)');
    if (mq && !localStorage.getItem('theme')) {
        mq.addEventListener('change', (e) => setTheme(e.matches ? 'dark' : 'light'));
    }
}

function initMobileNav() {
    const toggle = document.getElementById('navToggle');
    const menu = document.getElementById('mobileNav');
    const links = menu.querySelectorAll('a');

    if (!toggle || !menu) return;

    toggle.addEventListener('click', () => {
        const isHidden = menu.classList.contains('hidden');
        menu.classList.toggle('hidden', !isHidden);
        toggle.setAttribute('aria-expanded', String(isHidden));
    });
    links.forEach((a) => {
        a.addEventListener('click', () => {
            menu.classList.add('hidden');
            toggle.setAttribute('aria-expanded', 'false');
        });
    });

}

document.addEventListener('DOMContentLoaded', () => {
    initThemeButtons();
    initMobileNav();
});
