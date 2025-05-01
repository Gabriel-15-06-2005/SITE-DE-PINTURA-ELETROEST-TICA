LETROEST-TICA/assets/js/scroll-animation.js
let scrollTimeout;
window.addEventListener('scroll', () => {
    if (scrollTimeout) {
        clearTimeout(scrollTimeout);
    }
    scrollTimeout = setTimeout(() => {
        console.log('Animação de rolagem executada.');
    }, 100);
});