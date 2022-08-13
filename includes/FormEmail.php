<!-- <form action="Email.php" method="post">
	<label for="Nome">Nome:</label>
	<input type="text" name="Nome" size="35" />

	<label for="Email">E-mail:</label>
	<input type="text" name="Email" size="35" />

	<label for="Fone">Telefone:</label>
	<input type="text" name="Fone" size="35" />

	<label for="Mensagem">Mensagem:</label>
	<textarea name="Mensagem" rows="8" cols="40"></textarea>

	<input type="submit" name="Enviar" value="Enviar" />
</form> -->
<section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>
<form method="post" action="Email.php" method="post">
  <div class="row">
    <div class="col-4 col-md4">
      <label for="email">E-mail:</label>
		<input type="text" class="form-control" name="email" size="35" value="<?=$obUsuario->email?>"/>
    </div>
    <div class="col-4 col-md4">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome">
    </div>
    
    <div class="col-4 col-md-4">
      <label >Mensagem:</label>
     <textarea name="mensagem" class="form-control" rows="8" cols="40"></textarea>
    </div>    
  </div>
   <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

</form>