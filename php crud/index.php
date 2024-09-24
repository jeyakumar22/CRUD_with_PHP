<?php
include('configuration/dbconnection.php');
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
$result = mysqli_query($connection, $sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);//it will return array of data
//print_r($pizza);

mysqli_free_result($result);
mysqli_close($connection);





//explode(',',$pizza[1]['ingredients'])
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('template/header.php');
?>
<h4 class="center grey-text">Pizzas!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($pizzas as $piz): ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<img src="image/pizza.svg" class="pizza" alt="">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($piz['title']); ?></h6>
							
                            <ul>
                            <?php foreach (explode(',',$piz['ingredients']) as $ing) : ?>
                                <li style="list-style:none;"><?php echo htmlspecialchars($ing)?></li>
                            </ul>
                            <?php endforeach; ?>
                           
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $piz['id']?>">more info</a>
						</div>
					</div>
				</div>

			<?php   endforeach; ?>

            
			<?php if(count($pizzas) >= 3): ?>
				<!-- <p>There is more than 3 pizza</p> -->
			<?php else: ?>
				<!-- <p>There are fewer than 3 pizzas</p> -->
			<?php endif; ?>
		</div>
	</div>

<?php
include('template/footer.php');

?>

</html>