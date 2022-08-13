<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar usuario');

use \App\Entity\Usuario;
$obUsuario = new Usuario;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['cidade'],$_POST['ativo'],$_POST['nome'],$_POST['documento'],$_POST['email'],
  $_POST['endereco'],$_POST['uf'],$_POST['bairro'],$_POST['telefone'])){

  $obUsuario->nome    = $_POST['nome'];
  $obUsuario->cidade = $_POST['cidade'];
  $obUsuario->ativo     = $_POST['ativo'];
  $obUsuario->nome     = $_POST['nome'];
  $obUsuario->documento  = $_POST['documento'];
  $obUsuario->email  = $_POST['email'];
  $obUsuario->endereco  = $_POST['endereco'];
  $obUsuario->cep  = $_POST['cep'];
  $obUsuario->uf  = $_POST['uf'];
  $obUsuario->bairro  = $_POST['bairro'];
  $obUsuario->telefone  = $_POST['telefone'];
  $obUsuario->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';