$(document).ready(function(){

 $('.userinfo').click(function(){
   
   var userid = $(this).attr('data-id');

   $.ajax({
    url: 'assets/modalDisplay.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
      
      $('.modal-body').html(response);
      
    }
  });
 });
});