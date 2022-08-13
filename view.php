<section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>
  <br>
<?php
include_once("conexao.php");

$xml = simplexml_load_file('xml/xml.xml');
foreach ($xml->torcedor as $torcedor) {
    $nome = $torcedor->attributes()->nome;
    $documento = $torcedor->attributes()->documento;
    $documento = trim($documento);
    $documento = str_replace(".", "", $documento);
    $documento = str_replace(",", "", $documento);
    $documento = str_replace("-", "", $documento);
    $documento = str_replace("/", "", $documento);
    $cep = $torcedor->attributes()->cep;
    $endereco = $torcedor->attributes()->endereco;
    $bairro = $torcedor->attributes()->bairro;
    $cidade = $torcedor->attributes()->cidade;
    $uf = $torcedor->attributes()->uf;
    $telefone = $torcedor->attributes()->telefone;
    $email = $torcedor->attributes()->email;
    $ativo = $torcedor->attributes()->ativo;

    echo $torcedor->attributes()->nome . "<br/>";
    echo $torcedor->attributes()->documento . "<br/>";
    echo $torcedor->attributes()->endereco . "<br/>";
    echo $torcedor->attributes()->bairro . "<br/>";
    echo $torcedor->attributes()->cidade . "<br/>";
    echo $torcedor->attributes()->uf . "<br/>";
    echo $torcedor->attributes()->telefone . "<br/>";
    echo $torcedor->attributes()->email . "<br/>";
    echo $torcedor->attributes()->ativo . "<br/>";
    echo "<br/><br/>";
    //Inserir o usuário no BD
    
    $result_usuario = "INSERT INTO usuarios (nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo) VALUES ('$nome', '$documento','$cep','$endereco','$bairro','$cidade','$uf','$telefone','$email','$ativo')";
                $resultado_usuario = mysqli_query($conn, $result_usuario);
                // var_dump($resultado_usuario );
                // die;
}