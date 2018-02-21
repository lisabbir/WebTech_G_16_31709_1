

<form action="#" method="POST">
	<fieldset>
		<legend>BLOOD GROUP</legend>
		<select name="bgroup" >
			<option value="Apos"<?php if(isset($_POST['bgroup'])){if($_POST['bgroup'] == 'Apos'){ echo 'selected';}}?>>A+</option>
			<option value="Bpos"<?php if(isset($_POST['bgroup'])){if($_POST['bgroup'] == 'Bpos'){ echo 'selected';}}?>>B+</option>
			<option value="Opos"<?php if(isset($_POST['bgroup'])){if($_POST['bgroup'] == 'Opos'){ echo 'selected';}}?>>O+</option>
			<option value="ABpos"<?php if(isset($_POST['bgroup'])){if($_POST['bgroup'] == 'ABpos'){ echo 'selected';}}?>>AB+</option>
			<option value="Aneg"<?php if(isset($_POST['bgroup'])){if($_POST['bgroup'] == 'Aneg'){ echo 'selected';}}?>>A-</option>
			<option value="Bneg"<?php if(isset($_POST['bgroup'])){if($_POST['bgroup'] == 'Bneg'){ echo 'selected';}}?>>B-</option>
			<option value="Oneg"<?php if(isset($_POST['bgroup'])){if($_POST['bgroup'] == 'Oneg'){ echo 'selected';}}?>>O-</option>
			<option value="ABneg"<?php if(isset($_POST['bgroup'])){if($_POST['bgroup'] == 'ABneg'){ echo 'selected';}}?>>AB-</option>
		</select>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>