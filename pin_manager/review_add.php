<?php include '../view/header.php'; ?>
<div class="top-header"><h1></h1></div>

 <div class="form-style2">

		<h2 class="page-header">Add a Review</h2>
			<form action="index.php" method="post" id="add_reply_form">
				<input type="hidden" name="action" value="add_review" />


					<input type="hidden" id="vacation_id" name="vacation_id" value="1"/>
					<input type="hidden" id="username" name="user" value="<?php echo $_COOKIE["username"] ?>"/>

					<label>Rating:</label>
					<input type="text" name="rating" class="textbox"/><br>
					<label>Comment:</label>

					<textarea rows="200" cols="10" name="comment"  class="textarea">
					</textarea><br >
					<input type="hidden" name="vacationID" class="textbox" value="<?php echo $vacation_id; ?>"/><br>

					<input type="submit" name="Submit" class="button"/>

			</form>
</div>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>
<script type="text/javascript" src="../js/init.js"></script>
<?php include '../view/footer.php'; ?>