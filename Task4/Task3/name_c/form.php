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
					<input type="text" name="date" value="<?php if(isset($_POST['date'])){ echo $_POST['date']; }?>" size="2"> /
				</td>
				<td>
					<input type="text" name="month" value="<?php if(isset($_POST['month'])){ echo $_POST['month']; }?>" size="2"> /
				</td>
				<td>
					<input type="text" name="year" value="<?php if(isset($_POST['year'])){ echo $_POST['year']; }?>" size="2">
				</td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>