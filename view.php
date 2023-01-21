<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View php</title>
</head>
<body>
    <h2 style="color:blue;">View All Users</h2>
    <?php
      //connect database 
      $con=mysqli_connect("localhost","root","","custdb");
      //sabhi record ko select krna hai
      $query="select*from custinfo";
      $res=mysqli_query($con,$query);
      if(mysqli_num_rows($res)>0)
      {

    ?>
        <table border="2" style="background-color:pink; color:red">
             <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Contact No</th>
                <th>Connect Date</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <!-- display krna hai data ko traverse krna hai -->
            <?php
            while($row=mysqli_fetch_assoc($res))
            {

            ?>
            <tr>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["emailaddress"] ?></td>
                <td><?php echo $row["contactno"] ?></td>
                <td><?php echo $row["connectdate"] ?></td>
                <td>
                    <a href="delete.php?emailaddress=<?php echo $row["emailaddress"] ?>">Delete</a>
                </td>
                <td>
                    <!-- query srting bhejte hai yaha se id ke -->
                <a href="update.php?emailaddress=<?php echo $row["emailaddress"] ?>">Update</a> 
                </td>
            </tr>

            <?php
               }
            ?>
        </table>
    <?php
      }
      else
      {
        echo "No rows found";
      }
     ?>
</body>
</html>