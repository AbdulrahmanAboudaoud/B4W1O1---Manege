<div>
<table>

<thead>
<tr>

<th>Horse Name : </th>
<th>Horse Age : </th>
<th>Horse Type :</th>



</tr>
</thead>
<tbody>
	<?php foreach($horses as $horse ){ ?>

		<tr>
		<td><?php echo $horse["HorseName"]; ?></td>
		<td><?php echo $horse["HorseAge"]; ?></td>
		<td><?php echo $horse["HorseType"]; ?></td>

		<td><a class="btn text-primary" herf= "<?= URL ?>horses/editHorse/<?= $horse['id'] ?>"><i class="far fa-edit"></i> edit </a></td>
		<td><a class="btn text-primary" herf= "<?= URL ?>horses/deleteHorse/<?= $horse['id'] ?>"><i class="far fa-trash-alt"></i> delete </a></td>

		</tr>
		<?php } ?>
	</tbody>
	</table>

	<div>
		<a class="btn text-primary" herf="<?=URL?>horses/addHorse"> Add New Horse</a>
	</div>







</div>