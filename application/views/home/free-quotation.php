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
      <p class="mb-3">At Forefront, we believe that certification should be a value-added service. We are not merely offering a compliance audit, and we dedicate our expertise towards your business, so you feel that achieving certification means something and not just a badge on the wall.</p>
      <p class="mb-3">We will get back to you with the best quote as soon as possible. <strong>Please complete the form below to help us prepare the best quotation for you. </strong></p>
      <p class="mb-3">Please provide as much information as possible. Fields marked with an asterisk are mandatory.</p>

      <p class="mb-3">&nbsp;</p>

      <form action="" method="POST">
        <div style="background-color:#f2f2f2; padding:20px">
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" placeholder="First Name">
            </div>
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" placeholder="Last Name">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <textarea class="form-control border-orange border-2px" placeholder="Company Name & Address" rows="4"></textarea>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" placeholder="Postcode">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" placeholder="Job Title">
            </div>
            <div class="col">
              <input type="mail" class="form-control border-orange border-2px" placeholder="E-mail">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" placeholder="Phone">
            </div>
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" placeholder="Website">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" placeholder="How many employees do your organisation have?">
            </div>
          </div>

          Please tick below.<br>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">ISO 9001(QMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">ISO 14001(EMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">ISO 45001(OHSMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">ISO 27001(ISMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Training</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Other</label>
          </div>

          <p class="mb-3">&nbsp;</p> 

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                At Forefront, We'd like to keep in touch by providing information that is relevant to you. We always keep your details safe and secure. You may unsubscribe from these communications at any time. Please verify our <a href="#" class="text-orange">Privacy Policy</a> for additional information.
              </label>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col text-right">
              <button class="border-2px font-weight-bold btn btn-outline-dark text-center" type="submit">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>