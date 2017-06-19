<?php
	include("Head.html");
?>
<br>
<br>
<br>
<body style="padding: 0px; margin: 0px;background: #ECEFF1;width:100%">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<fieldset>
			<legend><h1>Register</h1></legend>
			<form action="loginctrl.php" method="post" class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control" id="email"><br>
				<label for="email">Email:</label>
				<input type="text" name="email" class="form-control" id="email"><br>
				<label for="password">Password:</label>
				<input type="Password" name="password" class="form-control" id="password"><br>
			    <input type="submit" class="btn btn-primary" value="Register">
			</form>
		</fieldset>
	</div>
</body>