<?php
      require_once('connect.php');
      $id = $_GET['id'];
      $sql = "SELECT * FROM `order` WHERE `id` = '".$id."'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      echo "number of rows: " . $result->num_rows;

?>