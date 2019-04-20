<?php 
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    
    $sql = "select * from all_crud where id = $id";
    $result = mysqli_query($con,$sql);
    
   $row = mysqli_fetch_assoc($result);
        


?>

<!DOCTYPE html>
<html>
<body>

<h2>Update Data</h2>

<form action="update.php?id=<?php echo $row['id']?>" method="POST">

  First name:<br>
  <input type="text" name="fname" value="<?php echo $row['fname']; ?>" >
  <br>
  Last name:<br>
  <input type="text" name="lname" value="<?php echo $row['lname'];?>" >
  <br><br>
  <input type="submit" name="submit" value="Update">
</form> 

<?php } ?>


<div style="margin-top:20px;">
    
    <button><a href="all_data.php">show all data</a></button>
    <button><a href="index.php">Add new User</a></button>
</div>



<?php if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    
    $sql = "UPDATE  all_crud SET fname = '$fname',lname = '$lname' where id = $id";
    
    $result = mysqli_query($con,$sql);
    

    if(!$result){
        echo "<script>alert('Data not Updated !!')</script>";
    }else{
         header("Location:all_data.php");
    }
   
} ?>

</body>
</html>