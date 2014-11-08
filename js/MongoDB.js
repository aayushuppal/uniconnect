/**
 * 
 */
use hack;
db.createCollection("user", {_id : 1, username : "admin", 
				password : "admin", first_name : "admin", 
				last_name : "admin", 
				user_association : 
					[{
						org_id : 1,
						user_type : "student"
					}]			
});

db.createCollection("organization", {_id : 1, 
				org_name : "UB", org_type : "college",
				user_count : "1"	
});

db.createCollection("question", { 
				_id : 1, title : "This is test Question Title?",
				desc : "Again This is test Description of Question",
				category : "", scope : "private", status : "answered",
				tags : ["test", "question", "answer"],
				by_user : 1, date : Date.now(),
				answer : [1, 2]
});

db.createCollection("answer", {
				_id : 1, title : "This is test answer.",
				desc : "This is the description of the answer",
				by_user : 1, date : Date.now(),
				question : [1]
});


function insertNewUser(dbName, colName, data) 
{
	var col = db.getSiblingDB(dbName).getCollection(colName);
	var insertData = "";
	for (var field in data)
	{
		insertData = insertData + field + ":" + data[field];
	}
	col.insert({insertData});
}