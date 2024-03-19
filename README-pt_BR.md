# Calculadora com Banco de Dados

Este repositório contém uma calculadora desenvolvida em PHP que possui integração com um banco de dados. A calculadora permite realizar operações matemáticas básicas e armazena o histórico das contas realizadas.

## Funcionalidades

- Soma, subtração, multiplicação e divisão de números.
- Armazenamento do histórico das contas realizadas em um banco de dados.
- Visualização do histórico das contas.

## Requisitos

- PHP Version: 8.2.12.
- Servidor web (por exemplo, Apache [foi utilizado XAMP]) para executar o código PHP.
- Banco de dados MySQL ou outro compatível.

## Configuração

1. Clone este repositório em seu ambiente de desenvolvimento local.
2. Importe o arquivo SQL fornecido `operacoes.sql` para criar a estrutura do banco de dados.
3. Configure as informações de conexão com o banco de dados no arquivo `0-conexao.php`.
4. Inicie o servidor web e acesse a calculadora através do navegador.

## Uso

1. Insira os números e selecione a operação desejada.
2. Clique no botão "Calcular" para realizar a operação.
3. O resultado será exibido na tela e o histórico da conta será armazenado no banco de dados.
4. Para visualizar o histórico das operações realizadas, clique no link "Tela de Visualização" abaixo da calculadora.

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver alguma sugestão de melhoria, sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Para usar esse material como estudo:

Aqui tem a elaboração no formato de questão para ser resolvida, espero que ajude com seu aprendizado. Recomendo não ver o código previamente caso queira um desafio.

    
    O exercício deverá ter 2 telas, sendo uma de entrada de dados, outra de visualização dos dados.

        O programa de input de dados deverá ser gerado a partir de um script PHP, onde:
    Deverá conter um formulário com 2 campos de texto para dados (inputs) numéricos.
    Deverá conter um campo dropdown (select) com a operação desejada (Adição, subtração, divisão e multiplicação).

    Deverá conter um botão para envio (submit do formulário).

    O programa de visualização deverá ser gerado da mesma maneira, através de um script PHP, onde deverá conter o histórico das operações realizadas (os dois operandos, qual a operação e o resultado obtido). Deverá exibir este histórico linha a linha.

    Importante: A tela de entrada de dados, ao enviar o formulário, não deverá "recarregar". Deve-se exibir o resultado da operação textualmente. A tela de visualização dos dados, assim como a de entrada, prevê a existência no banco de dados de uma tabela que contém campos para armazenar as informações acima. Os dados devem ser inseridos e selecionados através de queries.
