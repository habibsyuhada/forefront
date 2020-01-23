<!--==========================
  Intro Section
============================-->
<div class="clearfix"></div>
<?php $this->load->view('_partial/navigation');?> 
<section class="container px-4 mt-4 pt-4">
  <div class="row">

    <!-- Content -->
    <div class="col-md pl-4 ml-4">

      <?php if($this->session->flashdata('success') == TRUE): ?>
      <div class="alert alert-success" role="alert">
        <b><?php echo $this->session->flashdata('success'); ?></b>
      </div>
      <?php endif; ?>

      <div class="col-md-5">
        <h3 class="font-weight-bold">Our address</h3>
        <p>ForeFront Certification Limited </p>
        <p>Bromsgrove Enterprise Park<br>
          Basepoint Business Centre<br>
          Isidore Rd, Bromsgrove B60 3ET, UK</p>
        <hr style="margin: 0 auto 20px; background: #000000;">
        <h5 class="font-weight-bold">We would love to hear from you! </h5>
        <p>So please get in touch for a free, no obligation discussion about your particular needs.</p>
        <p style="margin-bottom: 4px;"><i class="far fa-arrow-alt-circle-right"></i>&nbsp; <a href="mailto: info@forefrontcertification.co.id" class="text-orange">Send us e-mail</a></p>
        <p style="margin-bottom: 4px;"><i class="far fa-arrow-alt-circle-right"></i>&nbsp; T:  +622129349417</p>
      </div>
      <hr class="" style="margin: 20px 0px;">
      <h3 class="font-weight-bold">Get in touch</h3>
      <b>Please complete the form below and one of our team will be in touch as soon as possible. If you need immediate assistance, please call +622129349417. To request a quote for ISO certification, <a href="<?php echo base_url() ?>free-quotation" class="text-orange">please click here</a>.</b>
      <br>
      <br>
      <form action="<?php echo base_url() ?>home/contact_new_process" method="POST">
        <div style="padding:20px">
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" name="name" class="form-control border-orange border-2px" placeholder="Your Name">
            </div>
            <div class="col">
              <input type="text" name="phone" class="form-control border-orange border-2px" placeholder="Your Phone">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="email" name="email" class="form-control border-orange border-2px" placeholder="Your Email">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <textarea class="form-control border-orange border-2px"  name="message" placeholder="Message" rows="4"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" required>
              <label class="form-check-label" for="gridCheck">
                By using this form you agree with the storage and handling of your data by this website.
              </label>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col text-left">
              <button class="border-2px font-weight-bold btn btn-outline-dark text-center" type="submit">Send a message</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>