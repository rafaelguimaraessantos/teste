<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?=TITLE?></h2>


<form method="post">
  <div class="row">
    <div class="col-4 col-md4">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" value="<?=$obUsuario->nome?>">
    </div>
    <div class="col-4 col-md-4">
      <label>CPF</label>
      <input type="text" class="form-control" name="documento" value="<?=$obUsuario->documento?>">
    </div>
    <div class="col-4 col-md-4">
      <label>Telefone</label>
      <input type="text" class="form-control" name="telefone" value="<?=$obUsuario->telefone?>">
    </div>
    <div class="col-4 col-md-4">
      <label>E-mail</label>
      <input type="text" class="form-control" name="email" value="<?=$obUsuario->email?>">
    </div>
    <div class="col-4 col-md-4">
      <label>Endereço</label>
      <input type="text" class="form-control" name="endereco" value="<?=$obUsuario->endereco?>">
    </div>
    <div class="col-4 col-md-4">
      <label>Cidade</label>
      <input type="text" class="form-control" name="cidade" value="<?=$obUsuario->cidade?>">
    </div>
    <div class="col-4 col-md-4">
      <label>Bairro</label>
      <input type="text" class="form-control" name="bairro" value="<?=$obUsuario->bairro?>">
    </div>
    <div class="col-4 col-md-4">
      <label>UF</label>
      <input type="text" class="form-control" name="uf" value="<?=$obUsuario->uf?>">
    </div>
    <div class="col-4 col-md-4">
      <label>CEP</label>
      <input type="text" class="form-control" name="cep" value="<?=$obUsuario->cep?>">
    </div>
    <div class="col-12 col-md-12">
      <label>Status</label>

      <div>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="1" checked> Ativo
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="1" <?=$obUsuario->ativo == '1' ? 'checked' : ''?>> Inativo
            </label>
          </div>
      </div>

    </div>
    
  </div>
   <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>


 

    

   

    
     
    

   

  

</main>