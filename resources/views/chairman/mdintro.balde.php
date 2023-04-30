<?php $this->load->view('templates/header'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url(<?= base_url("assests/images/Model.jpg"); ?>);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                            href="<?php echo site_url('Chairman/mdinfo') ?>"> Introduction <i
                                class="ion-ios-arrow-forward"></i></a></span><span class="mr-2"><a
                            href="<?php echo site_url('Chairman/agentlocation') ?>"> Chairman Album <i
                                class="ion-ios-arrow-forward"></i></a></span><span class="mr-2"><a
                            href="<?php echo site_url('Chairman/biography') ?>"> Chairman Biography <i
                                class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">Chairman's Details</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <br>
  <div class="alert alert-success" role="alert">
     <div class="row">
          <div class="col-lg-8 ftco-animate">
                <p>
                   <img src="<?= base_url("assests/images/about.jpg"); ?>" class="img-thumbnail" style="width:70%"  alt="" >
                </p>
    
           </div>
      </div>
 </div>
  <div class="alert alert-success" role="alert">
  <h2 class="mb-3">INTRODUCTION </h2>
  <h4><strong> Kazi Akram Uddin Ahmed</strong></h4>
  <p>Chairman- Standard Bank Limited</p>
  <p>Member- Advisory Council of Bangladesh Awami League</p>
  <p>Chairman- Central Sub Committee of Industry & Commerce of Bangladesh Awami League &
Past International Director- International Association of Lions Clubs</p>
  </div>

  <div class="alert alert-success" role="alert">
  <h2 class="mb-3">EDUCATION & TRAINING </h2>
  <ul>
    <li><strong>- Master of Science (M.Sc) </strong>in Physics from University of Dhaka, Bangladesh (1963).</li>
    <li><strong>- Diploma In Personnel Management</strong>from Oxford University (United Kingdom) (1974).</li>
    <li><strong>- Higher Training</strong>in Industrial Management from Switzerland (1980).</li>
  </ul>
  </div>
</div>


<?php $this->load->view('templates/footer'); ?>