<?php

namespace StrategyEgE1;

class StrategyC implements ChoiceStrategy
{
    /**
     * Стратегия C
     *  @param array
     *
     *  @return array
     */
    public function ChoiceNameStrategy($arr)
    {

        shuffle($arr);

        return $arr;
    }

}
