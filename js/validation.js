var tooltipLeft, tooltipTop;
function removeTooltip(){
    $('.tipsy').remove();
}
function addTooltip(elm, msg, pos){
    removeTooltip();
    tooltipLeft = elm.offset().left;
    tooltipTop = elm.offset().top;
    $('body').append('<div class="tipsy"><div class="tipsy-arrow tipsy-arrow-s"></div><div class="tipsy-inner"></div></div>');

    if(pos == 'right'){  
        $('.tipsy').addClass('tipsy-w');
        $('.tipsy').css({
            left : tooltipLeft + elm.width() + 18,
            top : tooltipTop - elm.height()
        });
    }
    else if(pos == 'left'){
        $('.tipsy').addClass('tipsy-e');
        $('.tipsy').css({
            left : tooltipLeft - $('.tipsy').width()-18,
            top : tooltipTop - elm.height()-8
        });
    }
    $('.tipsy-inner').html(msg);
}

/* Validation Functions */
function isEmpty(str){
    if(str.length < 2){
        return false;
    }
    else if(str == 'Ad' || str == 'Soyad'){
        return false;
    }
    else{
        return true;
    }
}

function ilkharf(s) {
var s = s.toLowerCase();
if(s.substr(0, 1) == "ğ") { return false; }
else{return true;}
}

function vowelRegex(str) {
	var pattern	= /[aeıioöuü]{3,}/;
	var result	= pattern.exec(str.toLowerCase());
	if(result)
		return false;
	else
		return true;
}

function consonantRegex(str) {
	var pattern	= /[bcçdfgğhjklmnprsştvyzqwx]{4,}/;
	var result	= pattern.exec(str.toLowerCase());
	if(result)
		return false;
	else
		return true;
}

function validPhone(str){
    if(str.length < 14){
        return false;
    }
    else{
        return true;
    }
}

function email(s) {
    var emailPattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!emailPattern.test(s.toLowerCase())) { return false; }
    else{return true;}
}
function validMessage(str){
	if(str.length < 10){return false;}
	else{return true;}
}

function formValidation(){
    var userName = $("#user-name").val();
    var userPhone = $("#user-phone").val();
    var userMail = $("#user-mail").val();
       
    /* Kullanıcı Validasyonu */

    if(isEmpty(userName)){
        removeTooltip();
    }
    else{
        addTooltip($('#user-name'), 'Eksik ya da hatalı giriş yaptınız.','right');
        return false;
    }

    if(ilkharf(userName)){
        removeTooltip();
    }
    else {
        addTooltip($('#user-name'), 'Eksik ya da hatalı giriş yaptınız.','right');
        return false;
    }

    if(vowelRegex(userName)){
        removeTooltip();
    }
    else{
        addTooltip($('#user-name'), 'Eksik ya da hatalı giriş yaptınız.','right');
        return false;
    }

    if(consonantRegex(userName)){
        removeTooltip();
    }
    else{
        addTooltip($('#user-name'), 'Eksik ya da hatalı giriş yaptınız.','right');
        return false;
    }

  

    if(validPhone(userPhone)){
        removeTooltip();
    }
    else{
    	addTooltip($('#user-phone'), 'Eksik ya da hatalı giriş yaptınız.','right');
    	return false;
    }

    if(email(userMail)){
        removeTooltip();
    }
    else{
        addTooltip($('#user-mail'), 'Eksik ya da hatalı giriş yaptınız.','right');
        return false;
    }

        if($('input[name=terms]').is(':checked')){
        removeTooltip();
        return true;
    }
    else{
        addTooltip($('.check-text'), 'Katılım koşullarını onaylamalısınız.','left');
        return false;
    }
}



































