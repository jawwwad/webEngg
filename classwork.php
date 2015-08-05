
<?php    
if(isset($_POST['SubmitButton'])){ //check if form was submitted
$name = $_POST["n1"]; //get input text
$email = $_POST["n2"]; //get input text
$number = $_POST["n3"];
$gender = $_POST["gender"];
$DoB = $_POST["d"];
$MatricIns = $_POST["fname"];
$MatricMarks = $_POST["fname1"];
$FSCIns = $_POST["n10"];
$FSCmarks = $_POST["n11"];
$message = "Success! You entered name : $name,  email : $email ,gender : $gender Martric institute : $MatricIns, Martric marks : $MatricMarks, FSC institute: $FSCIns, FSC marks : $FSCmarks";
$myfile = fopen("newfile.txt", "w");
fwrite($myfile, $message);
fclose($myfile);
}
?>
<html>
<body>

<form action="" method="post" type ="user_form" oninput = "update()">
	<section>
		<fieldset>
			<legend> Personal Info </legend>
			Name: <input type="text" id="name" name="n1" required><br>
			Email: <input type="email" id="email" name="n2" required><br>
			Number: <input type="number" placeholder="03*********" id="number" name="n3" required><br>
			Gender::<br />
			Male:<input type="radio"  name="gender"
			name="gender"><br />
			Female:<input type="radio" value="Female" name="gender"> <br>
			DoB: <input type="date" min="2010-08-14" max="2010-08-14" value="1999-08-14" id="DoB" name="d" required> <br>
			Adress: <input type ="text"  id = "adress" name="n5" required> <br>
		</fieldset>
	</section>
	<section>
		<fieldset>
			<legend> Education </legend>
			<fieldset>
				<legend><b> Matric </b></legend>
				Institute: <input type="text" name="fname" required><br>
				Marks: <input type="Number"  min ="0" max = "800" name="fname1" required><br>
			</fieldset>
			<fieldset>
				<legend><b> FSC</b></legend>
				Institute: <input type="text" id="institute" name="n10"><br>
				Marks: <input type="text" min ="0" max = "800" id="marks" name="n11"><br>
			</fieldset>
		</fieldset>
	</section>
			<fieldset>
				<legend><b> Subject information </b></legend>
				Subject1Gpa :  <input type="number" min="0" max="4" id="gpa1" required><br>
				Subject2Gpa : <input type="number" min ="0" max = "4" id="gpa2" required><br>
				Subject3Gpa : <input type="number" id="gpa3" required><br>

			</fieldset>
	</section>
	<input type = submit name="SubmitButton">
		<p > <h1>Personal Info</h1> </p>
			<p id = "Name"> </p>
			<p id = "Email1"> </p>	
			<p id = "Number1"> </p>	
			<p id = "adress1"> </p>	
			<p id = "GPA" > </p>	


</form>
<script>

function update() {
	var Name1 = document.getElementById("name").value;
	var Email = document.getElementById("email").value;
	var Number = document.getElementById("number").value;
	var adress = document.getElementById("adress").value;
	var gp1 = document.getElementById("gpa1").value;	
	var gp2 = document.getElementById("gpa2").value;	
	var gp3 = document.getElementById("gpa3").value;
	var val1 = parseFloat(gp1);
	var val2 = parseFloat(gp2);
	var val3 = parseFloat(gp3);
	
	var gpa = (val1+val2+val3)/3
	
	document.getElementById("Name").innerHTML = "<b>Name :</b>" + Name1;
	document.getElementById("Email1").innerHTML = "<b>Email :</b>" + Email;
	document.getElementById("Number1").innerHTML = "<b> Phone Number:</b>" + Number;
	document.getElementById("adress1").innerHTML = "<b>Adress :</b>" + adress;
	document.getElementById("GPA").innerHTML = "<b>Gpa :</b>" + gpa;

}
</script>


</body>
</html>
