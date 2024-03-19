<!-- < ?php 
    include("0-conexao.php");
    
?> -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style-guanabara.css">
    <title>Calculadora</title>
</head>
<!-- Cabeçalho -->
<header>
    <h1>Calculadora:</h1>
</header>
<!-- Corpo -->
<body>
    <main>
    <!-- Inclusão jQuery (envio dos dados sem reload) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Formulario da calculadora -->
        <body>
            <form action="2visualizacao.php" method="GET" id="calculadora">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" placeholder="Primeiro número" required>

            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" placeholder="Segundo número" required>

            <label for="operacao">Operação</label>
            <select name="operacao" id="operacao">Operação:
            <option value="adição">Adição</option>
            <option value="subtração">Subtração</option>
            <option value="multiplicação">Multiplicacão</option>
            <option value="divisão">Divisão</option>
            </select>
            <input type="submit" value="Calcular">
            </form>
        </body>
    </main>
<!-- script para envio dos dados do formulário sem reload -->
    <script>
    // documento pronto, então, executa
    $(document).ready(function() {
        // formulário id "2visualizacao.php" submitado, então
        $("#calculadora").submit(function(e) {
        // "Previne" o comportamento default do form de reload
        e.preventDefault();
        // Serializa dados em string: "nome=valor&nome=valor"
        var dados = $(this).serialize();
        // Faz requisição Ajax do tipo GET para a URL do formulário, com os dados como parâmetro
        $.ajax({
            type: "GET",
            url: $(this).attr("action"),
            data: dados,
            // Se a requisição for bem sucedida, execute a função
            success: function(response) {
        // Cria um objeto jQuery com o conteúdo da resposta
        var $response = $(response);
        // Filtra apenas o elemento h3 que contém o resultado
        var $resultado = $response.filter("h3");
        // Coloca o texto do resultado na div com id "resultado"
        $("#resultado").text($resultado.text());
            }
        });
        });
    });
    </script>  
        <!-- Resultado da calculadora -->
            <main><div id= "resultado"></div></main>
</body>
       <!-- Links dos arquivos rodapé -->
<footer>
        <a href="./2visualizacao.php">Tela de Visualização</a>
    </footer>
</html>