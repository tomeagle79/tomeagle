<?php

/*

Template Name: Contact page

*/

?>




<?php 
    
    $error=""; $successMessage="";

    if($_POST){

        if(!$_POST["email"]){
            $error .="An email address is required.<br>";
        }

        if(!$_POST["subject"]){
            $error .="A subject is required.<br>";
        }

        if(!$_POST["content"]){
            $error .="A message is required.<br>";
        }

        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .="Your email address is not valid";
            }

        if($error != ""){
            
            $error = '<div class="alert alert-danger" role="alert"><p><strong>There are errors in your form:</strong></p>'.$error.'</div>';
            
            } else {

                $emailTo = "tom@tomeagle.io";

                $subject = $_POST["subject"];

                $content = $_POST["content"];

                $headers = "From: ".$_POST["email"];

                if(mail($emailTo, $subject, $content, $headers)){

                    $successMessage = '<div class="alert alert-success" role="alert"><p><strong>Your message was sent :)</strong></p></div>';

                } else {
                    $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message could not be sent :( <br>Please try again later</strong></p></div>';
                }

            }


        }

        


?>

<?php get_header(); ?>

	<section>
        <div id="contact" class="container">
    		<h1><?php the_title(); ?></h1>

    	 	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    				<?php the_content(); ?>
    		<?php endwhile; endif; ?>
        </div>
	</section>


<?php get_footer(); ?>