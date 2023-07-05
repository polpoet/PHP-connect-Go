<?php
namespace StrategyEgE1;

class StrategyB implements ChoiceStrategy
{

   public function ChoiceNameStrategy($arr)
   {

      rsort($arr); 

      return $arr;
   }

}