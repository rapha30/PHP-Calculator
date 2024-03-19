<?php
    include ("0-conexao.php");
    # atribuição de variáveis da calculadora, CASO existam
    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacao'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operacao = $_GET['operacao'];
    }
    # realizando conta com base na operação selecionada 
    if (isset($operacao)) { // verifica se a variável $operacao está definida
        switch ($operacao) {    
            case 'adição':
                $resultado = $num1 + $num2;
                break;
            case 'subtração':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicação':
                $resultado = $num1 * $num2;
                break;
            case 'divisão':
                $resultado = $num2 != 0 ? $num1 / $num2 : "Erro: divisão por zero";
                break;
            // default:
            //     # code...
            //     break;
        }
        # Resultado
        print "<h3>O resultado da $operacao é igual a: $resultado</h3>";
        # Código SQL  (insere variáveis na db)
        $sql_code = "INSERT INTO  $table (
            num1,
            num2,
            operacao,
            resultado)
            VALUES (?, ?, ?, ?)"; // usa marcadores de posição para os valores
        # Estabelece conexão com o banco de dados
        $conn = mysqli_connect($host, $usuario, $senha, $db); // usa as variáveis definidas em 0-conexao.php
        # Verifica se a conexão foi bem sucedida
        if (!$conn) {
            die("Erro: conexão com o banco de dados falhou. " . mysqli_connect_error());
        }
        # Prepara a declaração SQL
        $stmt = mysqli_prepare($conn, $sql_code);
        # Verifica se a declaração foi bem preparada
        if (!$stmt) {
            die("Erro: declaração SQL inválida. " . mysqli_error($conn));
        }
        # Vincula os valores com os marcadores de posição
        mysqli_stmt_bind_param($stmt, "ssss", $num1, $num2, $operacao, $resultado); // usa "s" para indicar que são strings
        # Executa a declaração SQL
        if (mysqli_stmt_execute($stmt)) {
            echo "Novo registro inserido com sucesso.";
        } else {
            echo "Erro: " . mysqli_stmt_error($stmt);
        }
        # Fecha a declaração SQL
        mysqli_stmt_close($stmt);
        # Fecha a conexão com o banco de dados
        mysqli_close($conn);
    } else {
        print "<h3>Operação não informada.</h3>";
    }

    $consulta = "SELECT * FROM $table";
    $con = $mysql->query($consulta) or die($mysql->error);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style-guanabara.css">
    <title>Histórico Calculadora</title>
</head>
<body>
    <header>
        <h1>Visualização:</h1>
    </header>
    <body>
        <main>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Número 1</td>
                    <td>Número 2</td>
                    <td>Operação</td>
                    <td>Resultado</td>
                </tr>

                <?php while($dado = $con->fetch_array()){ ?>
                <tr>
                    <td><?php echo $dado["id"]; ?></td>
                    <td><?php echo $dado["num1"]; ?></td>
                    <td><?php echo $dado["num2"]; ?></td>
                    <td><?php echo $dado["operacao"]; ?></td>
                    <td><?php echo $dado["resultado"]; ?></td>
                    <!-- <td>< ?php echo date("d/m/Y", strtotime($dado["data"])); ?></td> PARA DEPOIS -->
                    <?php }?>
                </tr>
            </table>
        </main>
    </body>
    <footer>
    <a href="./1calculadora.php">Tela de Cálculos:</a>
    </footer>
</body>
</html>
