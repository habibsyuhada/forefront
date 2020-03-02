<style type="text/css">
  ul.disc li{
    margin-bottom: 10px;
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
      <div class="row">
        <div class="col-md">
          <h5 class="font-weight-bold">OUR EXPERTS WILL SUPPORT YOU THROUGH YOUR CERTIFCIATION JOURNEY SO YOU CAN CONTINUALLY IMPROVE YOUR BUSINESS.</h5>
          <p>At ForeFront, our team can ensure that you have the right approach to meet your needs and expectations.</p>
          <p>Whether you are looking for certification services, training auditors or needing us to put you in touch with independent consultants our team will help you find a solution that that works for you.</p>
          <p>For more details about any certification support, <b>please contact us today</b>.</p>
          <form action="" method="POST">
            <div style="background-color:#f2f2f2; padding:20px">
              <div class="form-row mb-3">
                <div class="col">
                  <input type="text" class="form-control border-orange border-2px" placeholder="Your Name">
                </div>
                <div class="col">
                  <input type="text" class="form-control border-orange border-2px" placeholder="Your Phone">
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col">
                  <input type="text" class="form-control border-orange border-2px" placeholder="Your Email">
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col">
                  <textarea class="form-control border-orange border-2px" placeholder="Message" rows="4"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    By using this form you agree with the storage and handling of your data by this website.
                  </label>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col text-right">
                  <button class="border-2px font-weight-bold btn btn-outline-dark text-center" type="submit">Send a message</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <a class="border-2px font-weight-bold btn btn-outline-orange btn-block text-center" href="tel:+622129349417" target="_blank"><i class="fas fa-phone"></i> CONTACT US</a>
          <a class="border-2px font-weight-bold btn btn-outline-orange btn-block text-center" href="<?php echo base_url() ?>support" target="_blank"><i class="fas fa-comments"></i> LIVE CHAT</a>
          <a class="border-2px font-weight-bold btn btn-outline-orange btn-block text-center" href="<?php echo base_url() ?>free-quotation" target="_blank"><i class="fas fa-th-large"></i> GET A QUOTE</a>
        </div>
      </div>
    </div>
  </div>
</section>