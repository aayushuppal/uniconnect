use mydb;
db.createCollection("users1",{
	_id: Number,
	login_id: Number,
	first_name: String,
	last_name: String,
	user_type: [{
		org_id: String, user_type: String
	}],
	password: String
});
