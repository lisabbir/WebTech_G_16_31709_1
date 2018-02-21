<?php
	if(isset($_POST['ssc'])){
		echo $_POST['ssc']."  ";
	}
	if(isset($_POST['hsc'])){
		echo $_POST['hsc']."  ";
	}
	if(isset($_POST['bsc'])){
		echo $_POST['bsc']."  ";
	}
	if(isset($_POST['msc'])){
		echo $_POST['msc'];
	}
?>


<form action="#" method="POST">
	<fieldset>
		<legend>DEGREE</legend>
		<table>
			<tr>
				<td>
					<input type="checkbox" name="ssc" value="SSC"> SSC 
				</td>
				<td>
					<input type="checkbox" name="hsc" value="HSC"> HSC
				</td>
				<td>
					<input type="checkbox" name="bsc" value="BSc"> BSc
				</td>
				<td>
					<input type="checkbox" name="msc" value="MSc"> MSc
				</td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>