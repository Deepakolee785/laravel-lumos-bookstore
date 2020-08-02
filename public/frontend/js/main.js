// Navigation updown

// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById('navigation').style.top = '0';
//   } else {
//     document.getElementById('navigation').style.top = '-80px';
//   }
//   prevScrollpos = currentScrollPos;
// };

// display search bar
$(document).scroll(function() {
  var y = $(this).scrollTop();
  //   console.log(y);
  if (y > 170) {
    $('.nav-searchbar').removeClass('hide');
  } else {
    $('.nav-searchbar').addClass('hide');
  }
});

$(window).scroll(function() {
  if ($(window).scrollTop() > 800) {
    $('#toTop').addClass('show');
  } else {
    $('#toTop').removeClass('show');
  }
});
$('#toTop').click(function() {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});


$(function(){
  $('.nav-link').each(function(){
      if ($(this).prop('href') == window.location.href) {
          $(this).addClass('active-nav'); $(this).parents('li').addClass('active-nav');
      }
  });
});
