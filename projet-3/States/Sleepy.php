<?php

require_once 'Monster.php';
require_once 'MonsterState.php';
require_once 'States/Healthy.php';

final class Sleepy implements MonsterState
{
    /** @var Monster */
    private $monster;
    
    public function attack(Monster $monster) : void
    {
        echo $this->monster->name() . ' est endormi ...' . PHP_EOL;

        if($this->awakenMonster()){
            echo $this->monster->name() . ' se réveille !' . PHP_EOL;
            
            $this->monster->changeState(new Healthy);
        }
        // @TODO : le monstre finit par se réveiller !

    }

    public function setMonster(Monster $monster) : MonsterState
    {
        $this->monster = $monster;
        
        return $this;
    }

    public function awakenMonster(){
        $isItAsleep = rand(0, 10);

        if($isItAsleep > 5){
            return true;
        }

        return false;
    }
}
