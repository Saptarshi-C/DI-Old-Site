/*

    Welcome to DigitallyInked. I am Saptarshi C., the Supreme Overlord at DI. You have entered my lair. Tread very lightly.
    
*/

$(window).load(function(){
    
    "use strict";


//----------     Wake up Frankenstien     ----------//
    
    console.log("It's Aalllllllllllliiiiiiiiiiiiivveee.");


//----------     Add On-Load Animations     ----------//
    
    $(".di-logo-large .di-logo-container").addClass("active");
    $(".social-icons .social-icons-list li").addClass("active");
    $(".intro-text").addClass("active");
    $("nav.main-menu").addClass("active");
    $(".di-site .about-logos ul.logos li").addClass("active");
    $(".di-site .copyright-area").addClass("active");

//----------     Toggle Social Icons     ----------//    
    
    $(".social-icons .social-icons-list li").click(function(){

        $(".social-icons .social-icons-list li a").not($(this).children("a")).removeClass("active");
        $(".social-icons .social-icons-list li i").not($(this).children("i")).removeClass("active");
        $(this).children("a").toggleClass("active");
        $(this).children("i").toggleClass("active");
        
    });


//----------     Toggle Dropdown Menu on Small Screens     ----------//    
    
    $(".menu-control").click(function(){
        
        $(this).toggleClass("active");
        $("nav.main-menu ul").toggleClass("hidden-xs").toggleClass("menu-toggle");
    });
    

//----------     Add Menu active Class     ----------//
    
    $(".di-site.home nav.main-menu ul.menu li:nth-child(1) a").addClass("active");
    $(".di-site.about-di nav.main-menu ul.menu li:nth-child(2) a").addClass("active");
    $(".di-site.web-dev nav.main-menu ul.menu li:nth-child(3) a").addClass("active");   
    $(".di-site.contact-di nav.main-menu ul.menu li:nth-child(4) a").addClass("active");
    
//----------     Add Scroll Animations     ----------//
    
    $(".di-site.web-dev .to-web-dev-section").click(function(event){
       
        event.preventDefault();
        
        $("html,body").animate({
            scrollTop: $("#web-dev-showcase").offset().top
        },1000);
        
    });
    
    $(".di-site .scroll-to-top").click(function(event){
       
        event.preventDefault();
        
        $("html,body").animate({
            scrollTop: $("body").offset().top
        },1000);
        
    });
    
});