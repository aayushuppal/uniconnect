<html>
<body>
<form action = "newfile.php" method="post">
	first name : <input id="fname" name="fname" type="text" /> 
	last name :	<input id="lname"  name="lname" type="text" />
	<input type = "submit" name = "submit" id = "sub" value ="submit"/>
</form>
	</body>
</html>
<?php
phpinfo();
function testFunc() {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	
	
	$conn = new MongoClient ( "ec2-54-68-28-28.us-west-2.compute.amazonaws.com:12345" );
	$db = $conn->mydb;
	$doc = array (
		"first_name" => $fname,
			"last_name" => $lname 
	);
	$col = $db->users;
	$col->insert($doc);
}
if (isset($_POST['submit'])) {
	echo "herer";
	testFunc();
}
?>