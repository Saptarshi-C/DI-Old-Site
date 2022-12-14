/*

    Welcome to DigitallyInked. I am Saptarshi C., the Supreme Overlord at DI. You have entered my lair. Tread very lightly.
    
*/

jQuery(window).load(function () {
    
    'use strict';
    
    console.log("This is also Aalllllllllllliiiiiiiiiiiiivveee.");
    console.log("Also, all hail RegEx");
    
    jQuery(".contact-form #contact-form-main").on('submit',function (submitEvent) {
    
        submitEvent.preventDefault();
        
        jQuery(".validation-response").empty();
        jQuery(".validation-response").addClass("hidden");

        
        var valid = true;



/*

    RegEx - Only check for valid characters. 
    Anything else will drive you nuts. No, really. I mean it. 
    Leave the rest to spam filters. Save yourself your sanity.
    You have been warned.

*/


        
        var nameRegExp = /^[a-zA-Z\u00A0-\uD77F\uF900-\uFDCF\uFDF0-\uFFEF\s\.\-\']+$/;
        var companyRegExp = /^[a-zA-Z0-9\u00A0-\uD77F\uF900-\uFDCF\uFDF0-\uFFEF\s\.\-\'\&]+$/;
        var urlRegExp = /^https?:\/\/[a-zA-Z0-9\u00A0-\uD77F\uF900-\uFDCF\uFDF0-\uFFEF\.\-\/\+\@\#]+$/;
        var phoneRegExp = /^[0-9\s\.\+]+$/;        
        var emailRegExp = /^[a-zA-Z0-9\u00A0-\uD77F\uF900-\uFDCF\uFDF0-\uFFEF\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\.]+\@[a-zA-Z0-9\u00A0-\uD77F\uF900-\uFDCF\uFDF0-\uFFEF\-\.]+$/;

        
        
/*
    
    I spent an entire day trying to figure the exact RegEx for E-Mail & URL out, and then remembered that I never intended to do that. Whooptie-fucking-do.
    On the brighter side, I have a much better working idea of IETF rules regarding email & domain name formation. Why *is* this useful? Who knows? I don't.
    On the *less* bright side, I have become ever so slightly crazy. I blame them UFOs.
    
*/
            
/*

    The Message area does not need validation, as it is impossible to predict what the user wants to type and say. Sanitize input at the backend (this sounds dirtier than intended).
    Rest is for spam filters to deal with. And also for the receiver to not be an idiot and open/download every email and click on links like it's Christmas everyday. Can you hear the jingling bells?

*/        


        
        var customerName = jQuery("#contact-form-main #customer-name").val().replace(/\\/g,"-");
        var customerCompany = jQuery("#contact-form-main #customer-company").val().replace(/\\/g,"-");
        var websiteURL = jQuery("#contact-form-main #website-url").val().replace(/\\/g,"-");
        var customerEMail = jQuery("#contact-form-main #email-id").val().replace(/\\/g,"-");
        var customerPhoneNumer = jQuery("#contact-form-main #phone-number").val().replace(/\\/g,"-");
        var customerMessage = jQuery("#contact-form-main #customer-message").val().replace(/\\/g,"-");
        
        var formPostData = {};

        if(nameRegExp.test(customerName)===false){
            valid = false;
            jQuery(".validation-response").removeClass("hidden");
            jQuery(".validation-response").append("<p>Please Enter a Valid Name. Allowed characters are letters, space, period, dash, single-quote/apostrophe.</p>");
        }
        
        if(customerCompany === ""){
            customerCompany = "None Provided";
        }
        else if(companyRegExp.test(customerCompany)===false){
            valid = false;
            jQuery(".validation-response").removeClass("hidden");            
            jQuery(".validation-response").append("<p>Please Enter a Valid Company Name. Allowed characters are letters, numbers, space, period, dash, single-quote/apostrophe and the ampersand/and-symbol.</p>");
        }
        
        if(websiteURL == ""){
            websiteURL = "None Provided";
        }
        else if(urlRegExp.test(websiteURL)===false){
            valid = false;
            jQuery(".validation-response").removeClass("hidden");
            jQuery(".validation-response").append("<p>Please Enter a Valid URL. Allowed characters are letters, numbers, period, dash, slash, plus, at symbol and hash. URLs must start with http:// or https://</p>");
        }
        
        if(emailRegExp.test(customerEMail)===false){
            valid = false;
            jQuery(".validation-response").removeClass("hidden");
            jQuery(".validation-response").append("<p>Please Enter a Valid Email-ID. Allowed characters are letters, numbers, all allowable special characters as defined by IETF. Must have a username, followed by the at-symbol, followed by the domain name. The domain name part can only have letters, numbers, dash and period.</p>");            
        }
        
        if(customerPhoneNumer == ""){
            customerPhoneNumer = "None Provided";
        }
        else if(phoneRegExp.test(customerPhoneNumer)===false){
            valid = false;
            jQuery(".validation-response").removeClass("hidden");
            jQuery(".validation-response").append("<p>Please Enter a Valid Phone Number. Allowed characters are numbers, space, period and plus.</p>");
        }
        
        if(valid===true){
            
            formPostData['customerName']=customerName;
            formPostData['customerCompany']=customerCompany;
            formPostData['customerWebsite']=websiteURL;
            formPostData['customerEMailID']=customerEMail;
            formPostData['customerPhoneNumber']=customerPhoneNumer;
            formPostData['customerMessage']=customerMessage;

            jQuery.ajax({
                        url: 'php/mail.php',
                        type: 'POST',
                        data: formPostData,
                        success: function (return_value)
                        {
                            jQuery("#contact-form-main #customer-name").val("");
                            jQuery("#contact-form-main #customer-company").val("");
                            jQuery("#contact-form-main #website-url").val("");
                            jQuery("#contact-form-main #email-id").val("");
                            jQuery("#contact-form-main #phone-number").val("");
                            jQuery("#contact-form-main #customer-message").val("");
                            jQuery(".validation-response").removeClass("hidden");                            
                            jQuery(".validation-response").empty();
                            jQuery(".validation-response").append("<p>"+ return_value +"</p>");
                            $("body").animate({ scrollTop:$("nav.main-menu").offset().top }, 200);
                            console.log(return_value);
                        },
                        error: function ()
                        {
                            console.log("AJAX Says: PHP is a massive failure. PHP has nothing useful to say whatsoever. That scumlord.");
                        }
            });
        }
        
        else{
            
            $("body").animate({ scrollTop:$("#contact-form-main").offset().top - 100 }, 200);
            console.log("This has been a worthless attempt. You are a massive failure.");
        }
        
    });
        
});


