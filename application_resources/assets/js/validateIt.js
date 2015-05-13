/*
 * validateIt validator
 * simple jquery based html form validator,
 * 1. Link this js file to the html file.
 * 2. Add 'validateIt' attribute to all the forms to be validated.
 * 3. Add the validation type you want using attributes for fields
 * 		> 'validateItRequired' for Required fields
 * 		> 'validateItEmail' for email fields
 * 		> 'validateItRegExp='[0-9]' ' for custom regular expression validations
 * 		> 'validateItMatchWith='otherFieldID' ' for match two fields
 * 4. Add fields to display the errors
 * 		> The field id should be 'nameOfTheInputField_error'
 * .......................
 * 5. Custom error messages
 * 		> validateItRequiredMsg=""
 * 		> validateItFieldDismatchMsg=""
 * 		> validateItEmailMsg=""
 * 		> validateItCustomMsg=""
 * 
 * check the sameple html file for more details!
 * ***you should always give an unique id for every form in a page
 * -dulaWnRp-
 */

$(document).ready(function(){
	//$("#output").html($("#output").html()+"-|");
    //$('[validateIt]').html('aa');
    $('[validateIt]').each(function() {
		f = this;
		var form = $("#"+$(f).attr('id') );
		//$( form ).find('input[type="submit"]').attr('type', 'button')
		//.click(validateAll());
		
		$( form ).find('input[validateItSubmitBtn]')
		.click( function(){ validateIt_func(this, form, true); });
		
		
		$.each($('input, select ,textarea', form),function(){
			//alert($(this).attr('id'));
			$(this).focusout(function(){ validateIt_func(this, form, false); });
		});
	});
});

function validateIt_func(btn, form, btnClick){
	valid=true;
	$(form).find('[validateItRequired]').each(function(){
		element = this;
		if($(element).val()=="" ){
			valid=false;
			msg="You should fill this field !";
			if($(element).attr('validateItRequiredMsg'))
				msg = $(element).attr('validateItRequiredMsg');
			$( "#"+$(element).attr('id') +"_error").html(msg);
		}
		else 
			$( "#"+$(element).attr('id') +"_error").html("");
	}); 
	
	$(form).find('[validateItMatchWith]').each(function(){
		element = this;
		if( ($(element).val() != $( "#"+$(element).attr('validateItMatchWith') ).val() ) ){
			valid=false;
			msg = 'Fields doesn\'t match !';
			if($(element).attr('validateItFieldDismatchMsg'))
				msg = $(element).attr('validateItFieldDismatchMsg');
			
			
			
			$( "#"+$(element).attr('id') +"_error").html(msg);
		}
		else
			$( "#"+$(element).attr('id') +"_error").html("");
		
	}); 
	
	$(form).find('[validateItEmail]').each(function(){
		element = this;
		if( !validateEmail($(element).val() ) ){
			valid=false;
			msg="Invalid Email address !";
			if($(element).attr('validateItEmailMsg'))
				msg = $(element).attr('validateItEmailMsg');
			$( "#"+$(element).attr('id') +"_error").html(msg);
		}
		else
			$( "#"+$(element).attr('id') +"_error").html("");
		
	}); 
	
	$(form).find('[validateItRegExp]').each(function(){
		element = this;
		if( !validateCustomExp($(element).val() , $(element).attr('validateItRegExp') ) ){
			valid=false;
			msg = 'Error in this field !';
			if($(element).attr('validateItCustomMsg'))
				msg = $(element).attr('validateItCustomMsg');
			$( "#"+$(element).attr('id') +"_error").html(msg);
		}
		else
			$( "#"+$(element).attr('id') +"_error").html("");
	}); 
	if(valid==true){
            //alert("aa" + $( form ).find('input[validateItSubmitBtn]').attr('validateItSubmitBtn') );
		if($( form ).find('input[validateItSubmitBtn]').attr('validateItSubmitBtn')=='noSubmit'){
			
                        a = $(btn).attr('validateItCallBack');
			window[a]();
		}
		else if(btnClick)
			$(form).submit();
	}
}

function validateEmail(email) { 
  // http://stackoverflow.com/a/46181/11236
  
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateCustomExp(txt, regExp) { 
  	regExp = regExp.replace('/', '/');
	var re = new RegExp(regExp);
	return re.test(txt);
}
function notifyIt(notification){
	color = "#DBBDFF";
	id = Math.ceil(Math.random()*100000000000) +"_notification";
	var div = "<div hidden style=\"opacity:0.9; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#000000;\" id=\""+id+"\">"+
	"<div hidden style=\"border-radius:10px; z-index:100000;position:absolute; padding:20px; background-color:"+color+"; top: 50%; left: 50%; transform: translate(-50%, -50%);\" id=\""+id+"_notification\">"+
	"<div style=\"position:relative; top:0px; left:100%; margin-top:-20px; margin-right:-20px; width:20px; height:20px; border-radius:5px; background-color:#FF0000;\" id=\""+id+"_close_btn\"></div></div>"+
	"</div>";
    
    $("body").append(div);
    
    $("#"+id+"_notification").html($("#"+id+"_notification").html()+notification);
    element = $("#"+id);
    $(element).fadeIn(500,function(){
		$("#"+id+"_notification").slideDown();
	});
    $("#"+id+"_close_btn").click(function(){
		btn = this;
		$("#"+id+"_notification").slideUp(function(){
			$(btn).parent().parent().fadeOut(function(){$(this)	.remove() });
		});
	});
}
