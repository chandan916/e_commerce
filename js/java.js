$(document).ready(function()
{
  $('.navbar-toggler').click(function(){
  $('.navbar-toggler').toggleClass('change')
})

//stick navgar less padding
$(window).scroll(function(){
  let position=$(this).scrollTop();
//  console.log(position);
if(position>=718){
  $('.navbar').addClass('navbar-background');
    $('.navbar').addClass('fixed-top');
}
else{
  $('.navbar').removeClass('navbar-background');
    $('.navbar').removeClass('fixed-top');
}
})
$('.nav-item a, .header-link, #back-to-top').click(function(link){         //a is for all link
  link.preventDefault();
  let target=$(this).attr('href');
  $('html,body').stop().animate({scrollTop:$(target).offset().top-25},3000);
  })

  $(window).scroll(function(){
    let position=$(this).scrollTop();
  //  console.log(position);
  if(position>=718){
    $('#back-to-top').addClass('scroll-top');
  }
  else{
       $('#back-to-top').removeClass('scroll-top');
  }
  })

  $("#header,.info").ripples({
  dropRadius: 20,
  perturbance: 0.03,
  });

  $(".parent-container").magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',

  // other options
  gallery:{
    enabled:true
  }
});
});
