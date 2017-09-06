<?php /* Smarty version Smarty-3.1.16, created on 2017-04-25 13:17:24
         compiled from "\xampp\htdocs\brainak\\views\templates\contact-us.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1085358a191e27e57c2-37583078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5183e20a018a1e799de734e62fe0f8f2366ecb52' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\contact-us.tpl',
      1 => 1493119043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1085358a191e27e57c2-37583078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a191e2808a42_79685332',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a191e2808a42_79685332')) {function content_58a191e2808a42_79685332($_smarty_tpl) {?><div id="container">
        
        <div class="v-page-wrap no-top-spacing">
            
            <div class="v-spacer col-sm-12 v-height-small"></div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-9" >
                        <div class="v-comment-form">

                            <div class="v-heading-v2">
                                <h3>Welcome To Brainak System Technologies Pvt Ltd.</h3>
                            </div>

                            <p class="pull-bottom-small">
                                We are here to help, don't hesitate to call or send message, reach out to us anytime and we'll happily answer your queries.
                            </p>


                            <form action="#" method="post" enctype="multipart/form-data"  id="id_contact_form" class="id_contact_form">
                            <input type="hidden" value="contact_page" name="page_type" />
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>Your name <span class="required">*</span></label>
                                            <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Your email address <span class="required">*</span></label>
                                            <input type="email" value="" maxlength="100" class="form-control" name="email_id" id="email_id">
                                        </div>
                                        <div class="col-sm-4">
											<label>Mobile Number </label>
                                            <input type="tel" value="" maxlength="100" class="form-control" name="mobile_number" id="mobile_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Your Message <span class="required">*</span></label>
                                            <textarea maxlength="5000" rows="7" class="form-control" name="message" id="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button name="contact_submit_btn" type="button" id="contact_submit_btn" class="btn v-btn v-btn-default v-small-button"><i class="fa fa-magic"></i> Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-3" >
                        <div class="v-heading-v2">
                            <h3>Contact Info</h3>
                        </div>
                        <p>
							<b>Brainak System Technologies Pvt Ltd.</b><br>
							102,Sengupta Street, Ram Nagar<br>
							Coimbatore-641009<br>
                            <i class="fa fa-map-signs" aria-hidden="true"></i> Near Vijay Park Inn<br />
                            
                        </p>
						<div class="v-heading-v2">
                            <h3>Phone & Email</h3>
                        </div>
                        <p>
                            Mail Id : brainakinfo@gmail.com</a><br />
                            Ping Us : 8870561064<br />
                            
                        </p>

                        <div class="v-heading-v2">
                            <h3>Working Hours</h3>
                        </div>
                        <p>
                            Monday - Friday : 09.30 - 08.30<br />
                            Saturday - Sunday: 10.00 - 07.00<br />
                        </p>


                      
                    </div>
                </div>
            </div>

			
			<div class="row fw-row">
                <div class="v-gmap-widget fullscreen-map col-sm-12">
                    <div class="v-wrapper">
                        <div id="googlemapsFullWidth"  class="google-map mt-none mb-none">
                        		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.365810220394!2d76.95819851480285!3d11.011156392162459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85901a6b01295%3A0x604d3ac6b1677e83!2sBrainak+System+Technologioes+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1486966875909" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8336.928623419764!2d76.95873232177084!3d11.012014825434715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85901a6b01295%3A0x604d3ac6b1677e83!2sBrainak+System+Technologioes+Pvt+Ltd!5e1!3m2!1sen!2sin!4v1493118977344" width="100%" height="400"frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
			
        </div>
        
     <?php }} ?>
