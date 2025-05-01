// Alternar entre modo claro e escuro
const darkModeToggle = document.getElementById('dark-mode-toggle');

darkModeToggle.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');

  // Salvar a preferência no localStorage
  const isDarkMode = document.body.classList.contains('dark-mode');
  localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
});

// Carregar a preferência de modo escuro ao carregar a página
window.addEventListener('DOMContentLoaded', () => {
  const darkModePreference = localStorage.getItem('darkMode');
  if (darkModePreference === 'enabled') {
    document.body.classList.add('dark-mode');
  }
});

// Validação básica do formulário de contato
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
  const nome = document.getElementById('nome').value.trim();
  const email = document.getElementById('email').value.trim();
  const mensagem = document.getElementById('mensagem').value.trim();

  if (!nome || !email || !mensagem) {
    event.preventDefault(); // Impede o envio do formulário
    alert('Por favor, preencha todos os campos antes de enviar.');
    return;
  }

  if (!validateEmail(email)) {
    event.preventDefault();
    alert('Por favor, insira um endereço de email válido.');
    return;
  }

  alert('Formulário enviado com sucesso!');
});

// Função para validar email
function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Animação simples ao rolar a página
const animatedElements = document.querySelectorAll('.animate-on-scroll');

const handleScrollAnimation = () => {
  const triggerBottom = window.innerHeight * 0.8;

  animatedElements.forEach((el) => {
    const elementTop = el.getBoundingClientRect().top;

    if (elementTop < triggerBottom) {
      el.classList.add('visible');
    } else {
      el.classList.remove('visible');
    }
  });
};

window.addEventListener('scroll', handleScrollAnimation);

// Inicializar animações ao carregar a página
handleScrollAnimation();