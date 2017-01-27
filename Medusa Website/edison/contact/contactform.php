<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('bootstraproadmapsales@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');


/*
$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('newupload','',2024);//<<------- New file upload

*/



$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('newupload','jpg,jpeg,gif,png,bmp',2024);//<<------- New file upload
$formproc->AddFileUploadField('resume','doc,docx,pdf,txt',2024);






if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">







<head>
          <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
          <title>Roadmap</title>
            <link rel="STYLESHEET" type="text/css" href="contact.css" />
            <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
            <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>




        <script type="application/javascript">




            $(document).ready(function() {




                $( "#accordion" ).accordion({
                    heightStyle: "content",
                    header: "h3", collapsible: true, active: false




                });


            } );



        </script>

</head>








<body>






    <!-- Form Code Start -->
    <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
        
        
        
        
        
    
        <fieldset>


                <h3 style="margin-top: 0;">Tell us a little more about you!</h3>
            
                
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
                <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
                    
                    
                
                    <div class='short_explanation'>* required fields</div>
                    
                        
                    <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                        



            
            
            


                    <!-- Beginning -->










            
                    <div class='container'>
                        <label for='name' >Your Full Name*: </label><br/>
                        <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
                        <span id='contactus_name_errorloc' class='error'></span>
                    </div>







                        
                    <div class='container'>
                        <label for='email' >Email Address*:</label><br/>
                        <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Phone Number*:</label><br/>
                        <input type='text' name='phonenumber' id='phonenumber' value='<?php echo $formproc->SafeDisplay('phonenumber') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Business Name*:</label><br/>
                        <input type='text' name='businessname' id='businessname' value='<?php echo $formproc->SafeDisplay('businessname') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>






                    <div class='container'>
                        <label for='email' >Business Address*:</label><br/>
                        <input type='text' name='businessaddress' id='businessaddress' value='<?php echo $formproc->SafeDisplay('businessaddress') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Main contact for the project (name and title)*:</label><br/>
                        <input type='text' name='maincontact' id='maincontact' value='<?php echo $formproc->SafeDisplay('maincontact') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>





                    <div class='container'>
                        <label for='email' >Final decision maker for the project*:</label><br/>
                        <input type='text' name='decisionmaker' id='decisionmaker' value='<?php echo $formproc->SafeDisplay('decisionmaker') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>






                    <br>
                    <br>


                    <p>
                        If you do not have a domain, please go buy one at a respected website.
                    </p>


                    <div class='container'>
                        <label for='email' >Current website address (if applicable):</label><br/>
                        <input type='text' name='websiteaddress' id='websiteaddress' value='<?php echo $formproc->SafeDisplay('websiteaddress') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Current domain name (if applicable):</label><br/>
                        <input type='text' name='currentdomain' id='currentdomain' value='<?php echo $formproc->SafeDisplay('currentdomain') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>



                    <div class='container'>
                        <label for='email' >What is the company that hosts your domain name? (ie: who did you buy it from? if applicable):</label><br/>
                        <input type='text' name='domaincompany' id='domaincompany' value='<?php echo $formproc->SafeDisplay('domaincompany') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>





                    <div class='container'>
                        <label for='email' >Slogan (if applicable):</label><br/>
                        <input type='text' name='slogan' id='slogan' value='<?php echo $formproc->SafeDisplay('slogan') ?>' /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>




                        <div class='container'>
                            <label for='message' >Is there a specific message you wish to convey to your audience?</label><br/>
                            <input type='text' name='specificmessage' id='specificmessage' value='<?php echo $formproc->SafeDisplay('specificmessage') ?>' /><br/>
                            <span id='contactus_email_errorloc' class='error'></span>
                        </div>



                        <div class='container'>
                            <label for='message' >What are the focus areas of your business? (eg: organic, family care, business portraits)</label><br>
                            <input type='text' name='focus' id='focus' value='<?php echo $formproc->SafeDisplay('focus') ?>' /><br/>
                            <span id='contactus_email_errorloc' class='error'></span>
                        </div>













                    <h3 id="button">Design Choices</h3>



                        <div class='container'>
                            <label for='message' >Use three adjectives to describe how the user should perceive your business. <br>(eg: progressive, friendly, formal, casual, energetic, professional, playful...)</label><br/>
                            <input type='text' name='one' id='one' value='<?php echo $formproc->SafeDisplay('one') ?>' /><br/>
                            <span id='contactus_email_errorloc' class='error'></span>
                        </div>


                        <div class='container'>
                            <label for='message' >Do you have a preferred color scheme?<br> (if possible please provide RGB or hex color codes) </label><br/>
                            <textarea rows="10" cols="50" name='two' id='two'><?php echo $formproc->SafeDisplay('two') ?></textarea>
                            <span id='contactus_message_errorloc' class='error'></span>

                        </div>


                        <div class='container'>
                            <label for='message' >Are there any colors you want to avoid? </label><br/>
                            <input type='text' name='three' id='three' value='<?php echo $formproc->SafeDisplay('three') ?>' /><br/>
                            <span id='contactus_email_errorloc' class='error'></span>
                        </div>











                    <h3 id="button">Website Content</h3>





                        <div class='container text-center'>
                           <h2 style="margin: 0; padding: 0;"><label for='name' >Website Elements?</label></h2> <br><br>


                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> About Me<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Photo Gallery<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Contact Us Form (Email)<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Call To Action (Click Here! Download Now!)<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Google Map Locator<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Timeline of Business or Product<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Separate Menu or Services Page<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Buttons to External Links (Buy Buttons, Download, Link to Another Website)<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Pricing Tables<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Embedded YouTube Video<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Team Section<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Customer Reviews or Quotes<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Links to Social Media Accounts<br>
                            <input type="checkbox" name="four" id='four' value="<?php echo $formproc->SafeDisplay('four') ?>"> Autoplay Video Header<br>
                            <span id='contactus_email_errorloc' class='error'></span>


                        </div>





                        <br>


                        <div class='container'>
                            <label for='message' >Will your site use existing marketing content? (eg: art, photos, logo)</label><br><br>

                            <input type="radio" name="five" id='five' value="<?php echo $formproc->SafeDisplay('five') ?>"> Yes, I do have existing marketing material that I would like to use.<br>
                            <input type="radio" name="five" id='five' value="<?php echo $formproc->SafeDisplay('five') ?>"> No, I do not have existing marketing material.<br>
                            <input type="radio" name="five" id='five' value="<?php echo $formproc->SafeDisplay('five') ?>"> I want the developer to call and discuss options about using marketing material.
                            <span id='contactus_email_errorloc' class='error'></span>

                        </div>


                        <br>
                        <div class='container'>
                            <label for='email' >Are you comfortable utilizing stock photos for your website?<br> All stock photos that are incorporated by BRM on your site will be licensed for you at no extra charge.</label><br/>

                            <br>
                            <input type="radio" name="six" id='six' value="<?php echo $formproc->SafeDisplay('six') ?>"> Yes, I am comfortable using stock photos.<br>
                            <input type="radio" name="six" id='six' value="<?php echo $formproc->SafeDisplay('six') ?>"> No, I do not want to use stock photos.<br>
                            <input type="radio" name="six" id='six' value="<?php echo $formproc->SafeDisplay('six') ?>"> I want the developer to call and discuss options about using stock photos
                            <span id='contactus_email_errorloc' class='error'></span>


                        </div>




                        <br>


                        <div class='container'>
                            <label for='message' >Provide each service or focus of work that you want to showcase on your site and a short description.</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='seven' id='seven'><?php echo $formproc->SafeDisplay('seven') ?></textarea>

                        </div>






                    <br>



                        <div class='container'>
                            <label for='message' >Provide the description you would include in an "About Us" section:</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='eight' id='eight'><?php echo $formproc->SafeDisplay('eight') ?></textarea>
                        </div>






                        <br>



                        <div class='container'>
                            <label for='message' >Highlight each of your team members (Full name, position, short description, social media links, picture, etc.)</label><br>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='nine' id='nine'><?php echo $formproc->SafeDisplay('nine') ?></textarea>
                        </div>

                        <br>



                        <div class='container'>
                            <label for='message' >Portfolio or previous work, and/or education your would like to showcase (Full name of work or degree, short description, picture, etc.).</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='ten' id='ten'><?php echo $formproc->SafeDisplay('ten') ?></textarea>
                        </div>




                        <br>




                        <div class='container'>
                            <label for='name' >Hours of operation (eg: M-F 8 to 5):</label><br>
                            <input type='text' name='eleven' id='eleven' value='<?php echo $formproc->SafeDisplay('eleven') ?>' maxlength="50" /><br/>
                            <span id='contactus_name_errorloc' class='error'></span>
                        </div>

                        <div class='container'>
                            <label for='name' >Business email address:</label><br>
                            <input type='text' name='twelve' id='twelve' value='<?php echo $formproc->SafeDisplay('twelve') ?>' maxlength="50" /><br/>
                            <span id='contactus_name_errorloc' class='error'></span>
                        </div>


                        <div class='container'>
                            <label for='name' >Business phone number:</label><br>
                            <input type='text' name='thirteen' id='thirteen' value='<?php echo $formproc->SafeDisplay('thirteen') ?>' maxlength="50" /><br/>
                            <span id='contactus_name_errorloc' class='error'></span>
                        </div>





                        <br>




                        <div class='container'>
                            <label for='message' >If you would like to add a timeline of your work, please put events here.</label><br>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='fourteen' id='fourteen'><?php echo $formproc->SafeDisplay('fourteen') ?></textarea>
                        </div>



                        <br>




                        <div class='container'>
                            <label for='message' >Social media accounts (please provide the name of the account and the URL):</label><br>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='fifteen' id='fifteen'><?php echo $formproc->SafeDisplay('fifteen') ?></textarea>
                        </div>



                        <div class='container'>
                            <label for='message' >Do you have customer reviews that you want to add? If so, please provide the names and quotes in the space below.</label><br>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='sixteen' id='sixteen'><?php echo $formproc->SafeDisplay('sixteen') ?></textarea>
                        </div>



                        <br>


                        <div class='container'>
                            <label for='message' >If you have multiple locations and would like list them on your site, please record them here. </label><br>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='seventeen' id='seventeen'><?php echo $formproc->SafeDisplay('seventeen') ?></textarea>
                        </div>





























                    <h3 id="button">Closing Thoughts and Requests</h3>



                        <div class='container'>
                            <label for='message' >Special requests or development features you would like to add. (Hourly development charge may apply depending on size/complexity of additions)</label><br>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='eighteen' id='eighteen'><?php echo $formproc->SafeDisplay('eighteen') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >Additional information you would like to share with Bootstrap Roadmap to aid in the content or design of your website:</label><br>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='nineteen' id='nineteen'><?php echo $formproc->SafeDisplay('nineteen') ?></textarea>
                        </div>































                    <!-- uploads -->







                    <h3>File Uploads</h3>

                    <h4>*** Please use the upload buttons on this form if you only have one or two images to share with BRM. </br> If you intend on using more than two images and text documents on your website please use the DropBox link below.</h4>


                    <div class='container'>
                        <label for='photo' >Upload your photo:</label><br>
                        <input type="file" name='photo' id='photo' /><br>
                        <span id='contactus_photo_errorloc' class='error'></span>
                    </div>

                    <div class='container'>
                        <label for='photo' >Upload another photo:</label><br>
                        <input type="file" name='newupload' id='newupload' /><br>
                        <span id='contactus_newupload_errorloc' class='error'></span>
                    </div>

                    <div class='container'>
                        <label for='photo' >Text document:</label><br>
                        <input type="file" name='resume' id='resume' /><br>
                        <span id='contactus_newupload_errorloc' class='error'></span>
                    </div>


                    <h2><a href="#" >DropBox Uploads</a></h2>










                    <!-- submit button


                    
                    <div class='container button'>
                        <input type='submit' name='Submit' value='Submit' />
                    </div>

            -->
            
        </fieldset>
        
        
        
    </form>



<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

































<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");
// ]]>
</script>
</body>
</html>




































