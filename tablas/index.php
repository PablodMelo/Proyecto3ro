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
      
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>CI</th>
            <th>Email</th>
            <th>Contraseña</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM producto";
          $result_producto = mysqli_query($con, $query);    

          while($row = mysqli_fetch_assoc($result_producto)) { ?>
          <tr>
            <td><?php echo $row['CI']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['contra']; ?></td>
            <td>
              <a href="edit.php?Codigo=<?php echo $row['CI']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_producto.php?Codigo=<?php echo $row['CI']?>" class="btn btn-danger">
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
