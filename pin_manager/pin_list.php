<?php include '../view/header.php'; ?>

<div id='main'>


<article>
	
	<div class="content">
			<div class="top">
				<h1>pins</h1>	
			</div>
						<p><br><a href="?action=show_add_form" class="btn btn-info">Add a pin</a></p>

			<table>
				<tr>
					<th>pin Name</th>
					<th>&nbsp;</th>
				</tr>
				<?php foreach ($pins as $pin) : ?>
				<tr>
					<td>
						<?php echo $pin['pinName']; ?>
					</td>
					
					<td>
						<form action="." method="post">
						<input type="hidden" name="action" value="delete_pin" />
						<input type="hidden" name="pin_id" value="<?php echo $pin['pinID']; ?>" />
						<input type="submit" value="Delete pin" />
						</form>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			
	</div>
	</div>
	</article>

</div>


<?php include '../view/footer.php'; ?>