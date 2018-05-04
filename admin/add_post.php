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
            <small>/ Adicionar Posts</small>
          </h1>
          <?php
          if (isset($_POST['adicionar'])) {
            $post_titulo = $_POST['post_titulo'];
            $post_autor = $_POST['post_autor'];
            $post_imagem = $_FILES['post_imagem']['name'];
            $post_imagem_temp = $_FILES['post_imagem']['tmp_name'];
            $post_data = date('d-m-y');
            $post_conteudo = $_POST['post_conteudo'];

            move_uploaded_file($post_imagem_temp, '../images/$post_imagem');

            // if ($post_titulo !== "") {
            //   echo "Insira uma categoria";
            // } else {
            //   $query = "INSERT INTO categoria(cat_nome) VALUE('$cat_nome')";
            //   $resultado = mysqli_query($connection, $query);
            //
            //   if (!$resultado) {
            //     die('Não deu certo a inclusão');
            //   } else {
            //     echo "Catergoria adicionada com sucesso!";
            //   }
            // }
          }

          ?>
          <form class="" action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="post_titulo">Título do Post:</label>
              <input type="text" name="post_titulo" class="form-control">
            </div>
            <div class="form-group">
              <label for="post_autor">Autor:</label>
              <input type="text" name="post_autor" class="form-control">
            </div>
            <div class="form-group">
              <label for="post_imagem">Imagem do Post:</label>
              <input type="file" name="post_imagem" class="form-control">
            </div>
            <div class="form-group">
              <label for="post_conteudo">Conteúdo do Post:</label>
              <textarea name="post_conteudo" class="form-control" rows="10" cols="30"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="adicionar" class="btn btn-primary" value="ADICIONAR">
            </div>
          </form>


        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->
  <?php include 'includes/admin_footer.php'; ?>
