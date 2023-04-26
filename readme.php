<!DOCTYPE html>
<html>
<head>
	<title>AFIRM - Data Collector Recruitment</title>
</head>
<body>
	<h1>Welcome to AFIRM</h1>
	<p>We are a US-based company located in California that recruits data collectors for businesses. Please fill out the form below to apply:</p>
	<form method="post" action="submit_form.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br>

		<label for="dob">Date of Birth:</label>
		<input type="date" name="dob" id="dob" required><br>

		<label for="address">Address:</label>
		<input type="text" name="address" id="address" required><br>

		<label for="education">Education:</label>
		<input type="text" name="education" id="education" required><br>

		<label for="ssn">SSN:</label>
		<input type="text" name="ssn" id="ssn" required><br>

		<label for="access">Access to Smartphone or Laptop:</label>
		<select name="access" id="access" required>
			<option value="smartphone">Smartphone</option>
			<option value="laptop">Laptop</option>
			<option value="both">Both</option>
			<option value="neither">Neither</option>
		</select><br>

		<label for="phone">Phone Number:</label>
		<input type="tel" name="phone" id="phone" required><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
