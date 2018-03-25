<?php include '../view/headermain.php'; ?>
<div class="header"><h1></h1></div>

  <div class="form-style1">

		<h2 class="page-header">Register</h2>

    		<form action="." method="post" enctype='multipart/form-data'>
				<input type="hidden" name="action" value="add_user" />

					<label>UserName:</label>
					<input type="text" name="username"/><br>

					<label>Password:</label>
					<input type="password" name="password"/><br>

					<label>Bio:</label>
					<input type="text" name="bio"/><br>
					
  					<label>Upload an Image:</label>
                    <input name="filename" type="file" />
                    
					<input type="submit" name="Submit" class="button"/>

		</form>
		</div>

<?php include '../view/footer.php'; ?>