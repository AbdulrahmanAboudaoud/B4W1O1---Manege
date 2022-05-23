	
	<h1 class= "text-center">Edit a reservation</h1>
	<div class="container">
	
	<form  action="<?=URL?>reservation/updateReservation/<?php echo $reservation['id'] ?>" method="post">
			
		<div class="form-group">
			<label class="lead" for="">Customer Name</label>
            <input class="form-control" name="customerName"  type="text" required value="<?php echo $reservation["CustomerName"]; ?>">
		</div>	

		<div class="form-group">	
			<label class="lead" for="">Horse Name</label>
            <input class="form-control" name="horseName"  type="text" required value="<?php echo $reservation["HorseName"]; ?>">
		</div>

		<div class="form-group">
			<label class="lead" for="">Start time</label>
            <input class="form-control" name="startTime"  type="time" required value="<?php echo $reservation["StartTime"]; ?>">
		</div>	

		<div class="form-group">
			<label class="lead" for="">Number Of Rides</label>
            <input class="form-control" name="numberOfRides"  type="number" required value="<?php echo $reservation["NumberOfRides"]; ?>">
		</div>
	    <!--  Bouw hier de rest van je formulier   -->

		<input type="submit" name="submit" class="btn text-white-50  bg-dark" value="Update">
	</form>

</div>