<!DOCTYPE html>
<html>
<head>
	<title>File Handling</title>
</head>
<body>

     <?php 

		$FirstName = $LastName = $Gender=$Email=$RMail =$UserName =$Password = "";
		$FirstNameErr = $LastNameErr = $EmailErr = $GenderErr= $UserErr= $PassErr=$REmailErr="";

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fname'])) {
				$FirstNameErr = "Please fill up the firstname";
			}
			else {
				$FirstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$LastNameErr = "Please fill up the lastname";
			}
			else {

				$LastName = $_POST['lname'];
				
			}


			if(empty($_POST['email'])) {
				$EmailErr = "Please fill up the email";
			}
			else {

				$Email = $_POST['email'];
				
			}

			if(empty($_POST['male']) && empty($_POST['female']) ) {
				$GenderErr = "Please Select Gender";
			}
			else {

				if(!empty($_POST['male']))
				{
					$Gender = $_POST['male'];
				}

				else
				{
					$Gender = $_POST['female'];
				}
	
			}
			

			if(empty($_POST['uname'])) {
				$UserErr = "Please fill up the User Name";
			}
			else {

				$UserName = $_POST['uname'];
				
			}

			if(empty($_POST['pass'])) {
				$PassErr = "Please fill up the Password";
			}
			else {

				$Password = $_POST['pass'];
				
			}


			if(empty($_POST['remail'])) {
				$REmailErr = "Please fill up the r-email";
			}
			else {

				$RMail = $_POST['remail'];
				
			}

			

			if($FirstNameErr == "" && $LastNameErr == "" && $EmailErr == "" 
				&& $UserErr==""&& $PassErr== "" &&$REmailErr= "") {

			   $filePath = "file.txt";
				
			   $f = fopen($filePath, "a");

		       fwrite($f, "$FirstName");

		       fclose($f);
			}
		}
	?>


	<h1>Registration Form</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

		<fieldset>
			<legend>Basic Information :</legend>
		<!-- FName  -->
        <label for="FirstName">First Name : </label>
		<input type="text" name="fname" id="FirstName" value="<?php echo $FirstName ?>">
		<p><?php echo $FirstNameErr; ?></p>
		<br>

		<!-- LName  -->
        <label for="LastName">Last Name : </label>
		<input type="text" name="lname" id="LastName" value="<?php echo $LastName ?>">
		<p><?php echo $LastNameErr; ?></p>
		<br>

		<!-- Gender  -->
		<label>Gender : </label>
		<input type="Radio" name="Gender" value="Male" id="male">
		<label for="male">Male</label>
		<input type="Radio" name="Gender" value="Female" id="female">
		<label for="female">Female</label>
		<p><?php echo $GenderErr; ?></p>
         <br>

         <!-- Email  -->
		<label for="Mail">Email : </label>
		<input type="email" name="email" id="Mail" value="<?php echo $Email ?>">
		<p><?php echo $EmailErr; ?></p>
		<br>

	</fieldset>

	<fieldset>
		
	   <legend>User Information :</legend>

        <!-- User Name  -->
		<label for="UserName">User Name : </label>
		<input type="text" name="uname" id="UserName" value="<?php echo $UserName ?>">
		<p><?php echo $UserErr; ?></p>
		<br>
        <!-- Password  -->
		<label for="Password">Password : </label>
		<input type="password" name="pass" id="Password" value="<?php echo $Password ?>">
		<p><?php echo $PassErr; ?></p>
		<br>
        <!-- Recovery Email  -->
		<label for="RMail">Recovery Email : </label>
		<input type="email" name="remail" id="RMail" value="<?php echo $RMail ?>">
		<p><?php echo $REmailErr; ?></p>
		<br>
        
    </fieldset>

    <input type="submit" value="Submit">

    </form>

</body>
</html>