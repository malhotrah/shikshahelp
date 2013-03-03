<div class="container">
    <div class="row">
        <!-- sidebar -->
        <div class="span3 sidebar">
            <div class="section-menu">
                <ul class="nav nav-list">
                    <li class="nav-header">In This Section</li>
                    <li><a href="<?php echo base_url('about');?>" class="first">About Us
                        <small>How It All Began</small>
                        <i class="icon-angle-right"></i></a></li>
                    <li class="active"><a href="<?php echo base_url('contact_us');?>">Contact Us
                        <small>How to get in touch</small>
                        <i class="icon-angle-right"></i></a></li>
                </ul>
            </div>
        </div>

        <!--main content-->
        <div class="span9">
            <h2 class="title-divider"><span>Contact <span class="de-em">Us</span></span>
                <small>Ways To Get In Touch</small>
            </h2>
            <div class="row-fluid">
                <div class="span6" id="contact-form">
                    <form id="contact-form-id" action="<?php echo base_url('contact_us/submit');?>" method="post">
                        <div class="name-error">
                            <label>Name*</label>
                            <input type="text" name="name" class="span11 text requiredField character" id="cname">
                        </div>
                        <div class="email-error">
                            <label>Email*</label>
                            <input type="email" name="email" class="span11 text requiredField email" id="cemail">
                        </div>
                        <div class="phone-error">
                            <label>Mobile*</label>
                            <input type="text" name="phone" class="span11 text requiredField number" id="cphone">
                        </div>
                        <div class="message-error">
                            <label>Message*</label>
                            <textarea rows="12" name="message" class="span11 text requiredField"
                                      id="ccomment"></textarea>
                        </div>
                        <input type="submit" id="contact-submit" class="btn btn-primary" value="Send Message">
                    </form>
                </div>
                <div id="contact-loading" class="span5" style="display: none; text-align: center;"><img
                        style="align:center"
                        src="<?php echo base_url('assets/images/ajax-loader-contact.gif');?>"/>
                </div>
                <div class="span6">
                    <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>

                    <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@appstrap.me</p>

                    <p><abbr title="Address"><i class="icon-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.</p>

                    <p>
                        <a href="https://maps.google.co.uk/maps?q=London&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;gl=uk&amp;t=m&amp;ll=51.510238,-0.127029&amp;spn=0.042735,0.102654&amp;z=12&amp;">
                            <img src="img/misc/map.png" alt="Location map" class="img-polaroid"> </a></p>
                </div>
            </div>
        </div>
    </div>
</div>