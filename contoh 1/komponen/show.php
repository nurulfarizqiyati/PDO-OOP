<?php
    require_once '../koneksi.php';

    $blog = new Blog();
    if (isset($_GET['id'])) {
      $edit = $blog->EditBlog($_GET['id']);
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
        <h1 class="text-center"><?= $row['judulbuku'] ?></h1>
        <br>

        <p><?= nl2br($row['penjelasan']) ?></p>
        <br>

        <a href="../index.php" class="btn btn-primary">Back</a>
		<a href="../komponen/edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="../komponen/delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
    </div>
  </body>

  <script src="../bootstrap/js/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>

<?php
  if (isset($_POST['submit'])) {
    $judulbuku = $_POST['judulbuku'];
    $penjelasan = $_POST['penjelasan'];

    $blog->UpdateBlog($judulbuku, $penjelasan, $_GET['id']);
  }
