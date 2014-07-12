$('#read-more-content').addClass('hide');

$('button#read-more-toggle').on('click', function() {
    $('#read-more-content').fadeToggle().toggleClass('hide');
    $(this).html($(this).html() == "Less" ? "More" : "Less");
    $('[data-spy="scroll"]').each(function () {
         var $spy = $(this).scrollspy('refresh')
      });
});