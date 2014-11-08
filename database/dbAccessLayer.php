<?php
function dbConn() {
	$conn = new MongoClient ( "ec2-54-68-28-28.us-west-2.compute.amazonaws.com:12345" );
	$db = $conn->kuchbhi;
	global $user,$org,$ques,$ans;
	$user = $db->user;
	$org = $db->organization;
	$ques = $db->question;
	$ans = $db->answer;	
}


function insert_doc($col, $doc) {
	$col->insert($doc);
}

?>
