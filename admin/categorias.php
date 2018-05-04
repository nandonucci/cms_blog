<?php ob_Start(); ?>
<?php include 'includes/admin_header.php';?>

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
          <?php include 'includes/editar_categoria.php' ?>

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
                  <?php mostraDadosCategoria(); ?>
                  <?php
                  //Função de deletar
                    deletarCategoria();
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
