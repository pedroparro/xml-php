<?php

//string xml
$string = '<?xml version="1.0" encoding="UTF-8"?>
<root>
  <user>
    <id>10</id>
    <email>test@gmail.com</email>
    <name><![CDATA[Pedro]]></name>
  </user>
</root>';

//carrega o xml com base em uma string
//$xml = simplexml_load_string($string);

$xml = simplexml_load_file(__DIR__.'/arquivo.xml');

//dados do xml
echo 'ID: '.$xml->user->id."\n";
echo 'NOME: '.$xml->user->name."\n";
echo 'E-MAIL: '.$xml->user->email."\n";
//echo "<pre>";
//print_r($xml);
//echo "</pre>";
?>