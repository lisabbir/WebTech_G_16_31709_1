<?php
	
	if(isset($_POST['gender'])){
		echo $_POST['gender'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>GENDER</legend>
		<table>
			<tr>
				<td>
					<input type="radio" name="gender" value="male"> Male 
				</td>
				<td>
					<input type="radio" name="gender" value="female"> Female
				</td>
				<td>
					<input type="radio" name="gender" value="other"> Other
				</td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>