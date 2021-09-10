<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD PRODUCTOS FORM -->
      <div class="card card-body">
        <form action="save_producto.php" method="POST">
           
          <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombresssssss" autofocus>
          </div>
          <div class="form-group">
            <textarea name="Descripcion" rows="2" class="form-control" placeholder="Descripcion"></textarea>
          </div>
           <div class="form-group">
            <input type="int" name="Stock" class="form-control" placeholder="Stock" autofocus>
          </div>
          <div class="form-group">
            <input type="int" name="Precio" class="form-control" placeholder="Precio" autofocus>
          </div>
          <input type="submit" name="save_producto" class="btn btn-success btn-block" value="Guardar Producto">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Stock</th>
            <th>Precio</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM producto";
          $result_producto = mysqli_query($con, $query);    

          while($row = mysqli_fetch_assoc($result_producto)) { ?>
          <tr>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Stock']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td>
              <a href="edit.php?Codigo=<?php echo $row['codigo']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_producto.php?Codigo=<?php echo $row['codigo']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
