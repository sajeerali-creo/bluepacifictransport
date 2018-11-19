 <?php
/* Template Name: contact_new */
?>

<?php get_header(); ?>

        <!-- banner -->
        <section id="inner-banner">
            <img src="<?php bloginfo('template_url'); ?>/images/contact_bg.jpg">
            <div class="hero-content">
              <div class="valign-wrapper">
                <h1 class="center-align" data-aos="fade-up">Contact Us</h1>
              </div>  
            </div>
        </section>

        <!-- discribe -->
        <section class="padd-each-big inner-pages contact">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l6">
                        <h2 data-aos="fade-in">What are you waiting for?</h2>
                        <h3 data-aos="fade-in">Also we We believe in providing you with excellent personalized customer partnered with professional standard and reasonable price.</h3>
                        <p>We provide safe, reliable passenger transport services designed to meet the needs of our customers’ requirements</p>
                    </div>
                    <div class="col s12 l6 m12">
                        <!-- <div class="row">
                            <div class="input-field">
                              <input placeholder="Enter Your Name" id="first_name" type="text">
                              <label for="first_name">First Name</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field">
                              <input placeholder="Subject?"type="text">
                              <label for="first_name">Subject</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field">
                              <input placeholder="@gmail.com" type="text" class="validate">
                              <label for="first_name">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <button>Send</button>
                        </div> -->
                        <?php $cfsignupname='[contact-form-7 id="264" title="Arnett Creek - Lower Picketpost Mesa (UI) - 60 Nov 2016"]'?>
          <?php echo do_shortcode($cfsignupname);?>
                    </div>
                   
                </div>
            </div>
        </section>


<?php get_footer(); ?> 
     

      
        
     