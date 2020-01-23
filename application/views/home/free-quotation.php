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

      <form action="<?php echo base_url() ?>home/free_quotation_new_process" method="POST">
        <div style="background-color:#f2f2f2; padding:20px">
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="first_name" required placeholder="First Name">
            </div>
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="last_name"  required placeholder="Last Name">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <textarea class="form-control border-orange border-2px" name="company"  required placeholder="Company Name & Address" rows="4"></textarea>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="postcode"  required placeholder="Postcode">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="job_title"  required placeholder="Job Title">
            </div>
            <div class="col">
              <input type="email" class="form-control border-orange border-2px" name="email"  required placeholder="E-mail">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="phone"  required placeholder="Phone">
            </div>
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="website"  required placeholder="Website">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="employee"  required placeholder="How many employees do your organisation have?">
            </div>
          </div>

          Please tick below.<br>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="ISO 9001(QMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox1">ISO 9001(QMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="ISO 14001(EMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox2">ISO 14001(EMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="ISO 45001(OHSMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox3">ISO 45001(OHSMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="ISO 27001(ISMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox4">ISO 27001(ISMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Training" name="products[]">
            <label class="form-check-label" for="inlineCheckbox5">Training</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Other" name="products[]">
            <label class="form-check-label" for="inlineCheckbox6">Other</label>
          </div>

          <p class="mb-3">&nbsp;</p> 

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" required>
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