$(document).ready(function(){

var answerDiv = document.createElement('div');
answerDiv.id = 'answerDiv1';
$( '#answerSec').append(answerDiv);

// Now create and append to iDiv
var HeaderIn = document.createElement('header');
HeaderIn.id='header1';
HeaderIn.className = 'major';

// The variable iDiv is still good... Just append to it.
answerDiv.appendChild(HeaderIn);

var innerP = document.createElement('p');
innerP.id = 'innerP1';
HeaderIn.appendChild(innerP);

innerP.innerText = "<?php echo $title; ?>";



});