<!-- Footer Area -->
<footer id="footer" class="footer-area-bg">
    <div class="footer-newletter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="subscribe-area">
                        <h2>News Letter</h2>
                        <p><?php echo $newsletter->newsletterdescription;?></p>
                    </div>
                    <div class="newsletter-area">
                    <span id="newsmsg"></span>
                         <form class="newsletter-form" name="frmemail" id="frmemail" action="<?php echo base_url().'Pocket/newslettersubscribe';?>" method="post">
                         <input type="email" class="form-control" placeholder="Enter Your Email" name="emailidnews"  id="emailnews" required />
                            <button class="subscribe-btn" type="submit">
                                Subscribe
                            </button>
                            <!--<div id="validator-newsletter" class="form-result"></div>-->
                        </form>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="feature-updates-sec">
                    <h2>Feature Update</h2>
                    <div class="footer-service-icon">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 feature-updates">
                                <img src="<?php echo base_url().'assets/img/footer-1.png';?>">
                            </div>
                            <div class="col-md-3 col-lg-3 feature-updates">
                                <img src="<?php echo base_url().'assets/img/footer-2.png';?>">
                            </div>
                            <div class="col-md-3 col-lg-3 feature-updates">
                                <img src="<?php echo base_url().'assets/img/footer-3.png';?>">
                            </div>
                            <div class="col-md-3 col-lg-3 feature-updates">
                                <img src="<?php echo base_url().'assets/img/footer-4.png';?>">
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>


    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-single">
                        <div class="footer-single-content">
                            <a href="#">
                                <img src="<?php echo base_url().'assets/img/footer-logo.png';?>" alt="Logo">
                            </a>
                            <div class="share-icon">
                                <img src="<?php echo base_url().'assets/img/share-icon.png';?>">
                            </div>
                           
                        </div>

                      
                    </div>
                </div>
                <?php $this->db->select('*');
    $this->db->from('aboutus');
    $query = $this->db->get();
    $aboutus=$query->row();
    
    
    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-list ml-50">
                        <h3><?php echo $aboutus->title;?></h3>
                        <p><?php echo $aboutus->aboutcompany;?></p>
                      <!--<p>POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>
                      <p class="pt-30 ">POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>--->

                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-list">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="#">SEO</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="#">Terms & Condition</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="#">Privacy & Policy</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="#">Careers</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-20">
                        <h3>Contact Us</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-map'></i>
                                <?php echo $contactus->city;?>,<?php echo $contactus->country;?>
                            </li>
                            <li>
                                <i class='bx bxs-phone'></i>
                                <a href="tel:+<?php echo $contactus->phoneno;?>">+<?php echo $contactus->phoneno;?></a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:<?php echo $contactus->emailid;?>"><?php echo $contactus->emailid;?></a>
                            </li>
                          
                            
                        </ul>

                        
                    </div>
                </div>
                <div class="copyright-text">
                    <p>
                        Copyrightbypocketfriendlyweb | <script>document.write(new Date().getFullYear())</script>  
                     
                    </p>
                </div>
             
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                   <div class="location-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1861009.5379097238!2d53.9485752!3d24.3540069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x844654cd217aedcf%3A0x3f8604d12a1923c0!2spocketfriendlyweb.com!5e0!3m2!1sen!2sin!4v1690610048272!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<script src="<?php echo base_url().'services/assets/js/jquery.min.js';?>"></script>
       
        <script src="<?php echo base_url().'services/assets/js/bootstrap.bundle.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/meanmenu.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/owl.carousel.min.js';?>"></script>
       
        <script src="<?php echo base_url().'services/assets/js/jquery.magnific-popup.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/wow.min.js';?>"></script>
       
        <script src="<?php echo base_url().'services/assets/js/jquery.ajaxchimp.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/form-validator.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/contact-form-script.js';?>"></script>
       
        <script src="<?php echo base_url().'services/assets/js/custom.js';?>"></script>

<script>
        $(".numericvalidate").keypress(function(event){
        var keycode = event.which;
        if (!(keycode >= 48 && keycode <= 57)) {
            event.preventDefault();
        }
    });


    $('#frmemail').on('submit', function (e) {
    e.preventDefault();
    
        var emailnews=$("#emailnews").val();
        
        var form_data = new FormData();
       
        form_data.append('emailidnews',emailnews);
       
       
        $.ajax({
            url: "<?php echo base_url().'Pocket/newslettersubscribe';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
                //$('#date').val('');
                $('#emailnews').val('');
                $('input[type=email]').each(function() {
        $(this).val('');
    });   
      $("#newsmsg").html(response);  
            },
            error: function (response) {
                //$('#testmsg').html(response); // display error response from the server
                $("#newsmsg").html(response);  
            }
        });
    });











    </script>