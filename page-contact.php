<?php get_header(); ?>

 
<div class="container pt-5">
<h1 class="text-sec mb-3"><?php the_title(); ?><h1>
    <div class="row">
        <div class="col-lg-6">
             
        <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1"]'); ?>
        
        </div>
        <div class="col-lg-6 border details">
            <h3 class="text-center mt-1">Details</h3>
            <hr>
            <h5>Address</h5>
            <div class="d-flex align-items-center mb-2">
                <i class="fas fa-home"></i>
                <p>48 Iwofe Road</p>
            </div>
            <p class="mb-2">Port Harcourt</p>
            <p class="mb-2">Rivers State</p>
            <p class="mb-2">Port Harcourt</p>
            <p class="mb-2">Nigeria</p>
            <div class="d-flex align-items-center mb-2">
                <i class="fas fa-phone-alt"></i>
                <p>(234) 90 7070 4200</p>
            </div>
            <div class="d-flex align-items-center mb-5">
                <i class="fas fa-envelope"></i>
                <p>contact@marmconsultingservices.com</p>
            </div>
            <div>
                <h5>UK Office</h5>
                <div class="d-flex align-items-center mb-2">
                <i class="fas fa-home"></i>
                <p>Welwyn Garden City</p>
            </div>
                <div class="d-flex align-items-center">
                <i class="fas fa-envelope"></i>
                <p>ukoffice@marmconsultingservices.com</p>
            </div>
            </div>
            <div class="map mt-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.649925867862!2d6.977742915325532!3d4.830031841866049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce44763d51d5%3A0x240941385519dadd!2s48%20Rumuepirikom%2FIwofe%20Rd%2C%20Rumuafrikom%20300001%2C%20Port%20Harcourt%2C%20Nigeria!5e0!3m2!1sen!2suk!4v1617628856199!5m2!1sen!2suk" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
 

<?php get_footer(); ?>