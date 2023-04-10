<?php
require_once 'Funcionario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$funcionario = new Funcionario($_POST['nome'], $_POST['cpf'], $_POST['salario_bruto']);
	$funcionario->calcularInss();
	echo "Funcionário cadastrado:<br>";
	echo "Nome: " . $funcionario->getNome() . "<br>";
	echo "CPF: " . $funcionario->getCpf() . "<br>";
	echo "Salário bruto: R$ " . number_format($funcionario->getSalarioBruto(), 2, ',', '.') . "<br>";
	echo "Desconto INSS: R$ " . number_format($funcionario->getDescontoInss(), 2, ',', '.') . "<br>";
	echo "Salário líquido: R$ " . number_format($funcionario->getSalarioLiquido(), 2, ',', '.') . "<br>";
} else {
	echo "Dados não recebidos pelo servidor";
}
?>
