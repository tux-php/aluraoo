<?php
class Conta{
    private $numero;
    private $saldo;

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function saca($valor){
        $this->setSaldo($this->getSaldo() - $valor);
    }
    public function deposita($valor){
        $this->setSaldo($this->getSaldo() + $valor);
    }
}
class ContaPolpanca extends Conta{
    public function saca($valor){
        $this->setSaldo($this->getSaldo() - ($valor + 0.10));
    }
}
$contaA = new ContaPolpanca();
$contaA->deposita(100.0);
$contaA->saca(50.0);
echo "Conta Polpança = ".$contaA->getSaldo()."</br>";
$contaB = new Conta();
$contaB->deposita(100.0);
$contaB->saca(50.0);
echo "Conta Polpança = ".$contaB->getSaldo()."</br>";
?>