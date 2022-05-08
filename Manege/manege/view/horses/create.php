<h1>Add a new horse :</h1>
<div class="container">

<form  action="<?=URL?>horses/createNewHorse" method="post">
	<!-- bouw hier je formulier -->
	
	<div class="form-group">
	<label for="" class="lead">Horse Name</label>
    <input type="text" name="horseName" class="form-control">
	</div>
	
	<div class="form-group">
	<label for="" class="lead">Horse Type</label>
    <input type="text" name="horseType" class="form-control">
	</div>
	
	<div class="form-group">
    <label for="" class="lead">Age</label>
    <input type="number" name="horseAge" class="form-control">
	</div>
	
    <input type="submit" class="btn btn-primary " value="Add new horse">	

</form>
</div>