<?php include_once("header.php");?>     


    <body>
        <!-- Start Preloader -->
        <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->


      

        <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-50">
			<div class="container">
              <div class="dashboard-bgarea">


                     
            <?php include_once("sidebar.php");?>     

 

                <div class="dashboard-innerbox">
               
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2>Add Problem Solutions</h2>
                                <div class="row">
                                <span id="solmsg"></span><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="addsolutions" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Title:</label>
                                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1" required>
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Link:</label>
                                                              <input type="text" class="form-control" id="link" name="link" placeholder="Enter Link" required>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Alt tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                      <label for="status" class="form-label text-primary">Status:</label>   
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1">Active </option>
                                                                <option value="0">Inactive </option>
</select> </div>

                                                          <!--<div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Alt tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>-->
                                                      </div>
                                                     
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required></textarea>
                                                      </div>
                                                    
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listsolutions';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadsub" >Submit</button>
                                                  </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                           
                                
                          
              
                   
              </div>
              </div>
			</div>
		</section>
		
        


            


         <!-- Jquery Min JS -->
        <script src="<?php echo base_url().'assets/js/jquery.min.js';?>"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="<?php echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
        <!-- Meanmenu JS -->
        <script src="<?php echo base_url().'assets/js/meanmenu.min.js';?>"></script>
        <!-- Owl Carousel JS -->
        <script src="<?php echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
        <!-- Magnific Popup JS -->
        <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
        <!-- Wow JS -->
        <script src="<?php echo base_url().'assets/js/wow.min.js';?>"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="<?php echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        <!-- Form Validator Min JS -->
        <script src="<?php echo base_url().'assets/js/form-validator.min.js';?>"></script>
        <!-- Contact Form JS -->
        <script src="<?php echo base_url().'assets/js/contact-form-script.js';?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo base_url().'assets/js/custom.js';?>"></script>
        <script>
$('#addsolutions').on('submit', function (e) {
    e.preventDefault();
    
        var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var title=$('#title').val();
        //alert("enter"+title);
        var status=$("#status").val();
        var description=$("#description").val();
        var link =$("#link").val();
        var alttagimg1=$("#alttagimg1").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('link', link);
        form_data.append('maintitle',title);
        form_data.append('alttag1',alttagimg1);
        form_data.append('description',description);
        form_data.append('alttag1',alttagimg1);
        form_data.append('status',status);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/addsolutionsprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    $("#description").val('');
                $('#solmsg').html(response); // display success response from the server
            },
            error: function (response) {
                $('#solmsg').html(response); // display error response from the server
            }
        });
    });






</script>

    </body>
    <?php include_once("footer.php");?>