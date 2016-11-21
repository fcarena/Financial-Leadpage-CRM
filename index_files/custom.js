// popover
$('html').on('click', function(e) {
  if (typeof $(e.target).data('original-title') == 'undefined' &&
     !$(e.target).parents().is('.popover.in')) {
    $('[data-original-title]').popover('hide');
  }
});




$(function ()  
{
  $('#popover_date').popover(
  {
     trigger: 'click',
     html: true,
     placement: 'top',
     title: 'Date of Next Payday',
     content: 'Please select a normal business day for your Date of Next Payday (no weekends or holidays).'
  });
});

$(function ()  
{
  var image='<img style="width:350px; height:175px;" src="images/check.png"">';
  $('#popover_check').popover(
  {
     trigger: 'click',
     html: true,
     placement: 'top',
     title: 'Your Account Details can be found on a Personal Check',
     content: image
  });
});


// FAQs - switches the arrow icon when opened
$(document).ready(function(){
$('#accordion .panel-collapse').on('shown.bs.collapse', function () {
    $(this).prev().find(".fa").removeClass("fa-arrow-circle-o-right").addClass("fa-arrow-circle-o-down");
});
$('#accordion .panel-collapse').on('hidden.bs.collapse', function () {
    $(this).prev().find(".fa").removeClass("fa-arrow-circle-o-down").addClass("fa-arrow-circle-o-right");
});
});


// randomize the testimonials

$('.item').eq(Math.floor((Math.random() * $('.item').length))).addClass("active");



// control the testimonials carousel time
$(document).ready(function () {
    $(function () {
        $('#carousel-testimonials').carousel({
            interval: 1000
        });
    });
});




