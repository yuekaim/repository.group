$( "#about-menu" ).on( "click", function() {
    $( ".about" ).first().slideDown();
    $( ".join" ).first().hide();
    $('#clicklayer').show();
});

$( "#clicklayer" ).on( "click", function() {
    $( ".about" ).first().slideUp();
    $( ".join" ).first().slideUp();
    $('#clicklayer').hide();
});

$( "#join-menu" ).on( "click", function() {
    $( ".join" ).first().slideDown();
    $( ".about" ).first().hide();
    $('#clicklayer').show();
});
