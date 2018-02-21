<form action="#" method="POST">
	<fieldset>
		<legend>DEGREE</legend>
		<table>
			<tr>
				<td>
					<input type="checkbox" name="ssc" value="SSC" <?php if(isset($_POST['ssc'])){echo 'checked';} ?> > SSC 
				</td>
				<td>
					<input type="checkbox" name="hsc" value="HSC" <?php if(isset($_POST['hsc'])){echo 'checked';} ?> > HSC
				</td>
				<td>
					<input type="checkbox" name="bsc" value="BSc" <?php if(isset($_POST['bsc'])){echo 'checked';} ?> > BSc
				</td>
				<td>
					<input type="checkbox" name="msc" value="MSc" <?php if(isset($_POST['msc'])){echo 'checked';} ?> > MSc
				</td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>