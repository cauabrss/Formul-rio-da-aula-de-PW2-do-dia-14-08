<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];

$texto = '<link href="estilo.css" rel="stylesheet">'; 
$texto =  '<h1>'. $nome . '</h1>';
$texto .= '<br>E-MAIL: '.$email;
$texto .='<br>ASSUNTO: '.$assunto;
$texto .='<br>MENSAGEM: '.$msg;

//vamos salvar os dados em um arquivo de texto
$arquivo = $nome.'.html';

// link para o usuario visualizar o arquivo
echo '<a href="' .$arquivo.'">Clique aqui para ver</a>';

// criando o arquivo e escrevendo o texto nele
$abrir = fopen($arquivo,'a+' );
fwrite($abrir, "<h1>$nome</h1>");
fclose($abrir);


