// script assumes that target db is being used
db.counters.insert(
		   {
		      _id: "userid",
		      seq: 0
		   });
db.counters.insert(
			{
			   _id: "orgid",
			   seq: 0
		   });
db.counters.insert(
		   {
			   _id: "quesid",
			   seq: 0
		   });
db.counters.insert(
		   {
			   _id: "ansid",
			   seq: 0
		   });
db.counters.insert(
		   {
			   _id: "count",
			   seq: 0
		   });
function getNextSequence(name) {
	   var ret = db.counters.findAndModify(
	          {
	            query: { _id: name },
	            update: { $inc: { seq: 1 } },
	            new: true
	          }
	   );
	   return ret.seq;
	}
db.system.js.save(
        { _id: "getNextSequence",
          value : function(name) {
       	   var ret = db.counters.findAndModify(
     	          {
     	            query: { _id: name },
     	            update: { $inc: { seq: 1 } },
     	            new: true
     	          }
     	   );
     	   return ret.seq;
     	}
        }
      );


db.createCollection("organization");
db.organization.insert({
				_id: getNextSequence("orgid"), org_name: "UB", org_type: "University",
				user_count: 0	
});

db.createCollection("user");
db.user.insert({_id: getNextSequence("userid"), username : "admin", 
				password : "admin", first_name : "admin", 
				last_name : "admin", 
				user_association : 
					[{
						org_id : 1,
						user_type : "student"
					}]			
});

db.createCollection("answer");
db.answer.insert({
				_id : getNextSequence('ansid'), title : "This is test answer.",
				desc : "This is the description of the answer",
				by_user: 1, date: new ISODate(),
				question : [1]
});


db.createCollection("question");
db.question.insert( { 
				_id : getNextSequence('quesid'), title : "This is test Question Title?",
				desc : "This is test Description of Question",
				category : "", scope : "private", status : "answered",
				tags : ["test", "question", "answer"],
				by_user :1, date : new ISODate(),
				answer : [1]
});



