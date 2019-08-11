<!--PHP inclusions-->
	<?php 
		include 'global.php';
		include 'header.php';
		include 'sidebar.php';
	?>

<!--Section-->

<!-- Consider adding a search function or autofill from database, it will save so much time -->
	<section>
		<h1>Add NEW CPD Activity</h1>
		<form method = "post" action="action_add_cpd.php">
			Activity title:<br>
			<input type="text" name="act-title"><br><br>
			
			Provider:<br>
			<input type="text" name="act-provider"><br><br>
			
			Accredited:
			<input type="checkbox" name="act-accred"><br><br>
			
			Accreditation No.:<br>
			<input type="text" name="act-accred-no"><br><br>
			
			CPD Group:<br>
			<select name="cpd-group">
					<?php
					$query = mysqli_query($db, "SELECT * FROM cpd_group");
					while ($row = mysqli_fetch_assoc($query))
					{
						echo '<option value = "'.$row['group_value'].'">'.$row['group_value'].'</option>';
					}
				?>
			</select><br><br>
			
			CPD Hours:<br>
			<input type="number" name="act-cred" min="1"><br><br>
			
			Activity Type:<br>
			<input type="text" name="act-type"><br><br>
			
			Start date:<br>
			<input type="date" name="act-started"><br><br>
			
			Finish date:<br>
			<input type="date" name="act-finished"><br><br>
			
			Evidence filed:
			<input type="checkbox" name="act-evi"><br><br>
			
			Activity description (topics covered) (*Allows multi-select):<br>
			<select name="act-desc" multiple>
				<?php
					$query = mysqli_query($db, "SELECT * FROM practice_streams");
					while ($row = mysqli_fetch_assoc($query))
					{
						echo '<option value = "'.$row['id'].'">'.$row['stream'].'</option>';
					}
				?>
			</select><br><br>
			
			Competencies covered (*Allows multi-select):<br>
			<select name="competencies" multiple>
				<?php
					$query = mysqli_query($db, "SELECT * FROM competencies");
					while ($row = mysqli_fetch_assoc($query))
					{
						echo '<option value = "'.$row['standard'].'">'.$row['standard'].' '.$row['description'].'</option>';
					}
				?>
			</select><br><br>
			
			Activity reflection (impact on practice):<br>
			<textarea name="act-reflection" rows="10" cols="60"></textarea><br><br>
			
			How does this fit into your learning plan?:<br>
			<textarea name="act-reflection" rows="10" cols="60"></textarea><br><br>
			
			<input type="submit" value="Save new record">
			<input type="reset">
			
		</form>
	</section>

<!--PHP inclusions-->	
	<?php
		include 'footer.php';
	?>
