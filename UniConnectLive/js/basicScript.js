$(document).ready(function(){

var qtitle = q.title;
var qdesc = q.desc;

var Qid = q._id;
var qdivname = "Qdiv"+Qid;
var hdrInQname = "hInQ"+Qid;

var qdiv = document.createElement('div'); 
qdiv.id = qdivname;
$( '#answerSec').append(qdiv);  //answerDiv id = answerDiv1

var hdrInQ = document.createElement('header');
hdrInQ.id = hdrInQname;
hdrInQ.className = "major";
$(qdiv).append(hdrInQ);

var h3InHdr = document.createElement('h3');
h3InHdr.id = 'h3InHdr';
$(hdrInQ).append(h3InHdr);

var h4InHdr = document.createElement('h4');
h4InHdr.id = 'h4InHdr';
$(hdrInQ).append(h4InHdr);


h3InHdr.innerText = qtitle;
h4InHdr.innerText = qdesc;


var answerCount = q.answer.length;

for (i=1; i<=answerCount; i++){

	var answerDivName = "AnsDivQ"+Qid+"A"+i;
	var hdrInAnsName = "hdrInAnsQ"+Qid+"A"+i;
	var pInhdrInAnsName = "pInhdrInAnsQ"+Qid+"A"+i;
	var h4InhdrInAnsName = "h4InhdrInAnsQ"+Qid+"A"+i;

	var Ansdiv = document.createElement('div'); 
	var answerTitle = q.answer[i-1].title;
	var answerDesc = q.answer[i-1].desc;

	Ansdiv.id = answerDivName;
	$('#answerSec').append(Ansdiv);  

	var hdrInAns = document.createElement('header'); 
	hdrInAns.id = hdrInAnsName;
	hdrInAns.className = "major";
	$(Ansdiv).append(hdrInAns); 


	var pInhdrInAns = document.createElement('p'); 
	pInhdrInAns.id = pInhdrInAnsName;	
	$(hdrInAns).append(pInhdrInAns);  

	pInhdrInAns.innerText = answerTitle+answerDesc;

}

		$( "#PostAnswer" ).click(function() {
			$.ajax({
		    url: 'dbAccessLayer.php',
		    type: 'post',
		    data: { "desc": "sadasida asdnas dasn  asnda vfhasdas."},
		    success: function(response) {
		     alert(response); 
		 }

		});

	});

});