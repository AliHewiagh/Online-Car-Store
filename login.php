


<div class="form-style-3">

     <form action="index.php?page=admin" method="post">
          <fieldset><legend>Login</legend>

          <label for="field1"><span>Username </span><input type="text" name="username" class="input-field"/></label>

		  <label for="field2"><span>Password </span><input type="password" class="input-field" name="besher"/></label>

      

</fieldset> 
<?php
	if(isset($_GET['error'])) {
		echo "Incorrect username or password";
	}
	
	?>

    <label><span>&nbsp;</span><input type="submit" name="login" value="Submit" /></label>
 </form>

</div>