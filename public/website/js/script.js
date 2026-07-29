/* =========================================================
   PBC PACKERS & MOVERS — SITE SCRIPT
   1. Loads header.html / footer.html into index.html
   2. Wires up mobile nav, dropdown, FAQ accordion, back-to-top
   ========================================================= */

async function includeHTML(selector, url) {
    const el = document.querySelector(selector);
    if (!el) return;
    try {
        const res = await fetch(url);
        el.innerHTML = await res.text();
    } catch (err) {
        console.error(`Could not load ${url}. Serve this site over http(s):// (not file://) for includes to work.`, err);
    }
}

async function initLayout() {
    await Promise.all([
        includeHTML('#header-placeholder', 'header.html'),
        includeHTML('#footer-placeholder', 'footer.html')
    ]);
    bindHeaderEvents();
    bindFooterEvents();
}

function bindHeaderEvents() {
    const toggle = document.getElementById('navToggle');
    const links = document.getElementById('navLinks');
    if (toggle && links) {
        toggle.addEventListener('click', () => {
            const isOpen = links.classList.toggle('open');
            toggle.setAttribute('aria-expanded', isOpen);
        });
    }
    // mobile dropdown toggle
    document.querySelectorAll('.has-dropdown > a').forEach(a => {
        a.addEventListener('click', (e) => {
            if (window.innerWidth <= 991) {
                e.preventDefault();
                a.parentElement.classList.toggle('open');
            }
        });
    });
}

function bindFooterEvents() {
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            backToTop.classList.toggle('show', window.scrollY > 400);
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
}

function initFAQ() {
    document.querySelectorAll('.faq-item').forEach(item => {
        const q = item.querySelector('.faq-q');
        q.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item.open').forEach(o => o !== item && o.classList.remove('open'));
            item.classList.toggle('open', !isOpen);
        });
    });
}

function initQuoteForm() {
    const form = document.getElementById('quoteForm');
    if (!form) return;
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Thanks! Your quote request has been received. Our team will contact you shortly.');
        form.reset();
    });
}

document.addEventListener('DOMContentLoaded', () => {
    bindHeaderEvents();
    bindFooterEvents();
    initFAQ();
    initQuoteForm();
});
