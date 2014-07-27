$(document).ready(function(){
	function scrollToAnchor(aid){
	    var aTag = $("a[name='"+ aid +"']");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}

	$('#button1').click(function(){
		scrollToAnchor("second");
	});

	$('#button2').click(function(){
		scrollToAnchor("third");
	});

	$('#button3').click(function(){
		scrollToAnchor("first");
	});
	
});