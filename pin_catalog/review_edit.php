<?php include '../view/header.php'; ?>
<div class="top-header"><h1></h1></div>
             	<a href="?action=view_pin&pin_id=<?php echo $pin_id; ?>  " class="button-small">Back</a>

 <div class="form-style2">

		<h2 class="page-header">Edit Review</h2>
			<form action="index.php" method="post" id="add_reply_form">
				<input type="hidden" name="action" value="edit_review" />

  					<input type="hidden" name="rating_id" class="textbox" value="<?php echo $rating_id; ?>"/>

					<input type="hidden" id="username" name="user" value="<?php	echo $_COOKIE["username"]; ?>"/>

					<label>Rating:</label>
					<input type="text" name="rating" class="textbox" value="<?php echo $rating; ?>"/><br>
					<label>Comment:</label>

					<textarea rows="200" cols="10" name="comment"  class="textarea" value="<?php echo $comment; ?>">
					</textarea><br >
					<input type="hidden" name="pin_id" class="textbox" value="<?php echo $pin_id; ?>"/>

					<input type="submit" name="Submit" class="button"/>

			</form>
</div>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>
<script type="text/javascript" src="../js/init.js"></script>
<?php include '../view/footer.php'; ?>