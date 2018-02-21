
<form action="#" method="POST">
	<fieldset>
		<legend>GENDER</legend>
		<table>
			<tr>
				<td>
					<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender'])){if($_POST['gender']=='male'){echo 'checked';}} ?> > Male 
				</td>
				<td>
					<input type="radio" name="gender" value="female" <?php if(isset($_POST['gender'])){if($_POST['gender']=='female'){echo 'checked';}} ?>> Female
				</td>
				<td>
					<input type="radio" name="gender" value="other" <?php if(isset($_POST['gender'])){if($_POST['gender']=='other'){echo 'checked';}} ?>> Other
				</td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>