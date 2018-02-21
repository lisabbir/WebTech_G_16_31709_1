<?php
	if(isset($_POST['email'])){
		echo $_POST['email'];
	}
?>

<form action="#" method="POST">
	<fieldset>
		<legend>EMAIL</legend>
		<input type="email" name="email" value="" > i<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>