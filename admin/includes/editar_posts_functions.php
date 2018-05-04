<?php
//Inserir categorias
function inserirCategoria(){
  global $connection;

  if (isset($_POST['adicionar'])) {
    $cat_nome = $_POST['cat_nome'];

    if ($cat_nome == "") {
      echo "Insira uma categoria";
    } else {
      $query = "INSERT INTO categoria(cat_nome) VALUE('$cat_nome')";
      $resultado = mysqli_query($connection, $query);

      if (!$resultado) {
        die('Não deu certo a inclusão');
      } else {
        echo "Catergoria adicionada com sucesso!";
      }
    }
  }
}

//Exibir categorias
function mostraDadosCategoria(){
  global $connection;
  $query = "SELECT * FROM categoria";
  $select_todas_categorias = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_todas_categorias)){
    $cat_nome = $row['cat_nome'];
    $cat_id = $row['cat_id'];

    echo "<tr>";
    echo "<td> $cat_id </td>";
    echo "<td> $cat_nome </td>";
    echo "<td><a href='categorias.php?delete={$cat_id}'>Apagar</a></td>";
    echo "<td><a href='categorias.php?edit={$cat_id}'>Editar</a></td>";
    echo "</tr>";
  }

}

//Apagar categoria
function deletarCategoria(){
  global $connection;
  if (isset($_GET['delete'])) {
    $deletar = $_GET['delete'];
    $sql = "DELETE FROM categoria WHERE cat_id = $deletar";
    $resultado = mysqli_query($connection, $sql);

    if (!$resultado) {
      die('Não deu certo a remoção');
    } else {
      echo "Catergoria removida com sucesso!";
    }

    header('Location: categorias.php');
  }
}

?>
