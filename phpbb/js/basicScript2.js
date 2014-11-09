$(document).ready(function(){

$('.QuesBtn').click(function(){
  $('.QuesBtn').hide();
  $('.QuesPop').show();
});

$('#subBtn').click(function(){
  var qval = $.trim($('#qval').val());

  if(qval.length != 0){

  $('.QuesPop').hide();
  $('.QuesBtn').show();

}
}); 


});