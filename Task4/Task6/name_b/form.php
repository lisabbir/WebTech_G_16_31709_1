<?php
	if(isset($_POST['bgroup']))
	{
		echo $_POST['bgroup'];
	}
?>

<form action="#" method="POST">
	<fieldset>
		<legend>BLOOD GROUP</legend>
		<select name="bgroup">
			<option value="Apos">A+</option>
			<option value="Bpos">B+</option>
			<option value="Opos">O+</option>
			<option value="ABpos">AB+</option>
			<option value="Aneg">A-</option>
			<option value="Bneg">B-</option>
			<option value="Oneg">O-</option>
			<option value="ABneg">AB-</option>
		</select>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>