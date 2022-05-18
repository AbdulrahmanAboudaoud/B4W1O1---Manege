

<h1>Add a new Reservation :</h1>
<div class="container">

<form  action="<?=URL?>reservation/createNewReservation" method="post">
	<!-- bouw hier je formulier -->
	<div class="form-group">
	<label for="" class="lead">customer Name</label>
	<select name="customerName">
	<?php 
                 foreach ( $customers as $value) {
            ?>
        <option value="<?php echo $value["CustomerName"] ?>"><?php echo $value["CustomerName"] ?></option>
  
            <?php
           
            }?>
    
        </select>
	</div>

	<div class="form-group">
	<label for="" class="lead">Horse Name</label>
	<select name="horseName">
	<?php 
                 foreach ($horses as $value) {
            ?>
        <option value="<?php echo $value["HorseName"] ?>"><?php echo $value["HorseName"] ?></option>
  
            <?php
           
            }?>
    
        </select>
	</div>
	
	<div class="form-group">
	<label for="" class="lead">Start time</label>
    <input type="time" name="startTime" class="form-control">
	</div>
	
	<div class="form-group">
    <label for="" class="lead">Number Of Rides</label>
    <input type="number" name="numberOfRides" class="form-control">
	</div>

	<div class="form-group">
    <label for="" class="lead">total price</label>
    <input type="number" name="totalPrice" class="form-control">
	</div>
	
    <input type="submit" class="btn btn-primary " value="Add new reservation">	

</form>
</div>