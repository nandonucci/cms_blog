<?php include 'includes/admin_header.php'; ?>

<div id="wrapper">

  <!-- Navigation -->
  <?php include 'includes/admin_navigation.php'; ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Painel de Controle
            <small>/ Categorias</small>
          </h1>

          <div class="col-sm-6">
            <?php
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
            ?>
            <form action="categorias.php" method="post">
              <div class="form-group">
                <label for="cat_nome">Adicionar categorias</label>
                <input type="text" class="form-control" name="cat_nome">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="adicionar" value="ADICIONAR">
              </div>
            </form>

          </div>

          <div class="col-sm-6">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome da categoria</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM categoria";
                $select_todas_categorias = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_todas_categorias)){
                  $cat_nome = $row['cat_nome'];
                  $cat_id = $row['cat_id'];

                  echo "<tr>";
                  echo "<td> $cat_id </td>";
                  echo "<td> $cat_nome </td>";
                  echo "<td><a href='categorias.php?delete={$cat_id}'>Apagar</a></td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>

          </div>

        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->
  <?php include 'includes/admin_footer.php'; ?>
