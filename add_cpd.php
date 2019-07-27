<!--PHP inclusions-->
	<?php 
		include 'header.php';
		include 'sidebar.php';
	?>

<!--Section-->
	<section>
		<h1>Add NEW CPD Activity</h1>
		<form action="">
			Activity title:<br>
			<input type="text" name="act-title"><br><br>
			
			Provider:<br>
			<input type="text" name="act-provider"><br><br>
			
			Accredited:<br>
			<input type="radio" name="act-accred" value="yes" checked>Yes<br>
			<input type="radio" name="act-accred" value="no">No<br><br>
			
			Accreditation No.:<br>
			<input type="text" name="act-accred-no"><br><br>
			
			CPD Credits:<br>
			<input type="number" name="act-cred" min="1"><br><br>
			
			Activity Type:<br>
			<input type="text" name="act-type"><br><br>
			
			Start date:<br>
			<input type="date" name="act-started"><br><br>
			
			Finish date:<br>
			<input type="date" name="act-finished"><br><br>
			
			Evidence filed:<br>
			<input type="radio" name="act-accred" value="yes">Yes<br>
			<input type="radio" name="act-accred" value="no" checked>No<br><br>
			
			Activity description (topics covered):<br>
			<textarea name="act-desc" rows="10" cols="60"></textarea><br><br>
			
			Competencies covered (*Allows multi-select):<br>
			<select name="competencies" multiple>
				<option value="1.1">1.1 Uphold professionalism in practice</option>
				<option value="1.2">1.2 Observe and promote ethical standards</option>
				<option value="1.3">1.3 Practise within applicable legal framework</option>
				<option value="1.4">1.4 Maintain and extend professional competence</option>
				<option value="1.5">1.5 Apply expertise in professional practice</option>
				<option value="1.6">1.6 Contribute to continuous improvement in quality and safety</option>
				<option value="2.1">2.1 Collaborate and work in partnership for the delivery of patient-centred, culturally responsive care</option>
				<option value="2.2">2.2 Collaborate with professional colleagues</option>
				<option value="2.3">2.3 Communicate effectively</option>
				<option value="2.4">2.4 Apply interpersonal communication skills to address problems</option>
				<option value="3.1">3.1 Develop a patient-centred, culturally responsive approach to medication management</option>
				<option value="3.2">3.2 Implement the medication management strategy or plan</option>
				<option value="3.3">3.3 Monitor and evaluate medication management</option>
				<option value="3.4">3.4 Compound medicines</option>
				<option value="3.5">3.5 Support Quality Use of Medicines</option>
				<option value="3.6">3.6 Promote health and well-being</option>
				<option value="4.1">4.1 Show leadership of self</option>
				<option value="4.2">4.2 Manage professional contribution</option>
				<option value="4.3">4.3 Show leadership in practice</option>
				<option value="4.4">4.4 Participate in organisational planning and review</option>
				<option value="4.5">4.5 Plan and manage physical and financial resources</option>
				<option value="4.6">4.6 Plan, manage and build human resource capability</option>
				<option value="4.7">4.7 Participate in organisational management</option>
				<option value="5.1">5.1 Deliver education and training</option>
				<option value="5.2">5.2 Participate in research</option>
				<option value="5.3">5.3 Research, synthesise and integrate evidence into practice</option>
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
