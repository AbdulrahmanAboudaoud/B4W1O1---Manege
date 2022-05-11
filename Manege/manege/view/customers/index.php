<div>
<table>

<thead>
<tr>

<th>Customer Name : </th>
<th>Customer Phone Number : </th>
<th>Customer Adress :</th>



</tr>
</thead>
<tbody>
	<?php foreach($customers as $customer ){ ?>

		<tr>
		<td><?php echo $customer["CustomerName"]; ?></td>
		<td><?php echo $customer["CustomerPhoneNumber"]; ?></td>
		<td><?php echo $customer["CustomerAdress"]; ?></td>

		<td><a class="btn text-primary" href= "<?= URL ?>customers/editCustomer/<?= $customer['id'] ?>"><i class="far fa-edit"></i> edit </a></td>
		<td><a class="btn text-primary" href= "<?= URL ?>customers/deleteCustomer/<?= $customer['id'] ?>"><i class="far fa-trash-alt"></i> delete </a></td>

		</tr>
		<?php } ?>
	</tbody>
	</table>

	<div>
		<a class="btn text-primary" href="<?=URL?>customers/addCustomer"> Add New Horse</a>
	</div>







</div>