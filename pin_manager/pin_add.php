<?php include '../view/header.php'; ?>
<div class="top-header"><h1></h1></div>

  <div class="form-style">

		<h2 class="page-header">Add pin</h2>

		<form action="index.php" method="Post" id="show_add_form" enctype='multipart/form-data'>
				    <input type="hidden" name="action" value="add_pin" />
					<input type="text" name="username" value="<?php echo $_COOKIE["username"] ?>"/>
					<input type="text" name="userID" value="<?php echo $_COOKIE["username"] ?>"/>

					<label>Pin Name:</label>
					<input type="text" name="pinName" class="textbox"/><br>

					<label>Upload an Image:</label>
                    <input name='filename' type='file' />
					<label>Description:</label>
					<textarea rows="200" cols="10" name="pinDesc"  class="textarea">
					</textarea>
					<input type="submit" name="Submit" class="button"/>

		</form>
		</div>
</div>
<?php

?>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>
<script type="text/javascript" src="../js/init.js"></script>
<?php include '../view/footer.php'; ?>