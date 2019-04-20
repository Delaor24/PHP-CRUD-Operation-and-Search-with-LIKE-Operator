<?php 

include 'db.php';


if(isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    
    
    $sql = "insert into all_crud (fname,lname) values ('$fname','$lname')";
    $result = mysqli_query($con,$sql);
    if(!$result){
        echo "<script>alert('Data not insert !!')</script>";
    }else{
        echo "<script>alert('Data insert successfully done !!')</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<body>

<h2>Insert Data</h2>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  First name:<br>
  <input type="text" name="fname" placeholder="Enter first name">
  <br>
  Last name:<br>
  <input type="text" name="lname" placeholder="Enter last name">
  <br><br>
  <input type="submit" name="submit" value="Insert Data">
</form> 
<div style="margin-top:20px;">
    
    <button><a href="all_data.php">show all data</a></button>
</div>

</body>
</html>
