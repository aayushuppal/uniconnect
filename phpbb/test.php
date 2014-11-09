<?php
$conn = new MongoClient ( "ec2-54-68-28-28.us-west-2.compute.amazonaws.com:12345" );
	$db = $conn->kuchbhi; //schema 
	$user = $db->user;
	$org = $db->organization;
	$ques = $db->question;
	$ans = $db->answer;	

	
	$ret = $ques->findOne(array());
	$text1 = $ret["title"];
	$text2 = $ret["desc"];
	
?>
<html>
<body>
<table>
<tr>
<td>
<?php echo $text1; ?>
</td>
</tr>
<tr>
<td>
<?php echo $text2; ?>
</td>
</tr>
</table>
</body>
</html>