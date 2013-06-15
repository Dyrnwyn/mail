#!/usr/bin/php

<?php
#$r = system('echo $RANDOM 1> r') ;
$r = rand(0,32768);
#------------------отсылаем письмо в крок (эмуляция письма программы)--------------------------------
$headers  = "Content-type: text/html; charset=utf-8 \r\n";  //заголовки
$headers.= "From: "."dgp130"." <"."ccemias.robot@mosmedzdrav.ru".">\r\n";      //от кого имя и мыло
$headers.= "Reply-To: "."kirill@mosmedzdrav.ru"."\r\n";           //куда присылать ответ
$i=0;
while ($i < 1)                    // используем цикл если будем отсылать не одно сообщение
{
#mail("popkova.alena@list.ru","Я на месте","", $headers); //сама функция отправки
mail("ccemias.robot@mosmedzdrav.ru",$r."_dgp130","", $headers);
mail("dyrnwyn@mail.ru",$r."_dgp130","", $headers);
$i++;
}



sleep ("83");

#-------------------отсылаем письмо в крок(письмо от консультанта, в теме должен быть код)----------------

$headers1  = "Content-type: text/html; charset=utf-8 \r\n";  //заголовки
$headers1.= "From: "."Детская городская поликлиника № 130"." <"."dgp130@mosmedzdrav.ru".">\r\n";      //от кого имя и мыло
$headers1.= "Reply-To: ".""."\r\n";           //куда присылать ответ
$i=0;
while ($i < 1)                    // используем цикл если будем отсылать не одно сообщение
{
#mail("popkova.alena@list.ru","Я на месте","", $headers1); //сама функция отправки
mail("ccemias.robot@mosmedzdrav.ru",$r."_dgp130","", $headers1);
mail("dyrnwyn@mail.ru",$r."_dgp130","", $headers1);
$i++;
}

//echo (date("l dS of F Y h:I:s A"));
?>