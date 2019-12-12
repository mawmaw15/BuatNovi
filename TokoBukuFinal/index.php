<!DOCTYPE html>
<html lang="en">
<head>
  <title>TokoBuku</title>
  <meta charset="utf-8">
  
  <?php include_once 'helper/template/include.php'; ?>
</head>
<body>

<?php include_once 'helper/template/header.php'; ?>
  
<div class="container text-center">
  <h3>
  
    <!-- View After Login -->
    <?php 
      if(isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'];
      }
    ?>
  </h3><br>
  <div class="row">
  <!-- Show All Products and Searching -->
    <?php 
      include './database/db.php';

      $sql = "SELECT * FROM book";
      $result = $conn->query($sql);

      while($row = $result->fetch_assoc()) {
    ?>
      <div class="col-sm-4 distance">
        <p><b> <?php echo $row['title'] ?> </b></p> 
        <center>
          <img src="./public/image/product/<?php echo $row['image'] ?>" class="img-responsive" alt="Image">
        </center>
        <p><?php echo $row['type'] ?></p> 
        <p>Rp. <?php echo $row['price'] ?></p> 
        
        <?php 

          if(isset($_SESSION['username']) 
          &&
          $_SESSION['username'] == 'juljul1407') {
        ?>

          <a class="btn btn-warning" href="update.php?id=<?php echo $row['id'] ?>">Update</a>     
          <a class="btn btn-danger" href="controller/doDelete.php?id=<?php echo $row['id'] ?>">Delete</a>     

        <?php
          }
        ?>
        <!-- Show Button Update and Delete -->
      </div>
    <?php
      }
    ?>

  <!-- End Show Products -->
  </div>
</div><br>

<?php include_once 'helper/template/footer.php' ?>

</body>
</html>
