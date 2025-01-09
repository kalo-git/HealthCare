<?php
include("include/header.php");
?>

<div class="container-fluid bg-primary bg-header" style="margin-bottom: 90px;">
    
                <div class="row py-5">
    
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
    
                        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">    

                            <h2 class="text-light fw-bold text-uppercase">Gallery</h2>
            
                        </div>
                
                    </div>
    
                </div>
    
</div>
  <!-- gallery Start -->
    <div class="container-fluid py-5 wow fadeInUp gallery" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 margin-bottom">
<?php
      $this->db->order_by('id','desc');
      $gallery_row=$this->db->get('gallery')->result_array();
      foreach($gallery_row as $gallery_result)
      {
          
          ?>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100 "  src="<?=base_url('gallery_image/'.$gallery_result['image'])?>" alt="" style="height:265px ; border: 5px solid black !important;">
                            <!--<div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>-->
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary"><?=$gallery_result['title']?></h4>
                            <!--<p class="text-uppercase m-0">Designation</p>-->
                        </div>
                    </div>
                </div>
          
          <?php
      }
      ?>
                

                
        </div>
                                    





        </div>
    </div>
    <!-- gallery End -->

<?php
include("include/footer.php");
?>