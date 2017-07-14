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
        <br>
        <a href="../index.php" class="btn btn-info">Back</a>
        <hr>

        <form method="post">
            <div class="form-group">
                <label>Title</label><br>
                <input type="name" name="judulbuku" class="form-control" value="<?= $row['judulbuku'] ?>" autofocus autocomplete="off">
            </div>

            <div class="form-group">
                <label>Content Blog</label><br>
                <textarea type="text" name="penjelasan" rows="17" cols="150" style="resize: vertical;" class="form-control"><?= $row['penjelasan'] ?></textarea>
            </div>

            <input type="submit" name="submit" value="Edit" class="btn btn-primary">
        </form>
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
