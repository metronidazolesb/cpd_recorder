<!--PHP inclusions-->
	<?php 
		include 'global.php';
		include 'header.php';
		include 'sidebar.php';
		
		if($_SESSION["is_logged_in"] == False){
			header("location: login.php");
			exit();
		}
	?>

<!--Section-->
	<section>
		<h1>Your CPD Record</h1>
		Select CPD year: 
		<select>
			<option value="18-19">2018-2019</option>
			<option value="19-20">2019-2020</option>
		</select>
		<input type="submit" value="View CPD Record for year">
		<input type="button" onclick="Exported" value="Print Record"><br><br>
		<!-- Record will be opened in new tab on it's own for printing via browser -->
		<style>
			table, th, td{
				border: 1px solid white;
				border-collapse: collapse;
			}
			td{
				text-align: center;
			}
		</style>
		<table style="width:100%">
			<tr>
				<th>Activity</th>
				<th>Provider</th>
				<th>Type</th>
				<th>CPD Credits</th>
				<th>Evidence</th>
				<th>Reflection</th>
			</tr>
			<!-- The next is placeholder info -->
			<tr>
				<td>Planning CPD</td>
				<td>SHPA</td>
				<td>Online module</th>
				<td>1</th>
				<td>Yes</th>
				<td>Yes</td>
			</tr>
		</table>
	</section>

<!--PHP inclusions-->	
	<?php
		include 'footer.php';
	?>
