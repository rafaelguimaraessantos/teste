<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($usuarios as $usuario){
    $resultados .= '<tr>
                      <td>'.$usuario->id.'</td>
                      <td>'.$usuario->nome.'</td>                      
                      <td>'.($usuario->ativo == '1' ? 'Ativo' : 'Inativo').'</td>
                      <td>'.$usuario->email.'</td>
                      <td>
                        <a href="editar.php?id='.$usuario->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$usuario->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                        <a href="EnviarEmail.php?id='.$usuario->id.'">
                          <button type="button" class="btn btn btn-info">Enviar e-mail</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma usuario encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>nome</th>
            <th>Status</th>
            
            <th>email</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>
  </section>
  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Nova usuario</button>
    </a>
  </section>
  <br>
  <form action="arquivo.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="xml" />
    <button class="btn btn-success" type="submit">Enviar Arquivo xml</button>
</form>



</main>