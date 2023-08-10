<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página</title>
    <link rel="stylesheet" href="styles.css"> <!-- Caso tenha um arquivo CSS externo -->
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <h1>Meu Site</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo da Página -->
    <main>
        <section id="inicio">
            <h2>Início</h2>
            <p>Bem-vindo ao meu site!</p>
            <p>
                TESTE PHP

<?php

$i = 0; // Inicializando a variável $i com o valor 1

while ($i <= 10) { // Corrigindo a condição do loop
    $i++; // Incrementando o valor de $i em cada iteração
    echo "bla " . $i . "\n"; // Corrigindo a interpolação da variável $i
}
?>

            </p>
        </section>

        <section id="sobre">
            <h2>Sobre</h2>
            <p>Esta é uma breve descrição sobre mim.</p>
        </section>

        <section id="contato">
            <h2>Contato</h2>
            <p>Entre em contato comigo através do e-mail ou redes sociais.</p>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>Todos os direitos reservados &copy; 2023</p>
    </footer>

</body>
</html>




