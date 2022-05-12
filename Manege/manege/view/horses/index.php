<div class="container">
<div class = "row justify-content-md-center">
<div class ="col-md-auto">
<table class= "table-bordered">

<thead>
<tr>

<th>Horse Name : </th>
<th>Horse Age : </th>
<th>Horse Type :</th>
<th>Horse Height :</th>
<th>Geschik voor springen :</th>



</tr>
</thead>
<tbody>
	<?php foreach($horses as $horse ){ ?>

		<tr>
		<td><?php echo $horse["HorseName"]; ?></td>
		<td><?php echo $horse["HorseAge"]; ?></td>
		<td><?php echo $horse["HorseType"]; ?></td>
		<td><?php echo $horse["Height"]; ?></td>
		<td><?php 
		if ($horse["Height"]<= 147.5){
			echo "Nee";
		}
		else {
			echo "Ja";
		}
		
		?>
	  	<button type="button" class="btn " data-mdb-toggle="tooltip" data-mdb-placement="right" title="Of een dier een paard of pony is, is bij onze manege afhankelijk van de gemiddelde volwassen schofthoogte die hoort bij het ras waartoe het dier behoort. Tot 147,5 cm gaat het om een pony ras. Ik weet dat dit door ruiters die zich bezighouden met de springsport per individueel dier wordt bekeken, maar dat is voor het fokken simpelweg niet praktisch.">		
		<i class="fa fa-question-circle" aria-hidden="true"></i>
	  	</button>
	  	</td>


		<td><a class="btn text-primary" href= "<?= URL ?>horses/editHorse/<?= $horse['id'] ?>"><i class="far fa-edit"></i> edit </a></td>
		<td><a class="btn text-primary" href= "<?= URL ?>horses/deleteHorse/<?= $horse['id'] ?>"><i class="far fa-trash-alt"></i> delete </a></td>

		</tr>
		<?php } ?>
	</tbody>
	</table>

	<div class ="col-md-12 text-center">
		<a class="btn text-primary border" href="<?=URL?>horses/addHorse"> Add New Horse</a>
	</div>



	</div>

	</div>

</div>