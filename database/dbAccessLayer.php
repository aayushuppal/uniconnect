<?php

	$conn = new MongoClient ( "ec2-54-68-28-28.us-west-2.compute.amazonaws.com:12345" );
	$db = $conn->kuchbhi;
	$user = $db->user;
	$org = $db->organization;
	$ques = $db->question;
	$ans = $db->answer;	


function insert_doc($col, $doc) 
{
	$col->insert($doc);
}

function insert_user($username, $pass, $first, $last, $org, $type)
{
	$doc = array("username" => $username, "password" => $pass,
					"first_name" => $first, "last_name" => $last,
					"user_association" => array(array("org_id" => $org, 
												"user_type" => $type)));
	global $user;
	insert_doc($user, $doc);	
}
insert_user("admn3", "admn3", "fce", "bok3", "mak3", "student6");
?>
