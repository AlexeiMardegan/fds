<?php
class Funcionario {
	private $nome;
	private $cpf;
	private $salario_bruto;
	private $desconto_inss;

	public function __construct($nome, $cpf, $salario_bruto) {
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->salario_bruto = $salario_bruto;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}

	public function getSalarioBruto() {
		return $this->salario_bruto;
	}

	public function setSalarioBruto($salario_bruto) {
		$this->salario_bruto = $salario_bruto;
	}

	public function getDescontoInss() {
		return $this->desconto_inss;
	}

	public function setDescontoInss($desconto_inss) {
		$this->desconto_inss = $desconto_inss;
	}

	public function calcularInss() {
		$this->desconto_inss = $this->salario_bruto * 0.08;
	}

	public function getSalarioLiquido() {
		return $this->salario_bruto - $this->desconto_inss;
	}
}
?>
