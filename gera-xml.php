<?php
//instancia do documento
$dom = new DOMDocument('1.0','UTF-8');

//formata a saída do xml
$dom->formatOutput = true;

//nó ID do usuário
$idNodeValue = $dom->createTextNode(10);
$idNode = $dom->createElement('id');
$idNode->appendChild($idNodeValue);

//nó EMAIL do usuário
$emailNodeValue = $dom->createTextNode('test@gmail.com');
$emailNode = $dom->createElement('email');
$emailNode->appendChild($emailNodeValue);

//nó NAME do usuário
//$nameNodeValue = $dom->createTextNode('Pedro');
$nameNodeValue = $dom->createCDATASection('Pedro');
$nameNode = $dom->createElement('name');
$nameNode->appendChild($nameNodeValue);

//nó de usuário
$userNode = $dom->createElement('user');
$userNode->appendChild($idNode);
$userNode->appendChild($emailNode);
$userNode->appendChild($nameNode);

//instancia do nó root - nó principal
$rootNode = $dom->createElement('root');
$rootNode->appendChild($userNode);
$dom->appendChild($rootNode);

//imprime
//echo $dom->saveXML();
//echo $xml;

//salva o conteúdo em 1 arquivo
$dom->save(__DIR__.'/arquivo.xml');
?>