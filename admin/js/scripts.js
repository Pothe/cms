ClassicEditor
      .create( document. querySelector('#body' ) )
    	.catch(Error => {
      console.error(error)}
    );


$(document).ready(function(event){
 $('#selectAllBoxes').click(function(){
 if(this.checked){
    $('.checkboxes').each(function(){
    this.checked = true;
    });
 }else{
  $('.checkboxes').each(function(){
    this.checked = false;
    });

 };

 });


// page loader

var div_box ="<div id='load-screen'><div id='loading'> </div></div>";
$("body").prepend(div_box);

$('#load-screen').delay(700).fadeOut(600, function(){
$(this).remove();

});

});


function loadusersOnline() {
  $.get('functions.php?usersonline=result',function(data) {
    $('.usersonline').text(data);
  });
  }
  setInterval(function(data) {
   loadusersOnline();
  }, 500);
