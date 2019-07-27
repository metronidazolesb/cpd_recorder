<!--PHP inclusions-->
	<?php 
		include 'header.php';
		include 'sidebar.php';
	?>

<!--Section-->
	<section>
		<h1>Search for CPD</h1>
		Select from the drop-down lists to search.<br><br>
		Provider:
		<select name="cpd_providers" multiple>
			<option>Select</option>
			<option>NPS</option>
			<option>SHPA</option>
			<option>Guild</option>
			<option>ACP</option>
			<option>PSA</option>
		</select>
		
		Type:
		<select name="cpd_type" multiple>
			<option>Select</option>
			<option>Online module</option>
			<option>Podcast</option>
			<option>Reading</option>
		</select>
		
		CPD Credits:
		<select name="cpd_credits">
			<option>Select</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
		</select>
		
		Competencies:
		<select name="cpd_domains" multiple>
			<option>Select</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
		
		<input type="submit" value="Search">
		<br><br>
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
				<th>Accreditation no.</th>
				<th>Competencies</th>
			</tr>
			<!-- The next is placeholder info -->
			<tr>
				<td>Reporting ADRs</td>
				<td>NPS Medicinewise</td>
				<td>Online module</td>
				<td>1</td>
				<td>CX17144</td>
				<td>1.3, 2.3, 2.4, 3.3, 3.5</td>
			</tr>
		</table>
	</section>
	<br>
<!--PHP inclusions-->	
	<?php
		include 'footer.php';
	?>
