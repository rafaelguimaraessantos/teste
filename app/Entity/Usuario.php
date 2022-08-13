<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Usuario{

  /**
   * Identificador único da usuario
   * @var integer
   */
  public $id;

  /**
   * Título da usuario
   * @var string
   */
  public $nome;
  /**
   * Define se a usuario ativa
   * @var string(s/n)
   */
  public $ativo;

  /**
   * Data de publicação da usuario
   * @var string
   */
  public $data;

  /**
   * email
   * @var string
   */
  public $email;

  /**
   * documento
   * @var string
   */
  public $documento;

  /**
   * endereco
   * @var string
   */
  public $endereco;

  /**
   * bairro
   * @var string
   */
  public $bairro;

   /**
   * cidade
   * @var string
   */
  public $cidade;

   /**
   * uf
   * @var string
   */
  public $uf;

   /**
   * telefone
   * @var string
   */
  public $telefone;
  /**
   * Método responsável por cadastrar uma nova usuario no banco
   * @return boolean
   */
  public $cep;
  /**
   * Método responsável por cadastrar uma nova usuario no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR A usuario NO BANCO
    $obDatabase = new Database('usuarios');
    $this->id = $obDatabase->insert([
                                      'nome'    => $this->nome,                                      
                                      'email'     => $this->email,
                                      'documento'     => $this->documento,
                                      'endereco'     => $this->endereco,
                                      'bairro'     => $this->bairro,
                                      'cidade'     => $this->cidade,
                                      'uf'     => $this->uf,
                                      'telefone'     => $this->telefone,
                                      'cep'     => $this->cep,
                                      'ativo' => $this->ativo,
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar a usuario no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('usuarios'))->update('id = '.$this->id,[
                                                                  'nome'    => $this->nome,
                                                                  'ativo'     => $this->ativo,
                                                                  'email'     => $this->email,
                                                                  'documento'     => $this->documento,
                                                                  'endereco'     => $this->endereco,
                                                                  'bairro'     => $this->bairro,
                                                                  'cidade'     => $this->cidade,
                                                                  'uf'     => $this->uf,
                                                                  'telefone'     => $this->telefone,
                                                                  'cep'     => $this->cep,
                                                              ]);
  }

  /**
   * Método responsável por excluir a usuario do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('usuarios'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as usuarios do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getUsuarios($where = null, $order = null, $limit = null){
    return (new Database('usuarios'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma usuario com base em seu ID
   * @param  integer $id
   * @return usuario
   */
  public static function getUsuario($id){
    return (new Database('usuarios'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}