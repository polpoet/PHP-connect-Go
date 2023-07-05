<?php

namespace StrategyEgE1;

include_once 'autoload.php';

echo "1. Стратегия (англ. Strategy) — поведенческий шаблон проектирования, предназначенный для определения семейства алгоритмов,
 инкапсуляции каждого из них и обеспечения их взаимозаменяемости. Это позволяет выбирать алгоритм путём
 определения соответствующего класса. Шаблон Strategy позволяет менять выбранный алгоритм
 независимо от объектов-клиентов, которые его используют.

<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";




$t = new testclass();
echo $t->test();

$context = new Context(new StrategyA());
echo "</br> asort";
var_dump($context->Logic());


echo "</br> rsort";
$context->setStrategy(new StrategyB());
var_dump($context->Logic());


echo "</br> shuffle";
$context->setStrategy(new StrategyC());
var_dump($context->Logic());

echo "</br> php from Go ";
$context->setStrategy(new StrategyGoA());
var_dump($context->Logic());
