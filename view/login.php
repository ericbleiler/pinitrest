<?php include '../view/headermain.php'; ?>
<div class="header"><h1></h1></div>

  <div class="form-style">

		<!--<div class="button-small-active">Login</div>
		<a href="?action=show_add_form" class="button-small">Register</a>
			-->
		<form action="index.php" method="post" id="login_form"><br>
				<input type="hidden" name="action" value="sign_in" />

					<label>UserName:</label>
					<input type="text" name="username"/><br>

					<label>Password:</label>
					<input type="password" name="password"/><br>

					<input type="submit" name="Submit" class="button"/>

		</form>
	</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>
<script type="text/javascript" src="../js/init.js"></script>
<?php include '../view/footer.php'; ?>
