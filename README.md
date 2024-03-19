# Calculator with Database

This repository contains a calculator developed in PHP that integrates with a database. The calculator allows performing basic mathematical operations and stores the history of the calculations.

## Features

- Addition, subtraction, multiplication, and division of numbers.
- Storage of the history of calculations in a database.
- Viewing the history of calculations.

## Requirements

- PHP Version: 8.2.12.
- Web server (e.g., Apache [XAMPP was used]) to run the PHP code.
- MySQL database or another compatible database.

## Configuration

1. Clone this repository to your local development environment.
2. Import the provided SQL file `operacoes.sql` to create the database structure.
3. Configure the database connection information in the `0-conexao.php` file.
4. Start the web server and access the calculator through the browser.

## Usage

1. Enter the numbers and select the desired operation.
2. Click the "Calcular" button to perform the operation.
3. The result will be displayed on the screen, and the calculation history will be stored in the database.
4. To view the history of performed operations, click the "Tela de Vizualicação" link below the calculator.

## Contribution

Contributions are welcome! If you encounter any issues or have any suggestions for improvement, feel free to open an issue or submit a pull request.
