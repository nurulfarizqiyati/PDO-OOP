<?php
  require_once 'koneksi.php';
  $blog = new Blog();
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <title>PDO and OOP</title>
  </head>
  <body>
    <div class="container">
        <br>

        <div class="panel panel-primary">

		 <div class="panel-heading">
                <a href="komponen/add.php" class="btn btn-info">Create New </a>
            </div>
            <div class="panel-body">
                <?php
                    $show = $blog->show();
                    $x = 1;
                    while ($row = $show->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <h4><?= $x++ ?>.&nbsp;&nbsp;<a href="pages/show.php?id=<?= $row['id'] ?>"><?= $row['judulbuku'] ?></a></h4>
                    <?= substr($row['penjelasan'], 0, 200) ?> ...

                    <a href="komponen/show.php?id=<?= $row['id'] ?>">Baca Lengkap</a><br><br>
                    <br><br>
                <?php } ?>
				
            </div>
			
        </div>
    </div>
  </body>

  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</html>
