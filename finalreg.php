<?php
session_start();
if(isset($_SESSION["valid"]))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Registration</title>
</head>
<body>
    <h2 style="color:blue;">Final Registration</h2>
    <form action="finalcode.php" method="post">
        Enter Address:
        <textarea name="address"  cols="30" rows="3"></textarea></br></br>
        Enter Contact No:
        <input type="number" name="contactno" required="true"/></br></br>
        <input type="submit" value="submit"/>
    </form>
</body>
</html>
<?php
}
else
{
    header("Location:login.php");
}
?>