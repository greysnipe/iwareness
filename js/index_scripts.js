$(document).ready(function(){
	function scrollToAnchor(aid){
	    var aTag = $("a[name='"+ aid +"']");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}

	$('#button1').click(function(){
		scrollToAnchor("first");
	});

	$('#button2').click(function(){
		scrollToAnchor("second");
	});

	$('#button3').click(function(){
		scrollToAnchor("third");
	});

	$('#button4').click(function(){
		scrollToAnchor("fourth");
	});
	
});