<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .a1{
           background-image:url('image/logo.gif');
    }
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">

    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown Dashboard
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php">Home</a></li>
            <li><a class="dropdown-item" href="about.php">About</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="menu.php">Menu</a></li>
            <li><a class="dropdown-item" href="review.php">Review</a></li>
            <li><a class="dropdown-item" href="book.php">Book</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
    <div class="col-sm-12 a1">
    <table class="table table-stripped z ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>

           <tr>
           <?php
         $con=mysqli_connect('localhost','root','','cafdb');
        $query="select*from booking_coffee";
         $result = mysqli_query($con,$query);
         while($row = mysqli_fetch_assoc($result)){
            ?>

            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['number'];?></td>
            <td><?php echo $row['message'];?></td>
           </tr>
           </tbody>
           </table>
           <?php
         };
         ?>
    </div>
</div>
    </div>
    
</body>
</html>