<?php
    require_once '../koneksi.php';

    $blog = new Blog();
    if (isset($_GET['id'])) {
      $edit = $blog->DeleteBlog($_GET['id']);
      $row = $edit->fetch(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <title>PDO and OOP</title>
  </head>
  <body>
    <div class="container">
        <br>
        <a href="../index.php" class="btn btn-info">Back</a>
        <hr>

        <form method="post">
            anda yakin menghapus "<?= $row['judulbuku'] ?>" ini?
            <hr>
            <div class="form-group">
              <input type="submit" name="submit" value="Yes" class="btn btn-danger">
              <input type="submit" name="submit" value="No" class="btn btn-warning">
            </div>
        </form>
    </div>
  </body>

  <script src="../bootstrap/js/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>

<?php
  if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Yes') {

      $blog->DestroyBlog($_GET['id']);
    } else {
      header('Location: ../index.php');
    }
  }
