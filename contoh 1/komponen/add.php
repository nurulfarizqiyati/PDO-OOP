<?php require_once '../koneksi.php'; ?>

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
                <label>Judul</label><br>
                <input type="name" name="judulbuku" class="form-control" required autofocus autocomplete="off">
            </div>

            <div class="form-group">
                <label>Content</label><br>
                <textarea type="text" name="penjelasan" rows="17" cols="150" style="resize: vertical;" class="form-control" required></textarea>
            </div>

            <input type="submit" name="submit" value="Create" class="btn btn-primary">
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

    $blog = new Blog();
    $blog->add($judulbuku, $penjelasan);
  }
