<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "geisielesilva9@gmail.com";
$assunto = "coletas de dados";

$corpoDoEmail = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Telefone: " . $telefone;

$cabecalho = "From: teste@inteologia.com" . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion();

if (mail($para, $assunto, $cabecalho)) {
  echo ("E-mail enviado com sucesso!");
} else {
  echo "Houve um ERROR ao enviar o email!";
}
