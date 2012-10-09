function showLoader(){
	$('.overlay, .loader').fadeIn(300);
}
function hideLoader(){
	$('.overlay, .loader').fadeOut(300);	
}
function showPrivacy(){
	$('.overlay, #privacyPopup').fadeIn(300);
}
function closePrivacy(){
	$('.overlay, #privacyPopup').fadeOut(300);
}

$(document).ready(function(){

	/* Tipsy Clear */
    $('input, textarea, .selectbox').click(function(){
    	$('.tipsy').remove();
    });
    
     /* Masked Input */
    $("#user-phone").mask("0 (599) 999 99 99",{placeholder:"_"});
  
  	/* İlk Validasyon */
	$('#logingo').click(function(){
        if(formValidation()){
			showLoader();
        	setTimeout("hideLoader()",2000);
			$('#homepage').hide();
			$('#successful').fadeIn(300);
        }
    });


	$("#checkbox").uniform({
	});

	$('#privacyclick').click(function(){
		showPrivacy();
	})
	$('#close').click(function(){
		closePrivacy();
	});


});