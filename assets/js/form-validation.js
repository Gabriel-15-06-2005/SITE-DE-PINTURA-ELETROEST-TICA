document.querySelector('form').addEventListener('submit', (event) => {
    const nome = document.getElementById('nome').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensagem = document.getElementById('mensagem').value.trim();

    if (!nome || !email || !mensagem) {
        event.preventDefault();
        alert('Por favor, preencha todos os campos.');
    } else if (!validateEmail(email)) {
        event.preventDefault();
        alert('Por favor, insira um email válido.');
    }
});

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}