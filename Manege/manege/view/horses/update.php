	
	<h1 class= "text-center">Edit a horse</h1>
	<div class="container">
	
	<form  action="<?=URL?>horses/updateHorse/<?php echo $horse['id'] ?>" method="post">
			
		<div class="form-group">
			<label class="lead" for="">Name</label>
            <input class="form-control" name="horseName"  type="text" required value="<?php echo $horse["HorseName"]; ?>">
		</div>	

		<div class="form-group">	
			<label class="lead" for="">Horse Type</label>
            <input class="form-control" name="horseType"  type="text" required value="<?php echo $horse["HorseType"]; ?>">
		</div>

		<div class="form-group">
			<label class="lead" for="">Horse Age</label>
            <input class="form-control" name="horseAge"  type="number" required value="<?php echo $horse["HorseAge"]; ?>">
		</div>	

		<div class="form-group">
			<label class="lead" for="">Horse Height</label>
            <input class="form-control" name="horseHeight"  type="number" required value="<?php echo $horse["Height"]; ?>">
		</div>
	    <!--  Bouw hier de rest van je formulier   -->

		<input type="submit" name="submit" class="btn text-white-50  bg-dark" value="Update">
	</form>

</div>