<?php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['loggedin']))
{
	echo "<script> window.alert('Please sign in first.'); 
    window.location='login.php'; </script>";
}
?>

<!doctype html>

<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    </head>

<body>
<div class="container">
    <table class="table" id="myTable">
    <thead>
    <tr>
      <th scope="col">S. No.</th>
      <th scope="col">Username</th>
      <th scope="col">State</th>
      <th scope="col">Crop</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
    </thead>

    <tbody>
      <?php
        $sql ="SELECT * FROM `global_market`";
        $result = mysqli_query($conn,$sql);
        $sno = 0;
        while($row = mysqli_fetch_assoc($result)){
          $sno = $sno + 1; 
          echo "<tr>
          <th scope='row'>".$sno."</th>
          <td>".$row['username']."</td>
          <td>".$row['state']."</td>
          <td>".$row['crop']."</td>
          <td>".$row['quantity']."</td>
          <td>".$row['price']."</td>
          </tr>";
       }
      ?>
    </tbody>
    </table>
</div>

<hr>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
       $(document).ready( function () {
       $('#myTable').DataTable();
       } );
    </script>

</body>
</html>