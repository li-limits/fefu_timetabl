$(document).ready(function() {
  $('a.log').click( function(event){
    event.preventDefault();
    $('#overlay').fadeIn(297,	function(){
      $('#login_window') 
      .css('display', 'block')
      .animate({opacity: 1}, 198);
    });
  });

  $('a.CreateAcc').click( function(event){
    event.preventDefault();
    $('#login_window').animate({opacity: 0}, 198, function(){
      $(this).css('display', 'none');
      $('#newacc_window') 
      .css('display', 'block')
      .animate({opacity: 1}, 198);
    });
  });

  $('#login_close, #overlay').click( function(){
    $('#login_window').animate({opacity: 0}, 198, function(){
      $(this).css('display', 'none');
      $('#overlay').fadeOut(297);
    });
  });

  $('#newacc_close, #overlay').click( function(){
    $('#newacc_window').animate({opacity: 0}, 198, function(){
      $(this).css('display', 'none');
      $('#overlay').fadeOut(297);
    });
  });

  $('#login_button').click( function() {
    var user_login = document.getElementById("login_field").value;
    alert(user_login);
  })
});