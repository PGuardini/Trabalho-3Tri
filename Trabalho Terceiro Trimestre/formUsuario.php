<?php
  include 'cabecalho.php';
?>
<div class="coluna10">.</div>
<article class="coluna80">
  <form  method="post" action="gravarUsuario.php">
    <label for="cod">Código (Siape, matrícula, código)</label>
    <input type="text" name="cod">

    <label for="login">Login</label>
    <input type="text" name="login">

    <label for="senha">Senha</label>
    <input type="text" name="senha">

    <label for="tipo">Tipo de Usuário</label>
    <select name="tipo">
      <option value="aluno">aluno</option>
      <option value="professor">professor</option>
      <?php
        if ($_SESSION['login']=='admin') {
          echo "<option value='admin'>admin</option>";
        }
       ?>
    </select>

    <input type="submit" name="cadastrar" value="Cadastrar">

  </form>
</article>
<?php
  include 'rodape.php';
?>
