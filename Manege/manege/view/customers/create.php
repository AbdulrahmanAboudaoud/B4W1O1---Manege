<h1 class="text-center">Add a new Customer :</h1>
<div class="container">

<form  action="<?=URL?>customers/createNewCustomer" method="post">
	<!-- bouw hier je formulier -->
	
	<div class="form-group">
	<label for="" class="lead">Customer Name</label>
    <input type="text" name="customerName" class="form-control">
	</div>
	
	<div class="form-group">
	<label for="" class="lead">Customer Phone Number</label>
    <input type="text" name="customerPhoneNumber" class="form-control">
	</div>
	
	<div class="form-group">
    <label for="" class="lead">Customer Adress</label>
    <input type="text" name="customerAdress" class="form-control">
	</div>
	
    <input type="submit" class="btn text-white-50  bg-dark " value="Add new Customer">	

</form>
</div>