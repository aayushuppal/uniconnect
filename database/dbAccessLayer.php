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

function getNextSequence($name){
	global $db;
	$db->counters->update(array("_id" => $name),array('$inc' => array('seq' => 1)));
	$ret = $db->counters->findOne(array("_id" => $name));
	return $ret["seq"];
}

function insert_user($username, $pass, $first, $last, $org, $type)
{
	$doc = array("_id" => getNextSequence("userid"), "username" => $username, "password" => $pass,
					"first_name" => $first, "last_name" => $last,
					"user_association" => array(array("org_id" => $org, 
												"user_type" => $type)));
	global $user;
	insert_doc($user, $doc);	
}


function insertOrganization($org_name, $org_type, $user_count) {
	global $org;
	$doc = array(
		"_id" => getNextSequence("orgid"), "org_name" => $org_name, "org_type" => $org_type,
			"user_count" => $user_count
	);
	insert_doc($org,$doc);
}

function addUserOrganization($user_id,$org_id, $user_type) {
	global $user,$org;
	$doc = array("user_association" => array(array("org_id" => $org_id, "user_type" => $user_type)));
	$user->update(array("_id" => $user_id),array('$push' => $doc));
	$res = $org->findOne(array("_id" => $org_id),array());
	$count = $res["user_count"];
	$org->update(array("_id" => $org_id),array('$set' => array("user_count" => $count + 1)));
}
insert_user("admn3", "admn3", "fce", "bok3", "mak3", "student6");
?>
