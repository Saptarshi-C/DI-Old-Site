<!doctype html>

<?php include "partials/di-page-top-comments.php";?>

<?php
    date_default_timezone_set('Asia/Kolkata');
?>
<html>
    
    <head>
<?php include "partials/di-head-section.php";?>
        <title>Contact - DigitallyInked / Saptarshi Chakraborty</title>
    </head>
    
    <body class="di-site contact-di">
        <div class="background">
        </div>
<?php include "partials/di-header.php";?>
        <div class="main-content contact-page-wrapper container-fluid">
            
            <div class="contact-info container">
                <div class="contact-info-border">
                    <h2>Contact Information<span title="Exactly what this looks like." class="fa fa-info-circle"></span></h2>
                    <div class="row contact-telegram">
                        <h2>Telegram</h2>
                        <i class="fa fa-paper-plane"></i>
                        <div class="more-info">
                            <a title="IM me using Telegram" href="https://www.telegram.me/DigitallyInked" target="_blank">telegram.me/DigitallyInked</a>
                        </div>
                    </div>
                    <div class="row contact-email">
                        <h2>EMail</h2>
                        <i class="fa fa-envelope"></i>
                        <div class="more-info">
                            <a title="Send me an EMail" href="mailto:saptarshi.c@digitallyinked.in">saptarshi.c@digitallyinked.in</a>
                        </div>
                    </div>
                    <div class="row contact-phone">
                        <h2>Phone / WhatsApp</h2>
                        <i class="fa fa-whatsapp"></i>
                        <div class="more-info">
                            <a title="Use the Dialer to call me" href="tel:+918334974261">+91 83349 74261</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="contact-form" class="contact-form container">
                <div class="contact-form-border">
                    <form id="contact-form-main" name="contact_form" method="POST" enctype="multipart/form-data">
                        <h2>Contact Form<span title="Please fill up the form." class="fa fa-tasks"></span></h2>
                        <div class="validation-response highlight hidden">
                        </div>
                        <fieldset>
                            <div class="customer-name-field">
                                <label for="customer-name">What's your name?<span class="highlight">&#42;</span></label>
                                <input id="customer-name" name="customer_name" type="text" placeholder="eg. John Doe" maxlength="100" required/>
                            </div>
                            <div class="customer-company-field">
                                <label for="customer-company">What organization do you represent?</label>
                                <input id="customer-company" name="customer_company" type="text" placeholder="eg. Abc Enterprise Ltd." maxlength="50" />
                            </div>
                            <div class="website-url-field">
                                <label for="website-url">Do you have any website?</label>
                                <input id="website-url" name="website_url" type="url" placeholder="eg. http://www.example.com" maxlength="100" spellcheck="false" />
                            </div>
                        </fieldset>             
                        <fieldset>
                            <div class="email-id-field">
                                <label for="email-id">Your e-mail id is<span class="highlight">&#42;</span></label>
                                <input id="email-id" name="email_id" type="email" placeholder="eg. johndoe@some-email-id.com" maxlength="100" spellcheck="false" required/>
                            </div>
                            <div class="phone-number-field">
                                <label for="phone-number">Your contact number is</label>
                                <input id="phone-number" name="phone_number" type="text" placeholder="eg. 033 2 123 4567 or +91 98300 12345" maxlength="20" spellcheck="false" />
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="customer-message-field">
                                <label for="customer-message">What would you like to talk to me about?<span class="highlight">&#42;</span></label>
                                <textarea id="customer-message" name="customer_message" placeholder="Your questions/comments go here ...... " maxlength="1500" required></textarea>
                            </div>
                        </fieldset>
                        <fieldset class="submit-area">
                            <input id="submit-button" type="submit" value="I'm All Done!"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        
<?php include "partials/di-to-top.html";?>        
<?php include "partials/di-footer-area.php";?>
<!--        Scripts Start       -->
<?php include "partials/di-page-end-scripts-load.php";?>
    <script async src="js/digitallyinked_validate.js"></script>
    
<!--        Scripts End         -->           
    </body>
 
</html>