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
                     
                 <!-- ======= Sidebar ======= -->
   <div class="other-side">

    <div class="modal-menu">
        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal2">
            <i class="flaticon-menu"></i>
        </a>
    </div>
</div>

 <!-- Start Sidebar Modal -->
 <div class="sidebar-modal">  
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                    <a href="<?php echo base_url().'Welcome/dashboard';?>">
                           <!--<img src="<?php //echo base_url().'Pocket/assets/img/logo.png';?>" class="modal-logo1" alt="Logo">-->

                           <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="modal-logo1" alt="<?php echo $siteinf->alttagimg1;?>">
                        </a>
                    </h2>
                </div>
                
                <div class="modal-body" id="navbarSupportedContent">
                    <nav class="sidebar card py-2 mb-4">
                    <?php include('sidebarmenu.php');?>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->

                <div class="dashboard-innerbox">
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2> Generate Sitemap  </h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                              <div class="table-responsive theme-scrollbar">
                                              <span id="msg"></span><br>
                                                <div id="data-source-1_wrapper" class="dataTables_wrapper">
                                                    <span id="msg"></span>
                                                    <?php echo $this->session->flashdata('flash_msg');?>
                                                    <table class="display dataTable" id="data-source-1" style="width: 100%;" role="grid" aria-describedby="data-source-1_info">
                                                  <thead>
                                                    <tr role="row">
                                                      <th class="sorting_asc" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 116px;">Generate Sitemap </th>
                              
                                                      
                                                        </tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php 
                                                    
                                                    
                                                    
                                                    foreach($result as $res){?>
                                                  <tr role="row" class="odd" id="<?php //echo $res['newsletterid'];?>" >
                                                      <td class="sorting_1"><a href="<?php echo base_url().'/sitemap';?>" target=_blank>Click here to view sitemap</a></td>
                                                      
                                                      
                                                    </tr>
                                                    <?php } ?>
                                                   
                                                  
                                                </tbody>
                                                
                                                </table>
                                            </div>

                                            <!--<div class="pagination mb-4"><?php //echo $links;?> </div>-->
                                        </div>
                                    </div>
                                   

                                </div>
                            </div>
                           
                                <div class="row bg-row">
                                    <div class="col-md-5 col-lg-5 pocket-help">
                                        <h2>Ask pocket Friendly for Help 24/7</h2>
                                        <h6>Get In Touch : </h6>
                                      
                                        <div class="number-block"> <a href="tel:+ +<?php echo $contactus->phoneno;?>"> +<?php echo $contactus->phoneno;?> </a>  
                                           </div>
                                        </div>
                                </div>
                                </div>
                          
              
                   
              </div>
              </div>
			</div>
		</section>
		<!-- End Sign In Area -->

        <!-- Footer Area -->
        <?php //include('footer1.php');?>
        <?php include('footer.php');?>
    </body>
</html>









