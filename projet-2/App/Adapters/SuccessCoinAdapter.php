<?php

require_once './OC/SuccessCoin.php';

// @TODO 1: Inclure et implémenter l'interface CryptoCurrency
class SuccessCoinAdapter implements CryptoCurrency
{
    private $coin;

    public function __construct(SuccessCoin $successCoin)
    {
        return $this->coin = $successCoin; 
        // @TODO 2 : Inclure la classe SuccessCoin
    }

    public function getName() : string
    {
        return SuccessCoin::NAME;
        // @TODO 3 : Récupérer le nom de la crypto monnaie à partir de la classe d'OpenClassrooms ?
    }

    public function getPrice() : string
    {
        // @TODO 4 : Convertir dans le bon format
        return number_format($this->coin->getValue(), 2);
    }
}