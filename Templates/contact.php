<?php
/*
    Template name: Contact us
*/  
get_header();
 //response generation function
 $response = "";
 
 //function to generate response
 function my_contact_form_generate_response($type, $message){

   global $response;

   if($type == "success") $response = "<div class='success'>{$message}</div>";
   else $response = "<div class='error'>{$message}</div>";

 }
 //response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thank you, your message has been sent, you will receive a copy and we will reply within 24 hours";
$message_bot     = "You are a bot, go away!";

//user posted variables
$name = $_POST['message_name'];
$number = $_POST['message_number'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];
$bot = $_POST['message_bot'];

//php mailer variables
$to = "info@ccdesignweb.com";
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";
$headers2 = 'From: '. $to . "\r\n" .
  'Reply-To: ' . $to . "\r\n";
$subject1 = "ccDesignWeb";
$message2 ="The following message was sent to ccDesignWeb" . "\n\n" . "Name: " . $name . "\n\n" . "Number: " . $number . "\n\n" . "Message: " . $message;
$message1 ="You have a new message from the contact form: " . "\n\n" . "Name: " . $name . "\n\n" . "Number: " . $number . "\n\n" . "Message: " . $message;
$phone = $number;

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {
   
      //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
        //validate presence of none bot
        elseif(($bot)){
            my_contact_form_generate_response("error", $message_bot);
        }
        //validate presence of name, message and number
        elseif((empty($name) || empty($message) || empty($phone))){
            my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
            $sent = wp_mail($to, $subject, strip_tags($message1), $headers); //message to me
            $sent1 = wp_mail($email, $subject1, strip_tags($message2), $headers2); //message to customer
            if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
            else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent

        }
    }
  }

else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
?>
  <div id="main">
    <div class="large_lang " >
      <a class="large_lang_en" href="https://ccdesignweb.com/contact"></a>
      <a class="large_lang_fr" href="https://ccdesignweb.com/fr/contact-2/"></a>
    </div>
    <div class="logo" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/long-logo-2-scaled.jpg);"></div>
  <div class="cool container-fluid"></div>
  <h1 class="title_topic">Contact Us</h1>
  
      <?php
         while(have_posts()){
          the_post();?>
      <div class="write4">
      <?php the_content();
         }
      ?>
        <div id="respond" class="formstart">
            <form action="<?php the_permalink(); ?>" method="post">
                <input placeholder="Full name" type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label>
                <input placeholder="Email" type="hidden" name="message_email" value="<?php echo esc_attr($_POST['message_bot']); ?>"></label>
                <input placeholder="Email" type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label>
                <input placeholder="Phone Number" type="text" name="message_number" value="<?php echo esc_attr($_POST['message_number']); ?>"></label>
                <textarea placeholder="Your Message" type="message" name="message_text"><?php echo esc_attr($_POST['message_name']); ?></textarea></label></p>
                <label for="message_human">Human Verification:     <input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
                <input type="hidden" name="submitted" value="1">
                <input type="submit">
                <?php echo $response; ?>
            </form>
        </div>
    </div>
  


<?php
    get_footer();
?>