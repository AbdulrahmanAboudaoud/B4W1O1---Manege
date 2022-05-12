	
	
	<h1>Edit a Customer</h1>
	<div class="container">
	
	<form  action="<?=URL?>customers/updateCustomer/<?php echo $customer['id'] ?>" method="post">
			
		<div class="form-group">
			<label class="lead" for="">Customer Name</label>
            <input class="form-control" name="customerName"  type="text" required value="<?php echo $customer["CustomerName"]; ?>">
		</div>	

		<div class="form-group">	
			<label class="lead" for="">Customer Phone Number</label>
            <input class="form-control" name="customerPhoneNumber"  type="text" required value="<?php echo $customer["CustomerPhoneNumber"]; ?>">
		</div>

		<div class="form-group">
			<label class="lead" for=""> Customer Adress</label>
            <input class="form-control" name="customerAdress"  type="text" required value="<?php echo $customer["CustomerAdress"]; ?>">
		</div>	
	    <!--  Bouw hier de rest van je formulier   -->

		<input type="submit" name="submit" class="btn btn-primary" value="Update">
	</form>

</div>