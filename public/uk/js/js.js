/*global console*/
$(function(){


  //Starting hundle scroll up
  $(".fa-chevron-up").fadeOut();
  $(window).scroll(function(){
       var  scrollup =$(window).scrollTop();
      if(scrollup < 300){
          $(".fa-chevron-up").fadeOut(1000);
      }
      else{
          $(".fa-chevron-up").fadeIn(1000);
      }
  });
  
  $(".fa-chevron-up").click(function(){ 
      $("html,body").animate({ scrollTop : 0 }, 1000);
      
  });
  
  //Ending hundle scroll up
      

/* Start Handling close and show introduction Youtube Video */
/*video introduction link*/
var srcs = "https://www.youtube.com/embed/vLnPwxZdW4Y";

$('.modal .closeX').click(function(){
  $('.modal .modal-body iframe').attr('src','');
})

$('.video .b-main').click(function(){
    $('.modal .modal-body iframe').attr('src',srcs);
})
/* End Handling close and show introduction Youtube Video */


console.log('dsssssssss')

$('.navbar .navbar-nav .nav-item').click(function(){

    $(this).addClass('activee').siblings().removeClass('activee');
    
})

});
        