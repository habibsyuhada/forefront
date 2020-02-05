<style type="text/css">
  .btn-online-training{
    background-color: #cae7f3;
    text-align: left;
    padding: 10px 10px 1px 10px;
    margin-bottom: 2px;
  }
  .btn-online-training a{
    color: #000;
  }
  .btn-online-training:hover{
    background-color: #01353a;
  }
  .btn-online-training:hover a{
    color: #fff;
  }
</style>
<!--==========================
  Intro Section
============================-->
<div class="clearfix"></div>
<?php $this->load->view('_partial/navigation');?> 
<section class="container px-4 mt-4 pt-4">
  <div class="row">
    <div class="col-md-3">
      <?php $this->load->view('_partial/sidebar');?> 
    </div>

    <!-- Content -->
    <div class="col-md pl-4 ml-4">
      <p class="mb-3"><img src="<?php echo base_url() ?>assets/img/online-learning.png" width="100%"></p>
      <p class="mb-3">At a fraction of the cost and fraction of management time than you’d expect, the online training courses has the added bonus of a minimal loss of productivity because it’s really efficient and flexible.   </p>
      <p class="mb-3">Our one-on-one tutor led interactive Online Training Portal (OTP) goes at precisely the pace required by each individual. It provides an opportunity to go over the learning content as often as required so every employee gets the optimum learning experience that’ll be retained and applied to keep your business safe and compliant.</p>

      <div class="row">
        <div class="col-md">
          <div class="btn-online-training">
            <h3><a href="https://www.forefrontcertification.co.uk/online-training/health-safety/" class="font-weight-bold"> <img src="<?php echo base_url(); ?>assets/img/first-aid-kit-1.png" alt="" width="64" height="64" class="float-left" style="margin: -5px 55px 0px 0;"> HEALTH &amp; <br> SAFETY</a></h3>
          </div>          
        </div>
        <div class="col-md">
          <div class="btn-online-training">
            <h3><a href="https://www.forefrontcertification.co.uk/online-training/business-skills/" class="font-weight-bold"> <img src="<?php echo base_url(); ?>assets/img/puzzle.png" alt="" width="64" height="64" class="float-left" style="margin: -5px 55px 0px 0;"> BUSINESS <br> SKILLS</a></h3>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>