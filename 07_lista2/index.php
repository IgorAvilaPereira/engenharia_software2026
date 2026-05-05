<?php

class Pessoa
{
    private string $nome;
    private string $cpf;

    

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        // passaria por um validador
        $padrao = "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/";

        if (preg_match($padrao, $cpf)) {
            $this->cpf = $cpf;
        } else {
            throw new Exception("Erro!");
        }
       
    }
}

$matheus = new Pessoa();
// $matheus->nome = "Igor";
$matheus->setCpf("043.534.220-73");
$matheus->setNome("Matheus");
print($matheus->getCpf());
print($matheus->getNome());
