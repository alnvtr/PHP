<?php
class Conta
{
    public $cpftitular;
    public $nometitular;
    public $saldo = 0;
    public function sacar(float $valorasacar):void
    {
        if ($valorasacar > $this->saldo)
        {
            echo "saldo indisponível" . PHP_EOL;
            return;
        } elseif ($valorasacar < 0)
        {
                echo "você só pode sacar valore positivos" . PHP_EOL;
        }else
        {
            $this->saldo -= $valorasacar;
        }

    }
    public function depositar(float $valoradepositar): void
    {
        if ($valoradepositar < 0)
        {
             echo "o valor a depositar deve ser maior que 0." . PHP_EOL;
        }else
        {
           $this->saldo += $valoradepositar;
        }
    }
    public function transferir(float $valoratransferir,conta $contadestino): void
    {
        if ($valoratransferir > $this->saldo)
        {
            echo "saldo indisponivel" . PHP_EOL;
        } elseif($valoratransferir < 0)
        {
            echo "você não pode transferir valores negativos" . PHP_EOL;
        }else
        {
            $this->sacar($valoratransferir);
            $contadestino->depositar($valoratransferir);
        }
    }
}


//variavél $this->$var funciona com uma referência a variável(que é um atributo) dentro da classe.também chamado de pseudo-variável ou auto-referência.








//objetos são instancias de uma classe
//"->" acessa e modifica um atributo de um objeto.
//'var_dump' printa uma variável no terminal interátivo
//php -a (acess o terminal interativo)

/*php > require 'Conta.php';
$conta1 = new Conta();
$conta1->cpftitular = '123.456.789-10';
$conta1->nometitular = 'Vinicius Dias';
$conta1->saldo = 2000;
var_dump($conta1);
$conta1->depositar(100);
$conta1->depositar(-100);
$conta1->sacar(100);
$conta1->sacar(-100);
$conta1->sacar(1000000);
$conta1->transferir(200, $conta2);
*/

