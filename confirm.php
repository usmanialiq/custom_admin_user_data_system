
<html>

<style>
body{
	background-image: url("image/anime-back.jpg");
	background-position: fixed;
	background-size: cover;
	background-repeat: no-repeat;
}
div{
	text-align: center;
	margin-left: 450px;
	color: white;
	margin-top: 250px;
	padding: 20px;
	background-color: #76b93b;
	border-radius: 5px;
	width: 400px;
}

</style>
<body>-
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "custome_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["fullname"])) {
		$nameErr = "Name is required";
	} else {
		$fullname = test_input($_POST["fullname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
			$nameErr = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
		}
	}
	if (empty($_POST["contact"])) {
		$contact = "";
	} else {
		$contact = test_input($_POST["contact"]);
	}

	if (empty($_POST["cnic"])) {
		$cnic = "";
	} else {
		$cnic = test_input($_POST["cnic"]);
	}

	if (empty($_POST["inititute"])) {
		$institute = "";
	} else {
		$institute = test_input($_POST["comment"]);
	}

	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
	} else {
		$gender = test_input($_POST["gender"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$fullname = mysqli_real_escape_string($conn, $_REQUEST['fullname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
$cnic = mysqli_real_escape_string($conn, $_REQUEST['cnic']);
$institute = mysqli_real_escape_string($conn, $_REQUEST['institute']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);

$sql = "INSERT INTO user_reg (fullname, email, contact, cnic, institute, gender)
VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[contact]',  '$_POST[cnic]', '$_POST[institute]', '$_POST[gender]')";

if ($conn->query($sql) === TRUE) {
	echo "<div><h2>Submission Successfull!</h2></div>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>
