<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar usuario');

use \App\Entity\Usuario;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A Usuario
$obUsuario = Usuario::getUsuario($_GET['id']);

//VALIDAÇÃO DA Usuario
if(!$obUsuario instanceof Usuario){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['ativo'], $_POST['email'],$_POST['endereco'],$_POST['bairro'],$_POST['uf'],$_POST['cidade'],$_POST['telefone'],$_POST['cep'],$_POST['documento'])){

  $obUsuario->nome    = $_POST['nome'];
  $obUsuario->ativo     = $_POST['ativo'];
  $obUsuario->email     = $_POST['email'];
  $obUsuario->endereco     = $_POST['endereco'];
  $obUsuario->bairro     = $_POST['bairro'];
  $obUsuario->cidade     = $_POST['cidade'];
  $obUsuario->uf     = $_POST['uf'];
  $obUsuario->telefone     = $_POST['telefone'];
  $obUsuario->cep     = $_POST['cep'];
  $obUsuario->documento     = $_POST['documento'];
  $obUsuario->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/FormEmail.php';
include __DIR__.'/includes/footer.php';