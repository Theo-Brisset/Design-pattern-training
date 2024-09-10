<?php

class Pizzaiolo
{
    private PizzaBuilder $pizzaBuilder;

    public function __construct(PizzaBuilder $pizzaBuilder)
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function createMargherita() : Pizza
    {
        return $this->pizzaBuilder->preparePizza()->getPizza();
    }

    public function createMargheritaWithEgg() : Pizza
    {
        return $this->pizzaBuilder->preparePizza()
            ->addIngredient('egg', 1.5)
            ->getPizza()
        ;

        // Construire la pizza avec l'ajout d'un oeuf ("egg")
    }

    public function createBigMargherita() : Pizza
    {
        return $this->pizzaBuilder->preparePizza()
            ->increaseSize('XL')
            ->getPizza()
        ;
        // Construire la pizza en augmentant sa taille
    }

    public function createBigMargheritaWithEgg() : Pizza
    {
        return $this->pizzaBuilder->preparePizza()
            ->increaseSize('XL')
            ->addIngredient('egg', 1.5)
            ->getPizza()
            ;
        // Cette fois, les deux en même temps (ajout egg + taille en XL)
    }
}
