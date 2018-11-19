 <?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
        <!-- footer -->
        <footer>
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="footer-bx">
                        <h2>Contact Us</h2>
                        <span>Buzz analytics business-to-consumer. Partner network ramen social media freemium iteration.</span>

                        <h3 data-aos="fade-up">Address</h3>
                        <p data-aos="fade-up">3-205 Kunooz Building 3rd FLOOR. DUBAI - UAE</p>

                        <h3 data-aos="fade-up">Phone</h3>
                        <p data-aos="fade-up">+971 4 282 3 282</p>

                        <h3 data-aos="fade-up">Mobile</h3>
                        <p data-aos="fade-up">Phone: +971 54 773 3766</p>

                        <h3 data-aos="fade-up">E-mail</h3>
                        <p data-aos="fade-up">info@bluepacifictransport.com</p>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.3501414547122!2d55.32976631501068!3d25.258804283867565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDE1JzMxLjciTiA1NcKwMTknNTUuMCJF!5e0!3m2!1sen!2sae!4v1542348140536" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col s12 m12 l12 bg-dark">
                <div class="container">
                    <div class="row">
                        <h5 class="">© 2018 blue pacific. All Rights Reserved Designed by <a href="http://timelino.com/" target="_blank">Timelino.com</a></h5>
                    </div>
                </div>
            </div>
            
            
        </footer>



        
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
        
        <script type="text/javascript">
           // Header apperance change scrolling page
              $(window).scroll(function() {
                  if ($(this).scrollTop() > 1){  
                      $('#fix-header').addClass("sticky");
                  }
                  else{
                      $('#fix-header').removeClass("sticky");
                  }
              });
        </script>
     

    </body>
  </html>