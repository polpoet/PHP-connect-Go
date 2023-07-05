<?php
namespace StrategyEgE1;

class StrategyA implements ChoiceStrategy
{

   public function ChoiceNameStrategy($arr)
   {
    
    asort($arr); 
    
    return $arr;
   }

}