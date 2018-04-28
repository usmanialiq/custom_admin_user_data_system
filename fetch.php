<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search Users</title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<style>
		table{
			width: 100%;
			font-family: monospace;
			font-size: 20px;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even).{
			background-color: #f2f2f2;
		}
		input{
			padding: 5px;
			width: 880px;
			margin-bottom: 20px;
			margin-top: 20px
		}
		td{
			border: 1px solid #babbbb;

		}
	</style>
</head>
<body>

   <br>
   <a href="index.html" style="float: right; padding-right: 40px; text-decoration: none;">Register a User</a><br>
   <h1 style="text-align: center;">Custom User Registration System</h1>
   <h3 style="text-align: center;">Registration Panel </h3>
   <div class="container" style="width: 1100px;margin-left: 100px">

   	<div align="center">
   		<input type="text" placeholder="Search Users" name="search" id="search" class="form-control" >
   	</div>
	<table id="user_table">
		<tr>
			<th id="th">Id</th>
			<th id="th">Full Name</th>
			<th id="th">Email</th>
			<th id="th">Contact No.</th>
			<th id="th">CNIC</th>
			<th id="th">Institute/Company</th>
			<th id="th">Gender</th>
		</tr>

		<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "custom_system");
if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
}

$sql = "SELECT id, fullname, email,contact, cnic, institute, gender from user_reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fullname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["cnic"] . "</td><td>" . $row["institute"] . "</td><td>" . $row["gender"] . "</td></tr>";
	}
	echo "</table>";
} else {
	echo "Zero Results";
}

$conn->close();
?>
	</table>

    </div>

    <script>
    	$(document).ready(function(){
    		$('#search').keyup(function(){
    			search_table($(this).val());

    		});

    		function search_table(value){
    			$('#th').show();
    			$('#user_table tr').each(function(){
    				var found = 'false';
    				$(this).each(function(){
    					if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0){
    						found = 'true';
    					}
    				});
    				if(found == 'true'){
    					$(this).show();
    					$('#th').show();
    				}
    				else{
    					$(this).hide();
    					$('tr #th').show();
    				}
    			});
    		}
    	});
    </script>

</body>
</html>