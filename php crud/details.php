<?php
include('configuration/dbconnection.php');

if(isset($_POST['delete'])){
    $id_to_delete=mysqli_real_escape_string($connection,$_POST['id_delete']);
    $sql="DELETE FROM pizzas WHERE id=$id_to_delete";
    if(mysqli_query($connection,$sql)){
         header('Location:index.php');
    }
    else{
        echo "query error". mysqli_error($connection);
    }
}
if(isset($_GET['id'])){

    $id=mysqli_real_escape_string($connection,$_GET['id']);

    $sql="SELECT * FROM pizzas WHERE id=$id";
    $result=mysqli_query($connection,$sql);
    $pizza=mysqli_fetch_assoc($result);//single array because it has specific id value array only
    //print_r($pizza);

    mysqli_free_result($result);
    mysqli_close($connection);

   
}
?>


<!DOCTYPE html>
<html lang="en">


   

  
    <?php include('template/header.php');?>
    <div class="container center">
            <h2>DETAILS</h2>
                <?php if($pizza):?>
                    <h4><?php echo $pizza['title']; ?></h4>
                    <p>Created by <?php echo $pizza['email']; ?></p>
                    <p><?php echo date($pizza['created_at']); ?></p>
                    <h5>Ingredients:</h5>
                    <p><?php echo $pizza['ingredients']; ?></p>
                    <form action="details.php" method="POST">
                        <input type="hidden" name="id_delete" value="<?php echo $pizza['id'] ?>">
                        <input type="submit" value="Delete" class="btn brand z-depth-0" name="delete">

                    </form>
                <?php else:?>
                    <h3><?php echo " no such pizza found " ?></h3>

                <?php endif;?>
               
	</div>

            <?php include('template/footer.php'); ?>

</html>