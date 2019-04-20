<?php 

include 'db.php';


$sql = "select * from all_crud";
$result = mysqli_query($con,$sql);







?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<div>
    <h2>All Users</h2>
    
    <button><a href="index.php">Add new User</a></button>
    <form action="search.php" method="post" style="margin:30px;">
        <input type="text" name="search" placeholder="Search by first name">
        <input type="submit" name="submit" value="Search">
    </form>
</div>

<table>
<thead>
 <tr>
    <th>#serial</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Action</th>
  </tr>
</thead>
 <tbody>
   <?php  while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
         <td><?php echo $row['fname'] ?></td>
         <td><?php echo $row['lname'] ?></td>
         <td>
             <a href="update.php?id=<?php echo $row['id'] ?>">Update</a>
             <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
         </td>
    </tr>
    
    <?php } ?>
     
 </tbody>


</table>

</body>
</html>
