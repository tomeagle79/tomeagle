// Script to show/hide the navigation bar

jQuery(document).ready(function($){
        
        $("#menu-icon").click(function(){
        
            $("nav").toggle();
        
        });

       
        $("ul#topnav li a").click(function(){
        // alert("Link is working");
            $("nav").hide();
        
        });

  });

// Script to animate the typing effect on homepage

jQuery(document).ready(function($){

        $(function(){
        	$(".element").typed({
        		strings: ["Hi :)", "I'm Tom.", "I'm a front-end web developer", "I love producing beautiful and functional websites.","Get in touch to discuss your project"],
        			typeSpeed: 0
        	});
        });

  });

// Script to check for correct completion of form fields

    jQuery(document).ready(function($){
        
            $("form").submit(function() {
                
                var error = "";

                if ($("#email").val() == ""){
                    error+= "The email field is required<br>";
                }

                if ($("#subject").val() == ""){
                    error+= "The subject field is required<br>";
                }

                if ($("#content").val() == ""){
                    error+= "The content field is required<br>";
                }

                if(error != ""){
                    $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There are errors in your form</strong></p>' + error + '</div>');

                    //return true;

                } else {

                    //return false;

                    $("form").unbind('submit').submit();
                }

            });

     });

     
        
      // Google Analytics: change UA-XXXXX-X to be your site's ID.
     
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-92306374-1','auto');ga('send','pageview');
        



        // Loads website into div

  
      jQuery(document).ready(function($){ 
        
        $("#load").click(function(){
        
            $("#ajax").toggle();
            $("#ajax").attr("src", "http://www.tomeagle.io/");
        
        });

      });

       
       

  