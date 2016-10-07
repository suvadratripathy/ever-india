jQuery(document).ready(function ($) {
    $("#submit_enquiry_btn").click(function() { 
       
	    var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields		
		$("#enquiry-form input[required], #enquiry-form textarea[required], #enquiry-form select[required]").each(function(){
			$(this).css('background-color',''); 
			if(!$.trim($(this).val())){ //if this field is empty 
				$(this).css('background-color','#FFDEDE'); //change border color to #FFDEDE   
				proceed = false; //set do not proceed flag
			}
			//check invalid email
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('background-color','#FFDEDE'); //change border color to #FFDEDE   
				proceed = false; //set do not proceed flag				
			}	
		});

		$("#enquiry-form select[required]").each(function(){
			$(this).css('background-color',''); 
			if($(this).val() == 'select'){ //if this field is not selected 
				$(this).css('background-color','#FFDEDE'); //change border color to #FFDEDE   
				proceed = false; //set do not proceed flag
			}
		});
       
        if(proceed) //everything looks good! proceed...
        {
      		output = '<br><div class="success">Your message was successfully sent!</div><br>';
		$("#enquiry-form").slideUp();
		$("#enquiry_results").hide().html(output).slideUp();
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#enquiry_form  input[required=true], #enquiry_form textarea[required=true], #enquiry-form select[required]").keyup(function() { 
        $(this).css('background-color','');
        $("#enquiry_results").slideUp();
    });
});