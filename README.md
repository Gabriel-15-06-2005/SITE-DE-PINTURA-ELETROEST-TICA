<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Empresa de Pintura Eletroestática</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #2c5f2d;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            color: white;
        }
        nav {
            background-color: #3a7d44;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
        }
        h1, h2 {
            color: #2c5f2d;
        }
        .cta {
            background-color: #97bc62;
            color: white;
            text-align: center;
            padding: 15px;
            margin: 20px 0;
        }
        .cta p {
            font-size: 24px;
            font-weight: bold;
        }
        .cta a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .cta a:hover {
            text-decoration: underline;
        }
        .carrossel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            gap: 10px;
            padding: 10px;
        }
        .carrossel div {
            min-width: 100px;
            height: 100px;
            scroll-snap-align: center;
            border: 1px solid #ccc;
            text-align: center;
            padding: 10px;
            font-weight: bold;
        }
        .preto { background-color: #000000; color: white; }
        .cinza { background-color: #808080; color: white; }
        .branco { background-color: #ffffff; }
        .bronze { background-color: #8c7853; color: white; }
        .marrom { background-color: #654321; color: white; }
        .perita { background-color: #d4af37; color: black; }
        .aco-corten { background-color: #965a38; color: white; }
        .perita-gold { background-color: #ffcc00; color: black; }
        .verde-claro { background-color: #90EE90; color: black; }
        .parceiros img {
            max-width: 150px;
            margin: 10px;
        }
        footer {
            background-color: #2c5f2d;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Pintura Eletroestática de Alumínio</h1>
        <p>Qualidade, Durabilidade e Estética para o seu alumínio</p>
    </header>
    <nav>
        <a href="#sobre">Sobre Nós</a>
        <a href="#servicos">Serviços</a>
        <a href="#parceiros">Parceiros</a>
        <a href="#contato">Contato</a>
    </nav>
    <div class="container" id="sobre">
        <h2>Sobre Nós</h2>
        <p>Somos uma empresa especializada em pintura eletroestática, oferecendo soluções inovadoras para proteger e embelezar produtos de alumínio.</p>
    </div>
    <div class="container" id="servicos">
        <h2>Nossos Serviços</h2>
        <p>Oferecemos pintura eletroestática de alta qualidade para diversos setores.</p>
        <div class="cta">
            <p>Entre em contato conosco para um orçamento!</p>
            <a href="mailto:contato@empresa.com.br">Solicitar Orçamento</a>
        </div>
        <h2>Cores Disponíveis</h2>
        <div class="carrossel">
            <div class="preto">Preto</div>
            <div class="cinza">Cinza</div>
            <div class="branco">Branco</div>
            <div class="bronze">Bronze</div>
            <div class="marrom">Marrom</div>
            <div class="aco-corten">Aço Corten</div>
            <div class="perita">Perita</div>
            <div class="perita-gold">Perita Gold</div>
            <div class="verde-claro">Verde Claro</div>
        </div>
    </div>
    <div class="container" id="parceiros">
        <h2>Parceiros</h2>
        <div class="parceiros">
            <img src="Decal alumínio logo.png">
            <img src="decamp logo.png">
            <img src="Logo monte cor.png">
        </div>
    </div>
    <div class="container" id="contato">
        <h2>Contato</h2>
        <p>Email: <a href="mailto:contato@empresa.com.br">contato@empresa.com.br</a></p>
        <p>Telefone: (11) 1234-5678</p>
        <p>Endereço: Rua Exemplo, 123 - Cidade, Estado</p>
    </div>
    <footer>
        <p>&copy; 2024 Empresa de Pintura Eletroestática. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
