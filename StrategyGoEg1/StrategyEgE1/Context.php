<?php
namespace StrategyEgE1;

class Context
{
    private $choiceStrategy;

    function __construct(ChoiceStrategy $strategy)
    {
        $this->choiceStrategy = $strategy; 
    }

    public function setStrategy(ChoiceStrategy $strategy)
    {
        $this->choiceStrategy = $strategy;
    }


    function logic()
    {
       $date = $this->choiceStrategy->ChoiceNameStrategy([1,6,8,5,4,0,3]);
        
       return $date;
    }

}