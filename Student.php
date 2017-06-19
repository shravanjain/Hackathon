<?php
	include("Head.html");
?>
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="formctrl.php" method="post" class="form-group" enctype="multipart/form-data">
		<label for="name">Student Name (in full): </label>
		<input type="text" name="name" class="form-control" id="name"><br>
		<label for="phone">Phone Number: </label>
		<input type="Number" name="phone" minlength="10" maxlength="10" class="form-control" id="phone"><br>
		<label for="dob">Date of Birth: </label>
		<input type="date" name="dob" class="form-control" id="dob"><br>
		<label for="branch">Branch: </label>
		<select name="branch" class="form-control" id="branch">
			<option value="CMPN">CMPN</option>
			<option value="ETRX">ETRX</option>
			<option value="EXTC">EXTC</option>
			<option value="INFT">INFT</option>
			<option value="INST">INST</option>
		</select><br>
		<label for="AcademicYearOfAdmission">Academic Year of Admission: </label>
		<input type="Number" name="AcademicYearOfAdmission" class="form-control" id="AcademicYearOfAdmission"><br>
		<label for="YearofPassing">Year of Passing: </label>
		<input type="Number" name="YearofPassing" class="form-control" id="YearofPassing"><br>
		<label for="percentage">Percentage: </label>
		<input type="Percentage" name="percentage" class="form-control" id="percentage"><br>
		<label for="caste">Caste: </label>
		<input type="text" name="caste" class="form-control" id="caste"><br>
		<label for="SubCaste">Sub Caste: </label>
		<input type="text" name="SubCaste" class="form-control" id="SubCaste"><br>
		<label for="YearOfAdmission">1st Year of Admission/Direct Second Year of Admission: </label>
		<select name="YearOfAdmission" class="form-control" id="YearOfAdmission">
			<option value="1st Year of Admission">1st Year of Admission</option>
			<option value="Direct Second Year of Admission">Direct Second Year of Admission</option>
		</select><br>
		<label for="SchoolName">Last School Name (in full): </label>
		<input type="text" name="SchoolName" class="form-control" id="SchoolName"><br>
		<fieldset>
			<legend>Upload a Photocopy of following Documents: </legend>
			<label for="Signature">Signature: </label>
		    <input type="file" name="Signature" class="form-control" id="Signature"><br>
		    <label for="MarkSheet">B.E. Mark Sheet: </label>
		    <input type="file" name="MarkSheet" class="form-control" id="MarkSheet"><br>
		    <label for="PassingCertificate">B.E. Passing Certificate: </label>
		    <input type="file" name="PassingCertificate" class="form-control" id="PassingCertificate"><br>
		    <label for="NationalityProof">Nationality Proof: </label>
		    <input type="file" name="NationalityProof" class="form-control" id="NationalityProof"><br>
		    <label for="NationalityProof">Previous Leaving: </label>
		    <input type="file" name="PreviousLeaving" class="form-control" id="PreviousLeaving"><br>
		</fieldset>
	    <input type="submit" class="btn btn-primary">
	</form>
</div>