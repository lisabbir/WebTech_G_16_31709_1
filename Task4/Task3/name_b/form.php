<?php
	
	if(isset($_POST['date'])){
		echo $_POST['date']." / ".$_POST['month']." / ".$_POST['year'];;
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>DATE OF BIRTH</legend>
		<table>
			<tr>
				<td align="center">dd</td>
				<td align="center">mm</td>
				<td align="center">yyyy</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="date" value="" size="2"> /
				</td>
				<td>
					<input type="text" name="month" value="" size="2"> /
				</td>
				<td>
					<input type="text" name="year" value="" size="2">
				</td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>