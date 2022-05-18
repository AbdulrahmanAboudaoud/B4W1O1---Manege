<div class="container">
<div class = "row justify-content-md-center">
<div class ="col-md-auto">
<table class= "table-bordered">

<thead>
<tr>
<th>Customer Name : </th>
<th>Horse Name : </th>
<th>Start Time : </th>
<th>Number of Rides :</th>
<th>Total Price :</th>




</tr>
</thead>
<tbody>
	<?php foreach($reservation as $reservation){ ?>

		<tr>
		<td><?php echo $reservation["CustomerName"]; ?></td>
		<td><?php echo $reservation["HorseName"]; ?></td>
		<td><?php echo $reservation["StartTime"]; ?></td>
		<td><?php echo $reservation["NumberOfRides"]; ?></td>
		<td><?php echo $reservation["TotalPrice"]; ?></td>



		<td><a class="btn text-primary" href= "<?= URL ?>reservation/editReservation/<?= $reservation['id'] ?>"><i class="far fa-edit"></i> edit </a></td>
		<td><a class="btn text-primary" href= "<?= URL ?>reservation/deleteReservatiuon/<?= $reservation['id'] ?>"><i class="far fa-trash-alt"></i> delete </a></td>

		</tr>
		<?php } ?>
	</tbody>
	</table>

	<div class ="col-md-12 text-center">
		<a class="btn text-primary border" href="<?=URL?>reservation/addReservation"> Add New Reservation</a>
	</div>



	</div>

	</div>

</div>