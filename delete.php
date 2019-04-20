<?php 

include 'db.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = "DELETE FROM all_crud WHERE id=$id";
    $result = mysqli_query($con,$sql);
    if(!$result){
        echo "<script>alert('Data not Delete !!')</script>";
    }else{
        
        header("Location:all_data.php");
    }
}

?>