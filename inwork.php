#!/usr/bin/php

<?php

$headers  = "Content-type: text/html; charset=utf-8 \r\n";  //заголовки
$headers.= "From: "."Детская городская поликлиника № 130"." <"."dgp130@mosmedzdrav.ru".">\r\n";      //от кого имя и мыло
$headers.= "Reply-To: ".""."\r\n";           //куда присылать ответ
$i=0;
while ($i < 1)                    // используем цикл если будем отсылать не одно сообщение
{
#mail("popkova.alena@list.ru","На работе, дгп130","", $headers); //сама функция отправки
mail("sq@antalexcon.ru","180,ДГП130,Пришел","", $headers);
mail("pod-87@mail.ru","180,ДГП130,Пришел","", $headers);
$i++;
}
//echo (date("l dS of F Y h:I:s A"));
?>
