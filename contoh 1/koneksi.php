<?php

  class Blog
  {
    public function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;dbname=perpus', "root", "");
    }

    public function show()
    {
      $sql = "SELECT * FROM buku";
      $result = $this->db->query($sql);
      return $result;
    }

    public function add($judulbuku, $penjelasan)
    {
      $sql = "INSERT INTO buku (judulbuku, penjelasan) VALUES ('$judulbuku', '$penjelasan')";
      $result = $this->db->query($sql);
      if ($result) {
        return header('Location: ../index.php');
      } else {
        return 'Gagal';
      }
    }

    public function EditBlog($id)
    {
      $sql = "SELECT * FROM buku WHERE id = $id";
      $result = $this->db->query($sql);
      return $result;
    }

    public function UpdateBlog($judulbuku, $penjelasan, $id)
    {
      $sql = "UPDATE buku SET judulbuku='$judulbuku', penjelasan='$penjelasan' WHERE id = $id";
      $result = $this->db->query($sql);
      if ($result) {
        return header('Location: ../index.php');
      } else {
        return 'Gagal';
      }
    }

    public function DeleteBlog($id)
    {
      $sql = "SELECT * FROM buku WHERE id = $id";
      $result = $this->db->query($sql);
      return $result;
    }

    public function DestroyBlog($id)
    {
      $sql = "DELETE FROM buku WHERE id = $id";
      $result = $this->db->query($sql);
      if ($result) {
        return header('Location: ../index.php');
      } else {
        return 'Gagal';
      }
    }
  }
