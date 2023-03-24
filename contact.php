<?php 
require('top.php');					
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Contact <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Contact</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Contact</span>
                <h2 class="mb-4">Our Contacts</h2>
            </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-8 mb-md-5">
                <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
                <form action="#" class="bg-light p-5 contact-form" method="post">


                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>

                    <div>
                        <strong>
                            <span id="contact_submit" class="sucess_msg "></span>
                            <span id="contact_error" class="danger_msg "></span>
                        </strong>
                    </div>
                    <div class="form-group">
                        <a onclick="send_message()" class="btn btn-primary py-3 px-5">Send
                            Message</a>
                    </div>


                </form>
                <div class="form-output">
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
        <div class="row d-flex mb-5 contact-info justify-content-center">
            <div class="col-md-8">
                <div class="row mb-5">
                    <div class="col-md-4 text-center py-4">
                        <div class="icon">
                            <span class="fa fa-map"></span>
                        </div>
                        <p><span>Address:</span>New swagat Vihar Dunda Raipur Chhatisgarh</p>
                    </div>
                    <div class="col-md-4 text-center border-height py-4">
                        <div class="icon">
                            <span class="fa fa-phone"></span>
                        </div>
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                    <div class="col-md-4 text-center py-4">
                        <div class="icon">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@jkconstruction.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="map" class="bg-white  map-responsive"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.726873073887!2d81.65681010187568!3d21.16326507276154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28db654fdf4aa9%3A0x3ac2ad9bd20088ab!2sGovernment%20Engineering%20College%20Raipur!5e0!3m2!1sen!2sin!4v1649852291330!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe> </div>
            </div>
        </div>
    </div>
</section>






<script>
function send_message() {

    jQuery('#contact_submit').html('');
    jQuery('#contact_error').html('');

    var name = jQuery(" #name").val();
    var email = jQuery("#email").val();
    var mobile = jQuery("#mobile").val();
    var
        message = jQuery("#message").val();
    var is_error = '';
    if (name == "") {
        jQuery('#contact_error').html('Please Enter Name');
        is_error = 'yes';
    } else if (email == "") {
        jQuery('#contact_error').html('Please Enter Email');
        is_error = 'yes';
    } else if (mobile == "") {
        jQuery('#contact_error').html('Please Enter Mobile');
        is_error = 'yes';
    } else if (message == "") {
        jQuery('#contact_error').html('Please Enter Message');
        is_error = 'yes';
    }
    if (is_error == '') {
        jQuery.ajax({
            url: 'contact_send.php',
            type: 'post',
            data: 'name=' + name + '&email=' + email +
                '&mobile=' + mobile + '&message=' + message,
            success: function(result) {
                result = result.trim();
                if (result == 'message_send') {
                    jQuery('#contact_submit').html('Thankyou..Your Query Submitted');
                    jQuery("#name").val('');
                    jQuery("#email").val('');
                    jQuery("#mobile").val('');
                    jQuery("#message").val('');
                } else {
                    jQuery('#contact_submit').html('');
                    jQuery('#contact_error').html('Oops!! Somthing Went Wrong Please Try After Some Time.');
                    jQuery("#name").val('');
                    jQuery("#email").val('');
                    jQuery("#mobile").val('');
                    jQuery("#message").val('');
                }
            }
        });
    }
}
</script>





<?php require('footer.php')?>