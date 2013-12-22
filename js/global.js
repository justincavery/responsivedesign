// FitText running on certain headings on the site
  $( ".feature-story h1" ).fitText(1.2);
  $( ".feature-story h1 span" ).fitText(0.8);

// Navigation Toggle for main and sub navigtaion

$('a.toggle-menu').click(function() {
		$('nav').toggleClass('nav-toggle');
		});
  var $subnav = $('a.toggle-subnav');
      events = 'click.fndtn';
  if ($subnav.length > 0) {
    $('a.toggle-subnav').on(events, function (e) {
      e.preventDefault();
      $('body').toggleClass('subnav-active');
    });
  }
// Fitvids targeting content within .fitvids class elements
  $(document).ready(function(){
    $(".fitvids").fitVids();
  });


// Home page show/hide boxes
$('#introrwd').toggle();
$('#intermediate').toggle();
//$('.close-icon').this().toggle();

$('#clicknew').click(function() {
  $('#introrwd').slideToggle('slow', function() {
    $('html, body').animate({
                        scrollTop: $("#introrwd").offset().top
                         }, 400);
  });
});

$('#clickint').click(function() {
  $('#intermediate').slideToggle('slow', function() {
    $('html, body').animate({
                       scrollTop: $("#intermediate").offset().top
                        }, 400);
  });
});
